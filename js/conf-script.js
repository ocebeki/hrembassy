window.addEventListener("load", function () {

    const daysWrapper = document.querySelector('.conf-top__counting-down-day');
    hoursWrapper = document.querySelector('.conf-top__counting-down-hour');
    minWrapper = document.querySelector('.conf-top__counting-down-min');
    secWrapper = document.querySelector('.conf-top__counting-down-sec');

    let countDownDate = new Date("Feb 27, 2020 09:00:00").getTime();

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
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        prevArrow: '',
                        nextArrow: '',
                        dots: true
                    }
                },
            ]
        });
    }


})