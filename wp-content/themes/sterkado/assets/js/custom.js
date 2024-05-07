jQuery(document).ready(function ($) {

	$(document).on('click', '.yes-no-form .primary-btn', function(event) {
		event.preventDefault();
		$('.contact-form-box').show();
	});

	$(document).on('click', '.yes-no-form .ghost-btn', function(event) {
		event.preventDefault();
		$('.contact-form-box').hide();
	});
	
	if(jQuery('#readtime').length > 0){
	  readingTime();
	}
	  

	function readingTime() {
	    let text = jQuery('.blog_content_detail_section').text();
	    const wpm = 225;
	    const words = text.trim().split(/\s+/).length;
	    const time = Math.ceil(words / wpm);
	    jQuery('#readtime').text(time);
	}


	$('#sharelink').on('click', function () {
		window.navigator.clipboard.writeText($(this).data('href'));
		$(this).text('Gekopieerd');
	})


	$('.news_chat_button').on('click', function (e) {
		e.preventDefault();
		jQuery("#zsiq_float").click();
	});

	$('a[href*=\\#]:not([href=\\#])').on('click', function () {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
		if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top - 160
			}, 1000);
			return false;
		}
	});

	$('a#vraagform').on('click', function () {
		$('html,body').animate({
			scrollTop: $('#form-box').offset().top - 80
		}, 1000);
		return false;
	});

	$('.collapse').on('shown.bs.collapse', function () {
		$(this).parents('.card').addClass('active-acc');
	});

	$('.collapse').on('hidden.bs.collapse', function () {
		$(this).parents('.card').removeClass('active-acc');
	});

	/*if ($('#sterkado_news_lists').length > 0) {
		news_ajax_call();
	}*/

	jQuery('#faqs_search_form').on('submit', function (e) {
		e.preventDefault();
		var search_val = jQuery('input[name="faqs_search_input"]').val();
		jQuery(".faqs_search_loader").show();
		jQuery.ajax({
			type: 'POST',
			dataType: 'html',
			url: custom_params.my_ajax_url,
			data: ({
				action: "faq_search_callback",
				val: search_val,
			}),
			success: function (response) {
				jQuery(".faqs_search_loader").hide();

				jQuery('#faq_list_row').html(response);
				jQuery(".faqs_search_btn_reset").show();
			},
		});
	});
	jQuery('.faqs_search_btn_reset').on('click', function (e) {
		e.preventDefault();
		jQuery('input[name="faqs_search_input"]').val("");
		var search_val = "";
		$(".faqs_search_loader").show();
		jQuery.ajax({
			type: 'POST',
			dataType: 'html',
			url: custom_params.my_ajax_url,
			data: ({
				action: "faq_search_callback",
				val: search_val,
			}),
			success: function (response) {
				$(".faqs_search_loader").hide();
				$('#faq_list_row').html(response);
			},//
		});
	});

	$(".product_cat_filter").select2({
		closeOnSelect: true,
		placeholder: "Kies gelegenheid",
		allowHtml: true,
		allowClear: true,
		// tags: true 
	});
	if ($('#ajax_product_gifts_list').length > 0) {
		gifts_ajax_call();
	}
	$('#ajax_product_gifts_list_wrapper').on('click', '.pagination a', function (e) {
		e.preventDefault();
		var posttype = jQuery('input[name="bg_posttype"]').val();
		var term = jQuery('input[name="bg_term"]').val();

		var selected_val = $('.product_cat_filter').val();
		var bg_cat;
		if (selected_val) {
			bg_cat = selected_val;
		} else {
			bg_cat = jQuery('input[name="bg_cat"]').val();
		}

		$("#product_list_loader").show();
		$this = $(this);
		$page = parseInt($this.attr('href').replace(/\D/g, ''));
		jQuery.ajax({
			type: "POST",
			dataType: 'json',
			url: custom_params.my_ajax_url,
			data: ({
				action: "product_cat_filter_call_back",
				'cat': bg_cat,
				'page': $page,
				'posttype': posttype,
				'term': term,
				security: custom_params.gift_security
			}),
			success: function (response) {
				$(".product_list_loader").hide();
				$('#ajax_product_gifts_list').html(response.data.html);
				var ppp = parseInt(jQuery('input[name="bg_paged"]').val());
				$('html, body').animate({
					scrollTop: $("#ajax_product_gifts_list").offset().top
				}, 800, function () {
				});

			},
		});

	});
	function gifts_ajax_call() {
		var posttype = jQuery('input[name="bg_posttype"]').val();
		var term = jQuery('input[name="bg_term"]').val();
		var paged = parseInt(jQuery('input[name="bg_paged"]').val());
		var bg_cat = jQuery('input[name="bg_cat"]').val();
		$("#product_list_loader").show();
		jQuery.ajax({
			type: "POST",
			dataType: 'json',
			url: custom_params.my_ajax_url,
			data: ({
				action: "product_cat_filter_call_back",
				page: paged,
				posttype: posttype,
				term: term,
				cat: bg_cat,
				security: custom_params.gift_security

			}),
			success: function (response) {
				$("#product_list_loader").hide();
				$('#ajax_product_gifts_list').html(response.data.html);
				var ppp = parseInt(jQuery('input[name="bg_paged"]').val());
			},
		});
	}
	$(document).on('change', '.product_cat_filter', function () {
		var selected_val = $(this).val();
		var this_el = $(this);
		var posttype = jQuery('input[name="bg_posttype"]').val();
		var term = jQuery('input[name="bg_term"]').val();

		var paged = parseInt(jQuery('input[name="bg_paged"]').val());
		$("#product_list_loader").show();
		jQuery.ajax({
			type: "POST",
			dataType: 'json',
			url: custom_params.my_ajax_url,

			data: ({
				action: "product_cat_filter_call_back",
				cat: selected_val,
				page: paged,
				posttype: posttype,
				term: term,
				security: custom_params.gift_security
			}),
			success: function (response) {
				$(".product_list_loader").hide();
				$('#ajax_product_gifts_list').html(response.data.html);
				var ppp = parseInt(jQuery('input[name="bg_paged"]').val());
			},
		});
	});

	/* Get Inspired modal */
	$(document).on('click', '.modal-btn', function (event) {
		event.preventDefault();
		var product_id = $(this).data("id");
		var page_id = $(this).data("page_id");
		$("#product_popop_loader_" + product_id).show();
		var price_status;
		// $("#product_popop_loader_" + product_id ).show();
		// if (jQuery(this).hasClass("no_price")) {
		// 	price_status = 0;
		// } else {
		// 	price_status = 1;
		// }

		
		$.ajax({
			type: "POST",
			url: custom_params.my_ajax_url,
			data: {
				action: "get_inspired_popup_callback",
				id: product_id,
				page_id: page_id,
			},
			dataType: "html",
			success: (response) => {
				$("#product_popop_loader_" + product_id).hide();
				jQuery("#get_inspired_cascade_window").html(response);

				if (response) {
					$('#get_inspired_details_modal').modal('show');

					const buttonElement = document.querySelectorAll('.themapakketten_popup_section .tablinks');
					const tabContent = document.querySelectorAll(".themapakketten_popup_section .tabcontent");
					
					tabContent[0].style.height = "auto";
					
					buttonElement.forEach(function (i) {
						i.addEventListener('click', function (event) {
							// $('.images_thumb_slider_col').removeClass('slick-initialized');
							// $('.images_slider_col').removeClass('slick-initialized');
							// modal_slider_initialize();
							$('.slick-slider').resize();

							for (let x = 0; x < buttonElement.length; x++) {
								if (event.target.id == buttonElement[x].id) {
									buttonElement[x].className = buttonElement[x].className.replace(" active", "");
									tabContent[x].style.height = "auto";
									event.currentTarget.className += " active";
								} else {
									tabContent[x].style.height = "0";
									buttonElement[x].className = buttonElement[x].className.replace(" active", "");
									
								}
							}
							
						});
					});
					$('.images_thumb_slider_col').removeClass('slick-initialized');
					$('.images_slider_col').removeClass('slick-initialized');
					modal_slider_initialize();

				}
			}
		});
	});


	$(document).on('click', '.product_details_btn', function (event) {
		event.preventDefault();
		var product_id = $(this).data("product_id");
		var page_id=$('body').data("id");
		var price_status;
		$("#product_popop_loader_" + product_id).show();
		if (jQuery(this).hasClass("no_price")) {
			price_status = 0;
		} else {
			price_status = 1;
		}
		if (jQuery(this).parents("section").hasClass("themapakketten")) {
			price_text = 1;
		} else {
			price_text = 0;
		}
		$.ajax({
			type: "POST",
			url: custom_params.my_ajax_url,
			data: {
				action: "product_details_popup_callback",
				id: product_id,
				page_id : page_id,
				price_status: price_status,
				price_text: price_text
			},
			dataType: "html",
			success: (response) => {
				$("#product_popop_loader_" + product_id).hide();
				jQuery("#product_quickview_cascade_window").html(response);

				if (response) {
					$('#product_details_modal').modal('show');
					jQuery('.product_gallery_slider').slick('refresh');
				}
			}
		});
		jQuery('.product_gallery_slider').slick('refresh');
	});

	jQuery('.moments-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 1,

		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		responsive: [
			{
				breakpoint: 1699,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				}
			},
			{
				breakpoint: 1600,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				}
			},
			{
				breakpoint: 1366,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				}
			},
			{
				breakpoint: 1250,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				}
			},
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					infinite: true,
					dots: false
				}
			},
			{
				breakpoint: 768,
				settings: {
					rows: 2,
					slidesPerRow: 2,
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					rows: 2,
					slidesPerRow: 1,
					slidesToShow: 2,
					slidesToScroll: 1
				}
			}
		]
	});
	
	// jQuery('.content_slider_slides').slick({
	// 	dots: false,
	// 	infinite: false,
	// 	speed: 300,
	// 	slidesToShow: 2.7,
	// 	slidesToScroll: 1,
	// 	prevArrow: '<div class="slick-prev"></div>',
	// 	nextArrow: '<div class="slick-next"></div>',
	// 	responsive: [
	// 		{
	// 			breakpoint: 1600,
	// 			settings: {
	// 				slidesToShow: 2.7,
	// 				slidesToScroll: 1,
	// 				infinite: false,
	// 				dots: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 1366,
	// 			settings: {
	// 				slidesToShow: 2.2,
	// 				slidesToScroll: 1,
	// 				infinite: false,
	// 				dots: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 1250,
	// 			settings: {
	// 				slidesToShow: 2.2,
	// 				slidesToScroll: 1,
	// 				infinite: false,
	// 				dots: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 1025,
	// 			settings: {
	// 				slidesToShow: 2.2,
	// 				slidesToScroll: 1,
	// 				infinite: false,
	// 				dots: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 992,
	// 			settings: {
	// 				slidesToShow: 2,
	// 				slidesToScroll: 1,
	// 				infinite: false,
	// 				dots: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 768,
	// 			settings: {
	// 				slidesToShow: 2,
	// 				slidesToScroll: 1
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 480,
	// 			settings: {
	// 				slidesToShow: 2,
	// 				slidesToScroll: 1
	// 			}
	// 		}
	// 	]
	// });

	jQuery('.logo-slider').slick({
		speed: 4000,
		autoplay: true,
		autoplaySpeed: 0,
		centerMode: true,
		cssEase: 'linear',
		slidesToShow: 5,
		slidesToScroll: 1,
		variableWidth: true,
		infinite: true,
		initialSlide: 5,
		arrows: false,
		buttons: false,
		pauseOnHover:false,
	});

	// jQuery('.content_filter_slider_slides').slick({
	// 	dots: false,
	// 	infinite: false,
	// 	speed: 300,
	// 	slidesToShow: 2.3,
	// 	slidesToScroll: 1,
	// 	prevArrow: '<div class="slick-prev"></div>',
	// 	nextArrow: '<div class="slick-next"></div>',
	// 	onReInit: function () {
	// 		$('.content_filter_slider_slides').slickGoTo(0); // this doesnt work after slickFilter
	// 	},
	// 	responsive: [
	// 		{
	// 			breakpoint: 1600,
	// 			settings: {
	// 				slidesToShow: 2.2,
	// 				slidesToScroll: 1,
	// 				infinite: false,
	// 				dots: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 1366,
	// 			settings: {
	// 				slidesToShow: 2.2,
	// 				slidesToScroll: 1,
	// 				infinite: false,
	// 				dots: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 1250,
	// 			settings: {
	// 				slidesToShow: 2.2,
	// 				slidesToScroll: 1,
	// 				infinite: false,
	// 				dots: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 1025,
	// 			settings: {
	// 				slidesToShow: 2.2,
	// 				slidesToScroll: 1,
	// 				infinite: false,
	// 				dots: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 992,
	// 			settings: {
	// 				slidesToShow: 2,
	// 				slidesToScroll: 1,
	// 				infinite: false,
	// 				dots: false
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 768,
	// 			settings: {
	// 				slidesToShow: 2,
	// 				slidesToScroll: 1
	// 			}
	// 		},
	// 		{
	// 			breakpoint: 480,
	// 			settings: {
	// 				slidesToShow: 2,
	// 				slidesToScroll: 1
	// 			}
	// 		}
	// 	]
	// });


	// jQuery('.content_filter_slider_slides').slickLightbox({
	// 	src: 'src',
	// 	itemSelector: '.slide-item img',
	// 	background: 'rgba(0, 0, 0, .7)'
	// });

	// jQuery('.section-content_with_filter_slider .content-slides-filters .filter li').on('click', function () {
	// 	jQuery('.section-content_with_filter_slider .content-slides-filters .filter li').removeClass("active");
	// 	jQuery(this).addClass("active");
	// 	var filter = jQuery(this).data("filter");
	// 	jQuery('.content_filter_slider_slides').slick('slickUnfilter');
	// 	jQuery('.content_filter_slider_slides').slick('slickGoTo', 0);
	// 	if (filter == 'all') {
	// 		jQuery('.content_filter_slider_slides').slick('slickUnfilter');
	// 	} else if (filter != 'all') {

	// 		jQuery(".content_filter_slider_slides").slick('slickFilter', '.' + filter);


	// 	}
	// });


	$('.filtertab').click(function(){
        var tabFilter = $(this).data('filter');
        $('.filtertab').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').removeClass('active');
        $('.slidebox.' + tabFilter).addClass('active');
    });

	jQuery('.customized-carousel').each(function( index ) {
		if($( this ).find('.customize-item').length > 1){
			$( this ).slick({
				speed: 1000,
				autoplay: false,
				autoplaySpeed: 0,
				centerMode: false,
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				initialSlide: 0,
				arrows: true,
				buttons: false
			});
		}
	});


	if($('.carousel-custom-item').length > 0){
		$( '.carousel_slider' ).slick({
			speed: 1000,
			autoplay: false,
			autoplaySpeed: 0,
			centerMode: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			initialSlide: 0,
			arrows: true,
			buttons: false,
		});
	}

	if($('#client-reviews-carousel').length > 0 && $(window).width() <= 768){
		$( '#client-reviews-carousel' ).slick({
			speed: 1000,
			autoplay: false,
			autoplaySpeed: 0,
			centerMode: false,
			slidesToShow: 1.2,
			slidesToScroll: 1,
			infinite: false,
			initialSlide: 0,
			arrows: true,
			buttons: false
		});
	}


	jQuery('.gift_card_gallery_1').slick({
		speed: 4000,
		autoplay: true,
		autoplaySpeed: 0,
		centerMode: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		variableWidth: true,
		infinite: true,
		initialSlide: 1,
		arrows: false,
		buttons: false
	});
	jQuery('.gift_card_gallery_2').slick({
		speed: 5000,
		autoplay: true,
		autoplaySpeed: 0,
		centerMode: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		variableWidth: true,
		infinite: true,
		initialSlide: 1,
		arrows: false,
		buttons: false
	});


	jQuery('.get-inspired-wrapper').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		// prevArrow: '<div class="slick-prev"></div>',
		// nextArrow: '<div class="slick-next"></div>',
		responsive: [
			{
				breakpoint: 1600,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: false,
					dots: false
				}
			},
			{
				breakpoint: 1366,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: false,
					dots: false
				}
			},
			{
				breakpoint: 1250,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: false,
					dots: false
				}
			},
			{
				breakpoint: 1025,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: false,
					dots: false
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2.2,
					slidesToScroll: 1,
					infinite: false,
					dots: false
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2.2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1.2,
					slidesToScroll: 1
				}
			}
		]
	});


	var menu = new MmenuLight(
		document.querySelector('#menu'),
		'all'
	);

	var navigator = menu.navigation({
		selectedClass: 'Selected',
		slidingSubmenus: true,
		// theme: 'dark',
		// title: 'Menu'
	});

	var drawer = menu.offcanvas({
		// position: 'left'
	});
	//	Open the menu.
	jQuery('a[href="#menu"]').click(function (evnt) {
		evnt.preventDefault();
		if (jQuery("body").hasClass("mm-ocd-opened")) {
			drawer.close();
		} else {
			drawer.open();
		}
	});

	jQuery('.mm-spn--navbar li a.dropdown-toggle').on('click', function (e) {
		jQuery(this).parent().click();
	});

	$('.menu-list-box.vertical-menu .mega-menu-item-type-widget.widget_sp_image').each(function() {
        var link = $(this).find('a').attr('href');
        var title = $(this).find('a').attr('title');
        var rel = $(this).find('a').attr('rel');
        $(this).find('h4').wrapInner('<a href="' + link + '" target="_self" title="'+ title +'" rel="'+ rel +'"></a>');
    });


    // jQuery(".multichoice").select2({
    // 	closeOnSelect: true,
    // 	multiple: true,
    // 	// tags: true 
    // });
});


/*jQuery(window).scroll(function ($) {
	if (jQuery(this).scrollTop() > 0) {
		jQuery('.header-wrapper').addClass('fixed-header');
	} else {
		jQuery('.header-wrapper').removeClass('fixed-header');
	}
});*/

jQuery(window).scroll(function ($) {
    
    var scroll = jQuery(this).scrollTop();

    var scrollHeader = 200;
    var scrollForm = 1350;
    var scrollAssortNav = 420;

    if(!jQuery('body').hasClass('page-template-tpl-vraag-demo-aan')){
    	if (scroll > scrollHeader) {
    	    jQuery('.header-wrapper').addClass('fixed-header');
    	} else {
    	    jQuery('.header-wrapper').removeClass('fixed-header');
    	}	
    }
    

    if (scroll > scrollForm) {
        jQuery('body').addClass('show-form-widget');
    } else {
        jQuery('body').removeClass('show-form-widget');
    }

    if (scroll > scrollAssortNav) {
        jQuery('body').addClass('sticky-assort-nav');
    } else {
        jQuery('body').removeClass('sticky-assort-nav');
    }
});


jQuery(window).scroll(function () {
	var windscroll = jQuery(window).scrollTop();
	var scrollHeader = 200;
	var reviewsection = jQuery("#review_section_1").offset().top;
	if(jQuery('body').hasClass('page-template-tpl-vraag-demo-aan')){
		if(jQuery(window).width() > 1022){
			if (windscroll >= reviewsection - 200 ) {
		        jQuery('.header-wrapper').addClass('fixed-header');
		    } else {
		    	jQuery('.header-wrapper').removeClass('fixed-header');
		    }
		}else{
			if (windscroll > scrollHeader) {
			    jQuery('.header-wrapper').addClass('fixed-header');
			} else {
			    jQuery('.header-wrapper').removeClass('fixed-header');
			}
		}
	}

}).scroll();


jQuery(document).on('gform_post_render', function (event, form_id, current_page) {
	if (form_id == 5) {
		jQuery('#input_5_38_3').attr("siqatrib", "firstname");
		jQuery('#input_5_38_6').attr("siqatrib", "lastname");
		jQuery('#input_5_11').attr("siqatrib", "company");
		jQuery('#input_5_14').attr("siqatrib", "phone");
		jQuery('#input_5_13').attr("siqatrib", "email");
	}

	if (form_id == 6) {
		jQuery('#input_6_16_3').attr("siqatrib", "firstname");
		jQuery('#input_6_16_6').attr("siqatrib", "lastname");
		jQuery('#input_6_6').attr("siqatrib", "company");
		jQuery('#input_6_8').attr("siqatrib", "email");
	}
	if (form_id == 9) {
		jQuery('#input_9_16_3').attr("siqatrib", "firstname");
		jQuery('#input_9_16_6').attr("siqatrib", "lastname");
		jQuery('#input_9_6').attr("siqatrib", "company");
		jQuery('#input_9_9').attr("siqatrib", "phone");
		jQuery('#input_9_8').attr("siqatrib", "email");
	}
});

// blog detail page sider bar active

jQuery(document).ready(function () {
	jQuery(".sidebar-list").click(function () {
		var is_open = jQuery(this).hasClass("open");
		if (is_open) {
			jQuery(this).removeClass("open");
		} else {
			jQuery(this).addClass("open");
		}
	});

	jQuery(".side-mobile").click(function () {

		var selected_value = jQuery(this).html();
		var first_li = jQuery(".side-mobile:first-child").html();

		jQuery(".side-mobile:first-child").html(selected_value);
		jQuery(this).html(first_li);

	});

	jQuery(document).mouseup(function (event) {

		var target = event.target;
		var select = jQuery(".sidebar-list");

		if (!select.is(target) && select.has(target).length === 0) {
			select.removeClass("open");
		}

	});
});
jQuery(window).scroll(function () {
	var windscroll = jQuery(window).scrollTop();
	if (windscroll >= 100) {
		jQuery('.sroll-div').each(function (i) {
			if (jQuery(this).position().top <= windscroll - 450) {
				jQuery('.sidebar-list li.active').removeClass('active');
				jQuery('.sidebar-list li').eq(i).addClass('active');
			}
		});

	} else {

		jQuery('.sidebar-list li.active').removeClass('active');
		jQuery('.sidebar-list li:first').addClass('active');
	}

}).scroll();


/*Assortment Page Scroll Code */

jQuery(window).scroll(function () {
	var windscroll = jQuery(window).scrollTop();
	if (windscroll >= 100) {
		jQuery('.assortiment-section').each(function (i) {
			if (jQuery(this).position().top <= windscroll - 450) {
				jQuery('.assort-moment-nav .assort-moment-card.active').removeClass('active');
				jQuery('.assort-moment-nav .assort-moment-card').eq(i).addClass('active');
			}
		});

	} else {

		jQuery('.assort-moment-nav .assort-moment-card.active').removeClass('active');
		jQuery('.assort-moment-nav .assort-moment-card:first').addClass('active');
	}

}).scroll();


jQuery(window).load(function() {
	modal_slider_initialize();	
});

function modal_slider_initialize(){
	jQuery( ".tabcontent" ).each(function() {
    var count = jQuery(this).find('.images_slider_col div').length;
   

	if(count>1){
	jQuery(this).find('.images_slider_col').slick({
		dots: true,
		infinite: true,
		speed: 800,
		autoplay: true,
  		autoplaySpeed: 2000,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		
	});
	jQuery(this).find('.images_thumb_slider_col').slick({
		dots: false,
		infinite: true,
		speed: 800,
		autoplay: true,
  		autoplaySpeed: 2000,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		responsive: [
			{
				breakpoint: 1280,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
		
	});
	}
		});
	jQuery('.single-job .section-latest_news.section-application-pricess .latest-news-wrapper').slick({
		dots: false,
		infinite: true,
		speed: 800,
		autoplay: true,
  		autoplaySpeed: 3000,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		responsive: [
			{
				breakpoint: 9999,
				settings: "unslick"
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
		
	});

}


var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};