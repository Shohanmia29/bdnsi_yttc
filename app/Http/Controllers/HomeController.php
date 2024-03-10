<?php

namespace App\Http\Controllers;

use App\Models\ConfigDictionary;
use App\Models\ContactUs;
use App\Models\Slider;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $courses = Subject::orderBy('name', 'asc')->limit(5)->get();;
        return view('welcome',compact('courses','sliders'));
    }
    public function all_course()
    {
        $courses = Subject::all();
        return view('all_course',compact('courses'));
    }

    public function contactUs(Request  $request)
    {
        if ($request->post()){
         $validated=  $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'phone'=>'required|numeric',
                'message'=>'required',
           ]);
           return  response()->report(ContactUs::create($validated),'Successfully Done Your Message');
        }
        return view('page.contact');
    }


    public function dymamicPage(Request $request){

           if ($request->about_us){
               $about_us=ConfigDictionary::get('about_us');
               return view('page.dynamic_page',compact('about_us'));
           }
           elseif($request->terms_and_condition){
                $terms_and_condition=ConfigDictionary::get('terms_and_condition');
               return view('page.dynamic_page',compact('terms_and_condition'));
           }
           elseif ($request->privacy_policy){
                $privacy_policy=ConfigDictionary::get('privacy_policy');
               return view('page.dynamic_page',compact('privacy_policy'));
           }

           return view('page.dynamic_page');
    }






}
