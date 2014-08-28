var jq = $.noConflict();


jq(document).ready(function(){ 
	
	backimagesources = jq('#allimages').val();
	backimagesources = backimagesources!= '' ? backimagesources.split(',') : '';

	var touch = jq('#touch-menu');
	var menu = jq('.menu');
	 
	jq(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	jq('.bxslider').bxSlider({
		mode: 'fade',
		captions: true,
		pager: false
	});
	
	/************************************/

		var options = { height: 0.8 };
		var winWidth = jq(window).width();
		var winHeight = jq(window).height();
		var totalwidth = 0;
		var thisliwidth = 0;

		jq('.slider li').each(function(){
			totalwidth = jq(this).width()+totalwidth;
			var thisliwidth = jq(this).width();
			var actindx = jq('.activeslide').index();	
			
			var thisindex = jq(this).index();
			var needleft = thisindex * thisliwidth;
			if(jq(this).index()== (actindx+1)){
				needleft = 350;
			}else{
				needleft = parseInt(needleft + 100);
			}
			if(jq(this).index()== actindx){
				jq(this).css({top:'0px',width:'350px'});
				var needleft = thisindex * thisliwidth;
			}

			needleft = parseInt(needleft + 300);
			jq(this).css({left:needleft});
			jq('img.reflected').css({ width: thisliwidth });

		}).promise().done( function(){ 
			jq('img.reflected').next().remove();
				
				jq(".slider ul li img").reflect(options); 
		});

		var liheight = jq('.slider li').height()+500;
		jq('.slider ul').css({width:totalwidth,height:liheight});



		jq('.slider li').click(function(){

			prevselectindex = jq('.activeslide').index();
			currselectindex = jq(this).index();
			
			jq('.activeslide').css({top:'20px',width:'250px'});
			jq(this).css({top:'0px',width:'350px'});

			jq('.slider li').removeClass('activeslide');
			jq(this).addClass('activeslide');
			var thisliwidth = 0;

			jq('.slider li').each(function(){

				var thiseachindex = jq(this).index();
				var actindx = jq('.activeslide').index();
				var thisliwidth = jq(this).width();

				thisindex = parseInt(thiseachindex-actindx);

				var needleft = thisindex * thisliwidth;
				if(jq(this).index()== (actindx+1)){
					needleft = 350;
				}else{
					needleft = parseInt(needleft + 100);
				}
				if(jq(this).index()== actindx){
					//$(this).css({top:'0px',width:'350px'});
					var needleft = thisindex * thisliwidth;
				}
				needleft = parseInt(needleft + 300);

				//var needleft = calcindex * thisliwidth;
				jq(this).css({ left: needleft });
				jq('img.reflected').css({ width: thisliwidth });

			}).promise().done( function(){ 
				//$(".slider ul li img").unreflect();+
				jq('img.reflected').next().remove();
				jq('.reflected').css({ width: thisliwidth });
				jq(".slider ul li img").reflect(options); 
			});

		});

	/***********************************/
	jq('.fancybox').fancybox(); 

	if(backimagesources){
		jq('#kenburns_overlay').css('width', jq(window).width() + 'px');
		jq('#kenburns_overlay').css('height', jq(window).height() + 'px');
		jq('#kenburns').attr('width', jq(window).width());
		jq('#kenburns').attr('height', jq(window).height());
		
		jq('#kenburns').kenburns({
			images:backimagesources,
			frames_per_second: 30,
			display_time: 6000,
			fade_time: 1000,
			zoom: 1.2,
			background_color:'#000000'
		});
	}	
	
});

jq(window).resize(function(){
	var w = jq(window).width();
	var h = jq(window).height();

	if(w > 768 && menu.is(':hidden')) {
		menu.removeAttr('style');
	}

	backimagesources = jq('#allimages').val();
	backimagesources = backimagesources!= '' ? backimagesources.split(',') : '';

	if(backimagesources){
		jq('#kenburns').remove();
		jq('#kenburns_overlay').remove();
		
		jq('body').append('<canvas id="kenburns"></canvas>');
		jq('body').append('<div id="kenburns_overlay"></div>');

	  	jq('#kenburns_overlay').css('width', w + 'px');
		jq('#kenburns_overlay').css('height', h + 'px');
		jq('#kenburns').attr('width', w);
		jq('#kenburns').attr('height', h);
		
		jq('#kenburns').kenburns({
			images:backimagesources,
			frames_per_second: 30,
			display_time: 6000,
			fade_time: 1000,
			zoom: 1.2,
			background_color:'#000000'
		});
	}
});