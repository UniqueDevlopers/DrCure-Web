<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use App\Models\ProductSection;
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

    public function heroManage()
    {
        $hero = HeroSection::all();
        return view('admin.hero-manage.index', compact('hero'));
    }

    public function heroPost(Request $request)
    {
        $hero = HeroSection::first();

        if (!$hero) {
            $hero = new HeroSection();
        }

        $hero->heding_top = $request->heading_top;
        $hero->description = $request->description;
        if ($request->hasFile('image')) {
            $image = time() . '_hero' . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/hero'), $image);
            $hero->image = 'uploads/hero/' . $image;
        }
        $hero->heading_bottom = $request->heading_bottom;
        $hero->bg_color = $request->bg_color;

        $hero->save();

        return back();
    }

    public function product()
    {
        $product = ProductSection::all();
        return view('admin.product-manage.index', compact('product'));
    }

    public function productPost(Request $request)
    {
        $product = new ProductSection();
        $product->title = $request->title;
        $product->link = $request->link;
        if ($request->hasFile('image')) {
            $image = time() . '_product' . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/product'), $image);
            $product->image = 'uploads/product/' . $image;
        }
        $product->save();
        return back();
    }
}
