   <!-- leftbar-tab-menu -->
   <div class="leftbar-tab-menu">
       <div class="main-icon-menu">
           <a href="index.html" class="logo logo-metrica d-block text-center">
               <span>
                   <img src="{{ url('frontend/images/Aster-Pharmacy-Logo.png') }}" alt="logo-small"
                       class="logo-sm bg-white">
               </span>
           </a>
           <div class="main-icon-menu-body">
               <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                   <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                       <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard"
                           data-bs-trigger="hover">
                           <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                               <i class="ti ti-smart-home menu-icon"></i>
                           </a><!--end nav-link-->
                       </li><!--end nav-item-->
                       {{-- <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Apps"
                           data-bs-trigger="hover">
                           <a href="#MetricaApps" id="apps-tab" class="nav-link">
                               <i class="ti ti-apps menu-icon"></i>
                           </a><!--end nav-link-->
                       </li><!--end nav-item--> --}}

                       {{-- <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Uikit"
                           data-bs-trigger="hover">
                           <a href="#MetricaUikit" id="uikit-tab" class="nav-link">
                               <i class="ti ti-planet menu-icon"></i>
                           </a><!--end nav-link-->
                       </li><!--end nav-item--> --}}

                       {{-- <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages"
                           data-bs-trigger="hover">
                           <a href="#MetricaPages" id="pages-tab" class="nav-link">
                               <i class="ti ti-files menu-icon"></i>
                           </a><!--end nav-link-->
                       </li><!--end nav-item--> --}}
                       {{--
                       <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication"
                           data-bs-trigger="hover">
                           <a href="#MetricaAuthentication" id="authentication-tab" class="nav-link">
                               <i class="ti ti-shield-lock menu-icon"></i>
                           </a><!--end nav-link--> --}}
                       {{-- </li><!--end nav-item--> --}}
                   </ul><!--end nav-->
               </div><!--end /div-->
           </div><!--end main-icon-menu-body-->
           <div class="pro-metrica-end">
               <a href="" class="profile">
                   <img src="{{ url('backend/assets/images/users/user-4.jpg') }}" alt="profile-user"
                       class="rounded-circle thumb-sm">
               </a>
           </div><!--end pro-metrica-end-->
       </div>
       <!--end main-icon-menu-->

       <div class="main-menu-inner">
           <div class="topbar-left">
               <a href="/dashboard" class="logo">
                   <span>
                       <img src="{{ url('frontend/images/Aster-Pharmacy-Logo.png') }}" width="100" alt="logo-large"
                           class="logo-dark">
                       <img src="{{ url('frontend/images/Aster-Pharmacy-Logo.png') }}" width="100" alt="logo-large"
                           class="logo-light">
                   </span>
               </a>
               <!--end logo-->
               <div class="menu-body navbar-vertical tab-content" data-simplebar>
                   <div id="MetricaDashboard"
                       class="main-icon-menu-pane tab-pane {{ Request::is('dashboard') ? 'active' : '' }}"
                       role="tabpanel" aria-labelledby="dashboard-tab">
                       <div class="title-box ">
                           <h6 class="menu-title">Dashboard</h6>
                       </div>

                       <ul class="nav flex-column mt-5">
                           <li class="nav-item">
                               <a class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }}"
                                   href="{{ url('dashboard') }}">Dashboard</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ Request::is('slider-manage') ? 'active' : '' }}"
                                   href="{{ url('slider-manage') }}">Slider Manage</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ Request::is('store-manage') ? 'active' : '' }}"
                                   href="{{ url('store-manage') }}">Store Manage</a>
                           </li>
                           {{-- <li class="nav-item">
                               <a class="nav-link {{ Request::is('hero-banner') ? 'active' : '' }}"
                                   href="{{ url('hero-banner') }}">Hero Banner</a>
                           </li> --}}
                           <li class="nav-item">
                               <a class="nav-link {{ Request::is('hero-banner-picture') ? 'active' : '' }}"
                                   href="{{ url('hero-banner-picture') }}">Hero Banner Picture</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ Request::is('product-manage') ? 'active' : '' }}"
                                   href="{{ url('product-manage') }}">Product Manage</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ Request::is('promise-manage') ? 'active' : '' }}"
                                   href="{{ url('promise-manage') }}">We Promise</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ Request::is('careers') ? 'active' : '' }}"
                                   href="{{ url('careers') }}">Careers</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ Request::is('feedback') ? 'active' : '' }}"
                                   href="{{ url('feedback') }}">Feedback</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link {{ Request::is('settings') ? 'active' : '' }}"
                                   href="{{ url('settings') }}">Web Settings</a>
                           </li>
                           <!--end nav-item-->
                       </ul>
                       <!--end nav-->
                   </div>
                   <!-- end Dashboards -->
               </div>
               <!--end menu-body-->
           </div><!-- end main-menu-inner-->
       </div>
       <!-- end leftbar-tab-menu-->

       <!-- Top Bar Start -->
       <div class="topbar">
           <!-- Navbar -->
           <nav class="navbar-custom" id="navbar-custom">
               <ul class="list-unstyled topbar-nav float-end mb-0">
                   <li class="dropdown">
                       <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#"
                           role="button" aria-haspopup="false" aria-expanded="false">
                           <div class="d-flex align-items-center">
                               <img src="{{ url('backend/assets/images/users/user-4.jpg') }}" alt="profile-user"
                                   class="rounded-circle me-2 thumb-sm" />
                               <div>
                                   <small class="d-none d-md-block font-11">Admin</small>
                                   <span class="d-none d-md-block fw-semibold font-12">Maria Gibson <i
                                           class="mdi mdi-chevron-down"></i></span>
                               </div>
                           </div>
                       </a>
                       <div class="dropdown-menu dropdown-menu-end">
                           <a class="dropdown-item" href="#"><i
                                   class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                           <a class="dropdown-item" href="#"><i
                                   class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                           <div class="dropdown-divider mb-0"></div>
                           <a class="dropdown-item" href="{{ route('logout') }}"><i
                                   class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                       </div>
                   </li><!--end topbar-profile-->
               </ul><!--end topbar-nav-->

               <ul class="list-unstyled topbar-nav mb-0">
                   <li>
                       <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                           <i class="ti ti-menu-2"></i>
                       </button>
                   </li>

               </ul>
           </nav>
           <!-- end navbar-->
       </div>
       <!-- Top Bar End -->
       <style>
           .nav-link.active {
               background-color: #D1E7DD;
               color: #0F5132;
               border-radius: 50px !important;
           }
       </style>
       <div class="page-wrapper">
