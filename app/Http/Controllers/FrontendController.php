<?php

namespace App\Http\Controllers;

use App\Enums\CenterStatus;
use App\Models\Center;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

      public function verifyInstitute(Request $request){
                  $centers=Center::withCount('students')->where('status',CenterStatus::Approved)->paginate(50);
              return view('page.verifyInstitute',compact('centers'));
      }


}
