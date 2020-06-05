(function($){
	$(document).ready(function(){
		
		
		$('.owl-carousel').owlCarousel({
			loop: true,
			nav: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1
				}
			}
		});
		jQuery('.slider-items2').slick({
			autoplay: true,
			autoplaySpeed: 2000,
			centerMode: false,
			loop: true,
			//   centerPadding: '60px',
			slidesToShow: 5,
			responsive: [{
					breakpoint: 768,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '40px',
						slidesToShow: 3
					}
				},
				{
					breakpoint: 480,
					settings: {
						arrows: false,
						centerMode: true,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		});
		var container = document.querySelector('.gallery');
		var mixer = mixitup(container, {
			selectors: {
				control: '[our-mix-control]'
			}
		});





		// 		jQuery(".work-menu a").click(function( event ) {
		//   event.preventDefault();

		// });		

		jQuery(' a[href^="#"]').click(function (event) {
			event.preventDefault();
			var hash = this.hash;
			jQuery('html, body').animate({
				scrollTop: jQuery(hash).offset().top -61.5833
			}, 800);

		});		
		



		// smooth scroll
		// var scroll = new SmoothScroll('.navbar a[href*="#"]', {
		//             speed: 1000,
		//             speedAsDuration: true
		//         });
		// 	
		jQuery('.menu>.navbar>.navbar-nav>li').click(function () {
			jQuery(this).addClass('active').siblings().removeClass('active');
		});


		// navbar smooth scroll
		// jQuery('.navbar-nav a[href^="#"]').click(function(){

		// });


		// scroll top
		jQuery('.top').click(function () {
			jQuery('html, body').animate({
				scrollTop: 0,
			}, 1000);
		});

		jQuery(window).scroll(function () {
			var ourWindow = jQuery(this).scrollTop();
			if (ourWindow < 500) {
				jQuery('.top').fadeOut();

			} else {
				jQuery('.top').fadeIn();
			}

			if (ourWindow > 100) {
				jQuery('body').addClass('fixed');

			} else {
				jQuery('body').removeClass('fixed');
			}
		});


		// Wow js
		WOW.prototype.addBox = function (element) {
			this.boxes.push(element);
		};

		// Init WOW.js and get instance
		var wow = new WOW();
		wow.init();

		// Attach scrollSpy to .wow elements for detect view exit events,
		// then reset elements and add again for animation
		jQuery('.wow').on('scrollSpy:exit', function () {
			jQuery(this).css({
				'visibility': 'hidden',
				'animation-name': 'none'
			}).removeClass('animated');
			wow.addBox(this);
		}).scrollSpy();

			alert('Shakil Hossain');
		});
		

})(jQuery);


