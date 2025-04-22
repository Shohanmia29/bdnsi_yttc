<?php

namespace App\Http\Controllers;

use App\Enums\CenterStatus;
use App\Enums\StudentStatus;
use App\Models\Center;
use App\Models\Student;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

      public function verifyInstitute(Request $request){

             $centers=Center::when($request->district && $request->upazilla,function ($query)use($request){
                 return $query->where(['district'=>$request->district,'upazilla'=>$request->upazilla]);
             })->withCount('students')->where('status',CenterStatus::Approved)->paginate(12);
              return view('page.verifyInstitute',compact('centers'));
      }
      public function successStudent(Request $request){
             $students=Student::hide()->whereHas('result')->select('id','name','picture')->where('status',StudentStatus::Approved)->paginate(40);
              return view('page.successStudent',compact('students'));
      }
      public function successStudentDetails($id){
             $data=Student::hide()->whereHas('result')->where('status',StudentStatus::Approved)->findOrFail($id);
              return view('page.successStudentDetails',compact('data'));
      }

      public function studentInfo($id){
             $data=Student::hide()->where('status',StudentStatus::Approved)->findOrFail($id);
              return view('page.studentInfo',compact('data'));
      }


}
