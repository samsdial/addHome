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
				dots: true
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true
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
});
