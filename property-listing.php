<?php include 'incl/header.php'; ?>
<style>
<?php include 'assets/css/pages/property-listing.css'?><?php include 'assets/css/theme.css'?>.site-nav {
    background-color: black;
    position: static;
}
</style>


<div class="header-form-section">
    <div class="inner-sec-container">
        <div class="header-form-inner-parent">
            <!-- <form action=""> -->
            <div class="form-header-row">
                <div class="input-col">
                    <select name="" id="">
                        <option value="">Purpose</option>
                        <option value="">Buy</option>
                        <option value="">Rent</option>
                    </select>
                </div>
                <!-- input-col -->
                <div class="input-col">
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
                <!-- input-col -->
                <script>
                $(".js-example-placeholder-multiple").select2({
                    placeholder: "Select City"
                });
                </script>


                <div class="input-col">
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
                <!-- input-col -->

                <div class="input-col" style="width:29%">
                    <input type="text" placeholder="Area">
                </div>
                <!-- input-col -->

                <div class="input-col">
                    <!-- <button class="price-range-btn">Price Range</button> -->
                    <div class="price-range-btn-area">
                        <button class="price-btn-range">
                            Price Range &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <div class="price-range-dropdown-area">
                            <!-- With number fields -->
                            <div class="range-slider">
                                <div style="width:100%;height:auto;display:flex;    margin-bottom: 25px;"> <a href="#"
                                        style="font-size:14px;">from PKR</a>
                                    <input type="number" value="25000" min="0" max="120000" /> <a href="#"
                                        style="font-size:14px;">from PKR</a>
                                    <input type="number" value="50000" min="0" max="120000" />
                                </div>
                                <input value="25000" min="0" max="120000" step="500" type="range" />
                                <input value="50000" min="0" max="120000" step="500" type="range" />

                            </div>
                            <button class="done-btn">
                                Done
                            </button>
                        </div>
                        <!-- price-range-dropdown-area -->

                    </div>
                </div>
                <!-- input-col -->
                <div class="input-col">
                    <div class="price-range-btn-area">
                        <button class="price-btn-range">
                            Area Range &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <div class="price-range-dropdown-area">
                            <!-- With number fields -->
                            <div class="range-slider range-slider2">
                                <div style="width:100%;height:auto;display:flex"> <a href="#"
                                        style="font-size:14px;">from Sq M</a>
                                    <input type="number" value="25000" min="0" max="120000" /> <a href="#"
                                        style="font-size:14px;">to Sq M</a>
                                    <input type="number" value="50000" min="0" max="120000" />
                                </div>
                                <input value="25000" min="0" max="120000" step="500" type="range" />
                                <input value="50000" min="0" max="120000" step="500" type="range" />

                            </div>
                            <button class="done-btn">
                                Done
                            </button>
                        </div>
                        <!-- price-range-dropdown-area -->
                    </div>
                </div>
                <!-- input-col -->
            </div>
            <!-- form-header-row -->
            <!-- </form> -->
        </div>
        <!-- header-form-inner-parent -->
    </div>

    <!-- sec contaner inner -->
</div>
<!-- header-form-section -->


<div class="property-listing-section">
    <div class="inner-sec-container">
        <div class="property-listing-inner-parent">
            <div class="row">
                <div class="col-lg-9">
                    <div class="property-listing-main-wrapper">
                        <div class="listing-tabs-wrapper">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">Residential</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Commercial</button>
                                </li>

                            </ul>
                            <div class="listgrid-btns-wrapper">
                                <button onclick="showlistview();" class="listbtn"> <img
                                        src="assets/images/property-listing/list.svg" alt=""></button>
                                <button onclick="showgridview();" class="gridbtn"> <img
                                        src="assets/images/property-listing/grid.svg" alt=""></button>
                            </div>
                            <!-- listgrid-btns-wrapper -->
                        </div>
                        <!-- listing-tabs-wrapper -->
                        <div class="tabs-content-listing-area">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="residential-listing-main-wrapper">
                                        <div class="row">
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->

                                            <div class="col-md-4 propertyitem  mb-4">
                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->
                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->
                                            </div>
                                            <!-- col 4 -->
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <div class="col-md-4 propertyitem  mb-4">
                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->
                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                        </div>
                                        <!-- row -->
                                        <div class="row">
                                            <div class="col-md-4 propertyitem  mb-4">
                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>
                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">
                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                        </div>
                                        <!-- row -->
                                    </div>
                                    <!-- residential-listing-main-wrapper -->
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="residential-listing-main-wrapper">
                                        <div class="row">
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->
                                            </div>
                                            <!-- col 4 -->
                                        </div>
                                        <!-- row -->

                                        <div class="row">

                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->
                                                        <img src="assets/images/card-360.png" class="card-360-icon"
                                                            alt="">
                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->
                                            </div>
                                            <!-- col 4 -->
                                        </div>
                                        <!-- row -->

                                        <div class="row">
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->
                                            <div class="col-md-4 propertyitem  mb-4">

                                                <div class="visited-prop-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/visited1.png"
                                                            alt="visited image property">
                                                        <div class="ribbon-area">
                                                            <p>For Sale</p>
                                                        </div>
                                                        <!-- ribbon-area -->

                                                        <div class="img-buttons-wrapper">
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#photos"
                                                                    style="color:black">
                                                                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                                    &nbsp; Photos
                                                                </a>
                                                            </button>
                                                            <button class="photos-btn">
                                                                <a href="property-details.php#videos"
                                                                    style="color:black">
                                                                    <i class="fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; Videos
                                                                </a>
                                                            </button>
                                                            <button class="vr-btn">
                                                                <a href="property-details.php#vr" style="color:white">
                                                                    <i class="	fa fa-caret-square-o-right"
                                                                        aria-hidden="true"></i>
                                                                    &nbsp; VR
                                                                </a>
                                                            </button>

                                                        </div>
                                                        <!-- img-buttons-wrapper -->
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">

                                                        <h3>
                                                            Faisal Mosque
                                                        </h3>
                                                        <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                        <p class="showinlist-text"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Enim, sed ipsum tellus enim
                                                            nibh vulputate massa commodo diam. Purus bibendum dictum
                                                            leo
                                                            ut in ultrices laoreet. Non, integer condimentum vel
                                                            lacus.
                                                            Tempor at neque purus ac elementum, curabitur vel dolor
                                                            quisque.
                                                        </p>
                                                        <div class="tags-wrapper">
                                                            <div class="tag1-area">
                                                                <p>Hot Property</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area">
                                                                <p>For Rent</p>
                                                            </div>
                                                            <!-- tag1-area -->

                                                            <div class="tag1-area verified">
                                                                <p><i class="fa fa-check-circle"></i>Verified</p>
                                                            </div>
                                                            <!-- tag1-area -->
                                                        </div>
                                                        <!-- tags-wrapper -->
                                                        <div class="price-and-btn-area">
                                                            <p class="price">PKR 4,60,000/-</p>
                                                            <button>

                                                                <a href="property-details.php" class="links">
                                                                    View Details
                                                                </a>
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- visited-prop-card-wrapper -->

                                            </div>
                                            <!-- col 4 -->

                                        </div>
                                        <!-- row -->
                                    </div>
                                    <!-- residential-listing-main-wrapper -->
                                </div>
                            </div>

                        </div>
                        <!-- tabs-content-listing-area -->
                    </div>
                    <!-- property-listing-main-wrapper -->
                </div>
                <!-- col 8 -->
                <div class="col-lg-3">
                    <div class="ads-col-wrapper">
                        <div class="ad-img-wrapper mb-4 shadow">
                            <img src="assets/images/ads/ad2.png" alt="">
                        </div>
                        <!-- ad-img-wrapper -->

                        <div class="ad-img-wrapper mb-4 shadow">
                            <img src="assets/images/ads/ad3.jpg" alt="">
                        </div>
                        <!-- ad-img-wrapper -->

                        <div class="ad-img-wrapper mb-4 shadow">
                            <img src="assets/images/ads/bumper-ads.jpg" alt="">
                        </div>
                        <!-- ad-img-wrapper -->


                        <div class="ad-img-wrapper mb-4 shadow">
                            <img src="assets/images/ads/ad2.png" alt="">
                        </div>
                        <!-- ad-img-wrapper -->

                        <div class="ad-img-wrapper mb-4 shadow">
                            <img src="assets/images/ads/ad3.jpg" alt="">
                        </div>
                        <!-- ad-img-wrapper -->
                    </div>
                    <!-- ads-col-wrapper -->
                </div>
                <!-- col 4 -->
            </div>
            <!-- row -->
        </div>
        <!-- property-listing-inner-parent -->
    </div>
    <!-- inner sec container -->
</div>
<!-- property-listing-section -->


<?php include './components/popular-locations.php'; ?>

<!-- **********************************recent properties section -->

<div class="featured-properties-section recent-properties-section">
    <div class="inner-sec-container">
        <div class="featured-properties-inner-parent">
            <div class="all-heading-wrapper ">
                <h2 class="section-heading-home">
                    Related properties
                </h2>
            </div>
            <!-- heading wrapper -->
            <?php include './components/recent-properties-slider.php'; ?>

        </div>
        <!-- featured-properties-inner-parent -->
    </div>
    <!-- inner section container -->
</div>
<!-- featured-properties-section -->

<?php include 'components/instant-search.php'; ?>



<script>
function showlistview() {
    $(".propertyitem").addClass("listview");
    $(".gridbtn").removeClass("activebtn");
    $(".listbtn").addClass("activebtn");
}

function showgridview() {
    $(".propertyitem").removeClass("listview");
    $(".gridbtn").addClass("activebtn");
    $(".listbtn").removeClass("activebtn");
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
var owl = $('.screenshot_slider2').owlCarousel({

    loop: true,
    margin: 20,
    nav: true,
    autoplay: true,
    autoPlayTimeout: 1500,
    navText: ['<span class="fas fa-chevron-left fa-2x"></span>',
        '<span class="fas fa-chevron-right fa-2x"></span>'
    ],
    responsive: {
        0: {
            items: 1
        },
        640: {
            items: 2
        },
        960: {
            items: 3
        },
        1200: {
            items: 4
        }
    }


});

/****************************/
</script>
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
<?php include 'incl/footer.php'; ?>