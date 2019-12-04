(function ($) {
    $(document).ready(function () {
        function slider() {
            var slider = $('[data-slider="slider"]');

            slider.slick({
                prevArrow: '[data-slider="sliderPrev"]',
                nextArrow: '[data-slider="sliderNext"]',
            });

            slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                var slides = slider.find('[data-slick-index]:not(.slick-active)');
                var current = slider.find('[data-slick-index="' + currentSlide + '"]');
                var next = slider.find('[data-slick-index="' + nextSlide + '"]');
                var currentHeading = current.find('.top__heading');
                var currentParagraph = current.find('p');
                var currentBtn = current.find('.btn');

                function prevS() {
                    slides.each(function () {
                        var heading = $(this).find('.top__heading');
                        var paragraph = $(this).find('p');

                        TweenLite.fromTo(heading, 1, {
                            y: "-50px",
                            x: "-50px"
                        }, {
                                y: 0,
                                x: 0
                            });
                        TweenLite.fromTo(paragraph, 1, {
                            x: "-50px"
                        }, {
                                x: 0
                            });
                    })
                    TweenLite.fromTo(currentHeading, 1, {
                        y: 0,
                        x: 0
                    }, {
                            y: "-50px",
                            x: "-50px"
                        });
                    TweenLite.fromTo(currentParagraph, 1, {
                        x: 0
                    }, {
                            x: "-50px"
                        });
                }

                function nextS() {
                    slides.each(function () {
                        var heading = $(this).find('.top__heading');
                        var paragraph = $(this).find('p');

                        TweenLite.fromTo(heading, 1, {
                            y: "-50px",
                            x: "50px"
                        }, {
                                y: 0,
                                x: 0
                            });
                        TweenLite.fromTo(paragraph, 1, {
                            x: "50px"
                        }, {
                                x: 0
                            });
                    })
                    TweenLite.fromTo(currentHeading, 1, {
                        y: 0,
                        x: 0
                    }, {
                            y: "-50px",
                            x: "-50px"
                        });
                    TweenLite.fromTo(currentParagraph, 1, {
                        x: 0
                    }, {
                            x: "-50px"
                        });
                }


                if (currentSlide == slick.$slides.length - 1 && nextSlide == 0) {
                    nextS();
                } else if (currentSlide == 0 && nextSlide == slick.$slides.length - 1) {
                    prevS();
                } else if (nextSlide > currentSlide) {
                    nextS();
                } else if (nextSlide < currentSlide) {
                    prevS();
                }

            })

        }

        function klienci() {
            $('[data-slider="klienci"]').slick({
                prevArrow: '[data-slider="klienciPrev"]',
                nextArrow: '[data-slider="klienciNext"]',
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

        function opinie() {
            $('[data-slider="opinie"]').slick({
                prevArrow: '[data-slider="opiniePrev"]',
                nextArrow: '[data-slider="opinieNext"]',
                dots: true,
                fade: true,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            adaptiveHeight: true
                        }
                    }
                ]
            });


        }

        function trenerzy() {
            $('[data-slider="trenerzy"]').slick({
                prevArrow: '[data-slider="trenerzyPrev"]',
                nextArrow: '[data-slider="trenerzyNext"]',
                slidesToShow: 5,
                slidesToScroll: 1,
                centerMode: true,
                asNavFor: '[data-slider="trenerzy-texts"]',
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
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            adaptiveHeight: true
                        }
                    }
                ]
            });

            $('[data-slider="trenerzy-texts"]').slick({
                prevArrow: '',
                nextArrow: '',
                swipe: false,
                fade: true,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            adaptiveHeight: true
                        }
                    }
                ]
            });

            $('.trenerzy__slider-wrapper').each(function () {
                var slider = $(this);
                var track = slider.find('.slick-track');
                var slides = slider.find('.slick-slide').length;

                if (slides < 5) {
                    setTimeout(function () {
                        track.css('transform', 'none');
                    }, 100)

                    slider.find('[data-slick-index]').each(function () {
                        $(this).on('click', function () {
                            var index = this.dataset.slickIndex;
                            var slides = slider.find('.slick-slide');

                            slides.removeClass('slick-current slick-center');
                            slides.eq(index).addClass('slick-current slick-center');
                            $('.trenerzy__texts-slider').slick('slickGoTo', index);
                        })
                    });
                } else {
                    slider.find('[data-slick-index]').each(function () {
                        $(this).on('click', function () {
                            var index = this.dataset.slickIndex;

                            $('.trenerzy__texts-slider').slick('slickGoTo', index);
                            $('.trenerzy__slider').slick('slickGoTo', index);
                        })
                    });
                }
            })
        }
        function prelegenci() {
            $('[data-slider="prelegenci"]').slick({
                prevArrow: '[data-slider="prelegenciPrev"]',
                nextArrow: '[data-slider="prelegenciNext"]',
                slidesToShow: 4,
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

        window.addEventListener('load', function () {
            slider();
            klienci();
            opinie();
            trenerzy();
            prelegenci();

        });
    })
}(jQuery));