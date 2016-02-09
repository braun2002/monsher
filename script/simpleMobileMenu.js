(function ( $ ) {
 
    $.fn.smplmnu = function(options) {

    	//settings
    	var settings = $.extend({
            // These are the defaults.
            speed: "0.5s",
        }, options );


    	//vars
    	var hittrigger = $(this);
    	var clspos = hittrigger.next('ul');
    	var menutextcolor = hittrigger.next('ul li a');
    	var overllay = '<div class="overally"></div>';

    	//manipulating dom
    	hittrigger.addClass('inrwrpr');
    	clspos.addClass('inrwrpr');
    	$('.inrwrpr').wrapAll( "<div class='navwrp'>" );
    	clspos.prepend('<a href="javascript:void(0)" class="mnuclose ion-close-round" style="color: white !important;"><span>X</span></a>');
    	$('body').prepend(overllay);
    	
 		
 		//functions and methods
        hittrigger.click(function(event){
			hittrigger.next('ul').addClass('mobimenu');
		    $('.mobimenu').addClass('mnuopn');
		    $('.mnuopn').css({
		    	'z-index': '9999',
		    	'transition': settings.speed
		    });
		    $('.mnuopn a').css({
		    	'color': settings.textColor
		    });
		    $('.overally').addClass('ovrActv');
		});

        $('.mnuclose').click(function(event) {
			hittrigger.next('ul').removeClass('mnuopn');
			$('.overally').removeClass('ovrActv');
		});

		$('.overally').click(function(event) {
			clspos.removeClass('mnuopn');
			$(this).removeClass('ovrActv')
		});

		return this				
 
    };
 
}( jQuery ));