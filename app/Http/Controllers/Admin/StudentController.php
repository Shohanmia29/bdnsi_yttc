<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Religion;
use App\Lib\Image;
use App\Enums\Gender;
use App\Models\Student;
use App\Enums\BloodGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Student::query())->toJson();
        }

        return view('admin.student.index');
    }

    public function create()
    {
        return view('admin.student.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'center_id' => 'required|exists:centers,id',
            'name' => 'required|string',
            'fathers_name' => 'required|string',
            'mothers_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'gender' => 'required|numeric|enum_value:'.Gender::class.',false',
            'blood_group' => 'required|numeric|enum_value:'.BloodGroup::class.',false',
            'religion' => 'required|numeric|enum_value:'.Religion::class.',false',
            'present_address' => 'required|string',
            'permanent_address' => 'required|string',
            'phone' =>'required|string|min:11|max:11',
            'email' =>'required|email',
            'guardian_name' =>'required|string',
            'nid_or_birth' =>'required|string',
            'student_address' =>'required|string',
            'session_id' =>'required|exists:sessions,id',
            'subject_id' =>'required|exists:subjects,id',
            'month_of_duration' =>'required|string',
            'picture' =>'required|image',
        ]);

        return response()->report(Student::create($validated), 'Student Created successfully');
    }

    public function show(Student $student)
    {
        //
    }

    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }

    public function destroy(Student $student)
    {
        //
    }
}
