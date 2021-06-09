var $ = jQuery.noConflict();

$(document).ready(function () {

	// HEADER FIXED //
	$(window).bind('scroll', function () {
		if ($(window).scrollTop() > 75) {
			$('.header').addClass('fixed');
			$('.menu-bar').addClass('show');
		} else {
			$('.header').removeClass('fixed');
			$('.menu-bar').removeClass('show');
		}
	});

	// MENU MOBILE //
	$(".menu-bar").click(function () {
		$(this).toggleClass('active');
		$('.header').toggleClass('active');
		$('body').toggleClass('overflow');
	});
	$(".burger .close").click(function () {
		$('.header').removeClass('active');
		$('body').toggleClass('overflow');
	});

	// SLIDE BANNER HOME //
	$('.slider').slick({
		dots:false,
		infinite:true,
		autoplaySpeed:4000,
		speed:1000,
		arrows:false,
		autoplay:true,
		pauseOnHover:true,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true
	});
	
	new WOW({mobile:false}).init();

	// SLIDE LOGO //
	if($(window).width()<1201) {
		$('.slide-partenaire').slick({
			dots:false,
			infinite:true,
			autoplaySpeed:4000,
			speed:1000,
			arrows:false,
			autoplay:true,
			pauseOnHover:true,
			centerMode: true,
			variableWidth: true,
			responsive: [
				{
				  breakpoint: 1200,
				  settings: {
					slidesToShow: 4,
					slidesToScroll: 1
				  }
				},
				{
					breakpoint: 992,
					settings: {
					  slidesToShow: 3,
					  slidesToScroll: 1
					}
				},
				{
					breakpoint: 768,
					settings: {
					  slidesToShow: 2,
					  slidesToScroll: 1
					}
				}
				,
				{
					breakpoint: 600,
					settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1
					}
				}
			]
		});
	}

	// PARALLAX EFFECT
	var winScrollTop = 0;
	$.fn.is_on_screen = function () {
		var win = $(window);
		var viewport = {
			top: win.scrollTop(),
			left: win.scrollLeft()
		};
		//viewport.right = viewport.left + win.width();
		viewport.bottom = viewport.top + win.height();

		var bounds = this.offset();
		//bounds.right = bounds.left + this.outerWidth();
		bounds.bottom = bounds.top + this.outerHeight();

		return (!(viewport.bottom < bounds.top || viewport.top > bounds.bottom));
	};

	/* Paralax Effet */
	function parallax() {
		var scrolled = $(window).scrollTop();
		$('#section3').each(function () {

			if ($(this).is_on_screen()) {
				var firstTop = $(this).offset().top;
				var $expertise1 = $(this).find(".img-expertise1");
				var $expertise2 = $(this).find(".img-expertise2");
				var $expertise3 = $(this).find(".img-expertise3");
				var moveTop = (firstTop - winScrollTop) * 0.1 //speed//;
				var moveBottom = (firstTop - winScrollTop) * 0.2;
				var moveMiddle = (firstTop - winScrollTop) * (-0.2);
				$expertise1.css("transform", "translateY(" + -moveTop + "px)");
				$expertise2.css("transform", "translateY(" + -moveBottom + "px)");
				$expertise3.css("transform", "translateY(" + -moveMiddle + "px)");
			}

		});
	}

	$(window).scroll(function (e) {
		winScrollTop = $(this).scrollTop();
		parallax();
	});
});