<?php include 'incl/header.php'; ?>


<style>
<?php include 'assets/css/pages/blog-listing.css'?>.site-nav {
    position: static;
    background-color: rgba(0, 0, 0, 1);
}
</style>

<div class="blog-listing-page-wrapper">
    <div class="blog-listing-main-section">
        <div class="inner-sec-container">
            <div class="blog-listing-inner-parent mt-3">
                <div class="all-heading-wrapper mb-5">
                    <h2 class="section-heading-home">
                        LAND47 BLOGS
                    </h2>
                </div>
                <!-- all-heading-wrapper -->

                <!-- ******************************* Grand Launch section Start -->

                <div class="grand-launch-section-area">
                    <div class="grand-launch-small-section" id="grand-image">
                        <img src="./assets/images/grand-launch.webp" alt="" id="grand-small-image">
                        <i class="fa fa-greater-than up-arrow" onclick="grandlaunch();" id="grand-image-click"></i>
                        <i class="fa fa-greater-than down-arrow" onclick="grandlaunch2();" id="grand-image2-click"></i>
                    </div>
                    <!-- grand-launch-small-section -->
                </div>
                <!-- grand-launch-section-area -->
                <!-- ******************************* Grand Launch section End-->


                <!-- ******************************* Cookies section Start -->
                <div class="cookies-section-area" id="cookies-section-area">
                    <div class="cookies-section-top-area">
                        <h1 class="cookies-heading">Allow Cookies</h1>
                        <img src="./assets/images/close.png" alt="" onclick="crosscookies();">
                    </div>
                    <!-- cookies-section-top-area -->
                    <div class="cookies-section-content-area">
                        <p class="cookies-detail">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate
                            tempore iste vitae
                            blanditiis dolores rerum veritatis commodi voluptates debitis quibusdam.</p>

                        <button class="cookies-btn" onclick="allowcookies();">Accept Cookies</button>
                    </div>
                    <!-- cookies-section-content-area -->
                </div>
                <!-- cookies-section-area -->

                <!-- ******************************* Cookies section End -->

                <div class="blog-listing-content-section">
                    <div class="tabs-wrapper">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-english-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-english" type="button" role="tab"
                                    aria-controls="pills-english" aria-selected="true">English</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-urdu-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-urdu" type="button" role="tab" aria-controls="pills-urdu"
                                    aria-selected="false">Urdu</button>
                            </li>
                        </ul>
                    </div>
                    <!-- tabs-wrapper -->

                    <div class="tabs-content-wrapper mt-5">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-english" role="tabpanel"
                                aria-labelledby="pills-english-tab">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-4">
                                        <a href="blog-detail.php" style="color:#000 ">
                                            <div class="item">
                                                <div class="blog-card-wrapper">
                                                    <div class="img-area">
                                                        <img src="assets/images/blog1.png" alt="">
                                                    </div>
                                                    <!-- img-area -->
                                                    <div class="content-area">
                                                        <h2>Meet our experts covering Commercial Virtual Tours!</h2>
                                                        <p class="post-date">Posted On December 6,2021</p>
                                                        <p>We have team of professional covering virtual tour around
                                                            Pakistan, You can double value of your properties by giving
                                                            virtual view of your home, of your society and of your
                                                            commercial.</p>
                                                        <a href="blog-detail.php">
                                                            <button>
                                                                Read More
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <!-- content-area -->
                                                </div>
                                                <!-- blog-card-wrapper -->
                                            </div>
                                            <!-- item -->
                                        </a>
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->

                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog2.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h2>How to make your own VR Tour!</h2>
                                                    <p class="post-date">Posted On December 6,2021</p>
                                                    <p>We have team of professional covering virtual tour around
                                                        Pakistan, You can double value of your properties by giving
                                                        virtual view of your home, of your society and of your
                                                        commercial.</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            Read More
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->

                                    <div class="col-lg-3 col-md-6 mb-4">
                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog3.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h2>Meet our experts covering Commercial Virtual Tours!</h2>
                                                    <p class="post-date">Posted On December 6,2021</p>
                                                    <p>We have team of professional covering virtual tour around
                                                        Pakistan, You can double value of your properties by giving
                                                        virtual view of your home, of your society and of your
                                                        commercial.</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            Read More
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->

                                    <div class="col-lg-3 col-md-6 mb-4">
                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog4.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h2>Meet our experts covering Commercial Virtual Tours!</h2>
                                                    <p class="post-date">Posted On December 6,2021</p>
                                                    <p>We have team of professional covering virtual tour around
                                                        Pakistan, You can double value of your properties by giving
                                                        virtual view of your home, of your society and of your
                                                        commercial.</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            Read More
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->

                                    <div class="col-lg-3 col-md-6 mb-4">
                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog1.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h2>Meet our experts covering Commercial Virtual Tours!</h2>
                                                    <p class="post-date">Posted On December 6,2021</p>
                                                    <p>We have team of professional covering virtual tour around
                                                        Pakistan, You can double value of your properties by giving
                                                        virtual view of your home, of your society and of your
                                                        commercial.</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            Read More
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->


                                    <div class="col-lg-3 col-md-6 mb-4">
                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog2.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h2>Meet our experts covering Commercial Virtual Tours!</h2>
                                                    <p class="post-date">Posted On December 6,2021</p>
                                                    <p>We have team of professional covering virtual tour around
                                                        Pakistan, You can double value of your properties by giving
                                                        virtual view of your home, of your society and of your
                                                        commercial.</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            Read More
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->



                                    <div class="col-lg-3 col-md-6 mb-4">
                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog3.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h2>Meet our experts covering Commercial Virtual Tours!</h2>
                                                    <p class="post-date">Posted On December 6,2021</p>
                                                    <p>We have team of professional covering virtual tour around
                                                        Pakistan, You can double value of your properties by giving
                                                        virtual view of your home, of your society and of your
                                                        commercial.</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            Read More
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->



                                    <div class="col-lg-3 col-md-6 mb-4">
                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog4.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area">
                                                    <h2>Meet our experts covering Commercial Virtual Tours!</h2>
                                                    <p class="post-date">Posted On December 6,2021</p>
                                                    <p>We have team of professional covering virtual tour around
                                                        Pakistan, You can double value of your properties by giving
                                                        virtual view of your home, of your society and of your
                                                        commercial.</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            Read More
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->
                                </div>
                                <!-- row -->

                            </div>


                            <div class="tab-pane fade show" id="pills-urdu" role="tabpanel"
                                aria-labelledby="pills-urdu-tab">



                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog1.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area urdu-alignment" dir="rtl">
                                                    <h2 style="text-align:right!important;">اپنا VR ٹور کیسے بنائیں
                                                    </h2>
                                                    <p class="post-date">دسمبر 6,2021 کو پوسٹ کیا گیا۔
                                                    </p>
                                                    <p>ہمارے پاس پاکستان بھر میں ورچوئل ٹور کو کور کرنے والی پیشہ ور ٹیم
                                                        ہے، آپ اپنے گھر، اپنے معاشرے اور اپنے کمرشل کا ورچوئل ویو دے کر
                                                        اپنی پراپرٹیز کی قیمت کو دوگنا کر سکتے ہیں۔
                                                        .</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            مزید پڑھیں
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->

                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog2.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area urdu-alignment" dir="rtl">
                                                    <h2 style="text-align:right!important;">اپنا VR ٹور کیسے بنائیں
                                                    </h2>
                                                    <p class="post-date">دسمبر 6,2021 کو پوسٹ کیا گیا۔
                                                    </p>
                                                    <p>ہمارے پاس پاکستان بھر میں ورچوئل ٹور کو کور کرنے والی پیشہ ور ٹیم
                                                        ہے، آپ اپنے گھر، اپنے معاشرے اور اپنے کمرشل کا ورچوئل ویو دے کر
                                                        اپنی پراپرٹیز کی قیمت کو دوگنا کر سکتے ہیں۔
                                                        .</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            مزید پڑھیں
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->

                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog3.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area urdu-alignment" dir="rtl">
                                                    <h2 style="text-align:right!important;">اپنا VR ٹور کیسے بنائیں
                                                    </h2>
                                                    <p class="post-date">دسمبر 6,2021 کو پوسٹ کیا گیا۔
                                                    </p>
                                                    <p>ہمارے پاس پاکستان بھر میں ورچوئل ٹور کو کور کرنے والی پیشہ ور ٹیم
                                                        ہے، آپ اپنے گھر، اپنے معاشرے اور اپنے کمرشل کا ورچوئل ویو دے کر
                                                        اپنی پراپرٹیز کی قیمت کو دوگنا کر سکتے ہیں۔
                                                        .</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            مزید پڑھیں
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->

                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog4.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area urdu-alignment" dir="rtl">
                                                    <h2 style="text-align:right!important;">اپنا VR ٹور کیسے بنائیں
                                                    </h2>
                                                    <p class="post-date">دسمبر 6,2021 کو پوسٹ کیا گیا۔
                                                    </p>
                                                    <p>ہمارے پاس پاکستان بھر میں ورچوئل ٹور کو کور کرنے والی پیشہ ور ٹیم
                                                        ہے، آپ اپنے گھر، اپنے معاشرے اور اپنے کمرشل کا ورچوئل ویو دے کر
                                                        اپنی پراپرٹیز کی قیمت کو دوگنا کر سکتے ہیں۔
                                                        .</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            مزید پڑھیں
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->


                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog1.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area urdu-alignment" dir="rtl">
                                                    <h2 style="text-align:right!important;">اپنا VR ٹور کیسے بنائیں
                                                    </h2>
                                                    <p class="post-date">دسمبر 6,2021 کو پوسٹ کیا گیا۔
                                                    </p>
                                                    <p>ہمارے پاس پاکستان بھر میں ورچوئل ٹور کو کور کرنے والی پیشہ ور ٹیم
                                                        ہے، آپ اپنے گھر، اپنے معاشرے اور اپنے کمرشل کا ورچوئل ویو دے کر
                                                        اپنی پراپرٹیز کی قیمت کو دوگنا کر سکتے ہیں۔
                                                        .</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            مزید پڑھیں
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->

                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog2.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area urdu-alignment" dir="rtl">
                                                    <h2 style="text-align:right!important;">اپنا VR ٹور کیسے بنائیں
                                                    </h2>
                                                    <p class="post-date">دسمبر 6,2021 کو پوسٹ کیا گیا۔
                                                    </p>
                                                    <p>ہمارے پاس پاکستان بھر میں ورچوئل ٹور کو کور کرنے والی پیشہ ور ٹیم
                                                        ہے، آپ اپنے گھر، اپنے معاشرے اور اپنے کمرشل کا ورچوئل ویو دے کر
                                                        اپنی پراپرٹیز کی قیمت کو دوگنا کر سکتے ہیں۔
                                                        .</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            مزید پڑھیں
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->



                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog3.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area urdu-alignment" dir="rtl">
                                                    <h2 style="text-align:right!important;">اپنا VR ٹور کیسے بنائیں
                                                    </h2>
                                                    <p class="post-date">دسمبر 6,2021 کو پوسٹ کیا گیا۔
                                                    </p>
                                                    <p>ہمارے پاس پاکستان بھر میں ورچوئل ٹور کو کور کرنے والی پیشہ ور ٹیم
                                                        ہے، آپ اپنے گھر، اپنے معاشرے اور اپنے کمرشل کا ورچوئل ویو دے کر
                                                        اپنی پراپرٹیز کی قیمت کو دوگنا کر سکتے ہیں۔
                                                        .</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            مزید پڑھیں
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->

                                    <div class="col-lg-3 col-md-6 mb-4">

                                        <div class="item">
                                            <div class="blog-card-wrapper">
                                                <div class="img-area">
                                                    <img src="assets/images/blog4.png" alt="">
                                                </div>
                                                <!-- img-area -->
                                                <div class="content-area urdu-alignment" dir="rtl">
                                                    <h2 style="text-align:right!important;">اپنا VR ٹور کیسے بنائیں
                                                    </h2>
                                                    <p class="post-date">دسمبر 6,2021 کو پوسٹ کیا گیا۔
                                                    </p>
                                                    <p>ہمارے پاس پاکستان بھر میں ورچوئل ٹور کو کور کرنے والی پیشہ ور ٹیم
                                                        ہے، آپ اپنے گھر، اپنے معاشرے اور اپنے کمرشل کا ورچوئل ویو دے کر
                                                        اپنی پراپرٹیز کی قیمت کو دوگنا کر سکتے ہیں۔
                                                        .</p>
                                                    <a href="blog-detail.php">
                                                        <button>
                                                            مزید پڑھیں
                                                        </button>
                                                    </a>
                                                </div>
                                                <!-- content-area -->
                                            </div>
                                            <!-- blog-card-wrapper -->
                                        </div>
                                        <!-- item -->
                                    </div>
                                    <!-- col-lg-3 col-md-6 mb-4 -->

                                </div>
                                <!-- row -->

                            </div>
                        </div>

                    </div>
                    <!-- tabs-content-wrapper -->

                </div>
                <!-- blog-listing-content-section  -->
            </div>
            <!-- blog-listing-inner-parent -->
        </div>
        <!-- inner-sec-container -->
    </div>
    <!-- blog-listing-main-section -->
</div>
<!--blog-listing-page-wrapper  -->

<?php include 'components/instant-search.php'; ?>

<script>
function grandlaunch() {
    document.getElementById("grand-image").style.backgroundImage = "url('assets/images/grand-launch2.webp')";
    document.getElementById("grand-image").style.height = "300px";
    document.getElementById("grand-small-image").style.display = "none";
    document.getElementById("grand-image-click").style.display = "none";
    document.getElementById("grand-image2-click").style.display = "block";


}

function grandlaunch2() {
    document.getElementById("grand-image").style.backgroundImage = "none";
    document.getElementById("grand-image").style.height = "auto";
    document.getElementById("grand-small-image").style.display = "block";
    document.getElementById("grand-image-click").style.display = "block";
    document.getElementById("grand-image2-click").style.display = "none";


}
</script>

<script>
function allowcookies() {
    document.getElementById("cookies-section-area").style.display = "none";
}

function crosscookies() {
    document.getElementById("cookies-section-area").style.display = "none";
}
</script>


<?php include 'incl/footer.php'; ?>