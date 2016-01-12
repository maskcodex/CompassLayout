$(document).ready(function() {

    $("#bed-search-filter").click(function() {
        if ($(".bed-checklist").css("display") === "none") {
            hide_popup_all();
        }
        $(".bed-checklist").toggle();
    });

    $("#price-search-filter").click(function() {
        if ($('.price_selection').css("display") === "none") {
            hide_popup_all();
        }
        $('.price_selection').toggle();
    });

    $("#more-search-filter").click(function() {
        if ($(".features-filters").css("display") === "none") {
            hide_popup_all();
            $(".features-filters img").click(function(){
                $(".features-filters").hide();
            });
        }
        $(".features-filters").toggle();
    });

    var curleftmap = $(".listings_map_column").css("left");

    $("#map-toggle").click(function() {
        $(".map-multi-search").css("top", "0");
        $(".map-multi-search").css("left", "0");
        $(".listings_map_column").css("left", "0");
        disable_scroll();
    });

    $("#list-toggle").click(function() {
        $(".map-multi-search").css("top", "0");
        $(".map-multi-search").css("left", curleftmap);
        $(".listings_map_column").css("left", curleftmap);
        enable_scroll();
    });

    $(window).scroll(function() {
        if (window.pageYOffset > 81) {
            $(".multi-search-block").css("position", "fixed");
            $(".multi-search-block").css("top", "0");
        } else {
            $(".multi-search-block").css("position", "relative");
        }
    });

    $("#mobile-header-nav-icon").click(function() {
        var width = $(window).width(),
            left = width - 300 + 20;
        $("#mobile-header-nav").css("display", "block");

        $("#mobile-header-nav > ul").animate({
            left: left + "px",
        }, 100, 'linear', function() {
            // Animation complete.
        });
        disable_scroll();
    });

    $("#left-bg").click(function() {
        $("#mobile-header-nav > ul").animate({
            left: "100%",
        }, 300, 'linear', function() {
            $("#mobile-header-nav").css("display", "none");
        });
        enable_scroll();
    });

    $(".cancel-mobile-menu").click(function() {
        console.log("test");
        $("#mobile-header-nav > ul").animate({
            left: "100%",
        }, 300, 'linear', function() {
            $("#mobile-header-nav").css("display", "none");
        });
        enable_scroll();
    });

    $(".group-button li").click(function(event) {
        var clicked = $(this);
        var frame = clicked.attr('id');
        $(".group-button li").each(function() {
            $(this).removeClass("activated");
        });

        clicked.addClass("activated");

        $(".home-info-frame").each(function() {
            if ($(this).attr('for') !== frame) {
                $(this).fadeOut("fast");
            } else {
                $(this).fadeIn("fast");
            }
        });
    });

    $(".my-home-menu li").click(function(event) {
        var clicked = $(this);
        var frame = clicked.attr('id');
        $(".my-home-menu li").each(function() {
            $(this).removeClass("activated");
        });

        clicked.addClass("activated");

        $(".my-home-frame").each(function() {
            if ($(this).attr('for') !== frame) {
                $(this).fadeOut("fast");
            } else {
                $(this).fadeIn("fast");
            }
        });
    });

    $(".mobile-search-toggle").click(function(){
        var text = $(".mobile-search-toggle label").text() === "+" ? "x" : "+";
        $(".price-search").toggle();
        $(".more-search").toggle();
        $(".bed-search").toggle();
        $(".mobile-search-toggle label").text(text);
    });

});


function show_full() {
    $(".slider-full").css("left", "0");
    $(".cancel-full-slider").click(function() {
        $(".slider-full").css("left", "999999px");
    });
}

function disable_scroll() {
    $('html, body').css({
        'overflow': 'hidden',
        'height': '100%'
    });
}

function enable_scroll() {
    $('html, body').css({
        'overflow': 'auto',
        'height': 'auto'
    });
}

function hide_popup_all() {
    $(".popup").each(function() {
        $(this).hide();
    });
}


function sell_contact () {
    $('.first-home-info').hide();
    $('.sell-home-contact').show();
}

function viewmap() {
    $('body').append('<div class="map-full-page"><div class="cancel-fullmap" onclick="cancel_fullmap()"><img src="images/cancel-icon-dark.png"></div></div>');
    disable_scroll();
}

function cancel_fullmap () {
    $('.map-full-page').remove();
    enable_scroll();
}