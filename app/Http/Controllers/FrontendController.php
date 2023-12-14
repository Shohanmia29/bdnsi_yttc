<?php

namespace App\Http\Controllers;

use App\Enums\CenterStatus;
use App\Enums\StudentStatus;
use App\Models\Center;
use App\Models\Student;
use App\Models\SuccessStudent;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

      public function verifyInstitute(Request $request){
                  $centers=Center::withCount('students')->where('status',CenterStatus::Approved)->paginate(50);
              return view('page.verifyInstitute',compact('centers'));
      }
      public function successStudent(Request $request){
             $students=SuccessStudent::paginate(50);
              return view('page.successStudent',compact('students'));
      }


}
