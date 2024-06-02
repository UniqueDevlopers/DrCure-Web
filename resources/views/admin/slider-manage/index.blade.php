@extends('layouts.app')

@section('title', 'Dashboard')
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
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active"><a href="#">Slider Manage</a>
                                </li><!--end nav-item-->
                            </ol>
                        </div>
                        <h4 class="page-title">Slider Manage</h4>
                    </div><!--end page-title-box-->
                    <div class="row">
                        <h1 class="fs-3">Upload Banner Images Here.</h1>

                        <hr class="mb-3 mt-3 h-2 text-danger">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-4">
                                <label class="form-label mt-2" for="link">Upload Image</label>
                                <div class="form-group mb-2">
                                    <div class="add-file btn btn-danger position-relative overflow-hidden">
                                        <i class="las la-cloud-upload-alt me-2 font-15"></i>Select Image
                                        <input type="file" name="file" class="add-file-input" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group mb-2">
                                    <label class="form-label" for="link">Button Link</label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        placeholder="Enter Button Link">
                                </div>
                            </div>
                            <div class="col-4 mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->

            </div><!-- container -->
        </div><!-- container -->
    @endsection
