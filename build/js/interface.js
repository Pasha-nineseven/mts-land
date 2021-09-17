$(document).ready(function() {
	$("body").on("click", ".accordeon-top-toggle", function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		$(this).parents('.landing-question__item').find('.accordeon-top').slideToggle();
	});
	//ACCORDEON
	$("body").on("click", ".accordeon__link", function(e){
		e.preventDefault();
		$(this).parents('.accordeon__item').toggleClass('active');
		$(this).next('.accordeon__info').slideToggle();
	});
	/*flexibility(document.documentElement);
	//SELECT-CUSTOM
	if ($('.fs').length>0) {
		setTimeout(function() {
		 	$('.fs').styler();
		}, 100)

	}*/


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
            infinite: true,
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


	

	//calc
	(function($) {
	    $.fn.inputFilter = function(inputFilter) {
	    	return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
		      	if (inputFilter(this.value)) {
		        	this.oldValue = this.value;
		        	this.oldSelectionStart = this.selectionStart;
		        	this.oldSelectionEnd = this.selectionEnd;
		      	} else if (this.hasOwnProperty("oldValue")) {
		        	this.value = this.oldValue;
		        	this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
		      	} else {
		        	this.value = "";
		      	}
	    	});
	    };
	}(jQuery));
	$(".landing-calc__item input").inputFilter(function(value) {
	    return /^\d*$/.test(value);
	});

	$('#smsAll').on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
		if(parseInt($(this).val())){
			$('#smsMts,#smsAnother').prop( "disabled", true );
		} else {$('#smsMts,#smsAnother').prop( "disabled", false );}
	});
	$('#smsMts,#smsAnother').on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
		if(parseInt($(this).val())){
			$('#smsAll').prop( "disabled", true );
		} else {$('#smsAll').prop( "disabled", false );}
	});


	$("body").on("click", "#totalCount", function(e){
		e.preventDefault();
		totalCount = 0;
		$(".landing-calc__item input").each(function(){
			if ($(this).attr("id") === "smsMts") {
				var smsMts = $(this).val()*0.019;
				totalCount += +smsMts;
			}
			if ($(this).attr("id") == "smsAnother") {
				var smsAnother = $(this).val()*0.021;
				totalCount += +smsAnother;
			}

			if ($(this).attr("id") == "smsAbroad") {
				var smsAbroad = $(this).val()*0.35;
				totalCount += +smsAbroad;
			}

			if ($(this).attr("id") == "serviceViber") {
				var serviceViber = $(this).val()*0.0115;
				totalCount += +serviceViber;
			}

			if ($(this).attr("id") == "advertisingViber") {
				var advertisingViber = $(this).val()*0.035;
				totalCount += +advertisingViber;
			}

			if ($(this).attr("id") == "smsAll") {
				var smsAll = $(this).val()*0.0204;
				totalCount += +smsAll;
			}
	    });

	    if (totalCount) {
	    	$('#landing-calc-in__total').text(totalCount.toFixed(3));
	    } else{
	    	$('#landing-calc-in__total').text(0);
	    }
	});




	$('#popup-form').validate({ // initialize the plugin
        rules: {
            EMAIL: {
                required: true,
                email: true
            },
            PHONE: {
                required: true,
                minlength: 5
            },
            NAME: {
                required: true,
                minlength: 5
            },
            NAME2: {
                required: true,
                minlength: 5
            }
        },
        messages: {
		    EMAIL: {
                required: "Обязательно к заполнению",
                email: "Пример name@domain.com"
            },
            PHONE: {
                required: "Обязательно к заполнению",
            },
            NAME: {
                required: "Обязательно к заполнению",
            },
            NAME2: {
                required: "Обязательно к заполнению",
            }
		 }
        // submitHandler: function (form) { // for demo
        //     alert('valid form submitted'); // for demo
        //     return false; // for demo
        // }
    });
});


$(window).resize(function () {

});

