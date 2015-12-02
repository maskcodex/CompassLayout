$(document).ready(function(){

  $("#bed-search-filter").click(function(){
    if ($(this).find(".popup").css("display") === "none") {
      hide_popup_all();
    }
    $(this).find(".popup").toggle();
  });

  $("#price-search-filter").click(function(){
    if ($(this).find(".popup").css("display") === "none") {
      hide_popup_all();
    }
    $(this).find(".popup").toggle();
  });

  $("#more-search-filter").click(function() {

    if ($(this).find(".popup").css("display") === "none") {
      hide_popup_all();
    }
    $(this).find(".popup").toggle();
    
  });

  var curleftmap = $(".listings_map_column").css("left");
  
  $("#map-toggle").click(function(){
    $(".map-multi-search").css("top","0");
    $(".map-multi-search").css("left","0");
    $(".listings_map_column").css("left","0");
    disable_scroll();
  });

  $("#list-toggle").click(function(){
    $(".map-multi-search").css("top","0");
    $(".map-multi-search").css("left",curleftmap);
    $(".listings_map_column").css("left",curleftmap);
    enable_scroll();
  });

  $(window).scroll(function() {
    if ( window.pageYOffset > 81) {
      $(".multi-search-block").css("position","fixed");
      $(".multi-search-block").css("top","0");
    } else {
      $(".multi-search-block").css("position","relative");
    }
  });

  $("#mobile-header-nav-icon").click(function(){
    console.log("test");
    var width = $( window ).width(),
        left = width - 280 + 20;
    $("#mobile-header-nav").css("display","block");

    $("#mobile-header-nav > ul").animate({
        left: left +"px", 
      }, 100,'linear', function() {
        // Animation complete.
      });
      disable_scroll();
  });

    $("#left-bg").click(function(){
      $("#mobile-header-nav > ul").animate({
          left: "100%",
        }, 300,'linear', function() {
          $("#mobile-header-nav").css("display","none");
        });
        enable_scroll();
    });
});


function show_full () {
    $(".slider-full").css("left","0");
    $(".cancel-full-slider").click(function(){
      $(".slider-full").css("left","999999px");
    });
}

function disable_scroll() {
    $('html, body').css({
        'overflow': 'hidden',
        'height': '100%'
    });
}

function enable_scroll () {
  $('html, body').css({
      'overflow': 'auto',
      'height': 'auto'
  });
}

function hide_popup_all () {
  $(".popup").each(function() {
        $(this).hide();
  });
}