<?php include 'incl/header.php'; ?>

<style>
<?php include 'assets/css/pages/foree-services.css'?><?php include 'assets/css/pages/property-listing.css'?><?php include 'assets/css/theme.css'?>.site-nav {
    background-color: black;
    position: static;
}

.visited-prop-card-wrapper .img-area img {
    object-fit: contain !important;
}
</style>
<div class="sub-header-section" style="background-image:url('assets/images/foree/bg.jpg')">
    <div class="heading-wrapper">
        <h1><span class="heading-part1">Foree</span> <br>
            <p class="heading-part2">
                Services
            </p>
        </h1>
    </div>
    <!-- heading-wrapper -->
    <video class="category-video gallery-header-video " loop="" autoplay="true" muted="" id="source_video"
        style="display: block;">
        <source src="assets/videos/architect.mp4" type="video/mp4">
        <source src="assets/videos/architect.mp4" type="video/ogg">
        <source src="assets/videos/architect.mp4" type="video/mov">
    </video>
</div>
<!-- sub-header-section -->
<div class="foree-services-section">
    <div class="inner-sec-container">
        <div class="foree-services-inner-parent">
            <div class="all-heading-wrapper mb-5">
                <h2 class="section-heading-home">
                    Foree Services
                </h2>
            </div>
            <!-- heading wrapper -->
            <div class="row">
                <div class="col-lg-9">
                    <div class="services-sec">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="property-listing-main-wrapper">
                                    <div class="listing-tabs-wrapper">
                                        <div class="foree-service-list-wrapper fixed-header">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active"
                                                        onclick="foreeserviceheader('architect');"
                                                        id="pills-architect-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-architect" type="button" role="tab"
                                                        aria-controls="pills-architect" aria-selected="true">
                                                        Architect</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" onclick="foreeserviceheader('interior');"
                                                        id="pills-interior-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-interior" type="button" role="tab"
                                                        aria-controls="pills-interior" aria-selected="false"> Interior
                                                        Design</button>
                                                </li>

                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" onclick="foreeserviceheader('builder');"
                                                        id="pills-builder-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-builder" type="button" role="tab"
                                                        aria-controls="pills-builder" aria-selected="false"> Builder /
                                                        Supplier</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" onclick="foreeserviceheader('evaluator');"
                                                        id="pills-evaluator-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-evaluator" type="button" role="tab"
                                                        aria-controls="pills-evaluator" aria-selected="false">
                                                        Evaluator</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" onclick="foreeserviceheader('bank');"
                                                        id="pills-bank-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-bank" type="button" role="tab"
                                                        aria-controls="pills-bank" aria-selected="false"> Bank Home
                                                        Finance</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" onclick="foreeserviceheader('insurance');"
                                                        style="border-right: 2px solid #34bf49 !important;"
                                                        id="pills-insurance-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-insurance" type="button" role="tab"
                                                        aria-controls="pills-insurance" aria-selected="false"> Home
                                                        Insurance</button>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- foree-service-list-wrapper -->
                                        <div class="listgrid-btns-wrapper ">
                                            <button onclick="showlistview();" class="listbtn"> <img
                                                    src="assets/images/property-listing/list.svg" style="width:32px"
                                                    alt=""></button>
                                            <button onclick="showgridview();" class="gridbtn"> <img
                                                    src="assets/images/property-listing/grid.svg" style="width:32px"
                                                    alt=""></button>
                                        </div>
                                        <!-- listgrid-btns-wrapper -->
                                    </div>
                                    <!-- listing-tabs-wrapper -->
                                    <div class="tabs-content-listing-area"
                                        style="    max-width: 1200px;margin: 0 auto;">
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-architect" role="tabpanel"
                                                aria-labelledby="pills-architect-tab">
                                                <div class="residential-listing-main-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/amer.jpg"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        Amer Adnan Associates
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> Temple
                                                                        Road, Lahore.
                                                                    </p>
                                                                    <p class="showinlist-text">AAA has an architectural
                                                                        style that is tasteful and practical. What sets
                                                                        the firm apart is its versatile approach to a
                                                                        design – the end product could be ultramodern or
                                                                        very traditional. The construction and design
                                                                        process is very transparent; clients are free to
                                                                        choose their own vendors and determine the level
                                                                        of supervision required. Amer Adnan Associates
                                                                        is very hands-on during all stages of the
                                                                        project; the dedicated teams of design,
                                                                        supervision and construction work in conjunction
                                                                        to make the best possible product. AmerAdnan
                                                                        Associates is a multidisciplinary design and
                                                                        architecture company based in Lahore, Pakistan
                                                                        that is established and led by MrAmer Adnan. The
                                                                        exceptional design and construction style of the
                                                                        firm has allowed it to make its mark in short
                                                                        span. Since its foundation till this day, the
                                                                        design boutique has turned several dream
                                                                        projects (commercial & residential) into
                                                                        reality. The researched based company has also
                                                                        won the 2015 Asia Pacific Property Award for its
                                                                        superior interior design work in Royaute Luxury
                                                                        Suites & Hotel at M.M Alam Road, Lahore.
                                                                    </p>
                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Amer Adnan</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
                                                                </div>
                                                                <!-- content-area -->
                                                            </div>
                                                            <!-- visited-prop-card-wrapper -->
                                                        </div>
                                                        <!-- col 4 -->

                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/raees.png"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        RAEES FAHEEM ASSOCIATES
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> DHA (LHR),
                                                                        Lahore.
                                                                    </p>
                                                                    <p class="showinlist-text"> Raees Faheem Associates
                                                                        is an architectural firm, based in Lahore,
                                                                        established by two likeminded architects in
                                                                        1994, who pooled together their design and
                                                                        construction, management capabilities and gave
                                                                        emergence to a style of expression of their own.
                                                                        Taught and groomed at National College of
                                                                        Arts(Mayo School of Arts, Pakistan),they
                                                                        proceeded further to enhance their design
                                                                        abilities at the hands of their mentor Wasif Ali
                                                                        Khan. The firm has been known for its work, over
                                                                        17 years of experimentation and research in the
                                                                        fields of architecture and design.It has
                                                                        successfully emerged creating a unique sense of
                                                                        space, a more responsive attitude towards the
                                                                        context of space, traditions, culture and
                                                                        construction techniques. Raees Faheem design
                                                                        team focuses at creating innovative, cost
                                                                        effective and energy efficient designs
                                                                        developing a rigorous equilibrium between
                                                                        architecture and landscape.
                                                                    </p>
                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Raees Faheem</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
                                                                </div>
                                                                <!-- content-area -->
                                                            </div>
                                                            <!-- visited-prop-card-wrapper -->
                                                        </div>
                                                        <!-- col 4 -->

                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/dinerz.png"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        DZINERZ
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> Al Faisal
                                                                        Town, Lahore.
                                                                    </p>
                                                                    <p class="showinlist-text"> DZINERZ is a group of
                                                                        young and enthusiastic practice, dedicated to
                                                                        quality in Architectural Design development with
                                                                        consultancy and Construction Service provider.
                                                                        The practice takes pride in its special
                                                                        attention to details and interest in the
                                                                        development of traditional and contemporary
                                                                        designs and execution at site (Turnkey) with top
                                                                        supervision of our qualified site supervisory
                                                                        engineering staff while remaining abreast with
                                                                        the latest researches and state-of-the-art
                                                                        technologies with good selection of materials.
                                                                        DZINERZ consists of highly qualified
                                                                        architecture, engineers, urban design and
                                                                        interior design professionals. In a very short
                                                                        span of time, the firm has compiled an
                                                                        impressive portfolio of some very prestigious
                                                                        projects. In order to meet with the challenges
                                                                        of rapidly changing and competitive market, an
                                                                        architect today has to be more than just a
                                                                        designer, and should be fully conversant with
                                                                        market strategies, economics, Prevailing Design
                                                                        Trends, Construction Technologies, Construction
                                                                        Practices and Project Management.
                                                                    </p>

                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Andrew Fernandes</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
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
                                            <div class="tab-pane fade" id="pills-interior" role="tabpanel"
                                                aria-labelledby="pills-interior-tab">
                                                <div class="residential-listing-main-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/inner.png"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        INNER ART INTERRIORS

                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> Gulberg,
                                                                        Lahore.

                                                                    </p>
                                                                    <p class="showinlist-text"> Inner Art is one of the
                                                                        unique entities in interior industry where your
                                                                        ideas take real shape and your emotion gets
                                                                        expression. Our entire way of working is shaped
                                                                        by what you need and want. We are here to make
                                                                        your job easier with efficiency and quality.
                                                                        Inner Art strives professionally to make sure
                                                                        your project is finished within your budget with
                                                                        a mark of satisfaction. Inner Art feels proud to
                                                                        offer its excellent professional services to its
                                                                        clients in interior and architectures design
                                                                        consultancy, customized furniture, planning and
                                                                        execution of commercial and residential projects
                                                                        either on turnkey basis or only consultancy.
                                                                        Inner Art started its journey from U.A.E (Dubai)
                                                                        in 2006 and entered the territories of Pakistan
                                                                        in 2007 and established an office at Lahore.
                                                                        Inner Art was also registered in United Kingdom
                                                                        (Berkshire, London) in 2008. Inner Art has also
                                                                        set up an office in Islamabad, the capital of
                                                                        Pakistan in 2013.
                                                                    </p>

                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>INNER ART INTERRIORS</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
                                                                </div>
                                                                <!-- content-area -->
                                                            </div>
                                                            <!-- visited-prop-card-wrapper -->
                                                        </div>
                                                        <!-- col 4 -->

                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/im.png"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        IM DESIGNWORKS
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> Gulberg,
                                                                        Lahore.
                                                                    </p>
                                                                    <p class="showinlist-text"> Imran Zahid Pakistani
                                                                        architect founder of IM Design Works. After
                                                                        graduating fromBeaconhouse National
                                                                        University(BNU) in Bachelor of Architecture
                                                                        (distinction holder). He started his company in
                                                                        2011 on his own under the name stated IM
                                                                        Designworks. His six years of practice and
                                                                        experience has now made him lead a great team of
                                                                        architects who plan for the betterment of the
                                                                        company and the architecture that benefits the
                                                                        client by all means. He has made this company
                                                                        special in terms of relationships with the team
                                                                        and the clients, giving the company highest
                                                                        standards required. We are a team of architects
                                                                        and designers with unique backgrounds, but we
                                                                        all have one thing in common – we share a strong
                                                                        desire to use our expertise and knowledge to
                                                                        design solutions that will help people in
                                                                        moments that matter the most.
                                                                    </p>
                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Imran Zahid</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
                                                                </div>
                                                                <!-- content-area -->
                                                            </div>
                                                            <!-- visited-prop-card-wrapper -->
                                                        </div>
                                                        <!-- col 4 -->
                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/aleem.jpg"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        ALEEM MEHTA
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> DHA (LHR),
                                                                        Lahore.
                                                                    </p>
                                                                    <p class="showinlist-text"> Living and breathing
                                                                        designs every day, Aleem Mehta and her team are
                                                                        committed to bring life into interior spaces
                                                                        with personal attention and assistance to the
                                                                        clients. Aleem Mehta has worked tirelessly to
                                                                        successfully complete projects both in Karachi
                                                                        and Lahore.
                                                                    </p>
                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Farhan Adil Mehboob
                                                                        </b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
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
                                            <div class="tab-pane fade" id="pills-builder" role="tabpanel"
                                                aria-labelledby="pills-builder-tab">
                                                <div class="residential-listing-main-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/bricks.jpg"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        Butt Bricks Company
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i>
                                                                        Harbanspura, Lahore.
                                                                    </p>
                                                                    <p class="showinlist-text">Butt Bricks Company is a
                                                                        well-established and widely recognized Bricks
                                                                        Manufacturing Company of Lahore . They are
                                                                        widely recognized and respected by the
                                                                        professionals related with the field of
                                                                        constructions, Especially Architects, Engineers
                                                                        and Contractors. Muhammad Yaqoob Butt founded
                                                                        the company more than years ago in 1979. When he
                                                                        established the first brick kiln in area of
                                                                        jaloo in order to fulfill the Demand of
                                                                        construction industry in and around the city of
                                                                        Lahore . However, the popularity of their bricks
                                                                        broke the geographic boundaries of Lahore and
                                                                        soon they start receiving the orders from all
                                                                        over the Pakistan . The quality of their bricks
                                                                        made the history of Butt Bricks Company Success
                                                                        Story. <span style="font-weight: bold;">Today
                                                                            there are three brick kilns that belong to
                                                                            Butt Bricks Company,</span> all located in
                                                                        Jallo area. These Kilns are busy round the year
                                                                        in the Production of quality bricks. Although
                                                                        Butt Bricks Company Dose Produce the First Awal
                                                                        quality brick, which is very much in demand, but
                                                                        their real strength is the production of Fair
                                                                        Face Bricks that are manufactured in various
                                                                        sizes and shapes according to the requirement
                                                                        and aesthetic design of the architect. Apart
                                                                        from the full/regular sizes fair face bricks,
                                                                        they manufacture Gutka in three regular sizes.
                                                                        More over they also manufacture the same quality
                                                                        face bricks in order to enhance the beauty of
                                                                        the buildings. The additional service provided
                                                                        by the company to the architects is that, they
                                                                        are always ready manufacture fair face bricks in
                                                                        new shapes as design/ or demanded by them. The
                                                                        quality of the production of Butt Bricks Company
                                                                        is not only recognized in Pakistan . But it is
                                                                        also famous out side the country. So the company
                                                                        is a pioneer in the field of bricks export from
                                                                        Pakistan resulting in earning foreign exchange
                                                                        for the country. The Company Exports bricks to
                                                                        countries including USA , Saudi Arabia , UAE,
                                                                        South Africa , Poland and Japan .
                                                                    </p>

                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Eid Muhammad Butt
                                                                        </b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
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

                                            <div class="tab-pane fade" id="pills-evaluator" role="tabpanel"
                                                aria-labelledby="pills-evaluator-tab">
                                                <div class="residential-listing-main-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/evaluator1.jpg"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        Malik Evaluators
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> Mehfooz
                                                                        Road, Rawalpindi.
                                                                    </p>
                                                                    <p class="showinlist-text"> Lorem ipsum dolor sit
                                                                        amet,
                                                                        consectetur adipiscing elit. Enim, sed ipsum
                                                                        tellus enim
                                                                        nibh vulputate massa commodo diam. Purus
                                                                        bibendum dictum
                                                                        leo
                                                                        ut in ultrices laoreet. Non, integer condimentum
                                                                        vel
                                                                        lacus.
                                                                        Tempor at neque purus ac elementum, curabitur
                                                                        vel dolor
                                                                        quisque.
                                                                    </p>

                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Malik Abbas</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
                                                                </div>
                                                                <!-- content-area -->
                                                            </div>
                                                            <!-- visited-prop-card-wrapper -->
                                                        </div>
                                                        <!-- col 4 -->

                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/evaluator2.jpg"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        Rasheed Evaluators
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> Temple
                                                                        Road, Lahore.
                                                                    </p>
                                                                    <p class="showinlist-text"> Lorem ipsum dolor sit
                                                                        amet,
                                                                        consectetur adipiscing elit. Enim, sed ipsum
                                                                        tellus enim
                                                                        nibh vulputate massa commodo diam. Purus
                                                                        bibendum dictum
                                                                        leo
                                                                        ut in ultrices laoreet. Non, integer condimentum
                                                                        vel
                                                                        lacus.
                                                                        Tempor at neque purus ac elementum, curabitur
                                                                        vel dolor
                                                                        quisque.
                                                                    </p>

                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Abdul Rasheed</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
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

                                            <div class="tab-pane fade" id="pills-bank" role="tabpanel"
                                                aria-labelledby="pills-bank-tab">
                                                <div class="residential-listing-main-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/alflah.png"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        Bank Alfalah
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> DHA (LHR),
                                                                        Lahore.
                                                                    </p>
                                                                    <p class="showinlist-text"> Alfalah Home Finance
                                                                        helps you fulfill your dream of owning a home –
                                                                        be that buying, renovating or simply switching
                                                                        your present home finance facility from any
                                                                        other bank. With Bank Alfalah, now you can
                                                                        choose the Home Finance option that best suits
                                                                        your needs: Alfalah Home Buyer With the Alfalah
                                                                        Home Buyer facility, your dream home can now
                                                                        become a reality! We will provide you with
                                                                        required financing of up to 70% of the value of
                                                                        the property you want to own. The payment period
                                                                        will range from 3 to 25 years.’ Alfalah Home
                                                                        Construct You own a plot but need financing to
                                                                        now construct a home on it! With Alfalah Home
                                                                        Construct we can provide you with up to 100% of
                                                                        the construction cost enabling you to bid
                                                                        farewell to rents forever! In case you don’t
                                                                        have a plot, we can provide you with up to 60%
                                                                        of the value of the plot that you have selected
                                                                        for purchase! Payment period will range from 3
                                                                        to 25 years. Alfalah Home Improver You already
                                                                        own a home, but need extra space for a growing
                                                                        family and want to expand your existing set-up.
                                                                        Simply apply for financing of up to Rs. 3.50
                                                                        million or 40% of the surveyed value of your
                                                                        home and get yourself the extra space through
                                                                        the Alfalah Home Improver! Alfalah Home Start
                                                                        Specially designed for young professionals to
                                                                        own a quality asset early in life, Alfalah Home
                                                                        Start is ideal for someone looking to buy an
                                                                        already constructed housing unit! We offer a
                                                                        moratorium of up to 3 years in principal
                                                                        payments, for a financing of up to 25 years. You
                                                                        service the mark-up element only initially and
                                                                        principal repayment starts after the end of the
                                                                        moratorium period. Alfalah Home BTF Does your
                                                                        existing installment on a home finance leave you
                                                                        with nothing to spend? With the Alfalah Home
                                                                        BTF, we offer you attractive rates and flexible
                                                                        payment options that would allow you to keep
                                                                        more funds with you each month. With Alfalah
                                                                        Home BTF, repaying your home finance becomes
                                                                        much simpler! Transfer up to 100% of the
                                                                        existing finance and repayment period for up to
                                                                        25 years once again. Alfalah Plot Purchase &
                                                                        Construct With Alfalah Plot Purchase and
                                                                        Construct facility, you could purchase a Plot of
                                                                        your choice and can convert it into your dream
                                                                        home. We will provide you with required
                                                                        financing of up to 70% of the value of the
                                                                        finished property you want to have. The payment
                                                                        period will range from 3 to 25 years.
                                                                        ELIGIBILITY • You are a Pakistani National
                                                                        Identity Card Holder • Age at the time of
                                                                        application between 23 years to 55 years at the
                                                                        time of application, subject to maximum age of
                                                                        60 for salaried and 65 for other types of
                                                                        customers, at the time of maturity of finance. •
                                                                        Minimum take home income of Rs 50,000- per month
                                                                        from all sources. • The financing amount is at
                                                                        least Rs.2 million (Rs. 20 lacs) or above. • If
                                                                        you are a non-resident salaried individual, you
                                                                        must earn a minimum gross monthly verifiable
                                                                        income equivalent to USD 5,000. • You must be a
                                                                        permanent employee, currently employed with
                                                                        total employment experience of at least 2 years.
                                                                        • If you are a professional contractual employee
                                                                        (bankers, engineers, doctors, architect etc),
                                                                        you must be currently employed with total
                                                                        employment experience of at least 3 years. • If
                                                                        you are self-employed with a stream of income
                                                                        generated from property rent/return on fixed
                                                                        deposit /DSC/SSC, you must have had the source
                                                                        of income for at least last 6 months. • If you
                                                                        are a businessman, you must be running a
                                                                        business for at least 5 years with a
                                                                        satisfactory track record of either an
                                                                        individually owned or a family business. • The
                                                                        property you want to mortgage should be located
                                                                        in Karachi, Lahore, Rawalpindi or Islamabad.
                                                                    </p>
                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Kamran Y. Mirza– Director</b>
                                                                    </h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
                                                                </div>
                                                                <!-- content-area -->
                                                            </div>
                                                            <!-- visited-prop-card-wrapper -->
                                                        </div>
                                                        <!-- col 4 -->

                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/habib.png"
                                                                        alt="visited image property">

                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        Bank AL Habib limited

                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i>DHA (LHR),
                                                                        Lahore.

                                                                    </p>
                                                                    <p class="showinlist-text"> Financing from Rs.
                                                                        300,000 up-to Rs.20 million or entitlement
                                                                        should not exceed 80% of the appraised value of
                                                                        a built up house whichever is lower. Financing
                                                                        period 20 years.Disbursement made as Bullet
                                                                        Payment (one time).Repayment in equal monthly
                                                                        installments based on the tenure of financing.
                                                                        Home Construction Financing from Rs. 300,000 up
                                                                        to Rs.20 million or entitlement should not
                                                                        exceed 80% of the appraised property value (land
                                                                        + estimated cost of construction) whichever is
                                                                        low.Financing period 20 years.Disbursement of
                                                                        Payment in 3 stages as follows: 1. Plinth Stage.
                                                                        30% 2. Structure completion. 30% 3. Finishing
                                                                        Stage 40%Repayment in equal monthly installments
                                                                        based on the tenure of financing (1-year grace
                                                                        period for construction is also included, where
                                                                        only markup is to be serviced). Home Renovation
                                                                        Financing up to Rs.5 million or entitlement
                                                                        should not exceed 70% of the appraised property
                                                                        value whichever is low.Financing period 1-10
                                                                        years.Disbursement made as Bullet Payment (one
                                                                        time).Bill of Quantity also required.Repayment
                                                                        in equal monthly installments based on the
                                                                        tenure of financing. ELIGIBILITY • Existing
                                                                        individual customers maintaining satisfactory
                                                                        relationship. • Salaried employees of our
                                                                        Corporate/Commercial Relationships. • Self
                                                                        Employed professionals (Doctors, Engineers,
                                                                        Chartered Accountants, Architects, etc). • Have
                                                                        age between 23 to 60 years. • Possesses minimum
                                                                        net monthly take home income of Rs.20000. •
                                                                        Salaried individual at least 1 year of permanent
                                                                        service. • SEP/Businessmen? 2 years of business
                                                                        proof. • Installment not to exceed 45% (Debt
                                                                        Burden) of the monthly take-home income. • The
                                                                        aggregate Debt Burden should not be more than
                                                                        50%.
                                                                    </p>

                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Abbas</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
                                                                </div>
                                                                <!-- content-area -->
                                                            </div>
                                                            <!-- visited-prop-card-wrapper -->
                                                        </div>
                                                        <!-- col 4 -->

                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/islamic.png"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">

                                                                    <h3>
                                                                        Bank Islami

                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> DHA (LHR),
                                                                        Lahore.

                                                                    </p>
                                                                    <p class="showinlist-text"> Do you Dream of
                                                                        providing your loved ones a home of their own
                                                                        but don't have the funds? Don't stop dreaming,
                                                                        let us make your Dream a Reality with BankIslami
                                                                        MUSKUN Home financing where you can avail
                                                                        financing for any of the following facilities:
                                                                        Home Purchase: Just point your finger at the
                                                                        Bungalow or Apartment of your choice and we'll
                                                                        help you buy it. Home Construction: So you want
                                                                        to build your Dream home rather than buy a
                                                                        ready-made one? You make the design, we''ll help
                                                                        you build it. Home Renovation: Thinking of
                                                                        remodelling your kitchen to fulfill your wife's
                                                                        long awaited wish, or build a study area for
                                                                        your kids, or a cozy library for your parents,
                                                                        or just want to give your home a new look? you
                                                                        plan it, we'll help you renovate it. Home
                                                                        Replacement: Don't lay the foundation of your
                                                                        Dream home on interest. If you already have a
                                                                        Conventional Mortgage loan and want to switch to
                                                                        Shariah compliant means of Financing, we'll help
                                                                        you transfer it. more The MUSKUN Home financing
                                                                        facility is based on the principle of
                                                                        Diminishing Musharakah and Ijarah. The
                                                                        Diminishing Musharakah transaction is based on
                                                                        Shirkat-ul-Milk where you and the Bank
                                                                        participate in ownership of a property. The
                                                                        share of the bank is then leased to you on the
                                                                        basis of Ijarah and is divided into a number of
                                                                        units. It is then agreed that you will buy the
                                                                        units of the bank periodically, thereby
                                                                        increasing your own share till all the units of
                                                                        the Bank are purchased by you which will make
                                                                        you the sole owner of the property. Till that
                                                                        time, you pay the Bank rent for its units leased
                                                                        to you. The rent keeps on decreasing as your
                                                                        ownership in the property increases and that of
                                                                        the Bank decreases. ELIGIBILITY • Citizenship
                                                                        Pakistani • Cities All major cities where BIPL
                                                                        Branch exist. • Age Limit
                                                                        Salaried/Businessmen/Selected Professionals: •
                                                                        Primary Applicant: 25-65 Years • Co- Applicant:
                                                                        21-70 Years • Primary Applicant: 25-60 Years. •
                                                                        Co- Applicant: 21-70 Years. • Employment Tenure:
                                                                        Salaried:Minimum 6 months at current employment
                                                                        and 2 years’ continuous employment experience in
                                                                        the same industry/field. Businessmen:3 years of
                                                                        business / practice. • Minimum Income Salaried:
                                                                        Rs. 51,000/-Business man: Rs. 75,000/-NRPs: Rs.
                                                                        150,000/- • Additional Criteria for NRPs 1. An
                                                                        NRP needs to have a Co-applicant residing in
                                                                        Pakistan as an Authorized Person on behalf of
                                                                        the NRP. 2. Only Salaried NRPs can avail MUSKUN
                                                                        Home Financing. • BIR 50% to 70%

                                                                    </p>
                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Hasan A Bilgrami</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:922135839906">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
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

                                            <div class="tab-pane fade" id="pills-insurance" role="tabpanel"
                                                aria-labelledby="pills-insurance-tab">
                                                <div class="residential-listing-main-wrapper">
                                                    <div class="row">
                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/adamjee.png"
                                                                        alt="visited image property">

                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">

                                                                    <h3>
                                                                        Adamjee Insurance Company Limited

                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> Gulberg,
                                                                        Lahore.

                                                                    </p>
                                                                    <p class="showinlist-text"> Adamjee Insurance
                                                                        Company Limited (AICL) is a general insurance
                                                                        giant, incorporated as a Public Limited Company
                                                                        on September 28, 1960. AICL, one of the leading
                                                                        insurance companies in Pakistan, has a regional
                                                                        presence in United Arab Emirates (UAE) and
                                                                        maintains its standing through an unwavering
                                                                        commitment to its corporate philosophy. AICL’s
                                                                        competitive competency is achieved by
                                                                        combinations of voluminous assets, notable
                                                                        paid-up capital, sizable reserves, a varied
                                                                        portfolio and consequently, remarkable growth
                                                                        rates. AICL is listed with all three stock
                                                                        exchanges of Pakistan, establishing its
                                                                        credibility. The Company retains a strong
                                                                        regional presence in the UAE (Dubai and Abu
                                                                        Dhabi). Company Registration Number (CRN):
                                                                        0001190 National Tax No (NTN): 0709389-6
                                                                        Associated Companies: MCB Bank Limited. Nishat
                                                                        Mills Limited
                                                                    </p>

                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Muhammad Ali Zeb
                                                                        </b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
                                                                </div>
                                                                <!-- content-area -->
                                                            </div>
                                                            <!-- visited-prop-card-wrapper -->
                                                        </div>
                                                        <!-- col 4 -->

                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/alflah2.png"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        Alfalah Insurance Company
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i>Gulberg,
                                                                        Lahore.
                                                                    </p>
                                                                    <p class="showinlist-text"> Alfalah Insurance
                                                                        Company Limited, is one of the latest ventures
                                                                        of Abu Dhabi Group in Pakistan. Alfalah
                                                                        Insurance started operations towards the end of
                                                                        2006 and since then we have already established
                                                                        offices in major cities of Pakistan including: *
                                                                        Lahore * Karachi * Islamabad * Faislabad *
                                                                        Peshawar * Gujranwala * Sialkot * Multan *
                                                                        Hyderabad Backed with the state of the art IT
                                                                        Platform, the company offer first class security
                                                                        and service to the insuring public comparable to
                                                                        international standards. We are pleased to
                                                                        advise that we have secured the support from
                                                                        some of the most renowned reinsurers and are in
                                                                        a position to offer tailor made insurance
                                                                        coverage for the most complex industrial,
                                                                        commercial or financial risks. We are member of
                                                                        Insurance Association of Pakistan (IAP) & Lahore
                                                                        Chamber of Commerce and Industry (LCCI). The
                                                                        Federation of Pakistan Chamber of Commerce &
                                                                        Industry (FPCCI) provisionally selected Alfalah
                                                                        Insurance Company Limited for the First FPPCI
                                                                        achievement award for 2012. Registered Number:
                                                                        15638 National Tax Number: 2636304 - 6 Federal
                                                                        Excise Duty/ Sales Tax Number: 03-00-9805-009-64
                                                                    </p>
                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Atif Bajwa+</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
                                                                </div>
                                                                <!-- content-area -->
                                                            </div>
                                                            <!-- visited-prop-card-wrapper -->
                                                        </div>
                                                        <!-- col 4 -->

                                                        <div class="col-md-4 propertyitem  mb-4">
                                                            <div class="visited-prop-card-wrapper">
                                                                <div class="img-area">
                                                                    <img src="assets/images/foree/efu.png"
                                                                        alt="visited image property">
                                                                </div>
                                                                <!-- img-area -->
                                                                <div class="content-area">
                                                                    <h3>
                                                                        EFU General Insurance
                                                                    </h3>
                                                                    <p> <i class="fas fa-map-marker-alt"></i> DHA (LHR),
                                                                        Lahore.
                                                                    </p>
                                                                    <p class="showinlist-text"> The Company was
                                                                        incorporated on September 2, 1932. EFU General
                                                                        provides a full range of insurance services to
                                                                        fulfill the needs of all of its customers being
                                                                        commercial and individual clients. Our product
                                                                        portfolio includes: Fire and Property Damage
                                                                        Marine, Aviation and Transport Motor
                                                                        Miscellaneous Value Added Services Takaful The
                                                                        shares of the company are quoted on Pakistan
                                                                        Stock Exchange. EFU is one of the few Pakistani
                                                                        organizations run totally by professional
                                                                        management and highly motivated field force.
                                                                        Policies accepted by all institutions in the
                                                                        country. Rating: Insurer Financial Strength AA+,
                                                                        Outlook: Stable (Rating Agencies: JCR-VIS and
                                                                        PACRA). Client-base comprises of many leading
                                                                        business houses and multinational companies. EFU
                                                                        gave the emerging insurance industry the
                                                                        leadership, the manpower and the drive needed to
                                                                        grow in a situation where at one time,
                                                                        three-fourths of insurance was held by foreign
                                                                        companies.
                                                                    </p>
                                                                    <h6 class="mt-2">With Us : <b>June 18, 2016</b></h6>
                                                                    <h6>Owner Name : <b>Mohamed Iqbal Mankani</b></h6>
                                                                    <h6 class="mt-2 featuredcheck"> <span
                                                                            class="activecheck"><i
                                                                                class="fa fa-check"></i> Featured</span>
                                                                        &nbsp; &nbsp; <i class="fa fa-check"></i>
                                                                        Trusted</h6>
                                                                    <div class="tags-wrapper">
                                                                        <div class="tag1-area">
                                                                            <a href="tel:03345815277">
                                                                                <p>Call us</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area">
                                                                            <a href="mailto:tabishirfan.qt@gmail.com">
                                                                                <p>Email</p>
                                                                            </a>
                                                                        </div>
                                                                        <!-- tag1-area -->

                                                                        <div class="tag1-area verified">
                                                                            <p>Details
                                                                            </p>
                                                                        </div>
                                                                        <!-- tag1-area -->
                                                                    </div>
                                                                    <!-- tags-wrapper -->
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

                        </div>
                        <!-- row -->
                    </div>
                    <!-- services-sec -->
                </div>
                <!-- col 9 -->
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
            </div>
            <!-- row -->
        </div>
        <!-- foree-services-inner-parent -->
    </div>
    <!-- inner-sec-container -->
</div>
<!-- foree-services-section -->
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
<script type="text/javascript">
function foreeserviceheader(type) {
    if (type == "architect") {
        $('.heading-part1').text('Foree');
        $('.heading-part2').text('Architect');

        document.getElementById('source_video').src = 'assets/videos/architect.mp4';
    }
    if (type == "interior") {
        $('.heading-part1').text('Interior');
        $('.heading-part2').text('Design');

        document.getElementById('source_video').src = 'assets/videos/vid2.mp4';
    }

    if (type == "builder") {
        $('.heading-part1').text('Builder');
        $('.heading-part2').text('Supplier');

        document.getElementById('source_video').src = 'assets/videos/builder.mp4';
    }
    if (type == "evaluator") {
        $('.heading-part1').text('Foree');
        $('.heading-part2').text('Evaluators');

        document.getElementById('source_video').src = 'assets/videos/evaluator.mp4';
    }

    if (type == "bank") {
        $('.heading-part1').text('Bank');
        $('.heading-part2').text('Finance');

        document.getElementById('source_video').src = 'assets/videos/bank.mp4';
    }
    if (type == "insurance") {
        $('.heading-part1').text('Home');
        $('.heading-part2').text('Insurance');

        document.getElementById('source_video').src = 'assets/videos/insurance.mp4';
    }
}

$(window).scroll(function() {

    // Write code here
    var scroll = $(window).scrollTop();
    if (scroll >= 690) {
        $(".fixed-header").addClass("topfixed-header");
        $(".listgrid-btns-wrapper").addClass("stickviewarea");


    } else {
        $(".fixed-header").removeClass("topfixed-header");
        $(".listgrid-btns-wrapper").removeClass("stickviewarea");
    }
});
</script>
<style>
.topfixed-header {
    position: fixed;
    top: 74px;
    width: 70%;
    z-index: 10000;
    border-radius: 0 0 0.5em 0.5em;
}

.stickviewarea {
    position: fixed;
    left: 0;
    top: 48%;
    z-index: 100;
}

.stickviewarea .listbtn {
    display: block;
}
</style>
<?php include 'incl/footer.php'; ?>