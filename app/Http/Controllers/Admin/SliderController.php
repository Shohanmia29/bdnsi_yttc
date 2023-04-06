<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Slider::select(['id','title','photo']))->toJson();
        }

        return view('admin.slider.index');
    }
    public function create()
    {
        return view('admin.slider.create', [
            'photo' => Slider::select(['id','title','photo'])->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string',
            'photo' => 'required|image',
        ]);

        // Get the uploaded file
        $file = $request->file('photo');

        // Generate a unique name for the file
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Move the uploaded file to the public directory
//        $file->store('public/slider', $fileName);

        $file->move(public_path('images/slider'), $fileName);

        // Create a new Slider model instance
        $slider = new Slider();
        $slider->title = $validated['title'];
        $slider->photo = $fileName;
        $slider->save();

        return response()->report($slider, 'Slider Created successfully');

    }

    public function destroy(Slider $slider)
    {

        // Get the image file path
        $filePath = public_path('/images/slider/'.$slider->photo);

        // Delete the image file using unlink
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Delete the Slider model from the database
        $slider->delete();

        return response()->report($slider, 'Slider Deleted successfully');
    }
}
