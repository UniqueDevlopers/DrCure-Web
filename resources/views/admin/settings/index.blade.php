@extends('layouts.app')

@section('title', 'Settings Manage')
@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">DrCure</a>
                                </li>
                                <!--end nav-item-->
                                <li class="breadcrumb-item active"><a href="#">Settings Manage</a>
                                </li>
                                <!--end nav-item-->
                            </ol>
                        </div>
                        <h4 class="page-title">Settings Manage</h4>
                    </div>
                    <!--end page-title-box-->
                    <div class="row">
                        <h1 class="fs-3">Manage Settings Here.</h1>

                        <hr class="mb-3 mt-3 h-2 text-danger">
                        <form action="{{ route('settings-post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="heading_top">Heading Top</label>
                                        <input type="text" class="form-control" id="heading_top" name="heading_top"
                                            placeholder="Enter Heading Top" value="">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="heading_bottom">Heading Bottom</label>
                                        <input type="text" class="form-control" id="heading_bottom" name="heading_bottom"
                                            placeholder="Enter Heading Bottom">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="bg_color">Background Color</label>
                                        <input type="color" class="form-control" id="bg_color" name="bg_color"
                                            placeholder="Enter Background Color">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <label class="form-label mt-2" for="link">Upload Image</label>
                                    <div class="form-group mb-2">
                                        <div class="add-file btn btn-danger position-relative overflow-hidden">
                                            <i class="las la-cloud-upload-alt me-2 font-15"></i>Select Image
                                            <input type="file" name="image" class="add-file-input" />
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Enter description"></textarea>
                                    </div>
                                </div>
                                <div class="col-4 mt-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
            </div>
            <!-- container -->
        </div>
        <!-- container -->
    @endsection
