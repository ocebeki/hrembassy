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


        function countDate() {
            const daysWrapper = document.querySelector('.conf-top__counting-down-day');

            if (daysWrapper) {

                const hoursWrapper = document.querySelector('.conf-top__counting-down-hour'),
                    minWrapper = document.querySelector('.conf-top__counting-down-min'),
                    secWrapper = document.querySelector('.conf-top__counting-down-sec'),
                    userYear = document.querySelector('.conf-top__counting-data-year').innerHTML,
                    userMonth = document.querySelector('.conf-top__counting-data-month').innerHTML,
                    userDay = document.querySelector('.conf-top__counting-data-day').innerHTML,
                    userHour = document.querySelector('.conf-top__counting-data-hour').innerHTML;

                function countdown(endDate) {
                    let days, hours, minutes, seconds;
                    endDate = new Date(endDate).getTime();

                    if (isNaN(endDate)) {
                        return;
                    }

                    setInterval(calculate, 1000);

                    function calculate() {
                        let startDate = new Date().getTime();
                        let timeRemaining = parseInt((endDate - startDate) / 1000);

                        if (timeRemaining >= 0) {
                            days = parseInt(timeRemaining / 86400);
                            timeRemaining = (timeRemaining % 86400);

                            hours = parseInt(timeRemaining / 3600);
                            timeRemaining = (timeRemaining % 3600);

                            minutes = parseInt(timeRemaining / 60);
                            timeRemaining = (timeRemaining % 60);

                            seconds = parseInt(timeRemaining);

                            daysWrapper.innerHTML = days
                            hoursWrapper.innerHTML = hours
                            minWrapper.innerHTML = minutes
                            secWrapper.innerHTML = seconds

                        } else {
                            return;
                        }
                    }
                }
                countdown(`${userMonth.trim()}/${userDay.trim()}/${userYear.trim()} ${userHour.trim()} AM`.trim());
            }
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
        countDate()

    })
}(jQuery));
