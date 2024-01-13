<?php include 'incl/header.php'; ?>
<style>
<?php include 'assets/css/pages/login.css'?>.site-nav {
    background-color: black;
    position: static;
}
.forgot-pass-wrapper{
    width:100%;
    height:auto;
}
</style>

<div class="login-page-wrapper">
    <div class="login-section">
        <div class="inner-sec-container">
            <div class="login-inner-parent">
                <div class="row reverseinmob">
                    <div class="col-lg-6">
                        <div class="login-illustration-col-wrapper">
                            <img src="assets/images/login/login-img.svg" alt="">
                        </div>
                        <!-- login-illustration-col-wrapper -->
                    </div>
                    <!-- col 6 -->
                    <div class="col-lg-6">
                        <div class="login-form-wrapper" style="display:flex;align-items:center;height:100%;">
                        <div class="forgot-pass-wrapper">
                            <h2>Enter Your New Password</h2>
                            
                            <br>
                          
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                                    aria-labelledby="pills-login-tab">
                                    <div class="login-form-area">
                                        <form action="">
                                            <input type="password" placeholder="New Password"
                                                class="login-inputs froms-control">
                                            <input type="password" placeholder="Confirm New Password" class="login-inputs">
                                            <a href="user-dashboard.php"> <input type="button" value="Submit"
                                                    class="login-btn"></a>
                                            
                                        </form>
                                    </div>
                                    <!-- login-form-area -->
                                </div>
</div>
                            </div>
                        </div>
                        <!-- login-form-wrapper  -->
                    </div>
                    <!-- col 6 -->
                </div>
                <!-- row -->
            </div>
            <!-- login-inner-parent -->
        </div>
        <!-- inner sec container -->
    </div>
    <!-- login section -->
</div>
<!-- login-page  -->


<?php include 'incl/footer.php'; ?>