$(document).ready(function(){
	var movementStrength = 15;

	var height = movementStrength / $(window).height();

	$(window).scroll(function(e){
		var pos = $(window).scrollTop();
		$('.banner').css("background-position", "0px " + pos + "px");
	});
});
