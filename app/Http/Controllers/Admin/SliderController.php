<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lib\Image;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Slider::query())->addIndexColumn()->toJson();
        }

        return view('admin.slider.index');
    }
    public function create()
    {
        return view('admin.slider.create', [
            'photo' => Slider::select(['id','title','photo','type'])->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string',
            'photo' => 'required|image',
            'type' => 'required',
        ]);


             if (empty($validated['photo'])){
                     $validated['photo']=Image::store('photo','upload');
             }
           $slider=Slider::create($validated);
           return response()->report($slider, 'Slider Created successfully');

    }

    public function destroy(Slider $slider)
    {


        $slider->delete();

        return response()->report($slider, 'Slider Deleted successfully');
    }
}
