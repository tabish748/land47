<?php include 'incl/header.php'; ?>
<style>
<?php include 'assets/css/pages/user-dashboard.css'?>.site-nav {
    background-color: black;
    position: static;
}
</style>

<div class="dashboard-main-section">
    <?php include './components/dashboard-sidebar.php'; ?>
    <div class="main-dashboard-content-area">
        <div class="profile-update-section">
            <div class="profile-inner-parent">
                <div class="form-area">
                    <h2>Account Details</h2>
                    <form action="">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" src="" />
                            <div class="upload-button">
                                <img src="assets/images/dashboard/user.svg" class="avatar-img" id="avatar-img" />
                            </div>
                            <input class="file-upload" type="file" accept="image/*" />
                        </div>
                        <!-- upload pic araea -->
                        <div class="input-form-wrapper">
                            <input type="text" class="input-boxes" placeholder="Name">
                            <input type="email" class="input-boxes" placeholder="Email">
                            <input type="numberb" class="input-boxes" placeholder="Phone">
                            <input type="submit" value="Update Profile" class="login-btn">
                        </div>
                    </form>
                    <h2 class="mt-5">Update Password</h2>
                    <form action="" class="mt-4">

                        <div class="input-form-wrapper">
                            <input type="text" class="input-boxes" placeholder="Cuurent Password">
                            <input type="email" class="input-boxes" placeholder="New Password">
                            <input type="numberb" class="input-boxes" placeholder="Confirm New Password">
                            <input type="submit" value="Update Password" class="login-btn">
                        </div>

                    </form>
                </div>
                <!-- form-area -->
            </div>
            <!-- profile-inner-parent -->
        </div>
        <!-- profile-update-section -->
    </div>
    <!-- content area -->
</div>
<!-- section -->



<script>
$(document).ready(function() {

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.profile-pic').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".file-upload").on('change', function() {
        readURL(this);
    });

    $(".upload-button").on('click', function() {
        $(".file-upload").click();
        $("#avatar-img").hide();
    });
});
</script>
<?php include 'incl/footer.php'; ?>