<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lib\Image;
use App\Models\Subject;
use App\Traits\ChecksPermission;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    use ChecksPermission;

    public function index(Request $request)
    {


        if ($request->ajax()) {
            return datatables(Subject::query())->addIndexColumn()->toJson();
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
            'photo' => 'required',
            'duration' => 'nullable',
            'rate' => 'nullable',
            'education_qualification' => 'nullable',
            'course_details' => 'nullable',
            'type' => 'required',
        ]);
          if (isset($validated['photo'])){
               $validated['photo']= Image::store('photo','upload/subject');
          }
        return response()->report(Subject::create($validated), 'Subject Created successfully');
    }

    public function edit(Subject $subject)
    {
        return view('admin.subject.edit', compact('subject'));
    }

    public function update(Request $request, Subject $subject)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'photo' => 'nullable|image',
            'duration' => 'nullable',
            'rate' => 'nullable',
            'education_qualification' => 'nullable',
            'course_details' => 'nullable',
            'type' => 'required',
        ]);
        if (isset($validated['photo'])){
            Image::delete($subject->photo,'Photo');
            $validated['photo']= Image::store('photo','upload/subject');
        }
        return response()->report($subject->update($validated), 'Subject Updated successfully');
    }

    public function destroy(Subject $subject)
    {
        return response()->report($subject->delete(), 'Subject deleted successfully');
    }
}
