<?php

namespace App\Http\Controllers;

use App\Enums\StudentStatus;
use App\Models\Session;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class StudentSubmissionController extends Controller
{
    public function create(Request $request)
    {
        $students = collect([]);
        if ($request->has(['session', 'subject'])) {
            $students = Student::where([
                'session_id' => $request->get('session'),
                'subject_id' => $request->get('subject'),
            ])
                ->whereStatus(StudentStatus::Pending)
                ->get();
        }

        return view('result.index', [
            'students' => $students,
            'sessions' => Session::select(['id', 'name'])->get(),
            'subjects' => Subject::select(['id', 'name'])->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id.*' => 'numeric|exists:students,id'
        ]);

        if (count($validated['id']) !== Student::whereIn('id', $validated['id'])->whereStatus(StudentStatus::Pending)->count()) {
            return response()->error('Consistency error');
        }

        return response()->report(
            Student::whereIn('id', $validated['id'])->update(['status' => StudentStatus::Requested]),
            'Students submitted successfully'
        );
    }
}
