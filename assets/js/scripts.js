// Scripts for Peera
(function($) {
$(document).ready(function() {
		"use strict";
   		

   		var color = ''
   		// Color select
   		color = $( "input#color" ).val( );
   		$( "#color"+color ).addClass("active");
   		
		$( "ul.color-list li" ).click(function() {
			
			$("ul.color-list li").each(function () {
			    $(this).removeClass("active");
			});

			$(this).addClass("active");
	   		color = $(this).attr('data')
	   		$( "input#color" ).val( color );
		});

		// Price Range
		$(function() {
			
			var minPrice = 100
			var maxPrice = 300

			var txtMinPrice = '~'
			var txtMaxPrice = '~'

			if( $( "#minPrice" ).val() != '' ){
				minPrice = $( "#minPrice" ).val();
				txtMinPrice = minPrice
			}

			if( $( "#maxPrice" ).val() != '' ){
				maxPrice = $( "#maxPrice" ).val();
				txtMaxPrice = maxPrice
			}

			$( "#slider-range" ).slider({
			  range: true,
			  min: 0,
			  max: 500,
			  values: [ minPrice, maxPrice ],
			  slide: function( event, ui ) {

			  	// Usuario selecionou preco minimo?
			  	if( minPrice != ui.values[ 0 ] ){
					$( "#minPrice" ).val( ui.values[ 0 ] );
					txtMinPrice = ui.values[ 0 ]
			  	}
			  	
			  	// Usuario selecionou preco maximo?
			  	if( maxPrice != ui.values[ 1 ] ){
					$( "#maxPrice" ).val( ui.values[ 1 ] );
					txtMaxPrice = ui.values[ 1 ]
				}


				$( "#amount" ).val( "R$ " + txtMinPrice + " - R$ " + txtMaxPrice );
			  }
			});

			// var txtMinPrice
			// if( minPrice != $( "#minPrice" ).val() ) {
			// 	txtMinPrice = '~'
			// }else{
			// 	txtMinPrice = $( "#minPrice" ).val()
			// }

			// $( "#amount" ).val( "R$" + txtMinPrice +
			//   " - R$" + $( "#slider-range" ).slider( "values", 1 ) );

			$( "#amount" ).val( "R$ " + txtMinPrice +
			  " - R$ " + txtMaxPrice );
		});
		  
		  
		  
   		
		// Modal Litebox
		$('#litebox').modal();
   
   
   
		// Parallax parameter
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 40,
			responsive:true
		});
		
		// Fixed Navigation
		// TODO: Desenvolver Barra do Usuario2
		/*
			$(window).on("scroll touchmove", function () {
			$('#nav').toggleClass('fixed-nav', $(document).scrollTop() > 75);
			$('.top-bar').toggleClass('topbar-margin', $(document).scrollTop() > 75);
			});
		*/
		$('#nav').toggleClass('fixed-nav');
		$('section:first').css('margin-top', '75px');
			
		
		// Fancybox - Litebox
		$(".fancybox").fancybox();
		
		// Form Toogle
		$("#show-form").click(function(){
			$("#register").slideToggle();
		});
		
		
		// OWL Carousels
		$('.carousel-trending').owlCarousel({
			loop:true,
	    	margin:0,
			autoplay:true,
			controls:true,
	    	responsiveClass:true,
	    	responsive:{
	       		0:{
	            items:1,
	            nav:false
	        	},
	        	767:{
	            items:2,
	            nav:false
	        	},
	        	959:{
	            items:3,
	            nav:true
	        	},
				1024:{
	            items:4,
	            nav:true
	        	}
	    	}
		});
	
	
		$('.aaacarousel-trending').owlCarousel({
			loop:true,
			margin:0,
			autoplay:true,
    		responsiveClass:true,
	    	responsive:{
	       		767:{
	            items:1,
	            nav:true
	        	},
	        	959:{
	            items:1,
	            nav:true
	        	},
	        	1169:{
	            items:3,
	            nav:true
	        	},
				1170:{
	            items:4,
	            nav:true
	        	}
	    	}
		});
		
		



		// Masonry Portfolio
		$(function(){
   			var $container = $('.grids-masonry ');
     		$container.imagesLoaded( function(){
	        	$container.masonry({
	         	  itemSelector : '.grids-masonry  li'
	         	});
       		});
     	});
		
		
		// Isotope works filter
		$(window).load(function(){
			var $container = $('.grids-masonry, .grids-spacing');
			$container.isotope({
				filter: '*',
				animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			   }
			});
	 
			$('.works-filter a').click(function(){
				$('.works-filter .current').removeClass('current');
				$(this).addClass('current');
		 
				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
					}
				});
				return false;
			}); 
		});

		
		
	});

	$("#tagbox-form-clean").click(function(event){
		event.preventDefault();
	    $( "#minPrice" ).val('')
	    $( "#maxPrice" ).val('')
		$( "#amount" ).val( "R$ ~ - R$ ~" );
	})


	$("a.eu-quero-link").each(function() {
		var href = $(this).attr("href");
		var target = $(this).attr("target");
		var text = $(this).text();
		$(this).click(function(event) { // when someone clicks these links
			event.preventDefault(); // don't open the link yet


			ga('send', 'event', { eventCategory: 'affiliate link', eventAction: 'Clicked', eventLabel: href});

			//_gaq.push(["_trackEvent", "Eu-Quero-Links", "Clicked", href, , false]); // create a custom event
			setTimeout(function() { // now wait 300 milliseconds...
				window.open(href,(!target?"_self":target)); // ...and open the link as usual
			},300);
		});
	});



	// Bind to the submit event of our form
	$("#home-form").submit(function(event){
	    
	    // Get the q value and trim it
	    var q = $.trim($('#q').val());

	    // Check if empty of not
	    if (q  === '') {
	        return false;
	    }

	})

	// Variable to hold loading status
	var loading = false
	function bindScroll(){
		if(loading == false && $(window).scrollTop() + $(window).height() > $(document).height() - 500) {
			//console.log( $(window).scrollTop() + " + " + $(window).height() +'_'+ ($(window).scrollTop() + $(window).height() ) + " > " + ($(document).height() - 100)+"_dif:"+ ( ($(document).height() - 500) - ($(window).scrollTop() + $(window).height() ) ) );
		   $(window).unbind('scrollTopl');
		   	loading = true
			// Adds +1 page
	        page = $('#page').val();
			$('#page').val( parseInt(page)+1 );

			$("#tagbox-form").submit();
		}
	}
	$(window).scroll(bindScroll);

	$( "#tagbox-form-submit" ).click(function(event) {
	    // Prevent default posting of form
	    event.preventDefault();

	    // update page title
	    $("div.title-box h2").html( 'Busca por: "' + $("#q").val() + '"' );

	    // reset page count
		$('#page').val( 0 );
		$("#tagbox-form").submit();
	});
    // $(document).keypress(function(event) {
    //       alert($(window).scrollTop() + " + " + $(window).height() +'_'+ ($(window).scrollTop() + $(window).height() ) + " > " + ($(document).height() - 100)+"_dif:"+ ( ($(document).height() - 500) - ($(window).scrollTop() + $(window).height() ) ));
    // });

	// Variable to hold request
	var request;

	// Bind to the submit event of our form
	$("#tagbox-form").submit(function(event){

	    // Abort any pending request
	    if (request) {
	        request.abort();
	    }
	    // setup some local variables
	    var $form = $(this);

	    // Let's select and cache all the fields
	    var $inputs = $form.find("input, select, button, textarea");

	    // Serialize the data in the form
	    var serializedData = $form.serialize();

	    // Let's disable the inputs for the duration of the Ajax request.
	    // Note: we disable elements AFTER the form data has been serialized.
	    // Disabled form elements will not be serialized.
	    $inputs.prop("disabled", true);

	    // Fire off the request to /form.php
	    request = $.ajax({
	        url: "buscar",
	        type: "post",
	        dataType: "html",
	        data: serializedData,
	        beforeSend: function(){
	        	$(".loading").removeClass("loading-dissapear");
	        	$(".loading").addClass("low-opacity");
	        }
	    });

	    // Callback handler that will be called on success
	    request.done(function (response, textStatus, jqXHR){
	        // Log a message to the console
	        //console.log("Hooray, it worked!");
	        if(response == 'end'){
	        	loading = true;
	        }else{
	        	if( $('#page').val() == 0 ) {
		        	$('#tagbox-products-content').html(response);
	        	}else{
		        	$('#tagbox-products-content').append(response);
	        	}
		        loading = false 
	        }
	        $(".loading").addClass("loading-dissapear");
	        $(".loading").removeClass("low-opacity");
	    });

	    // Callback handler that will be called on failure
	    request.fail(function (jqXHR, textStatus, errorThrown){
	        if (textStatus != "abort") {
	            $("#tagbox-form").submit();  // Try request again.
	        }
	        // Log the error to the console
	        // console.error(
	        //     "The following error occurred: "+
	        //     textStatus, errorThrown
	        // );
	    });

	    // Callback handler that will be called regardless
	    // if the request failed or succeeded
	    request.always(function () {
	        // Reenable the inputs
	        $inputs.prop("disabled", false);
	    });

	    // Prevent default posting of form
	    event.preventDefault();
	});


	$( "#primary_menu > li a.dropdown-toggle" ).click(function(event) {
		event.preventDefault();
	})

	// Hightlight active menu item
	$( "#primary_menu > li" ).each(function( index ) {
		var URI = $( this ).children().attr('href') + '/';
	    var parts = URI.split('/');
	    var firstPart = parts[3]
		
		//var firstPart = parts.pop() == '' ? parts[1] : parts.pop();
		//firstPart = firstPart == '' ? 'index' : firstPart;
		firstPart = firstPart == 'shop' ? 'search' : firstPart;
		
		// console.log(firstPart+' == '+ci_raction);
		//alert(firstPart + ' =P= ' + ci_uriaction)
		if(firstPart == ci_uriaction) {
			$( this ).addClass('active');
		}
	});

	//Scroll Up
	 $.scrollUp({
        animation: 'fade',
        activeOverlay: '#00FFFF',
        scrollImg: {
            active: true,
            type: 'background',
            src: '../images/top.png'
        }
    });
	// Toggle overlay
    $('#toggleActive').click(function () {
        $('#scrollUp-active').toggle();

        var text = $(this).text() == 'Hide activeOverlay' ? 'Show activeOverlay' : 'Hide activeOverlay';
        $(this)
            .text(text)
            .toggleClass('active');
    });
})(jQuery);

// Wow animations
	wow = new WOW(
		{
			animateClass: 'animated',
			offset:       100
		}
	);
	wow.init();
