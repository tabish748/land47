<?php include 'incl/header.php'; ?>
<style>
<?php include 'assets/css/pages/login.css'?>.site-nav {
    background-color: black;
    position: static;
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
                        <div class="login-form-wrapper">
                            <h2>Get more things done with loggin platform.</h2>
                            <p>Access to the most powerfull tool in the entire design and web industry.</p>
                            <br>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-login-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-login" type="button" role="tab"
                                        aria-controls="pills-login" aria-selected="true">Login</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-register-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-register" type="button" role="tab"
                                        aria-controls="pills-register" aria-selected="false">Register</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                                    aria-labelledby="pills-login-tab">
                                    <div class="login-form-area">
                                        <form action="">
                                            <input type="email" placeholder="Email Address"
                                                class="login-inputs froms-control">
                                            <input type="password" placeholder="Password" class="login-inputs">
                                            <a href="user-dashboard.php"> <input type="button" value="Login"
                                                    class="login-btn"></a>
                                            <a href="#"
                                                style="color:black;text-decoration:none;font-weight:bold;margin-left:10px">Forgot
                                                Password?</a>
                                            <p style="font-size:16px;margin-top:15px;">or login with
                                                &nbsp;&nbsp;&nbsp;<a href="#" class="loginlink"><b>Facebook</b></a>
                                                &nbsp; <a href="#" class="loginlink"><b>Google</b></a>&nbsp; <a href="#"
                                                    class="loginlink"><b>Linkedin</b></a></p>
                                        </form>
                                    </div>
                                    <!-- login-form-area -->
                                </div>
                                <div class="tab-pane fade" id="pills-register" role="tabpanel"
                                    aria-labelledby="pills-register-tab">
                                    <div class="login-form-area">
                                        <form action="">
                                            <input type="text" placeholder="Full Name"
                                                class="login-inputs froms-control">
                                            <input type="email" placeholder="Email Address"
                                                class="login-inputs froms-control">
                                            <input type="password" placeholder="Password" class="login-inputs">
                                            <input type="submit" value="Register" class="login-btn">

                                            <p style="font-size:16px;margin-top:15px;">or register with
                                                &nbsp;&nbsp;&nbsp;<a href="#" class="loginlink"><b>Facebook</b></a>
                                                &nbsp; <a href="#" class="loginlink"><b>Google</b></a>&nbsp; <a href="#"
                                                    class="loginlink"><b>Linkedin</b></a></p>
                                        </form>
                                    </div>
                                    <!-- login-form-area -->
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