 <!-- friendly section starts -->
 @php
     $hero = \App\Models\HeroSection::first();
 @endphp
 <section class="friendly" id="about_us">
     <div class="container custom_container">
         <div class="row mt-md-5 pt-md-5 pt-3 mt-3 align-items-center">
             <div class="col-lg-6 d-lg-none d-block mbres">
                 <img src="{{ url('frontend/images/neighbourhood_pharmacy.jpg') }}" class="img-fluid">
             </div>

             <div class="col-lg-5">
                 <h1 class="m-auto font-weight-bold headstore d-lg-block d-none">{{ $hero->heding_top }}
                 </h1>
                 <div class="bgfoot bgeffect p-5 mt-md-4 mb-md-5">
                     {{-- <h1 class="m-auto font-weight-bold text-center text-white pb-3 d-lg-none d-block">
                         {{ $hero->heading_bottom }}
                     </h1> --}}
                     <p class="text-white txtcenter-mob"><strong>Dr.Cure Pharmacy</strong>, a prominent retail pharmacy
                         group in the
                         telangana andhra, has expanded its presence to India. In February 2018, we proudly opened
                         India's first friendly neighborhood pharmacy, and since then, we have been rapidly growing. Our
                         stores are strategically located in well-established residential communities and prime retail
                         locations across major cities in Telangana.
                         <br>
                         <br>
                         As we continue to expand, our primary focus remains on providing innovative healthcare services
                         to our valued customers. At Dr Cure Pharmacy, we are dedicated to delivering high-quality,
                         professional, and convenient pharmacy services. In addition to prescription drugs and
                         over-the-counter medications, we offer a wide range of merchandise, including nutritional
                         supplements, herbal products, personal care items, family care products, and various
                         convenience products such as consumables, seasonal items, and promotional goods.
                         <br>
                         <br>
                         With a decade of experience in the healthcare industry, we take pride in bringing a friendly
                         and experienced approach to your neighbourhood. Our goal is to be the pharmacy that genuinely
                         cares for your community. We prioritize your well-being by ensuring friendly and trained
                         pharmacists, a pleasant ambience, genuine medicines, an extensive range of products, medicine
                         refill reminders, and free home delivery.
                         <br>
                         <br>
                         Our commitment to our customers is unwavering, and we continuously strive to enhance our
                         services. We firmly believe that superior customer service is crucial for the success of retail
                         companies. Therefore, we are dedicated to providing exceptional service in all our stores,
                         every day, for each and every customer.
                     </p>
                     <h5 class="bluehead font-weight-bold txtcenter-mob" class="font-size:20px!important">
                         {{ $hero->heading_bottom }}</h5>
                     {{-- <h4 class="bluehead font-weight-bold txtcenter-mob">We welcome you to experience your Friendly
                         Neighbourhood Pharmacy.</h4> --}}
                 </div>
             </div>
             <div class="col-lg-7 d-lg-block d-none">
                 <img src="{{ URL::to($hero->image) }}" class="img-fluid ht">
             </div>

         </div>
     </div>
 </section>
 <!-- friendly section ends -->
