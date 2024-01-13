<style>
    @media all and (max-width:575px) and (min-width:320px) {
        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, 0.9);
            margin-left: 40px !important;

        }
    }
    @media all and (max-width:767px) and (min-width:576px) {
        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, 0.9);
            margin-left: 40px !important;

        }
    }
        @media all and (max-width:991px) and (min-width:768px) {
            .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, 0.9);
            margin-left: 40px !important;

        }
        
    }
    .footer-section{
            display:none;
        }
        .navbar-light .navbar-brand {
    margin-left: 50px;
}
.dashboard-main-section #sidebarMenu{
    z-index: 100!important;
}
</style>
<div class="header"></div>
<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
<label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
</label>
<div id="sidebarMenu">
    <div class="user-img-area">
        <div class="user-img-content-div">
            <div class="user-circle-img">
                <img src="assets/images/dashboard/avatar.png" alt="">
            </div>
            <!-- user-circle-img     -->
            <h5> Tabish Irfan</h5>
            <img src="assets/images/verified.jpg" style="width:32px;margin:5px auto;display:block" alt="">
        </div>
        <!-- user-img-content-div -->
    </div>
    <!-- user imge area -->
    <ul class="sidebarMenuInner">
        <li><a href="user-dashboard.php"><i class="nav-icon fas fa-users"></i>&nbsp; Profile</a></li>
        <li><a href="myproperties.php"> <i class="fas fa-building"></i> &nbsp;My Properties</a></li>
        <li><a href="favourites.php"> <i class="nav-icon fas fa-heart"></i> &nbsp; Favourites</a></li>
        <li><a href="submit-property.php"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Submit Properties</a></li>
        <li><a href="foree-service-form.php"><i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Foree Services</a></li>
        <li><a href="login.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>
    </ul>
</div>


<?php include 'instant-search.php'; ?>

<script>
    $(window).scroll(function() {

        // Write code here
        var scroll = $(window).scrollTop();
        if (scroll >= 0) {
            $("#nav-inner-container").addClass("sticky");

            $(".arrow-up-icon").addClass("show-arrow-up-icon");

        } else {
            $("#nav-inner-container").removeClass("sticky");
            $(".arrow-up-icon").removeClass("show-arrow-up-icon");

        }
    });

</script>
