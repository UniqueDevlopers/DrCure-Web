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
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h4 fw-bold">42</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Products</h6>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <i
                                        class="lab la-accessible-icon display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                </div><!--end col-->
                            </div> <!-- end row -->
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h4 fw-bold">18</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Feedbacks </h6>
                                </div><!--end col-->
                                <div class="col-auto position-reletive">
                                    <i
                                        class="las la-bed display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                </div><!--end col-->
                            </div> <!-- end row -->
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h4 fw-bold">12</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Branches</h6>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <i
                                        class="las la-cut  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                </div><!--end col-->
                            </div> <!-- end row -->
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h4 fw-bold">14</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Jobs</h6>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <i
                                        class="las la-stethoscope  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                </div><!--end col-->
                            </div> <!-- end row -->
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h4 fw-bold">32</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Sliders</h6>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <i
                                        class="las la-user-nurse  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                </div><!--end col-->
                            </div> <!-- end row -->
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h4 fw-bold">41</span>
                                    <h6 class="text-uppercase text-muted mt-2 m-0 font-11">Applications</h6>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <i
                                        class="las la-hand-holding-usd  display-3 text-secondary position-absolute o-1 translate-middle"></i>
                                </div><!--end col-->
                            </div> <!-- end row -->
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col-->
            </div><!--end row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Applied For Job</h4>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <a href="#" class="text-primary">View All</a>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Applicant Name</th>
                                            <th>Age</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Mobile No</th>
                                            <th>Applied On</th>
                                            <th>Post</th>
                                            <th class="text-right">Action</th>
                                        </tr><!--end tr-->
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><a href=""><img
                                                        src="{{ url('backend/assets/images/users/user-10.jpg') }}"
                                                        alt="" class="thumb-sm rounded-circle me-2">Donald
                                                    Gardner</a></td>
                                            <td>36</td>
                                            <td>#1236</td>
                                            <td>B28 University Street US</td>
                                            <td>+123456789</td>
                                            <td>18/07/2021</td>
                                            <td><span class="badge badge-soft-danger">Cancer</span></td>
                                            <td class="text-right">
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i
                                                        class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td><a href=""><img
                                                        src="{{ url('backend/assets/images/users/user-9.jpg') }}"
                                                        alt="" class="thumb-sm rounded-circle me-2">Keith
                                                    Jacobson</a></td>
                                            <td>48</td>
                                            <td>#1236</td>
                                            <td>B28 University Street US</td>
                                            <td>+123456789</td>
                                            <td>18/07/2021</td>
                                            <td><span class="badge badge-soft-success">Ulcers</span></td>
                                            <td class="text-right">
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i
                                                        class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td><a href=""><img
                                                        src="{{ url('backend/assets/images/users/user-9.jpg') }}"
                                                        alt="" class="thumb-sm rounded-circle me-2">Greg
                                                    Crosby</a></td>
                                            <td>27</td>
                                            <td>#1236</td>
                                            <td>B28 University Street US</td>
                                            <td>+123456789</td>
                                            <td>18/07/2021</td>
                                            <td><span class="badge badge-soft-danger">HIV</span></td>
                                            <td class="text-right">
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i
                                                        class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td><a href=""><img
                                                        src="{{ url('backend/assets/images/users/user-8.jpg') }}"
                                                        alt="" class="thumb-sm rounded-circle me-2">Fred
                                                    Godina</a></td>
                                            <td>22</td>
                                            <td>#1236</td>
                                            <td>B28 University Street US</td>
                                            <td>+123456789</td>
                                            <td>18/07/2021</td>
                                            <td><span class="badge badge-soft-success">Virus Fever</span></td>
                                            <td class="text-right">
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i
                                                        class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td><a href=""><img
                                                        src="{{ url('backend/assets/images/users/user-7.jpg') }}"
                                                        alt="" class="thumb-sm rounded-circle me-2">Peggy Doe</a>
                                            </td>
                                            <td>51</td>
                                            <td>#7851</td>
                                            <td>B28 University Street US</td>
                                            <td>+123456789</td>
                                            <td>20/07/2021</td>
                                            <td><span class="badge badge-soft-success">heart attack</span></td>
                                            <td class="text-right">
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i
                                                        class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                        <tr>
                                            <td><a href=""><img
                                                        src="{{ url('backend/assets/images/users/user-8.jpg') }}"
                                                        alt="" class="thumb-sm rounded-circle me-2">Jennifer
                                                    Doss</a></td>
                                            <td>18</td>
                                            <td>#3654</td>
                                            <td>B28 University Street US</td>
                                            <td>+123456789</td>
                                            <td>19/07/2021</td>
                                            <td><span class="badge badge-soft-danger">Ebola</span></td>
                                            <td class="text-right">
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i
                                                        class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr><!--end tr-->
                                    </tbody>
                                </table>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

            </div><!--end row-->
        </div><!-- container -->
    </div><!-- container -->
@endsection
