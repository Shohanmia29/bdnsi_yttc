<?php

namespace App\Http\Controllers;

use App\Enums\StudentStatus;
use App\Models\Student;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function __invoke(Request $request)
    {
        $student = null;
        if ($request->has(['roll']) && strlen($request->get('roll')) ) {
            $student = Student::where([
                'roll' => $request->get('roll')
            ])->orWhere('passport',$request->get('roll'))->first();


            if ($student === null || $student->status->is(StudentStatus::Hide())) {
                return response()->error('Result not found');
            }


        }



        return view('result', [
            'student' => $student
        ]);
    }
}
