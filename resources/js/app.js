// import './jquery-1.12.4.min'
import './bootstrap.min';
// import './main';
// import './appai.map';
// import './plugin';
// import './appai.map';
// import './instafeed';
// import './slick.min';
// import './modernizr-2.8.3.min';
const slides = document.querySelectorAll('.slider-container .slide'); // get all the slides
const eraser = document.querySelector('.eraser'); // the eraser
const prev = document.getElementById('previous'); // previous button
const next = document.getElementById('next'); // next button
const intervalTime = 6000; // time until nextSlide triggers in miliseconds
const eraserActiveTime = 500; // time to wait until the .eraser goes all the way
let sliderInterval; // variable used to save the setInterval and clear it when needed


const nextSlide = () => {
  // Step 1. Add the .active class to the eraser - this will trigger the eraser to move to the left.
	eraser.classList.add('active');
   // Step 2. Set a timeout that will allow the eraser to move all the way to the left. This is where we'll use the eraserActiveTime - it has to be the same as the CSS value we mentioned above.
	setTimeout(() => {
    // Step 3. Get the active .slide and toggle the .active class on it (in this case, remove it).
		const active = document.querySelector('.slide.active');
		active.classList.toggle('active');
    // Step 4. Check to see if the .slide has a next element sibling available. If it has, add the .active class to it.
		if(active.nextElementSibling) {
			active.nextElementSibling.classList.toggle('active');
		} else {
      // Step 5. If it's the last element in the list, add the .active class to the first slide (the one with index 0).
			slides[0].classList.toggle('active');
		}
    // Step 6.Remove the .active class from the eraser - this will trigger the eraser to move back to the right. It also waits 200 ms before doing this (just to give enough time for the next .slide to move in place).
		setTimeout(() => {
			eraser.classList.remove('active');
		}, 180);
	}, eraserActiveTime);
}

//Button functionality
const prevSlide = () => {
	eraser.classList.add('active');
	setTimeout(() => {
		const active = document.querySelector('.slide.active');
		active.classList.toggle('active');
    // The *changed* part from the nextSlide code
		if(active.previousElementSibling) {
			active.previousElementSibling.classList.toggle('active');
		} else {
			slides[slides.length-1].classList.toggle('active');
		}
    // End of the changed part
		setTimeout(() => {
			eraser.classList.remove('active');
		}, 180);
	}, eraserActiveTime);
}

next.addEventListener('click', () => {
	nextSlide();
	clearInterval(sliderInterval);
	sliderInterval = setInterval(nextSlide, intervalTime);
});

prev.addEventListener('click', () => {
	prevSlide();
	clearInterval(sliderInterval);
	sliderInterval = setInterval(nextSlide, intervalTime);
});

sliderInterval = setInterval(nextSlide, intervalTime);

// Initial slide
setTimeout(nextSlide, 500);
 $(window).on('load', function() {
   
        $('.preloader-wave-effect').fadeOut();
        $('#preloader-wrapper').delay(100).fadeOut('fast');
    });
  (function($) {
    'use strict';

    var swiper = new Swiper('.swiper-container.two', {
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true,
        },
        autoplay: {
            delay: 3000,
        },
        speed: 1000,
        effect: 'coverflow',
        loop: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 80,
            depth: 200,
            modifier: 1,
            slideShadows : false,
        }
    });

})(jQuery);

// Home 2 promo header carousel
(function($) {
    'use strict';
    
    var mySwiper = new Swiper('.swiper-container.one', {
        effect: 'coverflow',
        speed: 3000,
        autoplay: {
            delay: 3000,
        },
        grabCursor: true,
        loop: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 80,
            depth: 200,
            modifier: 1,
            slideShadows: false,
        },
    });

})(jQuery);
(function($) {
    'use strict';

    // scrollspy
    $('body').scrollspy({ target: '#navigation' });

    // smooth scrolling
    $(function() {
        $(".navbar-nav a, .scroll-icon a, .appai-preview .button-group a").bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 100, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    // Navigation hide on scroll on mobile screen
    $(window).on('scroll', function() {
        $('.navbar-collapse').collapse('hide')
        $('.first-link').hide();
    });

    // carousel one
    $('.slider-wrapper').on('init', function(e, slick) {
        var $firstAnimatingElements = $('.slide:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
    });
    $('.slider-wrapper').on('beforeChange', function(e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('.slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
    });

    $('.slider-wrapper').slick({
        arrows: false,
        dots: false,
        speed: 500,
        fade: true,
        cssEase: 'ease',
        autoplay: true,
        autoplaySpeed: 5000,
    });

    function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function() {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function() {
                $this.removeClass($animationType);
            });
        });
    }

    // app screenshot carousel
    $('.slider-wrapper-2').slick({
        arrows: false,
        dots: true,
        cssEase: 'ease',
        infinite: true,
        autoplay: true,
        speed: 1000,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        responsive: [{
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
            }
        }]
    });

    // testimonial carousel
    $('.slider-wrapper-3').slick({
        arrows: false,
        dots: true,
        cssEase: 'ease',
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    // testimonial carousel home 2
    $('.testimonial-slider-2').slick({
        centerMode: true,
        centerPadding: '480px',
        slidesToShow: 1,
        arrows: true,
        dots: true,
        responsive: [{
            breakpoint: 1367,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '200px',
                slidesToShow: 1
            }
        }, {
            breakpoint: 769,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '20px',
                slidesToShow: 1
            }
        }]
    });

    // counter up
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    // Magnific Popup js
    $('.video-play-icon a').magnificPopup({
        type: 'iframe',
        removalDelay: 300,
        mainClass: 'mfp-fade'
    });

    $('.preview-icon a').magnificPopup({
        type: 'image',
        removalDelay: 300,
        mainClass: 'mfp-fade',
        gallery: {
            enabled: true
        }
    });

    // comming soon countdown
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime(
                '<div class="cdown"><span class="days"><strong>%-D</strong><p>Days.</p></span></div><div class="cdown"><span class="hour"><strong> %-H</strong><p>Hours.</p></span></div> <div class="cdown"><span class="minutes"><strong>%M</strong> <p>MINUTES.</p></span></div><div class="cdown"><span class="second"><strong> %S</strong><p>SECONDS.</p></span></div>'
            ));
        });
    });

    // parallax
    $('#slider-area.home-style-2').parallax("50%", 0.3);

    // preloader
    $(window).on('load', function() {
        $('.preloader-wave-effect').fadeOut();
        $('#preloader-wrapper').delay(150).fadeOut('fast');
    });

    // YOUTUBE VIDEO BACKGROUND
    $('#video-background').YTPlayer({
        videoId: '74kPEJWpCD4',
        fitToBackground: false,
        mute: true,
        pauseOnScroll: false,
        playerVars: {
            modestbranding: 0,
            autoplay: 1,
            controls: 1,
            showinfo: 0,
            wmode: 'transparent',
            branding: 0,
            rel: 0,
            autohide: 0,
            origin: window.location.origin
        }
    });

})(jQuery);

