/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Header Search
4. Init Menu
5. Init Timer
6. Init Google Map


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = $('.header');
	var hamb = $('.hamburger');
	var menuActive = false;
	var menu = $('.menu');
	var map;

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initHeaderSearch();
	initMenu();
	initTimer();
	initGoogleMap();

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 100)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Header Search

	*/

	function initHeaderSearch()
	{
		if($('.search').length)
		{
			$('.search').on('click', function()
			{
				if($('.header_search_container').length)
				{
					$('.header_search_container').toggleClass('active');
				}
			});
		}
	}

	/* 

	4. Init Menu

	*/

	function initMenu()
	{
		if(hamb.length)
		{
			if(menu.length)
			{
				hamb.on('click', function()
				{
					if(menuActive)
					{
						closeMenu();
					}
					else
					{
						openMenu();
					}
				});	

				$('.menu_close').on('click', function()
				{
					if(menuActive)
					{
						closeMenu();
					}
					else
					{
						openMenu();
					}
				});
			}
		}
	}

	function closeMenu()
	{
		menu.removeClass('active');
		menuActive = false;
	}

	function openMenu()
	{
		menu.addClass('active');
		menuActive = true;
	}

	/* 

	5. Init Timer

	*/

	function initTimer()
	{
		if($('.timer').length)
    	{
    		// Uncomment line below and replace date
	    	// var target_date = new Date("April 7, 2018").getTime();

	    	// comment lines below
	    	var date = new Date();
	    	date.setDate(date.getDate() + 3);
	    	var target_date = date.getTime();
	    	//----------------------------------------
	 
			// variables for time units
			var days, hours, minutes, seconds;

			var d = $('#day');
			var h = $('#hour');
			var m = $('#minute');
			var s = $('#second');

			setInterval(function ()
			{
			    // find the amount of "seconds" between now and target
			    var current_date = new Date().getTime();
			    var seconds_left = (target_date - current_date) / 1000;
			 
			    // do some time calculations
			    days = parseInt(seconds_left / 86400);
			    seconds_left = seconds_left % 86400;
			     
			    hours = parseInt(seconds_left / 3600);
			    seconds_left = seconds_left % 3600;
			     
			    minutes = parseInt(seconds_left / 60);
			    seconds = parseInt(seconds_left % 60);

			    // display result
			    d.text(days);
			    h.text(hours);
			    m.text(minutes);
			    s.text(seconds); 
			 
			}, 1000);
    	}	
	}

	/* 

	6. Init Google Map

	*/

	function initGoogleMap()
	{
		var myLatlng = new google.maps.LatLng(41.1970, -174.9388);
    	var mapOptions = 
    	{
    		center: myLatlng,
	       	zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			draggable: true,
			scrollwheel: false,
			zoomControl: true,
			zoomControlOptions:
			{
				position: google.maps.ControlPosition.RIGHT_CENTER
			},
			mapTypeControl: false,
			scaleControl: false,
			streetViewControl: false,
			rotateControl: false,
			fullscreenControl: true,
			styles:
			[
			  {
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#f5f5f5"
			      }
			    ]
			  },
			  {
			    "elementType": "labels.icon",
			    "stylers": [
			      {
			        "visibility": "off"
			      }
			    ]
			  },
			  {
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#717171"
			      }
			    ]
			  },
			  {
			    "featureType": "administrative.land_parcel",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#bdbdbd"
			      }
			    ]
			  },
			  {
			    "featureType": "poi",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#eeeeee"
			      }
			    ]
			  },
			  {
			    "featureType": "poi",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#757575"
			      }
			    ]
			  },
			  {
			    "featureType": "poi.park",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#e5e5e5"
			      }
			    ]
			  },
			  {
			    "featureType": "poi.park",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#9e9e9e"
			      }
			    ]
			  },
			  {
			    "featureType": "road",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#ffffff"
			      }
			    ]
			  },
			  {
			    "featureType": "road.arterial",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#757575"
			      }
			    ]
			  },
			  {
			    "featureType": "road.highway",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#dadada"
			      }
			    ]
			  },
			  {
			    "featureType": "road.highway",
			    "elementType": "geometry.fill",
			    "stylers": [
			      {
			        "color": "#8d8d8d"
			      }
			    ]
			  },
			  {
			    "featureType": "road.highway",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#616161"
			      }
			    ]
			  },
			  {
			    "featureType": "road.local",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#9e9e9e"
			      }
			    ]
			  },
			  {
			    "featureType": "transit.line",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#e5e5e5"
			      }
			    ]
			  },
			  {
			    "featureType": "transit.station",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#eeeeee"
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "geometry",
			    "stylers": [
			      {
			        "color": "#c9c9c9"
			      }
			    ]
			  },
			  {
			    "featureType": "water",
			    "elementType": "labels.text.fill",
			    "stylers": [
			      {
			        "color": "#9e9e9e"
			      }
			    ]
			  }
			]
    	}

    	// Initialize a map with options
    	map = new google.maps.Map(document.getElementById('map1'), mapOptions);

    	// Use an image for a marker
		var image = 'images/marker.png';
		var marker = new google.maps.Marker(
		{
			position: new google.maps.LatLng(41.1970,-174.9388),
			map: map,
			icon: image
		});

		map.panBy(100, -40);
   
		// Re-center map after window resize
		google.maps.event.addDomListener(window, 'resize', function()
		{
			setTimeout(function()
			{
				google.maps.event.trigger(map, "resize");
				map.setCenter(myLatlng);
			}, 1400);
		});
	}

});