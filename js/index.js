$(document).ready(function(){
  console.log("av=bcd");

  $("#bed-search-filter").click(function(){
    $(this).find(".popup").toggle();
  });

  $("#price-search-filter").click(function(){
    $(this).find(".popup").toggle();
  });

  $("#more-search-filter").click(function(){
    $(this).find(".popup").toggle();
  });


  var curleftmap = $(".listings_map_column").css("left");
  console.log("curleftmap " + curleftmap);

  $("#map-toggle").click(function(){
    $(".map-multi-search").css("top","0");
    $(".map-multi-search").css("left","0");
    $(".map-multi-search").css("z-index","300");
    $(".listings_map_column").css("left","0");
  });

  $("#list-toggle").click(function(){
    $(".map-multi-search").css("top","0");
    $(".map-multi-search").css("left",curleftmap);
    $(".listings_map_column").css("left",curleftmap);
  });

  $(window).scroll(function() {
    if ( window.pageYOffset > 81) {
      $(".multi-search-block").css("position","fixed");
      $(".multi-search-block").css("top","0");
      $(".multi-search-block").css("z-index","200");
      $(".listings_map_column").css("top","100px");
      
    } else {
      $(".multi-search-block").css("position","relative");
      $(".listings_map_column").css("top","180px");
    }
  });
});