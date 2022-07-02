<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Subject::query())->toJson();
        }

        return view('admin.subject.index');
    }

    public function create()
    {
        return view('admin.subject.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
        ]);

        return response()->report(Subject::create($validated), 'Subject Created successfully');
    }

    public function show(Subject $subject)
    {
        //
    }

    public function edit(Subject $subject)
    {
        return view('admin.subject.edit', compact('subject'));
    }

    public function update(Request $request, Subject $subject)
    {
        $validated = $request->validate([
            'name' => 'required|string',
        ]);

        return response()->report($subject->update($validated), 'Subject Updated successfully');
    }

    public function destroy(Subject $subject)
    {
        return response()->report($subject->delete(), 'Subject deleted successfully');
    }
}
