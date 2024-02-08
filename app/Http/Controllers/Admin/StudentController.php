<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CenterStatus;
use App\Enums\Religion;
use App\Enums\SessionStatus;
use App\Enums\StudentStatus;
use App\Lib\Image;
use App\Enums\Gender;
use App\Models\Center;
use App\Models\Session;
use App\Models\Student;
use App\Enums\BloodGroup;
use App\Models\Subject;
use App\Traits\ChecksPermission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    use ChecksPermission;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Student::with('center:id,code','subject:id,name'))
                ->addColumn('registration', function ($registration) {
                    return '<a    target="_blank" href="' . route("admin.student.show",[$registration->id,'registration'=>'registration']) . '">' . $registration->registration . '</a>';
                })
                ->rawColumns(['registration'])
                ->toJson();
        }

        return view('admin.student.index');
    }



    public function create()
    {
        return view('admin.student.create', [
            'centers' => Center::select(['id','code','name'])->whereStatus(CenterStatus::Approved)->get(),
            'sessions' => Session::select(['id','name'])->where('status',SessionStatus::Active)->get(),
            'subjects' => Subject::select(['id','name'])->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'center_id' => 'required|exists:centers,id',
            'name' => 'required|string',
            'roll' => 'nullable|string',
            'registration' => 'nullable|string',
            'fathers_name' => 'required|string',
            'mothers_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'gender' => 'required|numeric|enum_value:'.Gender::class.',false',
            'blood_group' => 'required|numeric|enum_value:'.BloodGroup::class.',false',
            'religion' => 'required|numeric|enum_value:'.Religion::class.',false',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'phone' =>'required|string|min:11|max:11',
            'email' =>'nullable|email',
            'guardian_name' =>'required|string',
            'nid_or_birth' =>'required|string',
            'session_id' =>'required|exists:sessions,id',
            'subject_id' =>'required|exists:subjects,id',
            'status' => 'required|numeric|enum_value:'.StudentStatus::class.',false',
            'picture' =>'required|image',
        ]);

        $validated['roll'] = $validated['roll'] ?? Student::getLastFreeRoll();
        $validated['registration'] = $validated['registration'] ?? Student::getLastFreeRegistration();

        return response()->report(Student::create($validated), 'Student Created successfully');
    }

    public function show(Request $request,Student $student)
    {
     if ($request->registration=='registration'){
              $student= Student::where('id',$student->id)->firstOrFail();
            return view('admin.student.registrationForm',compact('student'));
     }else{
         return view('admin.student.show', [
             'student' => $student
         ]);
     }


    }

    public function edit(Student $student)
    {
        return view('admin.student.edit', [
            'student' => $student,
            'centers' => Center::select(['id','code','name'])->whereStatus(CenterStatus::Approved)->get(),
            'sessions' => Session::select(['id','name'])->where('status',SessionStatus::Active)->get(),
            'subjects' => Subject::select(['id','name'])->get(),
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'center_id' => 'required|exists:centers,id',
            'name' => 'required|string',
            'roll' => 'nullable|string',
            'registration' => 'nullable|string',
            'fathers_name' => 'required|string',
            'mothers_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'gender' => 'required|numeric|enum_value:'.Gender::class.',false',
            'blood_group' => 'required|numeric|enum_value:'.BloodGroup::class.',false',
            'religion' => 'required|numeric|enum_value:'.Religion::class.',false',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'phone' =>'required|string|min:11|max:11',
            'email' =>'nullable|email',
            'guardian_name' =>'required|string',
            'nid_or_birth' =>'required|string',
            'session_id' =>'required|exists:sessions,id',
            'subject_id' =>'required|exists:subjects,id',
            'status' => 'required|numeric|enum_value:'.StudentStatus::class.',false',
            'picture' =>'nullable|image',
            'exam_date' =>'required',
            'due_amount' =>'required|numeric',
            'paid_amount' =>'required|numeric',
        ]);

        $validated['roll'] = $validated['roll']
            ?? ($student->roll ?: Student::getLastFreeRoll());
        $validated['registration'] = $validated['registration']
            ?? ($student->registration ?: Student::getLastFreeRegistration());


        return response()->report($student->update($validated), 'Student Updated successfully');
    }

    public function destroy(Student $student)
    {
        return response()->report($student->delete(), 'Student Deleted successfully');
    }
}
