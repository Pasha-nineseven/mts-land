$(document).ready(function() {
	flexibility(document.documentElement);


	// $("body").on("click", ".test", function(e){
	// 	e.preventDefault();
	// })

	//ACCORDEON
	$("body").on("click", ".accordeon__link", function(e){
		e.preventDefault();
		$(this).parents('.accordeon__item').toggleClass('active');
		$(this).next('.accordeon__info').slideToggle();
	});
	//SELECT-CUSTOM
	if ($('.fs').length>0) {
		setTimeout(function() {
		 	$('.fs').styler();
		}, 100)
		
	}


	if ($('#landing-contacts-select').length>0) {
		let cities = { 
			"Минск":"+375 (29) 777-68-69",
			"Брест":"+375 (29) 879-98-51",
			"Витебск":"+375 (29) 879-96-06",
			"Гомель":"+375 (29) 879-97-14",
			"Гродно":"+375 (15) 273-18-13",
			"Могилев":"+375 (29) 879-695-00",
		}
		$('#landing-contacts-select').on('change', function() {
		    var selectedCity =  $(this).find(":selected").val();

		    for(key in cities) {
		    	if (selectedCity == key) {
		    		$('.landing-contacts-number').text(cities[selectedCity]);
		    	}
			}
		});
	}

	//POPUP-INLINE
   	$('.js-popup-inline').magnificPopup({
		type: 'inline',
		removalDelay: 500,
		fixedContentPos: false,
		callbacks: {
			beforeOpen: function() {
				this.st.mainClass = this.st.el.attr('data-effect');
			},
			open: function(){
				$('body').addClass('noscroll');
		    },
		    close: function() {
                 $('body').removeClass('noscroll');
            }
		},
	});

	//SLIDER
	if ($( ".capabilities-slider" ).length>0) {
		var $cap = $('.capabilities-slider');

        $cap.slick({
            infinite: false,
            dots: true,
            arrows:true,
            slidesToShow: 4,
            slidesToScroll: 1,
            adaptiveHeight: false,
            responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
            		slidesToScroll: 1,
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 1,
            		slidesToScroll: 1,
            		arrows:true,
            		dots: false,
			      }
			    },
			]
        });

	};

});


$(window).resize(function () {

});

