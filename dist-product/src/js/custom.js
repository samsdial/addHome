var $ = jQuery;
$(document).ready(function () {
    $('.box-benefit-slider').slick({
    	infinite: false,
    	slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				dots: true,
				arrows: false,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,

			}
		}
		]
	});
	//result
	$('.box-result-slider').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});
	//js-slider
	$('.js-slider').slick();
	$('.js-home-slider').slick({
		dots: true,
		arrows: false,
		fade: true,
		cssEase: 'linear'
	});
	//js-slider-offer
	$('.js-slider-offer').slick({
		dots: false,
		arrows: true,
		fade: true,
		cssEase: 'linear'
	});
	$('.js-slider-work').slick({
		dots: false,
		arrows: false,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 20000,
		infinite: true,
	});
	$('#js-modal-mensaje').click(function() {
		$('#js-mesaje').removeClass('d-none');
	})
});
