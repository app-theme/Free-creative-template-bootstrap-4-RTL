$(document).ready(function(){
	"use strict"; // Start of use strict
	$('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				  var target = $(this.hash);
				  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				  if (target.length) {
					$('html, body').animate({
					  scrollTop: (target.offset().top - 56)
					}, 1000, "easeInOutExpo");
					return false;
				  }
				}
			  });

			  // Closes responsive menu when a scroll trigger link is clicked
			  $('.js-scroll-trigger').click(function() {
				$('.navbar-collapse').collapse('hide');
			  });

			  // Activate scrollspy to add active class to navbar items on scroll
			  $('body').scrollspy({
				target: '#mainNav',
				offset: 56
			  });

	});
	$(window).scroll(function()
			{
			if($(document).scrollTop()>50)
			{
			$('.s-menu').addClass('fixed-top');
			}
			else
			{
			$('.s-menu').removeClass('fixed-top');
			}
			}
			
			);
			
		
			
		
				