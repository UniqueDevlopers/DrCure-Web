<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageContent extends Controller
{
    public function sliderManage()
    {

        return view('admin.slider-manage.index');
    }
    public function storeManage()
    {

        return view('admin.store-manage.index');
    }
}
