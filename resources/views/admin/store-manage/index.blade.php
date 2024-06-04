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
                        <form action="{{ route('store-post') }}" method="post" enctype="multipart/form-data">
                            @csrf
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
                <h1 class="fs-1 mt-4 mb-3">List Sliders</h1>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Long/Lati</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($branch as $key => $value)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $value->store_name }}
                                </td>
                                <td>{{ $value->address }}</td>
                                <td>{{ $value->phone_number }}</td>
                                <td>{{ $value->longitude }}/{{ $value->latitude }}</td>
                                <td>
                                    @if ($value->isActive == 1)
                                        <button class="btn btn-success brn-sm">Active</button>
                                    @else
                                        <button class="btn btn-danger brn-sm">InActive</button>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-danger"> <i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- container -->
        </div><!-- container -->
    @endsection
