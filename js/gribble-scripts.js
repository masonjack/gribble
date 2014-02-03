$(document).ready(function(){
	var movementStrength = 15;

	var height = movementStrength / $(window).height();

	$(window).scroll(function(e){
		var pos = $(window).scrollTop();
		var backgroundPositions = $('.banner').css("background-position").split(" ");

		$('.banner').css("background-position", backgroundPositions[0] + " " + pos + "px");
	});
});
