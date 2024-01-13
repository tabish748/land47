<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no">
    <title>Land47</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap" rel="stylesheet"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css" />
    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allison&family=Coda&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="assets/css/theme.css" type="text/css">

    <script>
    tinymce.init({
        selector: "#mytextarea",
        height: 400,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table paste emoticons"
        ],
        toolbar: "styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image emoticons",
        skin: "small",
        icons: "",
        setup: function(editor) {
            editor.on("keyup", function(e) {
                updateHTML(editor.getContent());
            });
            editor.on("change", function(e) {
                updateHTML(editor.getContent());
            });
        }
    });

    function updateHTML(content) {
        cmeditor.getDoc().setValue(content);
    }

    function updateEditor() {
        if (!tinymce.activeEditor.hasFocus()) {
            tinymce.activeEditor.setContent(cmeditor.getDoc().getValue());
        }
    }

    var HTMLContainer = document.querySelector(".HTMLContainer");

    var cmeditor = CodeMirror(HTMLContainer, {
        lineNumbers: true,
        mode: "htmlmixed"
    });

    cmeditor.on("change", (editor) => {
        updateEditor();
    });
    </script>
        <style>
    html,
    body {
        overflow-x: hidden !important;
    }

    .site__wrapper {
        overflow-x: overlay !important;
    }
    </style>
</head>

<body>
    <!-- 
<div class="preload__wrap"></div> -->
    <div class="site__wrapper  animate__animated animate__fadeIn">

        <header class="header__wrap" id="navbar">


            <div class="site-nav" id="nav-inner-container"
                style=" background-image: url('/newland47/assets/images/nav-bg.png');">
                <div class="inner-container " id="">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/logo.png" style="width:150px;" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <svg id="svgPlus" width="20px" height="20px" viewBox="0 0 74 74" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>noun_1776266_cc</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="noun_1776266_cc_2" transform="translate(0.000000, -1.000000)" fill="#fff"
                                            fill-rule="nonzero">
                                            <g id="Group" transform="translate(0.000000, 0.637820)">
                                                <polygon id="Shape"
                                                    points="33 0.36218 33 33.36218 0 33.36218 0 41.3622 33 41.3622 33 74.3622 41 74.3622 41 41.3622 74 41.3622 74 33.36218 41 33.36218 41 0.36218 33 0.36218">
                                                </polygon>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                                <svg id="svgMinus" style="display: none;margin-top:10px;" width="20px" height="20px"
                                    viewBox="0 0 74 74" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>noun_line_1776294</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs></defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="noun_line_1776294" transform="translate(-6.000000, -31.000000)">
                                            <g id="Group" transform="translate(0.000000, 0.637820)">
                                                <polygon id="Shape" fill="#fff" fill-rule="nonzero"
                                                    points="6 30.36218 6 38.36218 68 38.36218 68 30.36218"></polygon>
                                                <rect id="Rectangle" x="0" y="0" width="74" height="69"></rect>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                            <div class="collapse navbar-collapse" style="justify-content:flex-end;"
                                id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="index.php"> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="foree-services.php">Foree Services</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="dealers-agency.php">Dealers / Agencies</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="blog-listing.php">Blogs</a>
                                    </li>



                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>


                                </ul>

                                <div class="nav-buttons-area">
                                    <a href="vr-properties-listing.php">
                                        <button>
                                            <img src="/newland47/assets/images/360.png" alt="">
                                            VR Properties
                                        </button>
                                    </a>
                                    <a href="login.php">
                                        <button class="submit-prop-btn">
                                            Submit Properties
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </nav>

                    </div>
                    <!--/.nav-inner-->
                </div>
                <!--/.container-->
            </div>
            <!--/.site-nave-->
        </header>
        <!--/.header__wrap-->