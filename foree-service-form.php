<?php include 'incl/header.php'; ?>
<style>
<?php include 'assets/css/pages/user-dashboard.css'?><?php include 'assets/css/pages/foree-service-form.css'?>.site-nav {
    background-color: black;
    position: static;
}
</style>
<div class="dashboard-main-section">
    <?php include './components/dashboard-sidebar.php'; ?>
    <div class="main-dashboard-content-area">
        <div class="all-heading-wrapper mb-5">
            <h2 class="section-heading-home">
                Foree Services
            </h2>
        </div>
        <!-- heading wrapper -->
        <div class="foree-form-section">
        <form action="">
        <div class="avatar-wrapper">
                <img class="profile-pic" src="" />
                <div class="upload-button">
                    <img src="assets/images/dashboard/user.svg" class="avatar-img" id="avatar-img" />
                </div>
                <input class="file-upload" type="file" accept="image/*" />
            </div>
            <!-- upload pic araea -->

                <div class="row mt-5">
                    <div class="col-lg-6 mb-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" required="required">
                        </div>
                    </div>
                    <!-- col 6 -->
                    <div class="col-lg-6 mb-4">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email"  required="required">
                        </div>
                    </div>
                    <!-- col 6 -->
                    <div class="col-lg-6 mb-4">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Contact Number" required="required">
                        </div>
                    </div>
                    <!-- col 6 -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Location" required="required">
                        </div>
                    </div>
                    <!-- col 6 -->

                    <div class="col-lg-12 mb-4">
                        <div class="form-group">
                            <select name="" id="" class="form-control" required="required">
                                <option value="selected">Register as</option>
                                <option value="architect">Architect</option>
                                <option value="interior-designer">Interior Designer</option>
                                <option value="builder-supplier">Builder / Supplier</option>
                                <option value="evaluator">Evaluator</option>
                                <option value="bank-home-finance">Bank Home Finance</option>
                                <option value="home-insurance">Home Insurance</option>
                            </select>
                        </div>
                    </div>
                    <!-- col 12 -->

                    <div class="col-lg-12 mb-4">
                        <div class="form-group">
                   <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Description (Optional)"></textarea>
                        </div>
                    </div>
                    <!-- col 12 -->
                </div>
                <!-- row -->

                    <input type="submit" class="foree-form-sbumit-btn" value="Submit">
        </form>

        </div>
        <!-- foree-form-section -->
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