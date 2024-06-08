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
                                <div class="col-3">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="name">Webisite Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Website Name" value="">
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="mobile">Mobile</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            placeholder="Enter Mobile">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="whatsapp_number">WhatsApp Number</label>
                                        <input type="text" class="form-control" id="whatsapp_number"
                                            name="whatsapp_number" placeholder="Enter WhatsApp Number">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="facebook_link">Facebook Link</label>
                                        <input type="text" class="form-control" id="facebook_link" name="facebook_link"
                                            placeholder="Enter Facebook Link">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="instagram_link">Instagram Link</label>
                                        <input type="text" class="form-control" id="instagram_link" name="instagram_link"
                                            placeholder="Enter Instagram Link">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="linkedin_link">Linkedin Link</label>
                                        <input type="text" class="form-control" id="linkedin_link" name="linkedin_link"
                                            placeholder="Enter Linkedin Link">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="youtube_link">Youtube Link</label>
                                        <input type="text" class="form-control" id="youtube_link" name="youtube_link"
                                            placeholder="Enter Youtube Link">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="twitter_link">Twitter Link</label>
                                        <input type="text" class="form-control" id="twitter_link" name="twitter_link"
                                            placeholder="Enter Twitter Link">
                                    </div>
                                </div>


                                <div class="col-2">
                                    <label class="form-label mt-2" for="link">Top Logo</label>
                                    <div class="form-group mb-2">
                                        <div class="add-file btn btn-danger position-relative overflow-hidden">
                                            <i class="las la-cloud-upload-alt me-2 font-15"></i>Select Image
                                            <input type="file" name="top_logo" class="add-file-input" />
                                        </div>
                                    </div>

                                </div>
                                <div class="col-2">
                                    <label class="form-label mt-2" for="link">Bottom Logo</label>
                                    <div class="form-group mb-2">
                                        <div class="add-file btn btn-danger position-relative overflow-hidden">
                                            <i class="las la-cloud-upload-alt me-2 font-15"></i>Select Image
                                            <input type="file" name="bottom_logo" class="add-file-input" />
                                        </div>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="address">Address</label>
                                        <textarea type="text" class="form-control" id="address" name="address" placeholder="Enter Address"></textarea>
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
