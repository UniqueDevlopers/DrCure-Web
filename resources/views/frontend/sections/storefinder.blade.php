 <!-- store section starts -->
 <section class="storefinder mt-md-5 mt-0 mt-lg-0 " id="storefinder">
     <div class="container custom_container">
         <div class="row mb-4">
             <h1 class="m-auto font-weight-bold headstore">Store Finder</h1>
         </div>
         <div class="row justify-content-center mt-5">
             <div class="col-lg-4  mb-lg-0 mb-4">
                 {{-- <div class="storebg">
                     <form action="#" id="myForm">

                         <div class="input-group has-search mb-3">
                             <span class="fa fa-search form-control-feedback"></span>
                             <input type="text" class="form-control" placeholder="Search by pincode" name="pincode"
                                 id="pincode">
                         </div>
                         <h3 class="bluehead font-weight-bold text-center">or</h3>
                         <div class="input-group mb-3">
                             <label for="inputState"></label>
                             <select class="form-control" id="inputState">
                                 <option value="SelectState">Select State</option>
                                 <!--  <option value="Andra Pradesh">Andra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option> -->
                                 <option value="Karnataka">Karnataka</option>
                                 <option value="Kerala">Kerala</option>
                                 <option value="Telangana">Telangana</option>
                                 <!--  <option value="Madya Pradesh">Madya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Orissa">Orissa</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option> -->
                                 <!-- <option value="Telangana">Telangana</option> -->
                                 <!--  <option value="Tripura">Tripura</option>
                                    <option value="Uttaranchal">Uttaranchal</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Lakshadeep">Lakshadeep</option>
                                    <option value="Pondicherry">Pondicherry</option> -->
                             </select>
                         </div>
                         <div class="input-group mb-3">
                             <label for="inputDistrict"></label>
                             <select class="form-control" id="inputDistrict">
                                 <option value="SelectCity"> Select City </option>
                             </select>
                         </div>
                         <div class="text-center">
                             <input class="btn btnblue mt-3 mr-3 text-white" id="show_results" type="button"
                                 value="Show Results" onClick="show_result();">
                             <input class="btn btnred mt-3" id="clr_search" value="Clear Search" type="button">
                         </div>
                     </form>
                 </div> --}}

             </div>

             <div class="col-lg-12">
                 <div class="mapouter mapshadow">
                     <div class="gmap_canvas " id="gmap_canvas2">
                         <iframe id="gmap_canvas" width="100%" height="100%"
                             src="https://maps.google.com/maps?q=17.491026003049875,78.39983162330147&amp;hl=en&amp;z=14&amp;output=embed"
                             frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                         </iframe>
                     </div>
                     <style>
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
                 </div>

             </div>
         </div>
     </div>
 </section>
 <!-- store section ends -->
