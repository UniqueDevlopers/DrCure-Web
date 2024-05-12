    <!-- associate section starts -->
    <section class="feedback mb-5 pb-lg-5 d-lg-block d-none" id="associate">
        <div class="container custom_container">
            <div class="row justify-content-center mt-5 position-relative">

                <div class="col-md-10 ">
                    <img src="{{ url('frontend/images/Leave_Feedback.jpg') }}" alt="" class="img-fluid">
                </div>

                <div class="bgfeed">
                    <div class="">
                        <div class="feedbackheadbg">
                            <!-- <h1 class="m-auto text-center font-weight-bold headstore py-3">Associate with Aster <br>Pharmacy as a Vendor<br>
                / Business Leads</h1> -->
                            <h4 class="m-auto text-center font-weight-bold headstore py-3">Associate with Aster Pharmacy
                                as a <br> Vendor
                                / Business Leads</h4>
                        </div>

                        <form class="associate_form rounded p-3 mt-2 mb-5" name="associate-form" id="associate_form"
                            method="POST">
                            <div id="allerror_asso_mob" class="px-4 mb-1 text-black font-weight-bold pt-3 h5"></div>
                            <input type="hidden" id="utm_source" name="utm_source" value="" />
                            <input type="hidden" id="utm_medium" name="utm_medium" value="" />
                            <input type="hidden" id="utm_campaign" name="utm_campaign" value="" />
                            <input type="hidden" id="create_date" name="create_date" value="" />
                            <div class="row px-4 pb-4 pt-0">

                                <div class="input-group mb-3 mt-3">
                                    <input type="text" class="form-control" placeholder="Name" name="name"
                                        id="name_asso_mob">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Email ID"
                                        id="email_asso_mob" name="email">
                                </div>

                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Phone Number"
                                        id="mobile_asso_mob" name="mobile">
                                </div>
                                <div id="g-recaptcha3" class="input-group mb-3 py-2"></div>
                                <input type="hidden" id="g-res3" name="g-res3" />


                                <input class="btn btnblue mt-3 text-white m-auto" id="submit_btn_asso_mob"
                                    name="submit_btn_asso_mob" type="button" value="Submit">
                                <!-- <button class="btn btnblue mt-3 text-white m-auto" id="submit_btn_asso" type="button"> Submit
                    </button> -->

                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>

        <!-- <div class="container custom_container">
            <div class="row  d-lg-none d-block">

                <div class="col-lg-6">
                    <div class="feedbackheadbgmob mb-md-5 pb-md-5 mb-3 pb-3">
                        <h1 class="font-weight-bold headstore">Leave a Feedback</h1>
                        <h5 class="grey">Share your experience with Aster Pharmacy</h5>
                    </div>
                    <form class="feedback-form bgfeedmob px-5 pt-3" name="feedback-form" id="main_form1" method="post"
                    action="javascript:alert(grecaptcha.getResponse(widgetId2));">
                        <div id="allerror1" class="px-4 mb-1 font-weight-bold pt-3 h5"></div>
                                                <input type="hidden" id="utm_source" name="utm_source"
                            value="" />
                        <input type="hidden" id="utm_medium" name="utm_medium"
                            value="" />
                        <input type="hidden" id="utm_campaign" name="utm_campaign"
                            value="" />
                        <div class="row px-4 pb-4 pt-0">

                            <select id="rating1" name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <div class="input-group mb-3 mt-3">
                                <input type="text" class="form-control" placeholder="Full Name" name="name" id="name1">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Contact no." id="mobile1"
                                    name="mobile">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Enter your email id" id="email1"
                                    name="email">
                            </div>

                            <div class="input-group mb-3">
                                <textarea type="text" class="form-control" placeholder="Describe here…" id="describe1" name="describe"></textarea>
                            </div>
                            <div id="g-recaptcha1"  class="input-group mb-3 py-2"></div>
                            <input type="hidden" id="g-res1" name="g-res1"/> -->
        <!-- Local Captcha -->
        <!-- <div class="input-group mb-3">
                                <div class="g-recaptcha" data-sitekey="6LfLj4MfAAAAAO7dLTGdQ9DxVRKjcDy3ZCkkdme1" id="example2">

                                </div>
                            </div> -->
        <!-- staging Captcha -->
        <!-- <div class="input-group mb-3">
                                    <div class="g-recaptcha" data-sitekey="6LeUYM4eAAAAAOhmOrHlQ09UpDSGyr_m8H5EJPvW">
                                    </div>
                                </div> -->

        <!-- live captcha -->

        <!-- <div class="input-group mb-3">
                                    <div class="g-recaptcha" data-sitekey="6LdWr-MgAAAAANKZ6LFoy-J6cZxUs333LdTOppC_">
                                    </div>
                                </div> -->

        <!-- <input class="btn btnblue btnbluemob mt-3 text-white m-auto" id="submit_btn1" type="button"
                                value="Submit">
                        </div>

                    </form>
                </div>


            </div>
        </div> -->
    </section>
    <!-- feedback section ends -->
