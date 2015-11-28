$(document).ready(function(){
  $(".tabstep li").click(function(event) {
  		var clicked = $(this);
  		var frame = clicked.find("a").attr('class');
  	  $(".tabstep li").each(function() {
		  $(this).removeClass("activated");
		});

  	  clicked.addClass("activated");
  	  $(".step-content").each(function() {
  	  	  console.log($(this).attr('frame'));
  	  	  if( $(this).attr('frame') !== frame) {
  	  	  	$(this).fadeOut();	
  	  	  }else {
  	  	  	$(this).fadeIn();
  	  	  }
		});
	});

});