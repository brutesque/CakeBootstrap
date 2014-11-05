//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
	$('a.page-scroll').bind('click', function(event) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 500, 'easeInOutExpo');
		event.preventDefault();
	});
});

// Navigation Scripts to Show Header on Scroll-Up
jQuery(document).ready(function($) {
	var MQL = 768;
	
	//primary navigation slide-in effect
	if ($(window).width() > MQL) {
		var headerHeight = $('.navbar-scrolling').height();
		$(window).on('scroll', {
			previousTop: 0
		},
		function() {
			var currentTop = $(window).scrollTop();
			//check if user is scrolling up
			if (currentTop < this.previousTop) {
				//if scrolling up...
				if (currentTop > 0 && $('.navbar-scrolling').hasClass('is-fixed')) {
					$('.navbar-scrolling').addClass('is-visible');
				} else {
					$('.navbar-scrolling').removeClass('is-visible is-fixed').addClass('at-top');
				}
			} else {
				//if scrolling down...
				$('.navbar-scrolling').removeClass('is-visible');
				if (currentTop > headerHeight && !$('.navbar-scrolling').hasClass('is-fixed')) $('.navbar-scrolling').addClass('is-fixed').removeClass('at-top');
			}
			this.previousTop = currentTop;
		});
	}
});
