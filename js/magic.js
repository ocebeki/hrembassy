(function ($) {
    $(document).ready(function () {
        var controller = new ScrollMagic.Controller({addIndicators: false});
        var time = 1;
       
        function fadeUp () {
            var elements = $('[data-scroll="fadeUp"]');
            
            elements.each(function () {
                var tween = TweenMax.from(this, time, {
                    yPercent: 20,
                    autoAlpha: 0
                });
                
                var scene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 0.9,
                })
                .setTween(tween)
//                .reverse(false)
                .addTo((controller));
            })
        }
        
        function fadeDown () {
            var elements = $('[data-scroll="fadeDown"]');
            
            elements.each(function () {
                var tween = TweenMax.from(this, time, {
                    yPercent: -20,
                    autoAlpha: 0
                });
                
                var scene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 0.9,
                })
                .setTween(tween)
//                .reverse(false)
                .addTo((controller));
            })
        }
        
        function fadeLeft () {
            var elements = $('[data-scroll="fadeLeft"]');
            
            elements.each(function () {
                var tween = TweenMax.from(this, time, {
                    xPercent: -5,
                    autoAlpha: 0
                });
                
                var scene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 0.9,
                })
                .setTween(tween)
//                .reverse(false)
                .addTo((controller));
            })
        }
        
        function fadeRight () {
            var elements = $('[data-scroll="fadeRight"]');
            
            elements.each(function () {
                var tween = TweenMax.from(this, time, {
                    xPercent: 5,
                    autoAlpha: 0
                });
                
                var scene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 0.9,
                })
                .setTween(tween)
//                .reverse(false)
                .addTo((controller));
            })
        }
        
        function fadeIn () {
            var elements = $('[data-scroll="fadeIn"]');
            
            elements.each(function () {
                var tween = TweenMax.from(this, time / 2, {
                    autoAlpha: 0
                });
                
                var scene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 0.9,
                })
                .setTween(tween)
//                .reverse(false)
                .addTo((controller));
            })
        }
        
        function zoomOut () {
            var elements = $('[data-scroll="zoomOut"]');
            
            elements.each(function () {
                var item = $(this).find('[data-scroll="zoomOutItem"]');
                var tween = TweenMax.from(item, time, {
                    scale: 1.1
                });
                
                var scene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 0.9,
                })
                .setTween(tween)
//                .reverse(false)
                .addTo((controller));
            })
        }

        function staggerUp () {
            var element = $('[data-scroll="staggerUp"]');
            
            element.each(function () {
                var elements = $(this).find('[data-scroll="staggerUpItem"]');
                var tween = TweenMax.staggerFrom(elements, time, {
                    yPercent: 20, 
                    autoAlpha: 0
                }, 0.15);
                
                var scene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 0.9,
                })
                .setTween(tween)
//                .reverse(false)
                .addTo((controller));
            })
        }
        
        function staggerLeft () {
            var element = $('[data-scroll="staggerLeft"]');
            
            element.each(function () {
                var elements = $(this).find('[data-scroll="staggerLeftItem"]');
                var tween = TweenMax.staggerFrom(elements, time, {
                    xPercent: -100, 
                    xPercent: -100, 
                    autoAlpha: 0
                }, 0.15);
                
                var scene = new ScrollMagic.Scene({
                    triggerElement: this,
                    triggerHook: 0.95,
                })
                .setTween(tween)
//                .reverse(false)
                .addTo((controller));
            })
        }
        
        
        
        
        
        if ($(window).innerWidth() < 768) return;
        
        window.addEventListener('load', function () {
            if ($('[data-scroll="fadeUp"]').length) fadeUp();
            if ($('[data-scroll="fadeDown"]').length) fadeDown();
            if ($('[data-scroll="fadeLeft"]').length) fadeLeft();
            if ($('[data-scroll="fadeRight"]').length) fadeRight();
            if ($('[data-scroll="fadeIn"]').length) fadeIn();
            if ($('[data-scroll="zoomOut"]').length) zoomOut();
            if ($('[data-scroll="staggerUp"]').length) staggerUp();
            if ($('[data-scroll="staggerLeft"]').length) staggerLeft();
            if ($('[data-scroll="pin"]').length) pin();
        })
    });
})(jQuery);