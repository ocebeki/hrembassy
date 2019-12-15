(function ($) {
    $(document).ready(function () {

        jQuery('.conf-header-mobile__burger').on("click", function () {
            jQuery('.conf-header-mobile__bottom').toggleClass('conf-header-mobile__bottom--active');
            jQuery('.conf-header-mobile').toggleClass('conf-header-mobile--active');
        })
        jQuery(".conf-header-mobile__menu-link").on("click", function () {
            jQuery('.conf-header-mobile__bottom').toggleClass('conf-header-mobile__bottom--active');
            jQuery('.conf-header-mobile').toggleClass('conf-header-mobile--active');
            jQuery('.hamburger').removeClass('active');
            jQuery(document.body).removeClass('blocked');
        })


        $('a[href*="#"]')
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {

                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                ) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

                    if (target.length) {

                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function () {

                        });
                    }
                }
            });

        const daysWrapper = document.querySelector('.conf-top__counting-down-day');

        if (daysWrapper) {

            hoursWrapper = document.querySelector('.conf-top__counting-down-hour');
            minWrapper = document.querySelector('.conf-top__counting-down-min');
            secWrapper = document.querySelector('.conf-top__counting-down-sec');

            const userYear = document.querySelector('.conf-top__counting-data-year').innerHTML;
            userMonth = document.querySelector('.conf-top__counting-data-month').innerHTML;
            userDay = document.querySelector('.conf-top__counting-data-day').innerHTML;
            userHour = document.querySelector('.conf-top__counting-data-hour').innerHTML;

            let countDownDate = new Date(`"${userMonth} ${userDay}, ${userYear} ${userHour}"`).getTime();

            setInterval(function () {

                let now = new Date().getTime();
                distance = countDownDate - now;
                days = Math.floor(distance / (1000 * 60 * 60 * 24));
                hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                seconds = Math.floor((distance % (1000 * 60)) / 1000);

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
                slidesToScroll: 1,
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
        partners();

    })
}(jQuery));
