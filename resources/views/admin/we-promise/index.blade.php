@extends('layouts.app')

@section('title', 'We Promise Manage')
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
                                <li class="breadcrumb-item active"><a href="#">We Promise Manage</a>
                                </li>
                                <!--end nav-item-->
                            </ol>
                        </div>
                        <h4 class="page-title">We Promise Manage</h4>
                    </div>
                    <!--end page-title-box-->
                    <div class="row">
                        <h1 class="fs-3">Manage We Promise Here.</h1>

                        <hr class="mb-3 mt-3 h-2 text-danger">
                        <form action="{{ route('promise-post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-10">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="title">Title Top</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter Title" value="">
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
                                        <textarea type="text" class="form-control" id="description" name="text" placeholder="Enter description"></textarea>
                                    </div>
                                </div>
                                <div class="col-4 mt-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!--end col-->
                    <h1 class="fs-1 mt-4 mb-3">List Promise</h1>
                    <hr>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($promise as $key => $value)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td><img src="{{ URL::to($value->image) }}" height="100px" width="100px" alt=""
                                            class="rounded"></td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->description }}</td>
                                    <td>
                                        @if ($value->isActive == 1)
                                            <button class="btn btn-success btn-sm">Active</button>
                                        @else
                                            <button class="btn btn-danger btn-sm">InActive</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end page title end breadcrumb -->
            </div>
            <!-- container -->
        </div>
        <!-- container -->
    @endsection
