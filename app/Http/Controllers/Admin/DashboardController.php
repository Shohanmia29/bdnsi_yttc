<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function __construct()
    {
        /*
         * Uncomment the line below if you want to use verified middleware
         */
        //$this->middleware('verified:admin.verification.notice');
    }


    public function index(){
        return view('admin.dashboard');
    }


    public function contactUs(Request $request){
        if ($request->ajax()){
            return datatables(ContactUs::get())->toJson();
        }

        return view('admin.contactUs');
    }


}
