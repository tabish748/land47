<style>
.blackwhite {
    filter: grayscale(0) !important;
}

.blurvideo {
    filter: blur(8px);
}

.zoom {
    transform: scale(1.05);
    transition: .5s ease-in-out;
    z-index: 10000;
    position: relative;
}

.hideprop {
    display: none;
}

.showprop {
    display: block !important;
}
.home-inner-container .home-inner-wrapper .srch-bar-main-wrapper .price-range-row .price-range-btn-area button{
    color:#fff!important
}
</style>
<script>
$(function() {
    $(".srch-bar-main-wrapper").on("click", function(e) {
        $(".category-video").addClass("blurvideo");
        $(".srch-bar-main-wrapper").addClass("zoom");
        $(".property-type-dropdown-area").removeClass("showprop");
        e.stopPropagation()
    });


    $(document).on("click", function(e) {
        if ($(e.target).is(".srch-bar-main-wrapper") === false) {

            $(".category-video").removeClass("blurvideo");
            $(".srch-bar-main-wrapper").removeClass("zoom");
            $(".property-type-dropdown-area").removeClass("showprop");
        }
    });
});

$(function() {
    $(".prop_areaa").on("click", function(e) {
        $(".property-type-dropdown-area").addClass("showprop");
        $(".category-video").addClass("blurvideo");
        $(".srch-bar-main-wrapper").addClass("zoom");
        e.stopPropagation();
    });
    $(document).on("click", function(e) {
        //  if ($(e.target).is("#property-type-dropdown-area") === false) {

        $(".property-type-dropdown-area").removeClass("showprop");
        //  }
    });

});
</script>
<div class="srch-bar-main-wrapper" id="srch-bar-main-wrapper">
    <div class="tabs-row">
        <div class="tabs-btn-area">
            <button class="tab-button active">
                BUY
            </button>
            <button class="tab-button">
                RENT
            </button>

            <button class="tab-button">
                SELL
            </button>
           <a href="invest.php">
           <button class="tab-button">
                INVEST
            </button>
           </a>
        </div>
        <!-- tabs-btn-area -->
        <div class="srch-property-id">
            <form action="">
                <div class="inner-form-area">
                    <div class="input-area">
                        <input type="text" placeholder="Property ID">
                    </div>
                    <!-- input area -->
                    <div class="gif-srch-icon-area">

                        <button>
                            <img src="assets/images/icon-2.gif" alt="">

                        </button>
                    </div>
                    <!-- gif-srch-icon-area -->
                </div>
                <!-- inner-form-area -->

            </form>

        </div>
        <!-- srch-property-id -->
    </div>
    <!-- tabs-row -->


    <div class="input-box-row-home-section">
        <div class="row">
            <div class="col-md-3" style="padding:0px!important;">
                <div class="main-srch-input-wrapper">

                    <div class="main-srch-input-wrapper area-box prop_areaa" id="prop_areaa">
                        <input type="text" placeholder="Property Type" id="property_type">
                        <div class="property-type-dropdown-area" id="property-type-dropdown-area">
                            <div class="tabs-area">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-residential-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-residential" type="button" role="tab"
                                            aria-controls="pills-residential" aria-selected="true">Residential</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-plots-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-plots" type="button" role="tab"
                                            aria-controls="pills-plots" aria-selected="false">Plots</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-commercial-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-commercial" type="button" role="tab"
                                            aria-controls="pills-commercial" aria-selected="false">Commercial</button>
                                    </li>
                                </ul>

                            </div>
                            <!-- tabs-area -->
                            <div class="tabs-content-area">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-residential" role="tabpanel"
                                        aria-labelledby="pills-residential-tab">
                                        <div class="residential-tab-content-area">
                                            <ul>
                                                <li onclick="propertytypetext('house');"><button
                                                        class="property_type-btns">House</button></li>
                                                <li onclick="propertytypetext('guest_house');"><button
                                                        class="property_type-btns">Guset House</button>
                                                </li>
                                                <li onclick="propertytypetext('appartment');"><button
                                                        class="property_type-btns">Appartment</button>
                                                </li>
                                                <li onclick="propertytypetext('upper_portion');">
                                                    <button class="property_type-btns">Upper
                                                        Portion</button>
                                                </li>
                                                <li onclick="propertytypetext('lower_portion');">
                                                    <button class="property_type-btns">Lower
                                                        Portion</button>
                                                </li>
                                                <li onclick="propertytypetext('farm_house');"><button
                                                        class="property_type-btns">Farm House</button>
                                                </li>
                                                <li onclick="propertytypetext('room');"><button
                                                        class="property_type-btns">Room</button></li>
                                                <li onclick="propertytypetext('penthouse');"><button
                                                        class="property_type-btns">Penthouse</button>
                                                </li>
                                                <li onclick="propertytypetext('hotel_suite');"><button
                                                        class="property_type-btns">Hotel Suite</button>
                                                </li>
                                                <li onclick="propertytypetext('basement');"><button
                                                        class="property_type-btns">Basement</button>
                                                </li>
                                                <li onclick="propertytypetext('annexe');"><button
                                                        class="property_type-btns">Annexe</button></li>
                                                <li onclick="propertytypetext('hostel');"><button
                                                        class="property_type-btns">Hostel</button></li>
                                            </ul>
                                        </div>
                                        <!-- residential-tab-content-area -->
                                    </div>
                                    <div class="tab-pane fade" id="pills-plots" role="tabpanel"
                                        aria-labelledby="pills-plots-tab">
                                        <div class="residential-tab-content-area">


                                            <ul>
                                                <li onclick="propertytypetext('residential_plot');">
                                                    <button class="property_type-btns">Residential
                                                        Plot</button>
                                                </li>
                                                <li onclick="propertytypetext('commercial_plot');">
                                                    <button class="property_type-btns">Commercial
                                                        Plot</button>
                                                </li>
                                                <li onclick="propertytypetext('agricultural_land');">
                                                    <button class="property_type-btns">Agricultural
                                                        Land</button>
                                                </li>
                                                <li onclick="propertytypetext('industrial_land');">
                                                    <button class="property_type-btns">Industrial
                                                        Land</button>
                                                </li>
                                                <li onclick="propertytypetext('plot_file');">
                                                    <button class="property_type-btns">Plot
                                                        File</button>
                                                </li>
                                                <li onclick="propertytypetext('farmhouse_plot');">
                                                    <button class="property_type-btns">Farmhouse
                                                        Plot</button>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- residential-tab-content-area -->
                                    </div>
                                    <div class="tab-pane fade" id="pills-commercial" role="tabpanel"
                                        aria-labelledby="pills-commercial-tab">
                                        <div class="residential-tab-content-area">


                                            <ul>
                                                <li onclick="propertytypetext('Office');"><button
                                                        class="property_type-btns">Office</button></li>
                                                <li onclick="propertytypetext('Shop');"><button
                                                        class="property_type-btns">Shop</button>
                                                </li>
                                                <li onclick="propertytypetext('Warehouse');"><button
                                                        class="property_type-btns">Warehouse </button>
                                                </li>
                                                <li onclick="propertytypetext('Factory');">
                                                    <button class="property_type-btns">Factory</button>
                                                </li>
                                                <li onclick="propertytypetext('Building');">
                                                    <button class="property_type-btns">Building</button>
                                                </li>
                                                <li onclick="propertytypetext('Gym');"><button
                                                        class="property_type-btns">Gym</button>
                                                </li>
                                                <li onclick="propertytypetext('Theatre');"><button
                                                        class="property_type-btns">Theatre</button>
                                                </li>
                                                <li onclick="propertytypetext('food_court');"><button
                                                        class="property_type-btns">Food Court</button>
                                                </li>
                                                <li onclick="propertytypetext('Hall');"><button
                                                        class="property_type-btns">Hall</button>
                                                </li>
                                                <li onclick="propertytypetext('Land');"><button
                                                        class="property_type-btns">Land</button>
                                                </li>
                                                <li onclick="propertytypetext('Plaza');"><button
                                                        class="property_type-btns">Plaza</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- residential-tab-content-area -->
                                    </div>
                                </div>
                            </div>
                            <!-- tabs-content-area -->
                        </div>
                        <!-- property-type-dropdown-area -->
                    </div>
                    <!-- main-srch-input-wrapper -->

                </div>
                <!-- main-srch-input-wrapper -->
            </div>
            <!-- col3 -->

            <div class="col-md-4" style="padding:0px!important;">
                <div class="main-srch-input-wrapper">

                    <select class="js-example-placeholder-multiple js-states form-control" multiple="multiple">
                        <option>Rawalpindi</option>
                        <option>Lahore</option>
                        <option>Karachi</option>
                        <option>Islamabad</option>
                        <option>Multan</option>
                        <option>Faislabad</option>
                        <option>Taxila</option>
                        <option>Wah Cantt</option>
                        <option>Khushab</option>
                        <option>Jhang</option>
                        <option>Khariyan</option>
                        <option>Jehlum</option>
                        <option>Peshawar</option>
                        <option>Laiyya</option>

                    </select>
                </div>
                <!-- main-srch-input-wrapper -->
            </div>
            <!-- col3 -->
            <script>
            $(".js-example-placeholder-multiple").select2({
                placeholder: "Select City"
            });
            </script>


            <div class="col-md-5" style="padding:0px!important;">
                <div class="main-srch-input-wrapper area-box">
                    <input type="text" placeholder="Area">
                    <a href="property-listing.php">
                        <button class="main-submit-btn">
                            <img src="assets/images/Vector.png" alt="">
                        </button>
                    </a>
                </div>
                <!-- main-srch-input-wrapper -->
            </div>
            <!-- col3 -->
        </div>
        <!-- row -->
    </div>
    <!-- input-box-row-home-section -->

    <div class="price-range-row">

        <div class="row">
            <div class="col-md-2">

                <div class="price-range-btn-area">
                    <button class="price-btn-range">
                        Price Range &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </button>

                    <div class="price-range-dropdown-area">


                        <!-- With number fields -->


                        <div class="range-slider">
                            <div style="width:100%;height:auto;display:flex;"> <a href="#"
                                    style="font-size:14px;">from PKR</a>
                                <input type="number" value="25000" min="0" max="120000" /> <a href="#"
                                    style="font-size:14px;">from PKR</a>
                                <input type="number" value="50000" min="0" max="120000" />
                            </div>
                            <input value="25000" min="0" max="120000" step="500" type="range" />
                            <input value="50000" min="0" max="120000" step="500" type="range" />
                            <svg width="100%" height="24">
                                <line x1="4" y1="0" x2="300" y2="0" stroke="#444" stroke-width="12"
                                    stroke-dasharray="1 28"></line>
                            </svg>
                        </div>
                        <button class="done-btn">
                            Done
                        </button>
                    </div>
                    <!-- price-range-dropdown-area -->




                </div>


            </div>
            <!-- col2 -->


            <div class="col-md-2">

                <div class="price-range-btn-area">
                    <button class="price-btn-range">
                        Area Range &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </button>

                    <div class="price-range-dropdown-area">


                        <!-- With number fields -->


                        <div class="range-slider range-slider2">
                            <div style="width:100%;height:auto;bakcground-color:red;"> <a href="#"
                                    style="font-size:12px;">from <select name="" id="" style="font-size:12px;">
                                        <option value="">Sq M</option>
                                        <option value="">yads</option>
                                        <option value="">Marla</option>
                                    </select></a>
                                <input type="number" value="25000" min="0" max="120000" /> <a href="#"
                                    >to  <select name="" id="" style="font-size:12px;">
                                        <option value="">Sq M</option>
                                        <option value="">yads</option>
                                        <option value="">Marla</option>
                                    </select></a>
                                <input type="number" value="50000" min="0" max="120000" />
                            </div>
                            <input value="25000" min="0" max="120000" step="500" type="range" />
                            <input value="50000" min="0" max="120000" step="500" type="range" />
                            <svg width="100%" height="24">
                                <line x1="4" y1="0" x2="300" y2="0" stroke="#444" stroke-width="12"
                                    stroke-dasharray="1 28"></line>
                            </svg>
                        </div>
                        <button class="done-btn">
                            Done
                        </button>
                    </div>
                    <!-- price-range-dropdown-area -->





                </div>


            </div>
            <!-- col2 -->
        </div>
        <!-- row -->

    </div>
    <!-- price-range-row -->
</div>
<!-- srch-bar-main-wrapper -->