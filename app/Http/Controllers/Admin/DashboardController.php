<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\ContactUs;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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

    public function userCreate(Request $request){

     $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

       $user= Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return response()->success('Successfully Created');

    }


    public function contactUs(Request $request){



        if ($request->ajax()){
            return datatables(ContactUs::get())->toJson();
        }
        DB::table('contact_us')->where('is_seen',false)->update(['is_seen'=>true]);
        return view('admin.contactUs');
    }


}
