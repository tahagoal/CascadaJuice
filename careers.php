<?php
	/*
		Template Name: Careers
	*/
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers</title>
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
                    <li class="nav-item">
                        <a href="/visit" class="nav-link">Visit us</a>
                    </li>
                    <li class="nav-item">
                        <a href="/menu" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item active">
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
        	<div class="background_hero_careers">
        		<div class="container hero_container">
        			<div class="row">
        				<div class="col-sm-6">
        					<h1 data-aos="fade-up" style="letter-spacing: 4px;">Careers</h1>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
    </section>

    <section class="ftco-section-2 why_us">
        <div class="container-fluid">
            <div class="section-2-blocks-wrapper row no-gutters">
                <div class="col-sm-8 offset-2">
                    <h2 class="story_title mb-3">
                        OPEN VACANCIES
                    </h2>
                    <div class="text-inner align-self-start" data-aos="fade-up">
                        <ul class="ul_colored news_container">
                        <?php 
	                        $counter = 0;
	                        while( have_rows('vacancies') ): the_row(); 
	                        // vars
	                        $title = get_sub_field('title');
	                        $description = get_sub_field('description');
	                    ?>
	                        <li>
	                        	<span class="li_title"><?php echo $title ?></span>
		                        <p class="white-text">
		                        	<?php echo $description ?>
		                        </p>
	                        </li>
	                    <?php
	                        $counter ++; 
	                        endwhile; 
	                    ?>
	                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="image_section_careers ftco-section-2">
        <div class="text">
	        <div class="row">
		        <div class="col-sm-6 offset-1">
		    		<h2 class="new_spacing center" style="color:white; font-weight: 300;">
		    			Inquiries on joining our team?
		    		</h2>
		    		<form class="form_contact mt-2 center">
                        <div class="form-group" data-aos="fade-up">
                            <input type="text" id="login_user" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group" data-aos="fade-up">
                            <input type="text" id="login_user" class="form-control" placeholder="Age">
                        </div>
                        <div class="form-group" data-aos="fade-up">
                            <input type="text" id="login_user" class="form-control" placeholder="Background">
                        </div>
                        <input type="submit" id="login_submit" value="Send" class="center btn btn-2 btn-2g btn-green" data-aos="fade-up">
                    </form>
		        </div>
	        </div>
        </div>
    </div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
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