$(document).ready(function(){
	
	property_query_data();
	
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
  
  $("#map-toggle").click(function(){
    $(".map-multi-search").css("top","0");
    $(".map-multi-search").css("left","0");
    $(".listings_map_column").css("left","0");
    disable_scroll();
	//property_query ();
	property_query_data ();
  });

  $("#list-toggle").click(function(){
    $(".map-multi-search").css("top","0");
    //$(".map-multi-search").css("left",curleftmap);
    $(".listings_map_column").css("left",curleftmap);
    enable_scroll();
	//property_query ();
	property_query_data ();
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
    //console.log("test");
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

    $(".mobile-search-toggle").click(function(){
        var text = $(".mobile-search-toggle label").text() === "+" ? "x" : "+";
        $(".price-search").toggle();
        $(".more-search").toggle();
        $(".bed-search").toggle();
        $(".mobile-search-toggle label").text(text);
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

function initialize() {
  property_query_data();
}

function property_query (number_post) {

	$.ajax({
		url : ajaxurl,
		type : 'post',
		data : {
			'action' : 'ajax_property_query',
			'number_post' : number_post,
			
		},
		success : function( data ) {
			//console.log(data);
			$('.listing-results').html(data);
		},
        error: function(errorThrown){
            console.log(errorThrown);
        }
		});
	
}

function property_query_data (number_post) {
	var paged = $('.listing-results').data('paged');
	var orderString = $('.search_results_sort_by option:selected').val();

	var bedList = $('.bed-list');
	var bedArray = [];
	for( var i = 0; i<bedList.length; i++) {
		if (bedList[i].checked == true) {
			bedArray.push(bedList[i].value);
		}
	}
	var bedArrayString = bedArray.join(",");
	
	
	var priceMin = $('.priceMin').val();
	var priceMax = $('.priceMax').val();
	
	console.log(bedArrayString);
	$.ajax({
		url : ajaxurl,
		type : 'post',
		data : {
			'action' : 'ajax_property_query_data',
			'number_post' : number_post,
			'paged'	: paged,
			'orderby' : orderString,		
			'bedArray' : bedArrayString,
			'priceMin' : priceMin,
			'priceMax' : priceMax,
		},
		success : function( data ) {
			data = JSON.parse(data);
			console.log(data);
			
			$('.listing-results').html(data[0]);
			$('.search_results_stats').html(data[1]);
			$('.buy-navigation').html(data[2]);
			var mapProp = {
				center:new google.maps.LatLng(40.7748,-73.9617),
				zoom:10,
				mapTypeId:google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			for (var x = 3; x<data.length; x++) {
					
				var myCenter= new google.maps.LatLng(data[x][7],data[x][8]);
				var marker=new google.maps.Marker({
					position:myCenter,
					icon: templateDir+'/images/pin67 (2).png'
				});		
				marker.setMap(map);
			}
		},
        error: function(errorThrown){
            console.log(errorThrown);
        }
		});
	
}

function sell_contact () {
    $('.first-home-info').hide();
    $('.sell-home-contact').show();
}

function searchOrderChanged() {
	var orderString = $('.search_results_sort_by option:selected').val();
	//console.log(orderString);
	//console.log('selected changed' +  orderString);	
	property_query_data();
}

function bedFilterChanged() {
	
	var bedList = $('.bed-list');
	var bedArray = [];
	for( var i = 0; i<bedList.length; i++) {
		if (bedList[i].checked == true) {
			//console.log(bedList[i].value);
			bedArray.push(bedList[i].value);
			console.log(bedArray);
		}
	}
	
	property_query_data();
}

function priceFilterChanged() {
	var priceMin = $('.priceMin').val();
	console.log(priceMin);
	var priceMax = $('.priceMax').val();
	console.log(priceMax);
	
	property_query_data();
}