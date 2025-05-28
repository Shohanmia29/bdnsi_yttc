<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Subject;
use App\Traits\ChecksPermission;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    use ChecksPermission;
    protected $permissionPrefix = 'exam';
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Exam::with('subject'))
                ->addIndexColumn()
                ->addColumn('edit_exam', function ($data) {
                    return view('admin.exam.edit', compact('data'))->render();
                })
                ->rawColumns(['edit_exam'])
                ->toJson();
        }
        return view('admin.exam.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.exam.create', [
            'subjects' => Subject::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject_id' => 'required|unique:exams,subject_id',
            'name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        Exam::create($validated);
        return response()->success('Successfully Create');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.exam.show', [
            'alldata' => Exam::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'status' => 'required',
        ]);
        $data = Exam::findOrFail($id);
        $data->update($validated);
        return response()->success('Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
