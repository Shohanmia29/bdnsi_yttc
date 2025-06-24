<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CenterStatus;
use App\Enums\CourseType;
use App\Enums\Religion;
use App\Enums\SessionStatus;
use App\Enums\StudentStatus;
use App\Lib\Helper;
use App\Lib\Image;
use App\Enums\Gender;
use App\Models\Center;
use App\Models\District;
use App\Models\Result;
use App\Models\Session;
use App\Models\Student;
use App\Enums\BloodGroup;
use App\Models\Subject;
use App\Models\Upazila;
use App\Traits\ChecksPermission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    use ChecksPermission;
    protected $permissionPrefix = 'student';
    protected $skipActions = ['admit', 'certificate','certificateWithoutBackground'];

    public function admit($id)
    {
        $student = Student::where('id', $id)->firstOrFail();
        return view('admin.student.admitCard', compact('student'));
    }

    public function certificate(Request  $request, $id)
    {
        $student = Student::where('id', $id)->firstOrFail();
         if ($request->original=='original'){
             return view('admin.student.orginalCertificate', compact('student'));
         }
        return view('admin.student.certificate2', compact('student'));
    }

    public function certificateWithoutBackground($id)
    {
        $student = Student::where('id', $id)->firstOrFail();
        return view('admin.student.certificate', compact('student'));
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Student::with('center:id,code', 'subject:id,name', 'result'))
                ->editColumn('registration', function ($registration) {
                    return (
                        '<a style="background-color:green; padding:3px; border-radius:4px; color:white" target="_blank" href="' . route("admin.student.show", [$registration->id, 'registration' => 'registration']) . '">' . $registration->registration . '</a>'
                        . '<a style="background-color:green; padding:3px; border-radius:4px; color:white; margin-left:5px;" target="_blank" href="' . route("admin.student.show", [$registration->id, 'transcript' => 'transcript']) . '">Transcript</a>'
                        . '<a style="background-color:green; padding:3px; border-radius:4px; color:white; margin-left:5px;" target="_blank" href="' . route("admin.certificateStudent", [$registration->id, 'certificate' => 'certificate']) . '">Certificate</a>'
                        . '<a style="background-color:green; padding:3px; border-radius:4px; color:white; margin-left:5px;" target="_blank" href="' . route("admin.certificateStudent", [$registration->id, 'original' => 'original']) . '">Original Certificate</a>'
                        . '<a style="background-color:green; padding:3px; border-radius:4px; color:white; margin-left:5px;" target="_blank" href="' . route("admin.student.show", [$registration->id, 'cpdf' => 'cpdf']) . '">C-Pdf</a>'
                        . '<a style="background-color:green; padding:3px; border-radius:4px; color:white; margin-left:5px;" target="_blank" href="' . route("admin.student.show", [$registration->id, 'idcard' => 'idcard']) . '">Id Card</a>'
                    );
                })
                ->editColumn('roll', function ($roll) {
                    return '<a   style="background-color:green; padding:3px; border-redius:4px 4px 4px 4px; color:white"   target="_blank" href="' . route("admin.student.admit", [$roll->id, 'admit' => 'admit']) . '">' . $roll->roll . '</a>';
                })
                ->addColumn('student_result', function ($student_result) {
                    return '<a target="_blank" href="' . route("admin.result.show", $student_result->id ?? '') . '">' . ($student_result->result()->count() == 1 ? 'Result' : 'N/A') . '</a>';

                })
                ->rawColumns(['registration', 'roll', 'student_result', 'certificate'])
                ->toJson();
        }

        return view('admin.student.index');
    }


    public function create()
    {
        return view('admin.student.create', [
            'centers' => Center::select(['id', 'code', 'name'])->whereStatus(CenterStatus::Approved)->get(),
            'sessions' => Session::select(['id', 'name'])->where('status', SessionStatus::Active)->get(),
            'subjects' => Subject::select(['id', 'name'])->get(),

            'divisions' => \App\Models\Division::get(),
            'districts_keys' => District::get()->mapWithKeys(function ($district) {
                return [
                    $district->id => [
                        'id' => $district->id,
                        'division_id' => $district->division_id,
                        'name' => $district->name,
                    ]
                ];
            }),

            'districts' => District::get(),

            'upazilas' => Upazila::get()->mapWithKeys(function ($upazila) {
                return [
                    $upazila->id => [
                        'id' => $upazila->id,
                        'district_id' => $upazila->district_id,
                        'name' => $upazila->name,
                    ]
                ];
            })->toArray()

        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'center_id' => 'required|exists:centers,id',
            'name' => 'required|string',
            'roll' => 'nullable|string|unique:students,roll',
            'passport' => 'nullable|string|unique:students,passport',
            'registration' => 'nullable|string|unique:students,registration',
            'fathers_name' => 'required|string',
            'mothers_name' => 'required|string',
            'date_of_birth' => 'nullable',
            'gender' => 'required|numeric|enum_value:' . Gender::class . ',false',
            'religion' => 'required|numeric|enum_value:' . Religion::class . ',false',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'phone' => 'required',
            'session_id' => 'required|exists:sessions,id',
            'subject_id' => 'required|exists:subjects,id',
            'course_duration' => 'required',
            'qualification' => 'required',
            'status' => 'required|numeric|enum_value:' . StudentStatus::class . ',false',
            'picture' => 'required|image',
            'course_type' => ['required',Rule::in(CourseType::asArray())],
        ]);


        try {
            DB::beginTransaction();

            $validated['roll'] = $validated['roll'] ?? Student::getLastFreeRoll();
            $validated['registration'] = $validated['registration'] ?? Student::getLastFreeRegistration();
            $student=Student::create($validated);
            $message = 'Congratulations!! ' . $student->name . ', You have successfully filled the application form for Fastly '
                . (Auth::user()->center->name ?? '') . ' Technician '
                . ($student->subject->name ?? '') . ' under Young Technical Training Center. Your Roll No: '
                . $student->roll . ' and Registration No: ' . $student->registration . '. Thanks for staying with Young Technical Training Center.';
            Helper::sendSms($student->phone,$message);
            DB::commit();
            return response()->report($student, 'Student Created successfully');
        }catch (\Exception $exception){
            DB::rollBack();

            return response()->error('something went wrong');
        }



    }

    public function show(Request $request, Student $student)
    {
        if ($request->registration == 'registration') {
            $student = Student::where('id', $student->id)->firstOrFail();
            return view('admin.student.registrationForm', compact('student'));
        } elseif ($request->transcript == 'transcript') {
            $student = Student::where('id', $student->id)->firstOrFail();
            return view('admin.student.transcript', compact('student'));
        } elseif ($request->idcard == 'idcard') {
            $student = Student::where('id', $student->id)->firstOrFail();
            return view('admin.student.idcard', compact('student'));
        }
        elseif ($request->cpdf == 'cpdf') {
            $student = Student::where('id', $student->id)->firstOrFail();
            return view('admin.student.originalCpdf', compact('student'));
        }
        else {
            return view('admin.student.show', [
                'student' => $student
            ]);
        }


    }

    public function edit(Student $student)
    {
        return view('admin.student.edit', [
            'student' => $student,
            'centers' => Center::select(['id', 'code', 'name'])->whereStatus(CenterStatus::Approved)->get(),
            'sessions' => Session::select(['id', 'name'])->where('status', SessionStatus::Active)->get(),
            'subjects' => Subject::select(['id', 'name'])->get(),
            'divisions' => \App\Models\Division::get(),
            'districts_keys' => District::get()->mapWithKeys(function ($district) {
                return [
                    $district->id => [
                        'id' => $district->id,
                        'division_id' => $district->division_id,
                        'name' => $district->name,
                    ]
                ];
            }),

            'districts' => District::get(),
            'upazilas' => Upazila::get()->mapWithKeys(function ($upazila) {
                return [
                    $upazila->id => [
                        'id' => $upazila->id,
                        'district_id' => $upazila->district_id,
                        'name' => $upazila->name,
                    ]
                ];
            })->toArray()
        ]);
    }

    public function update(Request $request, Student $student)
    {

        $admin = Auth::guard('admin')->user();

        if ($admin->id == 1) {
            $validated = $request->validate([
                'center_id' => 'required|exists:centers,id',
                'name' => 'required|string',
                'roll' => ['nullable', Rule::unique('students')->ignore($student->id)],
                'registration' => ['nullable', Rule::unique('students')->ignore($student->id)],
                'passport' => ['nullable', Rule::unique('students')->ignore($student->id)],
                'fathers_name' => 'required|string',
                'mothers_name' => 'required|string',
                'date_of_birth' => 'required',
                'gender' => 'required|numeric|enum_value:' . Gender::class . ',false',
                'religion' => 'required|numeric|enum_value:' . Religion::class . ',false',
                'present_address' => 'required|string',
                'permanent_address' => 'required|string',
                'phone' => 'nullable|min:11|max:11',
                'session_id' => 'required|exists:sessions,id',
                'subject_id' => 'required|exists:subjects,id',
                'course_duration' => 'required',
                'qualification' => 'required',
                'status' => 'required|numeric',
                'picture' => 'nullable|image',
                'exam_date' => 'required',
                'result_publised' => 'nullable',
                'due_amount' => 'required|numeric',
                'paid_amount' => 'required|numeric',
                'course_type' => ['required',Rule::in(CourseType::asArray())],
            ]);

            $validated['roll'] = $validated['roll']
                ?? ($student->roll ?: Student::getLastFreeRoll());
            $validated['registration'] = $validated['registration']
                ?? ($student->registration ?: Student::getLastFreeRegistration());


            return response()->report($student->update($validated), 'Student Updated successfully');
        } else {
            $validated = $request->validate([
                'status' => 'required'
            ]);
            $validated['roll'] = $validated['roll']
                ?? ($student->roll ?: Student::getLastFreeRoll());
            $validated['registration'] = $validated['registration']
                ?? ($student->registration ?: Student::getLastFreeRegistration());
            return response()->report($student->update($validated), 'Student Updated successfully');
        }

    }

    public function destroy(Student $student)
    {
        DB::transaction(function () use ($student) {
            Result::where('student_id',$student->id)->delete();
            $student->delete();
        });
        return response()->report($student, 'Student Deleted successfully');
    }
}
