// JavaScript Document
var jq = $.noConflict();
    jq(document).ready(function(){
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