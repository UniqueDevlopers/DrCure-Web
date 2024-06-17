<section class="storecarousel mt-5">
    <div class="container custom_container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div id="owl-demo-container">
                    <div id="owl-demo" class="owl-carousel owl-theme mt-0 bannerimage_slide">
                        @php
                            $stores = \App\Models\StoreBranch::all();
                        @endphp
                        @foreach ($stores as $key => $store)
                            <div class="item">
                                <div class="bg-blue1 rounded pl-3 pt-3">
                                    <div class="map1">
                                        <h4 class="text-white font-weight-bold pb-3">
                                            <a href="javascript:void(0);" data-lat="{{ $store->latitude }}"
                                                data-long="{{ $store->longitude }}" class="text-white d-block"
                                                onclick="viewmap('{{ $store->latitude }}', '{{ $store->longitude }}', this)">
                                                {{ $store->store_name }}
                                            </a>
                                        </h4>
                                        <div class="row">
                                            <div class="col-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30.506" height="27.505"
                                                    viewBox="0 0 30.506 29.505">
                                                    <path id="location_pin_icon" data-name="location pin icon"
                                                        d="M4.01,0A10.268,10.268,0,0,0-6.25,10.256C-6.25,17.363,4.01,29.5,4.01,29.5S14.256,17.013,14.256,10.256A10.268,10.268,0,0,0,4.01,0ZM7.094,13.258A4.376,4.376,0,0,1,.912,7.07a4.374,4.374,0,0,1,6.183,6.188Zm0,0"
                                                        transform="translate(6.25)" fill="#fff"></path>
                                                </svg>
                                            </div>
                                            <div class="col-10 px-0 pr-4">
                                                <p class="text-white">
                                                    <a href="javascript:void(0);"
                                                        onclick="viewmap('{{ $store->latitude }}', '{{ $store->longitude }}', this)"
                                                        class="text-white d-block pr-3">{{ $store->address }}</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30.17" height="30"
                                                    viewBox="0 0 38.17 38">
                                                    <g id="Group_1325" data-name="Group 1325"
                                                        transform="translate(2773 307)">
                                                        <rect id="Rectangle_57" data-name="Rectangle 57" width="38"
                                                            height="38" transform="translate(-2773 -307)"
                                                            fill="none"></rect>
                                                        <path id="Path_7200" data-name="Path 7200"
                                                            d="M7.119,1.207C6.6.059,6.06.036,5.569.016,5.167,0,4.707,0,4.249,0A2.532,2.532,0,0,0,2.412.862,7.722,7.722,0,0,0,0,6.608C0,10,2.469,13.273,2.813,13.733s4.766,7.638,11.768,10.4c5.819,2.3,7,1.839,8.267,1.724s4.076-1.667,4.65-3.275a5.753,5.753,0,0,0,.4-3.276c-.172-.287-.632-.459-1.32-.8S22.5,16.49,21.872,16.26s-1.091-.344-1.55.345-1.779,2.24-2.181,2.7-.8.518-1.493.173a18.834,18.834,0,0,1-5.54-3.419,20.758,20.758,0,0,1-3.833-4.771c-.4-.689-.007-1.029.3-1.406A20.773,20.773,0,0,0,9.3,7.527,1.27,1.27,0,0,0,9.243,6.32C9.07,5.976,7.731,2.569,7.119,1.207Zm0,0"
                                                            transform="matrix(0.755, 0.656, -0.656, 0.755, -2755.962, -306.969)"
                                                            fill="#00b48d" fill-rule="evenodd"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="col-10 px-0 pr-4">
                                                <p class="text-white mb-0">
                                                    <a href="tel:{{ $store->phone_number }}"
                                                        class="text-white d-block">{{ $store->phone_number }}</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="show_on_google row align-items-center">
                                        <div class="col-8 mtmap">
                                            <a href="javascript:void(0)" class="blue h5 font-weight-bold bimg head2"
                                                id="viewmapbtn" data-lat="{{ $store->latitude }}"
                                                data-long="{{ $store->longitude }}"
                                                onclick="viewmap('{{ $store->latitude }}', '{{ $store->longitude }}', this)">View
                                                Map</a>
                                        </div>
                                        <div class="col-4">
                                            <img width="200px" src="{{ URL::to($store->store_image) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev"><img
                                src="{{ url('frontend/images/chevron_left_black_24dp.svg') }}"></button>
                        <button type="button" role="presentation" class="owl-next"><img
                                src="{{ url('frontend/images/chevron_right_black_24dp.svg') }}"></button>
                    </div>
                    <div class="owl-dots"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS to style the Owl Carousel navigation buttons -->
<style>
    .owl-nav .owl-prev,
    .owl-nav .owl-next {
        background: #ccc;
        /* Background color */
        color: #fff;
        /* Text color */
        border-radius: 50%;
        /* Make the buttons round */
        width: 50px;
        /* Width of the buttons */
        height: 50px;
        /* Height of the buttons */
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        /* Position them absolutely */
        top: 50%;
        /* Center vertically */
        transform: translateY(-50%);
        /* Adjust for perfect centering */
        z-index: 1000;
        /* Ensure they are above other elements */
    }

    .owl-nav .owl-prev {
        left: -60px;
        /* Position to the left of the carousel */
    }

    .owl-nav .owl-next {
        right: -60px;
        /* Position to the right of the carousel */
    }

    .owl-nav .owl-prev:hover,
    .owl-nav .owl-next:hover {
        background: #555;
        /* Change background on hover */
    }

    .owl-nav img {
        width: 20px;
        /* Adjust the size of the arrow icons */
        color: white;
    }

    .mapouter {
        position: relative;
        text-align: right;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 350px;
        width: 100%;
        border-radius: 8px;
        border: 1px solid #ccc;
    }
</style>
