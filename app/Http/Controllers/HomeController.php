<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses = Subject::orderBy('name', 'asc')->limit(5)->get();;
        return view('welcome',compact('courses'));
    }
    public function all_course()
    {
        $courses = Subject::all();
        return view('all_course',compact('courses'));
    }
}
