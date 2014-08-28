 


var jq = $.noConflict();							  
jq(document).ready(function(){ 
	jq('#kenburns_overlay').css('width', jq(window).width() + 'px');
	jq('#kenburns_overlay').css('height', jq(window).height() + 'px');
	jq('#kenburns').attr('width', jq(window).width());
	jq('#kenburns').attr('height', jq(window).height());
	jq(window).resize(function() {
		jq('#kenburns').remove();
		jq('#kenburns_overlay').remove();
		
		jq('body').append('<canvas id="kenburns"></canvas>');
		jq('body').append('<div id="kenburns_overlay"></div>');
	
	  	jq('#kenburns_overlay').css('width', jq(window).width() + 'px');
		jq('#kenburns_overlay').css('height', jq(window).height() + 'px');
		jq('#kenburns').attr('width', jq(window).width());
		jq('#kenburns').attr('height', jq(window).height());
		
			jq('#kenburns').kenburns({
			images:[
								'images/bg.jpg'
			,					'images/js-slideshow-0.jpg'
			,					'images/js-slideshow-1.jpg'
			,					'images/js-slideshow-2.jpg'
			,					'images/js-slideshow-3.jpg'
								],
			frames_per_second: 30,
			display_time: 6000,
			fade_time: 1000,
			zoom: 1.2,
			background_color:'#000000'
		});
	});
	jq('#kenburns').kenburns({
		images:[
						'images/bg.jpg'
		,				'images/js-slideshow-0.jpg'
		,				'images/js-slideshow-1.jpg'
		,				'images/js-slideshow-2.jpg'
		,				'images/js-slideshow-3.jpg'
						],
		frames_per_second: 30,
		display_time: 6000,
		fade_time: 1000,
		zoom: 1.2,
		background_color:'#000000'
	});	
	
	/*toggle*/
	var touch = jq('#touch-menu');
			var menu = jq('.menu');
			 
			jq(touch).on('click', function(e) {
			e.preventDefault();
			menu.slideToggle();
			});
			
			jq(window).resize(function(){
				var w = $(window).width();
				if(w > 767 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
   	 		});
				
});