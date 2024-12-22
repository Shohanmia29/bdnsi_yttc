<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CenterStatus;
use App\Enums\SessionStatus;
use App\Enums\StudentStatus;
use App\Http\Controllers\Controller;
use App\Lib\Helper;
use App\Models\Center;
use App\Models\Result;
use App\Models\Session;
use App\Models\Student;
use App\Models\Subject;
use App\Traits\ChecksPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    use ChecksPermission;

    public function index(Request $request)
    {
        $students = collect([]);
        if ($request->has(['center', 'session', 'subject'])) {
            $students = Student::where([
                'center_id' => $request->get('center'),
                'session_id' => $request->get('session'),
                'subject_id' => $request->get('subject'),
            ])
            ->whereStatus(StudentStatus::Approved)
            ->with('result')->get();
        }

        return view('admin.result.index', [
            'students' => $students,
            'centers' => Center::select(['id', 'code', 'name'])->whereStatus(CenterStatus::Approved)->get(),
            'sessions' => Session::select(['id', 'name'])->where('status',SessionStatus::Active)->get(),
            'subjects' => Subject::select(['id', 'name'])->get(),
        ]);
    }

    public function create(Request $request)
    {
        $students = collect([]);
        if ($request->has(['center', 'session', 'subject','roll'])) {
            $students = Student::where([
                'center_id' => $request->get('center'),
                'session_id' => $request->get('session'),
                'subject_id' => $request->get('subject'),
            ])->when($request->has('roll'), function ($query) use ($request) {
                return $query->where('roll', $request->get('roll'));
            })
            ->whereStatus(StudentStatus::Approved)
            ->with('result')->get();
        }

        return view('admin.result.create', [
            'students' => $students,
            'centers' => Center::select(['id', 'code', 'name'])->whereStatus(CenterStatus::Approved)->get(),
            'sessions' => Session::select(['id', 'name'])->where('status',SessionStatus::Active)->get(),
            'subjects' => Subject::select(['id', 'name'])->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'array',
            'written.*' => 'required|numeric',
            'practical.*' => 'required|numeric',
            'viva.*' => 'required|numeric',
        ]);


        if (count($request->get('id', [])) !== Student::whereIn('id', $request->get('id', []))->count()) {
            return response()->error('Student missing');
        }

        try {
            $written = $request->get('written', []);
            $practical = $request->get('practical', []);
            $viva = $request->get('viva', []);
            DB::beginTransaction();
            foreach ($request->get('id') as $id) {
                $student=Student::find($id);
                Result::updateOrCreate(['student_id' => $id],
                    [
                        'written' => $written[$id],
                        'practical' => $practical[$id],
                        'viva' => $viva[$id],
                    ]);
                $message = 'Congratulation!! ' . $student->name . ', You have successfully filled the application form for Fastly Youth Technical Training ' . $student->subject->name . ' course under Young Technical Training. Your Roll No: 475607 and Registration No: ' . $student->registration . '. Thanks for staying with Young Technical Training Institute.';
                Helper::sendSms($student->phone,$message);
            }
            DB::commit();
            return response()->success('Result published successfully');
        } catch (\Exception $ex) {
            DB::rollBack();
        }
        return response()->error('Something went wrong');
    }

    public function show(Result $result)
    {

        return view('admin.result.show', [
            'result' => $result
        ]);
    }

    public function destroy(Result $result)
    {
        //
    }
}
