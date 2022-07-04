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
        if ($request->has(['roll','registration']) && strlen($request->get('roll')) && strlen($request->get('registration'))) {
            $student = Student::where([
                'roll' => $request->get('roll'),
                'registration' => $request->get('registration'),
                'status' => StudentStatus::Approved
            ])->select('id')->first();

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
