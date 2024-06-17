   <!-- banner section starts -->
   <section class="banner" id="nearest_pharmacy">
       <div class="container-fluid px-0">
           <div class="row no-gutters">
               <div class="col-lg-12">
                   <div class="owl-carousel owl-theme mt-0 banner_slide" id="banner2_slide">
                       @php
                           $banners = \App\Models\Slider::all();
                       @endphp
                       @foreach ($banners as $key => $banner)
                           <div class="item">
                               <div class="row no-gutters">
                                   <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 banner d-lg-none d-block">
                                       <img src="{{ url('frontend/images/hero_img.jpg') }}" class="img-fluid bannerimg">
                                   </div>
                                   <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 dualcolor mb-lg-0 mb-3 txtcenter-mob">
                                       <div class="pos">
                                           <h1 class="bannerhead text-white font-weight-bold">Your Friendly<br>
                                               Neighbourhood<br>
                                               Pharmacy
                                           </h1>
                                           <button class="btn text-white btnblue font-weight-bold mt-4">
                                               <a href="#storefinder" class="text-white"> Find Nearest Pharmacy</a>
                                           </button>
                                       </div>
                                   </div>
                                   <div class="col-xxl-6 col-xl-6 col-lg-6 col-12 banner d-lg-block d-none">
                                       <img src="{{ URL::to($banner->image) }}" class="img-fluid bannerimg">
                                   </div>
                               </div>
                           </div>
                       @endforeach
                   </div>
               </div>
           </div>
       </div>
   </section>

   <!-- banner section ends -->
