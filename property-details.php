<?php include 'incl/header.php'; ?>


<style>
<?php include 'assets/css/pages/property-details.css'?>.site-nav {
    position: static;
    background-color: rgba(0, 0, 0, 1);
}
</style>


<div class="property-detail-page-wrapper">
    <div class="property-detail-main-section" id="photos">
        <div class="inner-sec-container">
            <div class="property-detail-inner-parent">
                <div class="property-detail-heading-area">
                    <h1>1 KANAL HOUSE FOR RENT</h1>
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="loc-style">F-7/1, islamabad</span>
                    <div class="property-detail-tags-main-section">
                        <div class="property-detail-tags">
                            <h1>Hot Property</h1>
                        </div>
                        <div class="property-detail-tags">
                            <h1>For Rent</h1>
                        </div>
                    </div>
                    <!-- property-detail-tags-main-section -->
                </div>
                <!-- property-detail-heading-area -->
                <div class="property-detail-slider-section">
                    <div class="row" style="margin:0;">
                        <div class="col-md-8" style="padding:0;">
                            <div class="property-detail-gallery-area">

                                <div class="gallery">
                                    <div class="swiper-container gallery-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img
                                                    src="./assets/images/property-details/image1.webp" alt=""></div>
                                            <div class="swiper-slide"><img
                                                    src="./assets/images/property-details/image2.webp" alt=""></div>
                                            <div class="swiper-slide"><img
                                                    src="./assets/images/property-details/image3.webp" alt=""></div>
                                            <div class="swiper-slide"><img
                                                    src="./assets/images/property-details/image4.webp" alt=""></div>
                                            <div class="swiper-slide"><img
                                                    src="./assets/images/property-details/image5.webp" alt=""></div>

                                        </div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                    </div>

                                    <div class="swiper-container gallery-thumbs">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide item"><img
                                                    src="./assets/images/property-details/image1.webp" alt=""></div>
                                            <div class="swiper-slide item"><img
                                                    src="./assets/images/property-details/image2.webp" alt=""></div>
                                            <div class="swiper-slide item"><img
                                                    src="./assets/images/property-details/image3.webp" alt=""></div>
                                            <div class="swiper-slide item"><img
                                                    src="./assets/images/property-details/image4.webp" alt=""></div>
                                            <div class="swiper-slide item"><img
                                                    src="./assets/images/property-details/image5.webp" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- property-detail-gallery-area -->
                        </div>
                        <!-- col 8 -->
                        <div class="col-md-4" style="padding:0;">
                            <div class="property-details-admin-info">
                                <div class="property-details-admin-content-area">
                                    <div class="property-details-admin-img-area">
                                        <img src="./assets/images/property-details/admin.jpg" alt="">
                                    </div>
                                    <!-- property-details-admin-img-area -->
                                </div>
                                <!-- property-details-admin-content-area -->


                                <p class="admin-font-style">Admin</p>

                                <div class="property-details-admin-button-area">
                                    <button class="view-profile-btn" id="view-profile-btn" onClick="viewProfile()">View
                                        Profile</button>
                                    <button class="view-profile-btn" id="view-profile-btn"
                                        onClick="contactArea()">Contact Info</button>

                                    <!-- property-details-message-area -->
                                    <img src="./assets/images/property-details/msg-icon.png" alt="" onClick="sendMail()"
                                        style="cursor:pointer;">
                                </div>
                                <!-- property-details-admin-button-area -->

                                <div class="property-details-message-area" id="property-details-message-area">
                                    <div class="message-top-header">

                                        <div class="message-top-header-heading-area">
                                            <h1>Welcome Here!</h1>
                                            <h2>Email/Message to Dealer/Agency</h2>
                                        </div>
                                        <!-- message-top-header-heading-area -->
                                        <div class="message-top-header-img-area">
                                            <img src="./assets/images/property-details/Login-Image.png" alt="">
                                        </div>
                                        <!-- message-top-header-img-area -->


                                    </div>
                                    <!-- message-top-header -->


                                    <div class="message-logo-section-area">
                                        <div class="message-logo-image-section-area">
                                            <img src="./assets/images/property-details/logo-img.png" alt="">
                                        </div>
                                        <!-- message-logo-image-section-area -->
                                    </div>
                                    <!-- message-logo-section-area -->

                                    <div class="message-form-area">
                                        <label for="">Name</label><br>
                                        <input type="text" class="name" placeholder="Enter Name">
                                        <br>

                                        <label for="">Email</label><br>
                                        <input type="email" class="name" placeholder="Enter Email">
                                        <br>

                                        <label for="">Mobile</label><br>
                                        <input type="number" class="name" placeholder="Mobile #">
                                        <br>

                                        <button class="send-email">Send Email</button>
                                    </div>
                                    <!-- message-form-area -->

                                </div>
                                <!-- property-details-message-area -->


                                <div class="property-detail-contact-area" id="property-detail-contact-area">
                                    <h1>DETAILS</h1>

                                    <span><i class="fa fa-envelope" style="color: #00A8E3; margin-right: 10px;"></i>
                                        admin@land47.com</span><br>
                                    <span><i class="fa fa-phone" style="color:#00A8E3; margin-right: 10px;"></i> Not
                                        Provided</span>


                                </div>
                                <!-- property-detail-contact-area -->

                                <div class="property-details-admin-details-area"
                                    id="property-details-admin-details-area">
                                    <h1>DETAILS</h1>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="admin-property-details-area">
                                                <p>City:</p>
                                                <p>Bedrooms:</p>
                                                <p>Bathrooms:</p>
                                                <p>Garages:</p>
                                                <p>Property size:</p>
                                                <p>Year Built:</p>

                                            </div>
                                            <!-- admin-property-details-area -->
                                        </div>
                                        <!-- col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="admin-property-details-area">
                                                <p>Rawalpindi</p>
                                                <p>4</p>
                                                <p>5</p>
                                                <p>2</p>
                                                <p>1 Kanal</p>
                                                <p>2008</p>

                                            </div>
                                            <!-- admin-property-details-area -->
                                        </div>
                                        <!-- col-md-6 -->

                                    </div>
                                    <!-- row -->

                                    <h2>PKR 460,000/-</h2>
                                </div>
                                <!-- property-details-admin-details-area -->
                            </div>
                            <!-- property-details-admin-info -->
                        </div>
                        <!-- col 4 -->
                    </div>
                    <!-- row -->
                </div>
                <!-- property-detail-slider-section -->


                <div class="property-details-lower-section mt-5" id="vr">
                    <h1>VR IMAGES</h1>
                    <div class="row">

                        <div class="col-md-9">
                            <div class="property-detail-vr-images-section">


                                <iframe src="https://vr.land47.com/bahria-town/data" className="pt-2" frameborder="0"
                                    style="width: 100%;height: 400px; margin-bottom: 20px;"></iframe>



                                <div class="property-detail-features-section">
                                    <h1 style="margin-bottom:15px;">FEATURES</h1>

                                    <div class="row">
                                        <div class="col-md-4 mt-2">

                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Gas</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Electricity </span>
                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Security</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Kitchen</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Dining Room</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Security Staff</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Parking Space</span>

                                        </div>
                                        <!-- col-md-4 -->
                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Laundry Room</span>

                                        </div>
                                        <!-- col-md-4 -->
                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Store Room</span>

                                        </div>
                                        <!-- col-md-4 -->
                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Tv Lounge</span>

                                        </div>
                                        <!-- col-md-4 -->
                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Drawing Room</span>

                                        </div>
                                        <!-- col-md-4 -->
                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/check.png" alt="">
                                            <span class="features-style">Internet</span>

                                        </div>
                                        <!-- col-md-4 -->
                                    </div>
                                    <!-- row -->


                                </div>
                                <!-- property-detail-features-section -->

                                <div class="property-detail-additional-features-section mt-5">
                                    <h1 style="margin-bottom:15px;">ADDITIONAL FEATURES</h1>
                                    <div class="row">
                                        <div class="col-md-4 mt-2">

                                            <img src="./assets/images/property-details/star.png" alt="">
                                            <span class="features-style">Gas</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/star.png" alt="">
                                            <span class="features-style">Electricity </span>
                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/star.png" alt="">
                                            <span class="features-style">Security</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/star.png" alt="">
                                            <span class="features-style">Kitchen</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/star.png" alt="">
                                            <span class="features-style">Dining Room</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/star.png" alt="">
                                            <span class="features-style">Security Staff</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/star.png" alt="">
                                            <span class="features-style">Parking Space</span>

                                        </div>
                                        <!-- col-md-4 -->
                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/star.png" alt="">
                                            <span class="features-style">Laundry Room</span>

                                        </div>
                                        <!-- col-md-4 -->
                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/star.png" alt="">
                                            <span class="features-style">Store Room</span>

                                        </div>
                                        <!-- col-md-4 -->

                                    </div>
                                    <!-- row -->
                                </div>
                                <!-- property-detail-additional-features-section -->

                                <div class="property-detail-lower-description-area">
                                    <h1 style="margin-bottom:15px;">DESCRIPTION</h1>

                                    <p>
                                        1 Kanal House for Rent in F-7/1, islamabad
                                    </p>
                                    <p>
                                        A well designed 1 kanal house for rent in sector F-7/1, Islamabad. It comprises
                                        of 5 spacious bedrooms, 6 washrooms, TV lounge, drawing & dining room, store
                                        room, servant quarter and car parking space. Key lifestyle and convenience
                                        around this property includes beautiful parks including the Swiss Avenue and
                                        Jubilee park. F-7 has a very popular commercial area, the markaz, Rana market,
                                        Gol Market and cherry on top. The Safa gold mall where you can find all the
                                        brands. F-7 is also famous for its restaurants and food outlets including Yum
                                        Chinese and Thai restaurant, Howdy, Ginyaki and alot more. . . .
                                    </p>

                                    <button class="see-more-btn">
                                        See More
                                    </button>
                                </div>
                                <!-- property-detail-lower-description-area -->

                                <div class="property-details-key-features">
                                    <h2 style="margin-bottom:15px;">KEY FEATURES</h2>
                                    <div class="row">
                                        <div class="col-md-4 mt-2">

                                            <img src="./assets/images/property-details/circle.png" alt="">
                                            <span class="features-style">Kitchen</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/circle.png" alt="">
                                            <span class="features-style">Gas</span>
                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/circle.png" alt="">
                                            <span class="features-style">Tv Lounge</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/circle.png" alt="">
                                            <span class="features-style">Parking Space</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/circle.png" alt="">
                                            <span class="features-style">Kitchen</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/circle.png" alt="">
                                            <span class="features-style">Tv Lounge</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/circle.png" alt="">
                                            <span class="features-style">Tv Lounge</span>

                                        </div>
                                        <!-- col-md-4 -->
                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/circle.png" alt="">
                                            <span class="features-style">Gas</span>

                                        </div>
                                        <!-- col-md-4 -->
                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/circle.png" alt="">
                                            <span class="features-style">Parking Space</span>

                                        </div>
                                        <!-- col-md-4 -->

                                        <div class="col-md-4 mt-2">
                                            <img src="./assets/images/property-details/circle.png" alt="">
                                            <span class="features-style">Kitchen</span>

                                        </div>
                                        <!-- col-md-4 -->

                                    </div>
                                    <!-- row -->

                                </div>
                                <!-- property-details-key-features -->

                                <div class="property-detail-map-area">
                                    <h1 style="margin-bottom:15px;">LOCATION</h1>

                                    <div class="property-detail-map-loc-section">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d425292.21379367803!2d72.80591983020854!3d33.615800395718644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd07891722f%3A0x6059515c3bdb02b6!2sIslamabad%2C%20Islamabad%20Capital%20Territory!5e0!3m2!1sen!2s!4v1646982528886!5m2!1sen!2s"
                                            width="873" height="459" style="border:0; border-radius:5px;"
                                            allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                    <!-- property-detail-map-loc-section -->

                                </div>
                                <!-- property-detail-map-area -->

                                <div class="property-detail-video-section" id="videos">
                                    <div class="property-detail-video-area">
                                        <h1 style="margin-bottom:15px;">VIDEOS</h1>
                                        <iframe width="873" height="375" src="https://www.youtube.com/embed/zuhkIKpxcfU"
                                            title="YouTube video player" style="border-radius: 4px;" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <!-- property-detail-video-area -->
                                </div>
                                <!-- property-detail-video-section -->

                            </div>
                            <!-- col-md-9 -->

                        </div>
                        <!-- property-details-lower-section -->

                        <div class="col-md-3">
                            <div class="property-detail-ad-section">

                                <img src="./assets/images/property-details/ad.png" alt="">

                                <img src="./assets/images/property-details/ad.png" alt="">

                                <img src="./assets/images/property-details/ad.png" alt="">

                                <img src="./assets/images/property-details/ad.png" alt="">

                            </div>
                            <!-- property-detail-ad-section -->
                        </div>
                        <!-- col-md-3 -->
                    </div>
                    <!-- row -->


                </div>
                <!-- property-detail-vr-images-section -->


                <div class="featured-properties-section recent-properties-section mt-5">
                    <div class="inner-sec-container">
                        <div class="featured-properties-inner-parent">
                            <div class="all-heading-wrapper ">
                                <h2 class="section-heading-home mt-5 mb-5">
                                    Related properties
                                </h2>
                            </div>
                            <!-- heading wrapper -->




                        </div>
                        <!-- tabs-wrapper -->
                        <div class="tabs-content-wrapper">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home2" role="tabpanel"
                                    aria-labelledby="pills-home2-tab">
                                    <div class="screenshot_slider2 owl-carousel">
                                        <div class="item">
                                            <!-- <img src="https://i.ibb.co/7nVfZR8/screen2.jpg" alt="" title=""> -->
                                            <div class="featured-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/featured-card1.jpg" alt="">
                                                    <!-- <img src="assets/images/card-360.png" class="deg-360-card-img"  alt=""> -->
                                                    <div class="img-buttons-wrapper">
                                                        <button class="photos-btn">
                                                            <i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp;
                                                            Photos
                                                        </button>
                                                        <button class="photos-btn">
                                                            <i class="	fa fa-caret-square-o-right"
                                                                aria-hidden="true"></i> &nbsp; Videos
                                                        </button>
                                                        <button class="vr-btn">
                                                            <i class="	fa fa-caret-square-o-right"
                                                                aria-hidden="true"></i> &nbsp; VR
                                                        </button>

                                                    </div>
                                                    <!-- img-buttons-wrapper -->
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h3>
                                                        Bahria Town
                                                    </h3>
                                                    <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                    <div class="price-and-btn-area">
                                                        <p class="price">PKR 4,60,000/-</p>
                                                        <button>
                                                            View Details
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- featured-card-wrapper -->
                                        </div>
                                        <!-- item -->

                                        <div class="item">
                                            <!-- <img src="https://i.ibb.co/7nVfZR8/screen2.jpg" alt="" title=""> -->
                                            <div class="featured-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/card2.jpg" alt="">
                                                    <div class="img-buttons-wrapper">
                                                        <button class="photos-btn">
                                                            <i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp;
                                                            Photos
                                                        </button>
                                                        <button class="photos-btn">
                                                            <i class="	fa fa-caret-square-o-right"
                                                                aria-hidden="true"></i> &nbsp; Videos
                                                        </button>
                                                        <button class="vr-btn">
                                                            <i class="	fa fa-caret-square-o-right"
                                                                aria-hidden="true"></i> &nbsp; VR
                                                        </button>

                                                    </div>
                                                    <!-- img-buttons-wrapper -->
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h3>
                                                        Pakistan Town
                                                    </h3>
                                                    <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                    <div class="price-and-btn-area">
                                                        <p class="price">PKR 4,60,000/-</p>
                                                        <button>
                                                            View Details
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- featured-card-wrapper -->
                                        </div>
                                        <!-- item -->

                                        <div class="item">
                                            <!-- <img src="https://i.ibb.co/7nVfZR8/screen2.jpg" alt="" title=""> -->
                                            <div class="featured-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/featured-card2.jpg" alt="">
                                                    <div class="img-buttons-wrapper">
                                                        <button class="photos-btn">
                                                            <i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp;
                                                            Photos
                                                        </button>
                                                        <button class="photos-btn">
                                                            <i class="	fa fa-caret-square-o-right"
                                                                aria-hidden="true"></i> &nbsp; Videos
                                                        </button>
                                                        <button class="vr-btn">
                                                            <i class="	fa fa-caret-square-o-right"
                                                                aria-hidden="true"></i> &nbsp; VR
                                                        </button>

                                                    </div>
                                                    <!-- img-buttons-wrapper -->
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h3>
                                                        Faisal Town
                                                    </h3>
                                                    <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                    <div class="price-and-btn-area">
                                                        <p class="price">PKR 4,60,000/-</p>
                                                        <button>
                                                            View Details
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- featured-card-wrapper -->
                                        </div>
                                        <!-- item -->

                                        <div class="item">
                                            <!-- <img src="https://i.ibb.co/7nVfZR8/screen2.jpg" alt="" title=""> -->
                                            <div class="featured-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/bahria-town.jpg" alt="">
                                                    <div class="img-buttons-wrapper">
                                                        <button class="photos-btn">
                                                            <i class="fa fa-picture-o" aria-hidden="true"></i> &nbsp;
                                                            Photos
                                                        </button>
                                                        <button class="photos-btn">
                                                            <i class="	fa fa-caret-square-o-right"
                                                                aria-hidden="true"></i> &nbsp; Videos
                                                        </button>
                                                        <button class="vr-btn">
                                                            <i class="	fa fa-caret-square-o-right"
                                                                aria-hidden="true"></i> &nbsp; VR
                                                        </button>

                                                    </div>
                                                    <!-- img-buttons-wrapper -->
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h3>
                                                        Ghroi Town
                                                    </h3>
                                                    <p> <i class="fas fa-map-marker-alt"></i> Rawalpindi</p>
                                                    <div class="price-and-btn-area">
                                                        <p class="price">PKR 4,60,000/-</p>
                                                        <button>
                                                            View Details
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- featured-card-wrapper -->
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- tabs-content-wrapper -->
                        </div>
                        <!-- featured-properties-tabs-main-wraper -->
                    </div>
                    <!-- featured-properties-inner-parent -->
                </div>
                <!-- inner section container -->
            </div>
            <!-- featured-properties-section -->

        </div>
        <!-- property-detail-inner-parent -->
    </div>
    <!-- inner section container -->
</div>
<!-- <div class="property-detail-main-section -->
</div>
<!-- property-detail-page-wrapper -->







<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script>
//メインスライド
var slider = new Swiper('.gallery-slider', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    loopedSlides: 6, //スライドの枚数と同じ値を指定
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

//サムネイルスライド
var thumbs = new Swiper('.gallery-thumbs', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
});

//3系
// slider.params.control = thumbs;
// thumbs.params.control = slider;

//4系～
slider.controller.control = thumbs;
thumbs.controller.control = slider;
</script>
<script>
$(document).ready(function() {

    $(".site-nav").addClass("black-nav");

});
</script>

<script>
var thumbnails = document.getElementById("thumbnails")
var imgs = thumbnails.getElementsByTagName("img")
var main = document.getElementById("main")
var counter = 0;

for (let i = 0; i < imgs.length; i++) {
    let img = imgs[i]


    img.addEventListener("click", function() {
        main.src = this.src
    })

}
</script>

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
</script>
<script>
function sendMail() {
    document.getElementById("property-details-message-area").style.display = "block";
    document.getElementById("property-details-admin-details-area").style.display = "none";
    document.getElementById("property-detail-contact-area").style.display = "none";

}

function viewProfile() {
    document.getElementById("property-details-message-area").style.display = "none";
    document.getElementById("property-details-admin-details-area").style.display = "block";
    document.getElementById("property-detail-contact-area").style.display = "none";
}

function contactArea() {
    document.getElementById("property-details-message-area").style.display = "none";
    document.getElementById("property-details-admin-details-area").style.display = "none";
    document.getElementById("property-detail-contact-area").style.display = "block";
}
</script>

<?php include 'incl/footer.php'; ?>