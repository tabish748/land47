<?php include 'incl/header.php'; ?>
<style>
<?php include 'assets/css/pages/user-dashboard.css'?><?php include 'assets/css/pages/favourites.css'?>.site-nav {
    background-color: black;
    position: static;
}
</style>

<div class="dashboard-main-section">
    <?php include './components/dashboard-sidebar.php'; ?>
    <div class="main-dashboard-content-area">
        <div class="all-heading-wrapper mb-5">
            <h2 class="section-heading-home">
                MY PROPERTIES
            </h2>
        </div>
        <!-- heading wrapper -->
        <div class="favourites-table-wrapper">
            <div class="review-and-content-table-section mt-5">
                <div class="table-wrapper">
                    <table class="table">
                        <thead class="table-heading">
                            <tr>
                                <th scope="col">IMAGE</th>
                                <th scope="col">TITLE</th>
                                <th scope="col">PUBLISHED</th>
                                <th scope="col">VIEWS</th>
                                <th scope="col">ACTION </th>
                                <th scope="col">STATUS</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:white;">
                            <tr>
                                <td><img class="homepic-fav" src="assets/images/dashboard/img1.jpg" alt=""></td>
                                <td><a href="#" class="link">1 Kanal for rent house</a>
                                </td>
                                <td>19th Feb,2022</td>
                                <td>123</td>
                                <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                <td>Active</td>
                            </tr>

                            <tr>
                                <td><img class="homepic-fav" src="assets/images/dashboard/img1.jpg" alt=""></td>
                                <td><a href="#" class="link">1 Kanal for rent house</a>
                                </td>
                                <td>19th Feb,2022</td>
                                <td>123</td>
                                <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                <td>Active</td>
                            </tr>

                            <tr>
                                <td><img class="homepic-fav" src="assets/images/dashboard/img1.jpg" alt=""></td>
                                <td><a href="#" class="link">1 Kanal for rent house</a>
                                </td>
                                <td>19th Feb,2022</td>
                                <td>123</td>
                                <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                <td>Active</td>
                            </tr>

                            <tr>
                                <td><img class="homepic-fav" src="assets/images/dashboard/img1.jpg" alt=""></td>
                                <td><a href="#" class="link">1 Kanal for rent house</a>
                                </td>
                                <td>19th Feb,2022</td>
                                <td>123</td>
                                <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                <td>Active</td>
                            </tr>

                            <tr>
                                <td><img class="homepic-fav" src="assets/images/dashboard/img1.jpg" alt=""></td>
                                <td><a href="#" class="link">1 Kanal for rent house</a>
                                </td>
                                <td>19th Feb,2022</td>
                                <td>123</td>
                                <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                <td>Active</td>
                            </tr>

                            <tr>
                                <td><img class="homepic-fav" src="assets/images/dashboard/img1.jpg" alt=""></td>
                                <td><a href="#" class="link">1 Kanal for rent house</a>
                                </td>
                                <td>19th Feb,2022</td>
                                <td>123</td>
                                <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                <td>Active</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- favourites-table-wrapper -->
</div>
<!-- content area -->
</div>
<!-- section -->

<?php include 'incl/footer.php'; ?>