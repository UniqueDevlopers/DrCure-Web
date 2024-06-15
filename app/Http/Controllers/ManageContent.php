<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use App\Models\ProductSection;
use App\Models\PromiseSection;
use App\Models\Settings;
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
        if ($request->hasFile('store_image')) {
            $image = time() . '_store' . '.' . $request->store_image->extension();
            $request->image->move(public_path('uploads/store'), $image);
            $branch->store_image = 'uploads/store/' . $image;
        }
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

    public function wePromise()
    {
        $promise = PromiseSection::all();
        return view('admin.we-promise.index', compact('promise'));
    }

    public function promisePost(Request $request)
    {
        $promise = new PromiseSection();
        $promise->title = $request->title;
        $promise->text = $request->text;
        if ($request->hasFile('image')) {
            $image = time() . '_promise' . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/promise'), $image);
            $promise->image = 'uploads/promise/' . $image;
        }
        $promise->save();
        return back();
    }

    public function settings(Request $request)
    {
        $settings = Settings::first();
        return view('admin.settings.index', compact('settings'));
    }
    public function settingsPost(Request $request)
    {
        $settings = Settings::first();
        if (!$settings) {
            $settings = new Settings();
        }

        $settings->name = $request->name;
        $settings->address = $request->address;
        $settings->mobile = $request->mobile;
        $settings->whatsapp_number = $request->whatsapp_number;
        $settings->email = $request->email;
        $settings->facebook_link = $request->facebook_link;
        $settings->instagram_link = $request->instagram_link;
        $settings->linkedin_link = $request->linkedin_link;
        $settings->youtube_link = $request->youtube_link;
        $settings->twitter_link = $request->twitter_link;
        if ($request->hasFile('top_logo')) {
            $image = time() . '_top_logo' . '.' . $request->top_logo->extension();
            $request->top_logo->move(public_path('uploads/top_logo'), $image);
            $settings->top_logo = 'uploads/top_logo/' . $image;
        }
        if ($request->hasFile('bottom_logo')) {
            $image = time() . '_bottom_logo' . '.' . $request->bottom_logo->extension();
            $request->bottom_logo->move(public_path('uploads/bottom_logo'), $image);
            $settings->bottom_logo = 'uploads/bottom_logo/' . $image;
        }
        $settings->save();

        return view('admin.settings.index', compact('settings'));
    }
}
