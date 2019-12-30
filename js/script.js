(function ($) {
    $(document).ready(function () {
        function singleBlog () {
            var headerPage = $('.single:not(.single-product)');
            
            if (!headerPage.length) return;
            
            var header = $('header');
            $(window).on('scroll', function () {
                if( $(window).scrollTop() > 10) {
                    header.addClass('active');
                }    else {
                    header.removeClass('active');
                }
            })
            
        }
        
        function dataLink () {
            $("[data-link]").on('click', function () {
                if ( $(this).data('link') ) {
                    window.location = $(this).data('link');    
                }
            });
        }
        
        function menuActive() {
            var links = $('.menu__link');

            links.each(function () {
                var text = $(this).text();
                text = text.toLowerCase();
                text = text.replace(/ /g, '-');

                if(window.location.pathname.indexOf(text) > 0) {
                    $(this).addClass('active');
                }
            })
        }

        function mojeKontoActive() {
            var links = $('.moje-konto__nav-link');

            links.each(function () {
                var text = $(this).text();
                text = text.toLowerCase();
                text = text.replace(/ /g, '-');

                if(window.location.pathname.indexOf(text) > 0) {
                    $(this).addClass('active');
                }
            })
        }

        function footerPusher () {
            var wrapper = $('.page__wrapper');
            var footerHeight = $('.footer').outerHeight() + $('#wpadminbar').outerHeight();

            if (footerHeight == null) {
                footerHeight = 0;
            }

            wrapper.css('minHeight', 'calc(100vh - '+ footerHeight +'px)');
        }

        function headerFixed () {
            var wrapper = document.querySelector('.page__wrapper');
            var headerHeight = $('.header').outerHeight() + $('#wpadminbar').outerHeight();

            if (headerHeight == null) {
                headerHeight = 0;
            }

            wrapper.style.paddingTop = headerHeight + 'px';
        }

        function loginPageTabs () {
            var button = $('[data-panel]');
            var panel = $('.moje-konto-login__panel');

            if (!(panel.length)) return;

            var question = $('.moje-konto-login__question-wrapper > div');

            button.on('click', function () {
                var panelName = $(this).data('panel');
                var panelToShow = $('.moje-konto-login__panels').find('.' + panelName);

                button.removeClass('active');
                $(this).addClass('active');

                panel.removeClass('active');
                panelToShow.addClass('active');

                if ($(this).data('panel') == 'u-column1') {
                    window.location.hash = '#login';
                    question.show();
                } else if ($(this).data('panel') == 'u-column2') {
                    window.location.hash = '#register';
                    question.hide();
               }
            })

            if(window.location.href.indexOf("#register") > -1) {
                button.removeClass('active');
                $('[data-panel="u-column2"]').addClass('active');

                panel.removeClass('active');
                $('.u-column2').addClass('active');

                question.hide();
            }
        }

        function loginPageHeight () {
            var wrapper = $('.moje-konto__wrapper');

            if (!wrapper.length) return;

            var windowHeight = $(window).height();
            var headerHeight = $('.header').outerHeight() + $('#wpadminbar').outerHeight();
            var footerHeight = $('.footer').outerHeight();

            wrapper.css('min-height', windowHeight - headerHeight - footerHeight);
        }

        function quantity () {
            if ( ! String.prototype.getDecimals ) {
                String.prototype.getDecimals = function() {
                    var num = this,
                        match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                    if ( ! match ) {
                        return 0;
                    }
                    return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
                }
            }
            // Quantity "plus" and "minus" buttons
            $( document.body ).on( 'click', '.quantity__plus, .quantity__minus', function() {
                var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
                    currentVal  = parseFloat( $qty.val() ),
                    max         = parseFloat( $qty.attr( 'max' ) ),
                    min         = parseFloat( $qty.attr( 'min' ) ),
                    step        = $qty.attr( 'step' );

                // Format values
                if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
                if ( max === '' || max === 'NaN' ) max = '';
                if ( min === '' || min === 'NaN' ) min = 0;
                if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

                // Change the value
                if ( $( this ).is( '.quantity__plus' ) ) {
                    if ( max && ( currentVal >= max ) ) {
                        $qty.val( max );
                    } else {
                        $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                    }
                } else {
                    if ( min && ( currentVal <= min ) ) {
                        $qty.val( min );
                    } else if ( currentVal > 0 ) {
                        $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                    }
                }

                // Trigger change event
                $qty.trigger( 'change' );
            });
        }

        function smoothScroll () {
            var headerHeight = $('.header').outerHeight() + $('#wpadminbar').outerHeight();

            $('a[href*="#"]')
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
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
                            scrollTop: target.offset().top - headerHeight
                        }, 800);
                    }
                }
            });
        }

        function kategorieDropDown () {
            var kategorie = $('.kategorie');

            if (kategorie.length < 1) return;

            var lista = $('.kategorie__list');

            kategorie.on('click', function () {
                 kategorie.toggleClass('active');
            });
            
            $('body').on('click', function (e) {
                if (!kategorie.hasClass('active') || $(e.target).hasClass('kategorie') ) return;
                
                kategorie.removeClass('active');
            })
        }

        function hamburger () {
            var btn = $('.hamburger');
            var body = $('body');

            if (btn.length < 1) return;

            var menu = $('.menu-mobile');

            btn.on('click', function () {
                menu.toggleClass('active');
                btn.toggleClass('active');
                body.toggleClass('blocked');
            });
            
            $(window).on('resize', function () {
                if ($(window).innerWidth() > 768) {
                    body.removeClass('blocked');
                    menu.removeClass('active');
                    btn.removeClass('active');
                }
            })
        }
        
        function popup () {
            if (!($('[data-popup="popup"]').length)) return;
            
            var close = $('[data-popup="close"]');
            var modal = ouibounce(document.getElementById('popup'));

            close.on('click', function () {
                $('#popup').hide();
            });
        }
        
        function kpop () {
            var close = $('[data-kpop="close"]');
            var popup = $('.klienci__popup');
            
            close.on('click', function () {
                popup.removeClass('active');
                $('body').css('overflow', 'initial');
            })
            
            $('.klienci__btn').on('click', function () {
                var imgLeft = $(this).find('.klienci__popup-left img').attr('src');
                var headingLeft = $(this).find('.klienci__popup-left .klienci__popup-heading').html();
                var textLeft = $(this).find('.klienci__popup-left .klienci__popup-text').html();
                
                var imgMiddle = $(this).find('.klienci__popup-middle img').attr('src');
                var headingMiddle = $(this).find('.klienci__popup-middle .klienci__popup-heading').html();
                var textMiddle = $(this).find('.klienci__popup-middle .klienci__popup-text').html();
            
                var imgRight = $(this).find('.klienci__popup-right img').attr('src');
                var headingRight = $(this).find('.klienci__popup-right .klienci__popup-heading').html();
                var textRight = $(this).find('.klienci__popup-right .klienci__popup-text').html();
                
                
                var popupImgLeft = $('[data-kpop="imgleft"]');
                var popupHeadingLeft = $('[data-kpop="headingleft"]');
                var popupTextLeft = $('[data-kpop="textleft"]');
                
                var popupImgMiddle = $('[data-kpop="imgmiddle"]');
                var popupHeadingMiddle = $('[data-kpop="headingmiddle"]');
                var popupTextMiddle = $('[data-kpop="textmiddle"]');
                
                var popupImgRight = $('[data-kpop="imgright"]');
                var popupHeadingRight = $('[data-kpop="headingright"]');
                var popupTextRight = $('[data-kpop="textright"]');
                
                
                popup.addClass('active');
                $('body').css('overflow', 'hidden');
                
                popupImgLeft.attr('src', imgLeft);
                popupHeadingLeft.html(headingLeft);
                popupTextLeft.html(textLeft);
                
                popupImgMiddle.attr('src', imgMiddle);
                popupHeadingMiddle.html(headingMiddle);
                popupTextMiddle.html(textMiddle);
                
                popupImgRight.attr('src', imgRight);
                popupHeadingRight.html(headingRight);
                popupTextRight.html(textRight);
            })
        }

        window.onload = function () {
            footerPusher();
            headerFixed();
            loginPageTabs();
            loginPageHeight();
            quantity();
            smoothScroll();
            menuActive();
            mojeKontoActive();
            kategorieDropDown();
            hamburger();
            dataLink();
            popup();
            singleBlog();
            kpop();

            $('.prevent').each(function () {
                $(this).replaceWith($(this).clone())
            });
        }

        window.addEventListener('resize', function () {
            headerFixed();
        })
    })
}(jQuery));