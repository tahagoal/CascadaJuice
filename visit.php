<?php
    /*
        Template Name: Visit
    */
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
</head>

<body id="body" class="no_scroll">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light bg-dark" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="home.html">
                <span class="flaticon-gavel">
                    <img src="<?php bloginfo('template_url'); ?>/cas_log.png" alt="logo"> </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item active">
                        <a href="/visit" class="nav-link">Visit us</a>
                    </li>
                    <li class="nav-item">
                        <a href="/menu" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="/careers" class="nav-link">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="ftco-cover overlay" id="section-home">
        <div class="slider" id="slider">
        	<div class="background_hero_visit">
        		<div class="container hero_container">
        			<div class="row">
        				<div class="col-sm-6">
        					<h1 data-aos="fade-up" style="letter-spacing: 4px;">Visit us</h1>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
    </section>

    <section class="ftco-section-2 why_us">
        <div class="container-fluid">
            <div class="section-2-blocks-wrapper row no-gutters">
                <div class="col-md-8 offset-2">
                    <div class="text-inner center align-self-start" data-aos="fade-up">
                    	<p class="white-text" align="center">
                            <?php echo the_field("short_text") ?>
                    	</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-2 maps_section">
        <div class="container" id="counter_visit">
            <div class="row">
                <div class="col-md-2 offset-1" data-aos="fade-up">
                    <div class="media block-6 d-block text-center">
                        <div class="icon mb-4">
                        	<img src="<?php bloginfo('template_url'); ?>/Cascada Icons-01.png">
                        </div>
                        <div class="media-body">
                            <h3 class="heading">
                                <span class="count">Cozy</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" data-aos="fade-up">
                    <div class="media block-6 d-block text-center">
                        <div class="icon mb-4">
                        	<img src="<?php bloginfo('template_url'); ?>/Cascada Icons-02.png">
                        </div>
                        <div class="media-body">
                            <h3 class="heading">
                                <span class="count">Homey</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" data-aos="fade-up">
                    <div class="media block-6 d-block text-center">
                        <div class="icon mb-4">
                        	<img src="<?php bloginfo('template_url'); ?>/Cascada Icons-03.png">
                        </div>
                        <div class="media-body">
                            <h3 class="heading">
                                <span class="count">Comfortable</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" data-aos="fade-up">
                    <div class="media block-6 d-block text-center">
                        <div class="icon mb-4">
                        	<img src="<?php bloginfo('template_url'); ?>/Cascada Icons-04.png">
                        </div>
                        <div class="media-body">
                            <h3 class="heading">
                                <span class="count">No smoking</span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" data-aos="fade-up">
                    <div class="media block-6 d-block text-center">
                        <div class="icon mb-4">
                        	<img src="<?php bloginfo('template_url'); ?>/Cascada Icons-05.png">
                        </div>
                        <div class="media-body">
                            <h3 class="heading">
                                <span class="count">No TV</span>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-2 why_us">
        <div class="container-fluid">
            <div class="section-2-blocks-wrapper row no-gutters">
                <div class="col-md-8 offset-2">
                    <h2 class="why_title center mb-3">
                        WATCH!
                    </h2>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                    
                    <?php 
                        $counter = 0;
                        while( have_rows('gallery') ): the_row(); 
                        // vars
                        $image = get_sub_field('image');
                    ?>
                        <div class="carousel-item <?php if($counter == 0) echo("active") ?>">
                            <img class="center" width="80%" src="<?php echo $image['url']; ?>">
                          
                        </div>
                    <?php
                        $counter ++; 
                        endwhile; 
                    ?>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-2 maps_section">
        <div class="container-fluid">
            <div class="section-2-blocks-wrapper row no-gutters">
                <div class="col-sm-6">
 					<img src="<?php bloginfo('template_url'); ?>/contact_map.jpg" width="50%;" class="center">
                </div>
                <div class="col-sm-6">
 					<h2 class="story_title mb-3">
                        VISIT
                    </h2>

                    <p class="white-text">Adress: 10, 9th st, Block 54, New Naser Bldg, Mokattam, Cairo, Egypt.</p>
                    <p class="white-text">Telephone: +2 02 284 440 69 - +2 02 284 448 77.</p>
                    <p class="white-text">Fax: +2 02 284 440 69.</p>
                    <p class="white-text">Telephone: +2 01116662661.</p>
                </div>
            </div>
        </div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section-2">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4 offset-4">
                    <div class="ftco-footer-widget mb-4 center">
                        <ul class="list-unstyled mb-4" style="display: -webkit-inline-box;">
                            <li style="padding: 0px 15px;">
                                <a target="_blank" href="">
                                    <img alt="facebook" src="<?php bloginfo('template_url'); ?>/facebook.png">
                                </a>
                            </li>

                            <li style="padding: 0px 15px;">
                                <a target="_blank" href="">
                                    <img alt="linked" src="<?php bloginfo('template_url'); ?>/linked.png">
                                </a>
                            </li>

                            <li style="padding: 0px 15px;">
                                <a href="">
                                    <img alt="instagram" src="<?php bloginfo('template_url'); ?>/instagram.png">
                                </a>
                            </li>
                        </ul>
                     	<div class="col-md-12">
	                        <button class="btn btn-2 btn-2g center" style="text-align: center;">Subscribe</button>
	                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="extra_foot" style="background-color: #09080a;">
            <div class="col-sm-12">
                <h4 style="text-align: center; color:white; font-size:14px;padding: 10px 0px 5px 0px; margin-bottom:0px;">Copyrights are reserved for CASCADA. created with <span>♥</span> at TALK, LLC</h4>
            </div>
        </div>
    </footer>

</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
$(document).ready(function ($) {
	
	"use strict";


	AOS.init({
		duration: 800,
		easing: 'slide'
	});

	// loader
	var loader = function () {
		setTimeout(function () {
			if ($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	// scroll
		var lastScrollTop = 0;
	var scrollWindow = function () {
		$(window).scroll(function () {
			var $w = $(this),
				st = $w.scrollTop(),
				navbar = $('.ftco_navbar'),
				sd = $('.js-scroll-wrap');

			if (st > lastScrollTop){
			       // downscroll code
			   } else {
	   			if (!navbar.hasClass('scrolled')) {
					navbar.addClass('scrolled');
				}

				if (!navbar.hasClass('awake')) {
					navbar.addClass('awake');
				}

				if (sd.length > 0) {
					sd.addClass('sleep');
				}
			      // upscroll code
			   }

			// if (st > 150) {
			// 	if (!navbar.hasClass('scrolled')) {
			// 		navbar.addClass('scrolled');
			// 	}

			// 	if (!navbar.hasClass('awake')) {
			// 		navbar.addClass('awake');
			// 	}

			// 	if (sd.length > 0) {
			// 		sd.addClass('sleep');
			// 	}

			// }
			// if (st < 150) {
			// 	if (navbar.hasClass('scrolled')) {
			// 		navbar.removeClass('scrolled sleep');
			// 	}

			// 	if (navbar.hasClass('awake')) {
			// 		navbar.removeClass('awake');
			// 		navbar.addClass('sleep');
			// 	}
			// 	if (sd.length > 0) {
			// 		sd.removeClass('sleep');
			// 	}
			// }
			lastScrollTop = st;
		});
	};
	scrollWindow();

	var isMobile = {
		Android: function () {
			return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function () {
			return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function () {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function () {
			return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function () {
			return navigator.userAgent.match(/IEMobile/i);
		},
		any: function () {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	var mobileMenuOutsideClick = function () {

		$(document).click(function (e) {
			var container = $("#colorlib-offcanvas, .js-colorlib-nav-toggle");
			if (!container.is(e.target) && container.has(e.target).length === 0) {

				if ($('body').hasClass('offcanvas')) {

					$('body').removeClass('offcanvas');
					$('.js-colorlib-nav-toggle').removeClass('active');

				}


			}
		});

	};
	mobileMenuOutsideClick();


	var offcanvasMenu = function () {

		$('#page').prepend('<div id="colorlib-offcanvas" />');
		$('#page').prepend('<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle colorlib-nav-white"><i></i></a>');
		var clone1 = $('.menu-1 > ul').clone();
		$('#colorlib-offcanvas').append(clone1);
		var clone2 = $('.menu-2 > ul').clone();
		$('#colorlib-offcanvas').append(clone2);

		$('#colorlib-offcanvas .has-dropdown').addClass('offcanvas-has-dropdown');
		$('#colorlib-offcanvas')
			.find('li')
			.removeClass('has-dropdown');

		// Hover dropdown menu on mobile
		$('.offcanvas-has-dropdown').mouseenter(function () {
			var $this = $(this);

			$this
				.addClass('active')
				.find('ul')
				.slideDown(500, 'easeOutExpo');
		}).mouseleave(function () {

			var $this = $(this);
			$this
				.removeClass('active')
				.find('ul')
				.slideUp(500, 'easeOutExpo');
		});


		$(window).resize(function () {

			if ($('body').hasClass('offcanvas')) {

				$('body').removeClass('offcanvas');
				$('.js-colorlib-nav-toggle').removeClass('active');

			}
		});
	};
	offcanvasMenu();


	var burgerMenu = function () {

		$('body').on('click', '.js-colorlib-nav-toggle', function (event) {
			var $this = $(this);


			if ($('body').hasClass('overflow offcanvas')) {
				$('body').removeClass('overflow offcanvas');
			} else {
				$('body').addClass('overflow offcanvas');
			}
			$this.toggleClass('active');
			event.preventDefault();

		});
	};
	burgerMenu();


	// navigation
	var OnePageNav = function () {
		$(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function (e) {
			e.preventDefault();

			var hash = this.hash,
				navToggler = $('.navbar-toggler');
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 700, 'easeInOutExpo', function () {
				window.location.hash = hash;
			});


			if (navToggler.is(':visible')) {
				navToggler.click();
			}
		});
		$('body').on('activate.bs.scrollspy', function () {
			console.log('nice');
		})
	};
	OnePageNav();

});
</script>

</html>