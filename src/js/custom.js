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
	$('#myModal').modal('show')
});

// let n1 = 11
// let n2 = 22

// if ( n1 > n2){
// 	console.log('n1 es mayor')
// } else {
// 	console.log('n2 es mayor')
// }
