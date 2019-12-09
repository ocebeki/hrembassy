(function ($) {
    $(document).ready(function () {

        jQuery('.conf-header-mobile__burger').on("click", function () {
            jQuery('.conf-header-mobile__bottom').toggleClass('conf-header-mobile__bottom--active')
            jQuery('.conf-header-mobile').toggleClass('conf-header-mobile--active')
        })
        jQuery(".conf-header-mobile__menu-link").on("click", function () {
            jQuery('.conf-header-mobile__bottom').toggleClass('conf-header-mobile__bottom--active')
            jQuery('.conf-header-mobile').toggleClass('conf-header-mobile--active')
        })

        const daysWrapper = document.querySelector('.conf-top__counting-down-day');
        hoursWrapper = document.querySelector('.conf-top__counting-down-hour');
        minWrapper = document.querySelector('.conf-top__counting-down-min');
        secWrapper = document.querySelector('.conf-top__counting-down-sec');

        let countDownDate = new Date("Feb 27, 2020 09:00:00").getTime();
        // Select all links with hashes
        $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });

        if (daysWrapper) {

            setInterval(function () {

                let now = new Date().getTime();

                let distance = countDownDate - now;


                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                daysWrapper.innerHTML = days
                hoursWrapper.innerHTML = hours
                minWrapper.innerHTML = minutes
                secWrapper.innerHTML = seconds

            }, 1000)
        }

        function prelegenci() {
            $('[data-slider="prelegenci"]').slick({
                prevArrow: '[data-slider="prelegenciPrev"]',
                nextArrow: '[data-slider="prelegenciNext"]',
                slidesToShow: 4,
                slidesToScroll: 1,
                adaptiveHeight: false,
                responsive: [
                    {
                        breakpoint: 1300,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 568,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });
        }
        function partners() {
            $('[data-slider="partners"]').slick({
                slidesToShow: 6,
                slidesToScroll: 6,
                adaptiveHeight: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 2500,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                ]
            });
        }

        if (jQuery('#trigger')) {
            var controller = new ScrollMagic.Controller();
            new ScrollMagic.Scene({ triggerElement: "#trigger" })
                .setClassToggle(".conf-header", "conf-header--fixed")
                .addTo(controller);
        }

        prelegenci();
        partners()
    })
}(jQuery));