<?php

namespace App\Http\Controllers;

use App\Enums\StudentStatus;
use App\Models\Student;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function __invoke(Request $request)
    {
        $result = null;
        if ($request->has(['roll']) && strlen($request->get('roll')) ) {
            $student = Student::where([
                'roll' => $request->get('roll'),
                'status' => StudentStatus::Approved
            ])->orWhere('passport',$request->get('roll'))->select('id')->first();

            if ($student === null) {
                return response()->error('Result not found');
            }

            $result = $student->result;
        }
        return view('result', [
            'result' => $result
        ]);
    }
}
