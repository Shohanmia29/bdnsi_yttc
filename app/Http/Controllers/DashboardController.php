<?php

namespace App\Http\Controllers;

use App\Enums\StudentStatus;
use App\Lib\Card;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $auth=Auth::user();
        $cards = [
            'Total Student'=>Student::where('center_id',$auth->center_id)->count(),
            'Total Approved'=>Student::whereStatus(StudentStatus::Approved())->where('center_id',$auth->center_id)->count(),
            'Total Pending'=>Student::whereStatus(StudentStatus::Approved())->where('center_id',$auth->center_id)->count()
        ];
        return view('dashboard', compact('cards'));
    }



}
