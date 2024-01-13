/**
 * @var $ jQuery
 */

// Full Height...
function fsHeight() {
    let winHeight = $(window).height();
    $('[data-height="viewport"]').css('height', winHeight, '!important');
    $('[data-min-height="viewport"]').css('minHeight', winHeight, '!important');
}

/* Window Load ---------------------- */

$(window).on('load', function() {
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 400);

    setTimeout(function() {
        AOS.init({
            once: true,
            duration: 1000
        });
    }, 800);

});

$(window).on('load', function() {

    document.getElementById("cookies-section-area").style.display = "block";
    $('cookies-section-area').addClass('animate__animated animate__fadeInDown');
});

$(window).scroll(function() {

    // Write code here
    var scroll = $(window).scrollTop();
    if (scroll >= 40) {

        $(".site-nav").addClass("sticky");
        $(".site-nav").addClass("animate__animated animate__fadeInDown");

    } else {
        $(".site-nav").removeClass("sticky");
    }
});
$(window).scroll(function() {

    // Write code here
    var scroll = $(window).scrollTop();
    if (scroll >= 400) {
        document.getElementById("home-instant-srch-icon").style.display = "flex";

    } else {
        document.getElementById("home-instant-srch-icon").style.display = "none";

    }

});

/* Document Ready ---------------------- */

$(document).ready(function() {

    fsHeight();


    // Inline background image...
    $("[data-bg]").each(function() {
        const image = $(this).attr("data-bg");
        $(this).css({
            backgroundImage: 'url("' + image + '")',
        });
    });

});



$('.navbar-toggler').click(function(event) {
    event.preventDefault();
    $('#svgPlus').toggle();
    $('#svgMinus').toggle();
});

/* Window Scroll ---------------------- */


/* Window Resize ---------------------- */

$(window).on('resize', function() {

    fsHeight();

});

// *****************stick navabar



//  ************
function visitedTabShow(btnName) {

    if (btnName == "residential") {
        document.getElementById("residential-tab-content-wrapper").style.display = "block";
        document.getElementById("commercial-tab-content-wrapper").style.display = "none";
        document.getElementById("office-tab-content-wrapper").style.display = "none";
        document.getElementById("shop-tab-content-wrapper").style.display = "none";
        document.getElementById("plot-tab-content-wrapper").style.display = "none";

    }

    if (btnName == "commercial") {
        document.getElementById("commercial-tab-content-wrapper").style.display = "block";
        document.getElementById("residential-tab-content-wrapper").style.display = "none";
        document.getElementById("office-tab-content-wrapper").style.display = "none";
        document.getElementById("shop-tab-content-wrapper").style.display = "none";
        document.getElementById("plot-tab-content-wrapper").style.display = "none";
    }
    if (btnName == "office") {
        document.getElementById("office-tab-content-wrapper").style.display = "block";
        document.getElementById("residential-tab-content-wrapper").style.display = "none";
        document.getElementById("commercial-tab-content-wrapper").style.display = "none";
        document.getElementById("shop-tab-content-wrapper").style.display = "none";
        document.getElementById("plot-tab-content-wrapper").style.display = "none";
    }
    if (btnName == "shop") {
        document.getElementById("shop-tab-content-wrapper").style.display = "block";
        document.getElementById("residential-tab-content-wrapper").style.display = "none";
        document.getElementById("commercial-tab-content-wrapper").style.display = "none";
        document.getElementById("office-tab-content-wrapper").style.display = "none";
        document.getElementById("plot-tab-content-wrapper").style.display = "none";
    }
    if (btnName == "plot") {
        document.getElementById("plot-tab-content-wrapper").style.display = "block";
        document.getElementById("residential-tab-content-wrapper").style.display = "none";
        document.getElementById("commercial-tab-content-wrapper").style.display = "none";
        document.getElementById("shop-tab-content-wrapper").style.display = "none";
        document.getElementById("office-tab-content-wrapper").style.display = "none";
    }
    // **************************


    if (btnName == "residentialv") {

        document.getElementById("residential-tab-content-wrapper-v").style.display = "block";
        document.getElementById("commercial-tab-content-wrapper-v").style.display = "none";
        document.getElementById("office-tab-content-wrapper-v").style.display = "none";
        document.getElementById("shop-tab-content-wrapper-v").style.display = "none";
        document.getElementById("plot-tab-content-wrapper-v").style.display = "none";

    }

    if (btnName == "commercialv") {
        document.getElementById("commercial-tab-content-wrapper-v").style.display = "block";
        document.getElementById("residential-tab-content-wrapper-v").style.display = "none";
        document.getElementById("office-tab-content-wrapper-v").style.display = "none";
        document.getElementById("shop-tab-content-wrapper-v").style.display = "none";
        document.getElementById("plot-tab-content-wrapper-v").style.display = "none";
    }
    if (btnName == "officev") {
        document.getElementById("office-tab-content-wrapper-v").style.display = "block";
        document.getElementById("residential-tab-content-wrapper-v").style.display = "none";
        document.getElementById("commercial-tab-content-wrapper-v").style.display = "none";
        document.getElementById("shop-tab-content-wrapper-v").style.display = "none";
        document.getElementById("plot-tab-content-wrapper-v").style.display = "none";
    }
    if (btnName == "shopv") {
        document.getElementById("shop-tab-content-wrapper-v").style.display = "block";
        document.getElementById("residential-tab-content-wrapper-v").style.display = "none";
        document.getElementById("commercial-tab-content-wrapper-v").style.display = "none";
        document.getElementById("office-tab-content-wrapper-v").style.display = "none";
        document.getElementById("plot-tab-content-wrapper-v").style.display = "none";
    }
    if (btnName == "plotv") {
        document.getElementById("plot-tab-content-wrapper-v").style.display = "block";
        document.getElementById("residential-tab-content-wrapper-v").style.display = "none";
        document.getElementById("commercial-tab-content-wrapper-v").style.display = "none";
        document.getElementById("shop-tab-content-wrapper-v").style.display = "none";
        document.getElementById("office-tab-content-wrapper-v").style.display = "none";
    }

}

// *************range slider
(function() {

    var parent = document.querySelector(".range-slider2");
    if (!parent) return;

    var
        rangeS = parent.querySelectorAll("input[type=range]"),
        numberS = parent.querySelectorAll("input[type=number]");

    rangeS.forEach(function(el) {
        el.oninput = function() {
            var slide1 = parseFloat(rangeS[0].value),
                slide2 = parseFloat(rangeS[1].value);

            if (slide1 > slide2) {
                [slide1, slide2] = [slide2, slide1];
                // var tmp = slide2;
                // slide2 = slide1;
                // slide1 = tmp;
            }

            numberS[0].value = slide1;
            numberS[1].value = slide2;
        }
    });

    numberS.forEach(function(el) {
        el.oninput = function() {
            var number1 = parseFloat(numberS[0].value),
                number2 = parseFloat(numberS[1].value);

            if (number1 > number2) {
                var tmp = number1;
                numberS[0].value = number2;
                numberS[1].value = tmp;
            }

            rangeS[0].value = number1;
            rangeS[1].value = number2;

        }
    });

})();


// *******************range slider 2
(function() {

    var parent = document.querySelector(".range-slider");
    if (!parent) return;

    var
        rangeS = parent.querySelectorAll("input[type=range]"),
        numberS = parent.querySelectorAll("input[type=number]");

    rangeS.forEach(function(el) {
        el.oninput = function() {
            var slide1 = parseFloat(rangeS[0].value),
                slide2 = parseFloat(rangeS[1].value);

            if (slide1 > slide2) {
                [slide1, slide2] = [slide2, slide1];
                // var tmp = slide2;
                // slide2 = slide1;
                // slide1 = tmp;
            }

            numberS[0].value = slide1;
            numberS[1].value = slide2;
        }
    });

    numberS.forEach(function(el) {
        el.oninput = function() {
            var number1 = parseFloat(numberS[0].value),
                number2 = parseFloat(numberS[1].value);

            if (number1 > number2) {
                var tmp = number1;
                numberS[0].value = number2;
                numberS[1].value = tmp;
            }

            rangeS[0].value = number1;
            rangeS[1].value = number2;

        }
    });

})();

// **************



//  ***************************



function propertytypetext(type) {
    $('.residential-tab-content-area ul li button').on('click', function() {
        $('button.activecolor').removeClass('activecolor'); // to remove the current active tab
        $(this).addClass('activecolor'); // add active class to the clicked tab
    });

    if (type == "house") {
        document.getElementById("property_type").value = "House";

    }

    if (type == "guest_house") {
        document.getElementById("property_type").value = "Guest House";
    }
    if (type == "appartment") {
        document.getElementById("property_type").value = "appartment";
    }

    if (type == "upper_portion") {
        document.getElementById("property_type").value = "upper_portion";
    }

    if (type == "lower_portion") {
        document.getElementById("property_type").value = "lower_portion";
    }

    if (type == "farm_house") {
        document.getElementById("property_type").value = "farm_house";
    }

    if (type == "room") {
        document.getElementById("property_type").value = "room";
    }

    if (type == "penthouse") {
        document.getElementById("property_type").value = "penthouse";
    }
    if (type == "hotel_suite") {
        document.getElementById("property_type").value = "hotel_suite";
    }
    if (type == "basement") {
        document.getElementById("property_type").value = "basement";
    }

    if (type == "annexe") {
        document.getElementById("property_type").value = "annexe";
    }

    if (type == "hostel") {
        document.getElementById("property_type").value = "hostel";
    }
    // *************
    if (type == "residential_plot") {
        document.getElementById("property_type").value = "residential_plot";
    }
    if (type == "commercial_plot") {
        document.getElementById("property_type").value = "commercial_plot";
    }
    if (type == "agricultural_land") {
        document.getElementById("property_type").value = "agricultural_land";
    }
    if (type == "industrial_land") {
        document.getElementById("property_type").value = "industrial_land";
    }
    if (type == "plot_file") {
        document.getElementById("property_type").value = "plot_file";
    }
    if (type == "farmhouse_plot") {
        document.getElementById("property_type").value = "farmhouse_plot";
    }

    // ***************
    if (type == "Office") {
        document.getElementById("property_type").value = "Office";
    }

    if (type == "Shop") {
        document.getElementById("property_type").value = "Shop";
    }
    if (type == "Warehouse") {
        document.getElementById("property_type").value = "Warehouse";
    }

    if (type == "Factory") {
        document.getElementById("property_type").value = "Factory";
    }
    if (type == "Building") {
        document.getElementById("property_type").value = "Building";
    }
    if (type == "Gym") {
        document.getElementById("property_type").value = "Gym";
    }
    if (type == "Theatre") {
        document.getElementById("property_type").value = "Theatre";
    }
    if (type == "food_court") {
        document.getElementById("property_type").value = "food_court";
    }
    if (type == "Hall") {
        document.getElementById("property_type").value = "Hall";
    }
    if (type == "Land") {
        document.getElementById("property_type").value = "Land";
    }
    if (type == "Plaza") {
        document.getElementById("property_type").value = "Plaza";
    }

}