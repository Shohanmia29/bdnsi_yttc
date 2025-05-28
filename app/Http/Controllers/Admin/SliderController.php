<?php

namespace App\Http\Controllers\Admin;

use App\Enums\SliderType;
use App\Http\Controllers\Controller;
use App\Lib\Image;
use App\Models\Slider;
use App\Traits\ChecksPermission;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use ChecksPermission;
    protected $permissionPrefix = 'slider';
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables(Slider::whereIn('type',[SliderType::Slider,SliderType::Gallery])->select(['id','title','photo','type']))->addIndexColumn()->toJson();
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
            'type' => 'required',
        ]);

          $validated['photo'] =Image::store('photo','upload/slider');

        $slider=Slider::create($validated);

        return response()->report($slider, 'Slider Created successfully');

    }

    public function destroy(Slider $slider)
    {


        $slider->delete();

        return response()->report($slider, 'Slider Deleted successfully');
    }
}
