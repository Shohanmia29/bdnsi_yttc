<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CenterStatus;
use App\Enums\Religion;
use App\Enums\StudentStatus;
use App\Lib\Image;
use App\Enums\Gender;
use App\Models\Center;
use App\Models\Session;
use App\Models\Student;
use App\Enums\BloodGroup;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Student::with('center:id,code,name'))->toJson();
        }

        return view('admin.student.index');
    }

    public function create()
    {
        return view('admin.student.create', [
            'centers' => Center::select(['id','code','name'])->whereStatus(CenterStatus::Approved)->get(),
            'sessions' => Session::select(['id','name'])->get(),
            'subjects' => Subject::select(['id','name'])->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'center_id' => 'required|exists:centers,id',
            'name' => 'required|string',
            'roll' => 'required|string',
            'registration' => 'required|string',
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

        return response()->report(Student::create($validated), 'Student Created successfully');
    }

    public function show(Student $student)
    {
        return view('admin.student.show', [
            'student' => $student
        ]);
    }

    public function edit(Student $student)
    {
        return view('admin.student.edit', [
            'student' => $student,
            'centers' => Center::select(['id','code','name'])->whereStatus(CenterStatus::Approved)->get(),
            'sessions' => Session::select(['id','name'])->get(),
            'subjects' => Subject::select(['id','name'])->get(),
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'center_id' => 'required|exists:centers,id',
            'name' => 'required|string',
            'roll' => 'required|string',
            'registration' => 'required|string',
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
        ]);

        return response()->report($student->update($validated), 'Student Updated successfully');
    }

    public function destroy(Student $student)
    {
        return response()->report($student->delete(), 'Student Deleted successfully');
    }
}
