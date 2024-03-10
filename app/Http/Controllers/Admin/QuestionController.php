<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Quation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Question\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.exam.quation.create', [
            'exams' => Exam::get()
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
            'exam_id' => 'required',
            'body.*' => 'required',
            'option_1.*' => 'required',
            'option_2.*' => 'required',
            'option_3.*' => 'required',
            'option_4.*' => 'required',
            'answer.*' => 'required',
        ]);

        try {
            DB::beginTransaction();
            foreach ($validated['body'] as $key => $value) {
                Quation::create([
                    'exam_id' => $validated['exam_id'],
                    'body' => $validated['body'][$key],
                    'option_1' => $validated['option_1'][$key],
                    'option_2' => $validated['option_2'][$key],
                    'option_3' => $validated['option_3'][$key],
                    'option_4' => $validated['option_4'][$key],
                    'answer' => $validated['answer'][$key],
                ]);
            }
            DB::commit();
            return response()->success("Successfully Created");
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception;
        }


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
