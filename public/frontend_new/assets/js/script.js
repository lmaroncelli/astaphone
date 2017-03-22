/*
Theme: Flatfy Theme
Author: Andrea Galanti
Bootstrap Version 
Build: 1.0
http://www.andreagalanti.it
*/

$(window).load(function() { 
	//Preloader 
	$('#status').delay(300).fadeOut(); 
	$('#preloader').delay(300).fadeOut('slow');
	$('body').delay(550).css({'overflow':'visible'});
})

$(document).ready(function() {
		//animated logo
		$(".navbar-brand").hover(function () {
			$(this).toggleClass("animated shake");
		});
		
		//animated scroll_arrow
		$(".img_scroll").hover(function () {
			$(this).toggleClass("animated infinite bounce");
		});
		
		//Wow Animation DISABLE FOR ANIMATION MOBILE/TABLET
		wow = new WOW(
		{
			mobile: false
		});
		wow.init();
		

		//MagnificPopup
		$('.image-link').magnificPopup({type:'image'});
		$('.popup-youtube').magnificPopup({type:'iframe'});
		
		
		// OwlCarousel N2
		$("#owlf").owlCarousel({
				items:1,
				responsiveClass:true,
				nav:true,
				/*autoWidth:true*/

		});

		// OwlCarousel N2
		$("#owlc").owlCarousel({
			items:1,
			responsiveClass:true,
			nav:true,
			/*autoWidth:true*/

		});

		// carosel prodotti shopping
		$("#owlshopping").owlCarousel({
			  responsiveClass:true,
			  // breakpoint from 1300 up
			  autoWidth:false,
			  autoHeight: false,
			  nav:true,
		     responsive:{
			  0:{
			        items:1
			    },
			   // breakpoint from 1300 up
			  768:{
			        items:2
			    },
			  // breakpoint from 1300 up
			  1000:{
			        items:3
			    },
			  
			  1100:{
			        items:4
			    },
			  1200:{
			        items:5
			    },
			   1300:{
			        items:6
			    }
			}
		});

		// carosel footer
		$("#owlfooter").owlCarousel({
			responsiveClass:true,
			 center: false,
		     loop:false,
		     nav:true,
		     autoWidth:false,
		     responsive:{
		         0:{
		             items:1
		         },

				900: {
					 items:2
				},		         

		         1200:{
		             items:3
		         },

		         1400:{
		             items:4
		         },

		         1600:{
		             items:5
		         }

		     }
		});
		



		//SmothScroll
		$('a[href*=#]').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
			&& location.hostname == this.hostname) {
					var $target = $(this.hash);
					$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
					if ($target.length) {
							var targetOffset = $target.offset().top-140;
							$('html,body').animate({scrollTop: targetOffset}, 600);
							return false;
					}
			}
		});
		
		//Subscribe
		/*new UIMorphingButton( document.querySelector( '.morph-button' ) );
		// for demo purposes only
		[].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
			bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
		} );*/

});

