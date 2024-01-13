
<!-- **********************************searching section -->

<div class="new-searching-section" id="new-searching-section">
    <img src="assets/images/crossed.png" class="crossed-icon" alt="" onclick="hideSearchWrapper();">
    <div class="inner-sec-container">
        <div class="searching-inner-parent">
            <div class="home-inner-container">
                <div class="home-inner-wrapper" style="height:fit-content!important">


                    <script>
                    function srchform() {
                        $('.bgimg').addClass('blackwhite');
                        $('.srch-bar-main-wrapper').addClass('zoom');

                    }
                    </script>
                    <?php include 'components/main-search.php'; ?>




                </div>
                <!-- home-inner-wrapper -->
            </div>
            <!-- home-inner-container -->
        </div>
        <!-- searching-inner-parent -->
    </div>
</div>
<!-- new-searching-section -->

<div class="sticky-search-icon-area shadow" id="home-instant-srch-icon" onclick="showSearchWrapper();">
    <img src="assets/images/foree/srch.jpg" id="cross-icn" alt="">
</div>
<!-- sticky-search-icon-area -->

<script>
    
function hideSearchWrapper() {

document.getElementById("new-searching-section").style.display = "none";

}

function showSearchWrapper() {

$("#srch-bar-main-wrapper").addClass("animate__animated animate__bounceInUp ");
document.getElementById("new-searching-section").style.display = "block";


}
</script>