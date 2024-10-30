(function($){

	"use strict";
	var x = 0;
	var item = jQuery('.bnp-container-news .bnp-item').length - 1;
	var totalX = item * 100;
	var sliderSpeed = document.querySelector("[js-bnp-sl-speed]").getAttribute("js-bnp-sl-speed");

	$('.bnp-container-news .bnp-item').css('right',  x + '%' );
	
	function slide(){
	setTimeout(function(){
		$('.bnp-container-news .bnp-item').css('right',  x + '%');
		
		x += 100;
		if( x > totalX ){
			x = 0;
		}
		slide();

	}, sliderSpeed);
	};
	 
	 slide();

})(jQuery)