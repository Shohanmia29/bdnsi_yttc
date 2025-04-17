<?php

namespace App\Http\Controllers;

use App\Enums\CenterStatus;
use App\Enums\CourseType;
use App\Enums\Religion;
use App\Enums\SessionStatus;
use App\Enums\StudentStatus;
use App\Enums\Gender;
use App\Lib\Helper;
use App\Models\Center;
use App\Models\Session;
use App\Models\Student;
use App\Enums\BloodGroup;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Student::select(['id', 'center_id', 'session_id', 'subject_id', 'name', 'status', 'roll'])
                ->own()
                ->with(['session', 'subject']))
                ->addColumn('admit', function ($admit) {
                    return '<a   style="background-color:green; padding:3px; border-redius:4px 4px 4px 4px; color:white"   target="_blank"   target="_blank" href="' . route("student.show", [$admit->id, 'admit' => 'admit']) . '">' . 'Admit' . '</a>';
                })
                ->addColumn('registration', function ($registration) {
                    $registrationLink = '<a style="background-color:green; padding:3px; border-radius:4px; color:white" target="_blank" href="'
                        . route("student.show", [$registration->id, 'registration' => 'registration'])
                        . '">Registration</a>';

                    $idCardLink = '<a style="background-color:green; padding:3px; border-radius:4px; color:white" target="_blank" href="'
                        . route("student.show", [$registration->id, 'idcard' => 'idcard'])
                        . '">Id Card</a>';

                    return $registrationLink . ' ' . $idCardLink;
                })
                ->addColumn('result', function ($result) {
                    return '<a  style="background-color:green; padding:3px; border-redius:4px 4px 4px 4px; color:white"   target="_blank"       href="' . route('result', ['roll' => $result->roll]) . '">' . 'Result' . '</a>';
                })
                ->rawColumns(['admit', 'registration', 'result'])
                ->toJson();
        }

        return view('student.index');
    }

    public function create()
    {
        return view('student.create', [
            'sessions' => Session::select(['id', 'name'])->where('status', SessionStatus::Active)->get(),
            'subjects' => Subject::select(['id', 'name'])->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'fathers_name' => 'required|string',
            'mothers_name' => 'required|string',
            'date_of_birth' => 'required',
            'gender' => 'required|numeric|enum_value:' . Gender::class . ',false',
            'religion' => 'required|numeric|enum_value:' . Religion::class . ',false',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'passport' => 'nullable|string',
            'phone' => 'required|string|min:11|max:11',
            'session_id' => 'required|exists:sessions,id',
            'subject_id' => 'required|exists:subjects,id',
            'course_duration' => 'required',
            'picture' => 'required|image',
            'course_type' => ['required', Rule::in(CourseType::asArray())],
        ]);

        $validated['roll'] = $validated['roll'] ?? Student::getLastFreeRoll();
        $validated['registration'] = $validated['registration'] ?? Student::getLastFreeRegistration();
        $validated['center_id'] = Auth::user()->center_id;
        $validated['status'] = StudentStatus::Pending;
        $student = Student::create($validated);
        $message = 'Congratulations!! ' . $student->name . ', You have successfully filled the application form for Fastly '
            . (Auth::user()->center->name ?? '') . ' Technician '
            . ($student->subject->name ?? '') . ' under Young Technical Training Center. Your Roll No: '
            . $student->roll . ' and Registration No: ' . $student->registration . '. Thanks for staying with Young Technical Training Center.';
        Helper::sendSms($student->phone,$message);
        return response()->report($student, 'Student Created successfully');
    }

    public function show(Request $request, Student $student)
    {
        abort_if(
            Auth::user()->center_id != $student->center_id,
            403
        );
        if ($request->admit == 'admit') {


            return view('student.admit', [
                'student' => $student
            ]);
        }

        if ($request->registration == 'registration') {


            return view('student.registration', [
                'student' => $student
            ]);
        }
        if ($request->idcard == 'idcard') {


            return view('student.idcard', [
                'student' => $student
            ]);
        }
        return view('student.show', [
            'student' => $student
        ]);
    }

    public function edit(Student $student)
    {
        abort_if(
            Auth::user()->center_id != $student->center_id,
            403
        );

        if ($student->status->isNot(StudentStatus::Pending())) {
            return response()->error('Can\'t update student which is not in pending status');
        }

        return view('student.edit', [
            'student' => $student,
            'sessions' => Session::select(['id', 'name'])->where('status', SessionStatus::Active)->get(),
            'subjects' => Subject::select(['id', 'name'])->get(),
        ]);
    }

    public function update(Request $request, Student $student)
    {
        abort_if(
            Auth::user()->center_id != $student->center_id,
            403
        );

        if ($student->status->isNot(StudentStatus::Pending())) {
            return response()->error('Can\'t delete student which is not in pending status');
        }

        $validated = $request->validate([
            'name' => 'required|string',
            'fathers_name' => 'required|string',
            'mothers_name' => 'required|string',
            'date_of_birth' => 'nullable',
            'gender' => 'required|numeric|enum_value:' . Gender::class . ',false',
            'religion' => 'required|numeric|enum_value:' . Religion::class . ',false',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'passport' => 'nullable|string',
            'phone' => 'nullable|string|min:11|max:11',
            'session_id' => 'required|exists:sessions,id',
            'subject_id' => 'required|exists:subjects,id',
            'course_duration' => 'required',
            'qualification' => 'required',
            'picture' => 'nullable|image',

        ]);

        return response()->report($student->update($validated), 'Student Updated successfully');
    }

    public function destroy(Student $student)
    {
        abort_if(
            Auth::user()->center_id != $student->center_id,
            403
        );

        if ($student->status->isNot(StudentStatus::Pending())) {
            return response()->error('Can\'t delete student which is not in pending status');
        }

        return response()->report($student->delete(), 'Student Deleted successfully');
    }
}
