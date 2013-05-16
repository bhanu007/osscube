$(document).ready(function(){
	
	$('.fancybox').css({"display":"none"});
	$('.b1').click(function(){

		$('.fancybox').css({"display":"block"});

		$('.fancybox').css({"z-index":"999"});
		
	});
	
	
	$('#close').click(function(){

		$('.fancybox').css({"display":"none"});

	
		
	});
});