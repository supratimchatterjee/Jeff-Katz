(function($) {
	
	"use strict";
	
	
	//Hide Loading Box (Preloader)
	function handlePreloader() {
		if($('.preloader').length){
			$('.preloader').delay(200).fadeOut(500);
		}
	}



	
	
		
	//Update Header Style and Scroll to Top
	function headerStyle() {
		if($('.main-header').length){
			var windowpos = $(window).scrollTop();
			var siteHeader = $('.main-header');
			var scrollLink = $('.scroll-to-top');
			if (windowpos >= 200) {
				siteHeader.addClass('fixed-header');
				scrollLink.fadeIn(300);
			} else {
				siteHeader.removeClass('fixed-header');
				scrollLink.fadeOut(300);
			}
		}
	}
	
	headerStyle();

	
	// Sticky header
	function stickyHeader() {
	    if ($('.main-header').length) {
	        var sticky = $('.main-header'),
	            scroll = $(window).scrollTop();

	        if (scroll >= 265) sticky.addClass('fixed-header');
	        else sticky.removeClass('fixed-header');

	    };
	}

	
	
	//Submenu Dropdown Toggle
	if($('.main-header .navigation li.dropdown ul').length){
		$('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
		
		//Dropdown Button
		$('.main-header .navigation li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});
		
		//Disable dropdown parent link
		$('.main-header .navigation li.dropdown > a,.hidden-bar .side-menu li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
	}
	
	
	//Revolution Slider
	if($('.main-slider .tp-banner').length){
		
		var MainSlider = $('.main-slider');
		var strtHeight = MainSlider.attr('data-start-height');
		var slideOverlay =  "'"+ MainSlider.attr('data-slide-overlay') +"'";
		
		$('.main-slider .tp-banner').show().revolution({
		  dottedOverlay: slideOverlay,
		  delay:10000,
		  startwidth:1200,
		  startheight:strtHeight,
		  hideThumbs:600,

		  thumbWidth:80,
		  thumbHeight:50,
		  thumbAmount:5,

		  navigationType:"bullet",
		  navigationArrows:"0",
		  navigationStyle:"preview3",

		  touchenabled:"on",
		  onHoverStop:"off",

		  swipe_velocity: 0.7,
		  swipe_min_touches: 1,
		  swipe_max_touches: 1,
		  drag_block_vertical: false,

		  parallax:"mouse",
		  parallaxBgFreeze:"on",
		  parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

		  keyboardNavigation:"off",

		  navigationHAlign:"center",
		  navigationVAlign:"bottom",
		  navigationHOffset:0,
		  navigationVOffset:40,

		  soloArrowLeftHalign:"left",
		  soloArrowLeftValign:"center",
		  soloArrowLeftHOffset:0,
		  soloArrowLeftVOffset:0,

		  soloArrowRightHalign:"right",
		  soloArrowRightValign:"center",
		  soloArrowRightHOffset:0,
		  soloArrowRightVOffset:0,

		  shadow:0,
		  fullWidth:"on",
		  fullScreen:"off",

		  spinner:"spinner4",

		  stopLoop:"off",
		  stopAfterLoops:-1,
		  stopAtSlide:-1,

		  shuffle:"off",

		  autoHeight:"off",
		  forceFullWidth:"on",

		  hideThumbsOnMobile:"on",
		  hideNavDelayOnMobile:1500,
		  hideBulletsOnMobile:"on",
		  hideArrowsOnMobile:"on",
		  hideThumbsUnderResolution:0,

		  hideSliderAtLimit:0,
		  hideCaptionAtLimit:0,
		  hideAllCaptionAtLilmit:0,
		  startWithSlide:0,
		  videoJsPath:"",
		  fullScreenOffsetContainer: ""
	  });

	}
	
	//LightBox / Fancybox
	if($('.lightbox-image').length) {
		$('.lightbox-image').fancybox({
			openEffect  : 'fade',
			closeEffect : 'fade',
			helpers : {
				media : {}
			}
		});
	}
	
	
	//Fact Counter + Text Count
	if($('.count-box').length){
		$('.count-box').appear(function(){
	
			var $t = $(this),
				n = $t.find(".count-text").attr("data-stop"),
				r = parseInt($t.find(".count-text").attr("data-speed"), 10);
				
			if (!$t.hasClass("counted")) {
				$t.addClass("counted");
				$({
					countNum: $t.find(".count-text").text()
				}).animate({
					countNum: n
				}, {
					duration: r,
					easing: "linear",
					step: function() {
						$t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function() {
						$t.find(".count-text").text(this.countNum);
					}
				});
			}
			
		},{accY: 0});
	}
	
	
	//Progress Bar
	if($('.progress-line').length){
		$('.progress-line').appear(function(){
			var el = $(this);
			var percent = el.data('width');
			$(el).css('width',percent+'%');
		},{accY: 0});
	}

	
	//Sponsors Carousel One
	if ($('.sponsors-carousel-one').length) {
		$('.sponsors-carousel-one').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1000:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});    		
	}
	
	
	//Sponsors Carousel Two
	if ($('.sponsors-carousel-two').length) {
		$('.sponsors-carousel-two').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				800:{
					items:4
				},
				1024:{
					items:4
				},
				1200:{
					items:5
				}
			}
		});    		
	}
	
	
	//Team Carousel
	if ($('.team-carousel').length) {
		$('.team-carousel').owlCarousel({
			loop:true,
			margin:30,
			nav:true,
			smartSpeed: 500,
			autoplay: true,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:2
				},
				1024:{
					items:3
				},
				1200:{
					items:3
				}
			}
		});    		
	}
	
	
	// Testimonial Carousel With Thumbs
	if ($('.testimonial-carousel-one .carousel-content').length && $('.testimonial-carousel-one .carousel-pager').length) {

		var $sync1 = $(".testimonial-carousel-one .carousel-content"),
			$sync2 = $(".testimonial-carousel-one .carousel-pager"),
			flag = false,
			duration = 500;

			$sync1
				.owlCarousel({
					loop:false,
					items: 1,
					margin: 0,
					nav: false,
					navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
					dots: false,
					autoplay: true,
					autoplayTimeout: 5000
				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = false;
						$sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});

			$sync2
				.owlCarousel({
					loop:false,
					margin: 50,
					items: 1,
					nav: true,
					navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
					dots: false,
					center: false,
					autoplay: true,
					autoplayTimeout: 5000,
					responsive: {
						0:{
				            items:1,
				            autoWidth: false
				        },
				        400:{
				            items:1,
				            autoWidth: false
				        },
				        600:{
				            items:1,
				            autoWidth: false
				        },
				        1000:{
				            items:3,
				            autoWidth: false
				        },
				        1200:{
				            items:3,
				            autoWidth: false
				        }
				    },
				})
				
		.on('click', '.owl-item', function () {
			$sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
		})
		.on('changed.owl.carousel', function (e) {
			if (!flag) {
				flag = true;		
				$sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
				flag = false;
			}
		});

	}
	
	
	//Single Item Slider
	if ($('.single-item-carousel').length) {
		$('.single-item-carousel').owlCarousel({
			loop:true,
			mouseDrag:true,
			margin:10,
			nav:true,
			smartSpeed: 700,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});    		
	}
	
	
	//Gallery Carousel
	if ($('.gallery-carousel').length) {
		$('.gallery-carousel').owlCarousel({
			loop:true,
			mouseDrag:true,
			margin:0,
			nav:true,
			smartSpeed: 700,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				800:{
					items:2
				},
				1024:{
					items:3
				},
				1200:{
					items:3
				},
				1400:{
					items:3
				}
			}
		});    		
	}
	
	
	//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			
			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			
			if($(this).hasClass('active')!==true){
				$('.accordion .acc-btn').removeClass('active');
			}
			
			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);	
			}
		});	
	}
	
	
	//Contact Form Validation
	if($('#contact-form').length){
		$('#contact-form').validate({
			rules: {
				username: {
					required: true
				},
				email: {
					required: true,
					email: true
				},
				subject: {
					required: true
				},
				message: {
					required: true
				}
			}
		});
	}
	
	
	// Scroll to a Specific Div
	if($('.scroll-to-target').length){
		$(".scroll-to-target").on('click', function() {
			var target = $(this).attr('data-target');
		   // animate
		   $('html, body').animate({
			   scrollTop: $(target).offset().top
			 }, 1500);
	
		});
	}





	function swithcerMenu () {
	  if ($('.switch_menu').length) {

	    $('.switch_btn button').on('click', function(){
	      $('.switcher').toggleClass("open");	   
	    });

	    $("#myonoffswitch").on('click', function(){
	        $(".main-header").toggleClass("menu_fixed");
        	$(".main-header").toggleClass("fixed");

	    });

	    $("#boxed").on('click', function(){
	      $(".layout_changer").addClass("home_boxed");
	    });
	    $("#full_width").on('click', function(){
	      $(".layout_changer").removeClass("home_boxed");
	    });
	    $(".bg1").on('click', function(){
	      $(".home_boxed").addClass("bg1");
	      $(".home_boxed").removeClass("bg2 bg3 bg4");
	    });
	    $(".bg2").on('click', function(){
	      $(".home_boxed").addClass("bg2");
	      $(".home_boxed").removeClass("bg1 bg3 bg4");
	    });
	    $(".bg3").on('click', function(){
	      $(".home_boxed").addClass("bg3");
	      $(".home_boxed").removeClass("bg2 bg1 bg4");
	    });
	    $(".bg4").on('click', function(){
	      $(".home_boxed").addClass("bg4");
	      $(".home_boxed").removeClass("bg2 bg3 bg1");
	    });


	    $('#styleOptions').styleSwitcher({
	        hasPreview: true,
	        fullPath: 'css/custom/',
	         cookie: {
	          expires: 30,
	          isManagingLoad: true
	      }
	    });

	  };
	}


	function galleryMasonaryLayout() {
	    if ($('.masonary-layout').length) {
	        $('.masonary-layout').isotope({
	            layoutMode: 'masonry'
	        });
	    }

	    if ($('.post-filter').length) {
	        $('.post-filter li').children('span').click(function() {
	            var Self = $(this);
	            var selector = Self.parent().attr('data-filter');
	            $('.post-filter li').children('span').parent().removeClass('active');
	            Self.parent().addClass('active');


	            $('.filter-layout').isotope({
	                filter: selector,
	                animationOptions: {
	                    duration: 500,
	                    easing: 'linear',
	                    queue: false
	                }
	            });
	            return false;
	        });
	    }

	    if ($('.post-filter.has-dynamic-filter-counter').length) {
	        // var allItem = $('.single-filter-item').length;

	        var activeFilterItem = $('.post-filter.has-dynamic-filter-counter').find('li');

	        activeFilterItem.each(function() {
	            var filterElement = $(this).data('filter');
	            console.log(filterElement);
	            var count = $('.gallery-content').find(filterElement).length;

	            $(this).children('span').append('<span class="count"><b>' + count + '</b></span>');
	        });
	    };
	}



	if ($('.tool_tip').length) {
			$('.tool_tip').tooltip();
		};
	$

	//Jquery Spinner / Quantity Spinner
	if($('.quantity-spinner').length){
		$("input.quantity-spinner").TouchSpin({
		  verticalbuttons: true
		});
	}
		//Price Range Slider
	if($('.range-slider-price').length){

		var priceRange = document.getElementById('range-slider-price');

		noUiSlider.create(priceRange, {
			start: [ 30, 300 ],
			limit: 1000,
			behaviour: 'drag',
			connect: true,
			range: {
				'min': 10,
				'max': 500
			}
		});

		var limitFieldMin = document.getElementById('min-value-rangeslider');
		var limitFieldMax = document.getElementById('max-value-rangeslider');

		priceRange.noUiSlider.on('update', function( values, handle ){
			(handle ? limitFieldMax : limitFieldMin).value = values[handle];
		});
	}

		//Product Tabs
	if($('.prod-tabs .tab-btn').length){
		$('.prod-tabs .tab-btn').on('click', function(e) {
			e.preventDefault();
			var target = $($(this).attr('href'));
			$('.prod-tabs .tab-btn').removeClass('active-btn');
			$(this).addClass('active-btn');
			$('.prod-tabs .tab').fadeOut(0);
			$('.prod-tabs .tab').removeClass('active-tab');
			$(target).fadeIn(500);
			$(target).addClass('active-tab');
		});

	}
	
	// Elements Animation
	if($('.wow').length){
		var wow = new WOW(
		  {
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       0,          // distance to the element when triggering the animation (default is 0)
			mobile:       true,       // trigger animations on mobile devices (default is true)
			live:         true       // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();
	}


/* ==========================================================================
   When document is ready, do
   ========================================================================== */
	
	$(window).on('ready', function() {
		swithcerMenu();
	});

	/* ==========================================================================
   When document is Scrollig, do
   ========================================================================== */
	
	$(window).on('scroll', function() {
		stickyHeader();
		headerStyle();

	});
	
/* ==========================================================================
   When document is loading, do
   ========================================================================== */
	
	$(window).on('load', function() {
		handlePreloader();
		swithcerMenu();
		galleryMasonaryLayout();
	});
	
/* ==========================================================================
   When document is resize, do
   ========================================================================== */
	
	$(window).on('resize', function() {
		galleryMasonaryLayout();
	});
	

	

})(window.jQuery);