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
                                <li class="breadcrumb-item active"><a href="#">Store Manage</a>
                                </li><!--end nav-item-->
                            </ol>
                        </div>
                        <h4 class="page-title">Store Manage</h4>
                    </div><!--end page-title-box-->
                    <div class="row">
                        <h1 class="fs-3">Manage Stores/Branches Here.</h1>

                        <hr class="mb-3 mt-3 h-2 text-danger">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="store_name">Store Name</label>
                                        <input type="text" class="form-control" id="store_name" name="store_name"
                                            placeholder="Enter Store Name">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Enter Address">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                                            placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="longitude">Longitude</label>
                                        <input type="text" class="form-control" id="longitude" name="longitude"
                                            placeholder="Enter Longitude">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="latitude">Latitude</label>
                                        <input type="text" class="form-control" id="latitude" name="latitude"
                                            placeholder="Enter Latitude">
                                    </div>
                                </div>
                                <div class="col-4 mt-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->

            </div><!-- container -->
        </div><!-- container -->
    @endsection
