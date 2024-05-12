    <!-- feedback section starts -->
    <section class="feedback py-lg-5 mb-5" id="feedback">
        <div class="container d-lg-block d-none custom_container">
            <div class="row justify-content-center mt-5 position-relative">

                <div class="col-md-10 ">
                    <img src="{{ url('frontend/images/Leave_Feedback.jpg') }}" alt="" class="img-fluid">
                </div>

                <div class="bgfeed">
                    <div class="">
                        <div class="feedbackheadbg">
                            <h1 class="font-weight-bold headstore">Leave a Feedback</h1>
                            <h6 class="grey txtcenter-mob">Share your experience with DrCure Pharmacy</h6>
                        </div>
                        <form class="feedback-form" name="feedback-form" id="main_form" method="post">
                            <div id="allerror" class="px-4 mb-1 text-white font-weight-bold pt-3 h5"></div>
                            <input type="hidden" id="utm_source" name="utm_source" value="" />
                            <input type="hidden" id="utm_medium" name="utm_medium" value="" />
                            <input type="hidden" id="utm_campaign" name="utm_campaign" value="" />

                            <div class="row px-4 pb-4 pt-0">
                                <select id="rating" name="rating">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>

                                <!-- <div class="star-rating">
                                  <input type="radio" id="5-stars" name="rating" value="5" />
                                  <label for="5-stars" class="star">&#9733;</label>
                                  <input type="radio" id="4-stars" name="rating" value="4" />
                                  <label for="4-stars" class="star">&#9733;</label>
                                  <input type="radio" id="3-stars" name="rating" value="3" />
                                  <label for="3-stars" class="star">&#9733;</label>
                                  <input type="radio" id="2-stars" name="rating" value="2" />
                                  <label for="2-stars" class="star">&#9733;</label>
                                  <input type="radio" id="1-star" name="rating" value="1" />
                                  <label for="1-star" class="star">&#9733;</label>
                                </div> -->

                                <div class="input-group mb-3 mt-3">
                                    <input type="text" class="form-control" placeholder="Full Name" name="name"
                                        id="name">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Contact no." id="mobile"
                                        name="mobile">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter your email id"
                                        id="email" name="email">
                                </div>

                                <div class="input-group mb-3">
                                    <textarea type="text" class="form-control" placeholder="Describe here…" id="describe" name="describe"></textarea>
                                </div>
                                <div id="g-recaptcha" class="input-group mb-3 py-2"></div>
                                <input type="hidden" id="g-res" name="g-res" />


                                <input class="btn btnblue mt-3 text-white m-auto" id="submit_btn" type="button"
                                    value="Submit">
                            </div>

                        </form>

                    </div>
                </div>


            </div>
        </div>

        <div class="container custom_container">
            <div class="row  d-lg-none d-block">

                <div class="col-lg-6">
                    <div class="feedbackheadbgmob mb-md-5 pb-md-5 mb-3 pb-3">
                        <h1 class="font-weight-bold headstore">Leave a Feedback</h1>
                        <h5 class="grey">Share your experience with DrCure Pharmacy</h5>
                    </div>
                    <form class="feedback-form bgfeedmob px-sm-5 px-2 pt-3" name="feedback-form" id="main_form1"
                        method="post" action="javascript:alert(grecaptcha.getResponse(widgetId2));">
                        <div id="allerror1" class="px-4 mb-1 font-weight-bold pt-3 h5"></div>
                        <input type="hidden" id="utm_source" name="utm_source" value="" />
                        <input type="hidden" id="utm_medium" name="utm_medium" value="" />
                        <input type="hidden" id="utm_campaign" name="utm_campaign" value="" />
                        <div class="row px-4 pb-4 pt-0">

                            <select id="rating1" name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <div class="input-group mb-3 mt-3">
                                <input type="text" class="form-control" placeholder="Full Name" name="name"
                                    id="name1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Contact no." id="mobile1"
                                    name="mobile">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter your email id"
                                    id="email1" name="email">
                            </div>

                            <div class="input-group mb-3">
                                <textarea type="text" class="form-control" placeholder="Describe here…" id="describe1" name="describe"></textarea>
                            </div>
                            <div id="g-recaptcha1" class="input-group mb-3 py-2"></div>
                            <input type="hidden" id="g-res1" name="g-res1" />


                            <input class="btn btnblue btnbluemob mt-3 text-white m-auto" id="submit_btn1"
                                type="button" value="Submit">
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </section>
    <!-- feedback section ends -->
