<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\StoreBranch;
use Illuminate\Http\Request;

class ManageContent extends Controller
{
    public function sliderManage()
    {
        $slider = Slider::all();
        return view('admin.slider-manage.index', compact('slider'));
    }

    public function sliderPost(Request $request)
    {
        $slider = new Slider();
        $slider->button_link = $request->button_link;
        if ($request->hasFile('image')) {
            $image = time() . '_slider' . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/slider'), $image);
            $slider->image = 'uploads/slider/' . $image;
        }
        $slider->save();
        if ($slider) {
            return back();
        } else {
            return back();
        }
    }
    public function storeManage()
    {
        $branch = StoreBranch::all();
        return view('admin.store-manage.index', compact('branch'));
    }

    public function storePost(Request $request)
    {
        $branch = new StoreBranch();
        $branch->store_name = $request->store_name;
        $branch->address = $request->address;
        $branch->phone_number = $request->phone_number;
        $branch->longitude = $request->longitude;
        $branch->latitude = $request->latitude;
        $branch->save();
        if ($branch) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
