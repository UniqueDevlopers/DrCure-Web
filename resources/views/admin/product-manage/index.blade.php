@extends('layouts.app')

@section('title', 'Product Manage')
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
                                <li class="breadcrumb-item active"><a href="#">Product Manage</a>
                                </li>
                                <!--end nav-item-->
                            </ol>
                        </div>
                        <h4 class="page-title">Product Manage</h4>
                    </div>
                    <!--end page-title-box-->
                    <div class="row">
                        <h1 class="fs-3">Manage Product Manage Here.</h1>

                        <hr class="mb-3 mt-3 h-2 text-danger">
                        <form action="{{ route('product-post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="title">Product Name</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            placeholder="Enter Product Name" value="">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="slug">Product Slug <small
                                                class="text-danger">(Auto-generated)</small></label>
                                        <input type="text" class="form-control" id="slug" name="link"
                                            placeholder="Enter Product Slug" readonly>
                                        <div id="slug-feedback" class="text-danger"></div>
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
                                <div class="col-4 mt-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!--end col-->
                    <h1 class="fs-1 mt-4 mb-3">List Products</h1>
                    <hr>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Link</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $key => $value)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td><img src="{{ URL::to($value->image) }}" height="100px" width="100px" alt=""
                                            class="rounded"></td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->link }}</td>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function generateSlug(text) {
                return text.toString().toLowerCase()
                    .replace(/\s+/g, '-') // Replace spaces with -
                    .replace(/[^\w\-]+/g, '') // Remove all non-word chars
                    .replace(/\-\-+/g, '-') // Replace multiple - with single -
                    .replace(/^-+/, '') // Trim - from start of text
                    .replace(/-+$/, ''); // Trim - from end of text
            }

            $(document).ready(function() {
                $('#title').on('input', function() {
                    var slug = generateSlug($(this).val());
                    $('#slug').val(slug);
                });
            });
        </script>
    @endsection
