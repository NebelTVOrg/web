/**
 * Created by howtwizer on 09.12.13.
 */
( function( $ ) {
function defineRotationDegrees(obj, abs) {
    return  function(obj) {
        return getRotationDegrees(obj, abs);
    }
};

    $('.homepage-figure .item a').on('click', function(event) {
        event.preventDefault();
        $(this).parent().siblings().removeClass('active');
        $(this).parent().addClass('active');
        var target = $(this).attr('data-target');
        $('.homepage-figure-content .item.active').hide('fade', {duration: 100, complete:function() {
            $(this).removeClass('active');

            $('.homepage-figure-content .'+target).show('fade', {duration: 500});
            $('.homepage-figure-content .'+target).addClass('active');
        }});
    });
    $('.homepage-figure .item a').each(function(key, item) {
        $(this).on('click', function() {
            var deg = (key+1)*72;

            if($('.homepage-figure .item a').length-1 === key)
                deg = 0;
            var figure = $(this).parent().parent();
            figure.animateRotate(defineRotationDegrees(figure, true), deg, 500);
            $(this).parent().animateRotate(defineRotationDegrees($(this)), -deg, 500);
            $(this).parent().siblings('.item').animateRotate(defineRotationDegrees($(this)), -deg, 500);
            console.log('----click happened----');

        });
    });

function getRotationDegrees(obj, abs) {
    var matrix = obj.css("-webkit-transform") ||
        obj.css("-moz-transform")    ||
        obj.css("-ms-transform")     ||
        obj.css("-o-transform")      ||
        obj.css("transform");
    if(matrix !== 'none') {
        var values = matrix.split('(')[1].split(')')[0].split(',');
        var a = values[0];
        var b = values[1];
        var angle = Math.round(Math.atan2(b, a) * (180/Math.PI));
    } else { var angle = 0; }

    if(angle < 0 && abs) {angle +=360; console.log('wtf')}

    return angle;
}

$.fn.animateRotate = function(startAngle, endAngle, duration, easing, complete){
    return this.each(function(){
        var elem = $(this);
        if(typeof startAngle === 'function'){
            startAngle = startAngle.call(elem, elem);
        }
        $({deg: startAngle}).animate({deg: endAngle}, {
            duration: duration,
            easing: easing,
            step: function(now){
                elem.css({
                    '-moz-transform':'rotate('+now+'deg)',
                    '-webkit-transform':'rotate('+now+'deg)',
                    '-o-transform':'rotate('+now+'deg)',
                    '-ms-transform':'rotate('+now+'deg)',
                    'transform':'rotate('+now+'deg)'
                });
            },
            complete: complete || $.noop
        });
    });
};
    $('.content-scroll').mCustomScrollbar({
        autoHideScrollbar: Boolean,
        scrollInertia: 0,
        mouseWheelPixels: 100,
        advanced: {
            autoScrollOnFocus: false
        }
    });
    /*********************
     * Homepage effects
      */

var homepage_effects = function() {
    var i = 0;
    $(window).scroll(function(event){
        if($(this).scrollTop() < 1500){
            $('#menu-top-menu li').removeClass('current_page_item');
            $('.side-menu-buttons li').removeClass('current-menu-item');
            $('.side-menu-buttons li').eq(0).addClass('current-menu-item');
            $('.try-it-now.top').addClass('hidden', 500);
        }

        if($(this).scrollTop() > 1500){
            $('#menu-top-menu li').removeClass('current_page_item');
            $('#menu-top-menu li').eq(0).addClass('current_page_item');
            $('.side-menu-buttons li').removeClass('current-menu-item');
            $('.side-menu-buttons li').eq(1).addClass('current-menu-item');
            $('.try-it-now.top').removeClass('hidden', 1000);
        }
        if($(this).scrollTop() > 2500){
            $('#menu-top-menu li').removeClass('current_page_item');
            $('#menu-top-menu li').eq(1).addClass('current_page_item');
            $('.side-menu-buttons li').removeClass('current-menu-item');
            $('.side-menu-buttons li').eq(2).addClass('current-menu-item');
        }
        if($(this).scrollTop() > 5500){
            $('#menu-top-menu li').removeClass('current_page_item');
            $('#menu-top-menu li').eq(2).addClass('current_page_item');
            $('.side-menu-buttons li').removeClass('current-menu-item');
            $('.side-menu-buttons li').eq(3).addClass('current-menu-item');
//                $('.menu-secondary-menu-container').hide();
        }
        if($(this).scrollTop() > 7300){
            $('#menu-top-menu li').removeClass('current_page_item');
            $('#menu-top-menu li').eq(3).addClass('current_page_item');
            $('.side-menu-buttons li').removeClass('current-menu-item');
            $('.side-menu-buttons li').eq(4).addClass('current-menu-item');
//                $('.menu-secondary-menu-container').show();
        }

        if($(this).scrollTop() > 7300 && $(this).scrollTop() < 23500){
            $('#menu-secondary-menu li').removeClass('current_page_item');
            $('#menu-secondary-menu li').eq(0).addClass('current_page_item');
        }

        if($(this).scrollTop() > 23000 && $(this).scrollTop() < 26000){
            $('#menu-secondary-menu li').removeClass('current_page_item');
            $('#menu-secondary-menu li').eq(1).addClass('current_page_item');
        }
        if($(this).scrollTop() > 26000 && $(this).scrollTop() < 28000){
            $('#menu-secondary-menu li').removeClass('current_page_item');
            $('#menu-secondary-menu li').eq(2).addClass('current_page_item');
        }
        if($(this).scrollTop() > 28000 && $(this).scrollTop() < 30000){
            $('#menu-secondary-menu li').removeClass('current_page_item');
            $('#menu-secondary-menu li').eq(3).addClass('current_page_item');
        }
        if($(this).scrollTop() > 30000 && $(this).scrollTop() < 32000){
            $('#menu-secondary-menu li').removeClass('current_page_item');
            $('#menu-secondary-menu li').eq(4).addClass('current_page_item');
        }
        if($(this).scrollTop() > 32000) {
            $('#menu-secondary-menu li').removeClass('current_page_item');
            $('#menu-secondary-menu li').eq(5).addClass('current_page_item');
        }
    });
    $('#menu-top-menu a').each(function(key, item) {
        $(this).on('click', function() {
            var scroll_length =2000*(key+1);
            if(key === 3)
                scroll_length = 9500;
            $('html, body').animate({
                scrollTop: scroll_length
            }, 1000);
        })
    });

    $('#menu-secondary-menu a').on('click', function(event) {
        event.preventDefault();
    });

    $('#menu-secondary-menu a').eq(0).on('click', function() {
        $('html, body').animate({
            scrollTop: 9500
        }, 1000);
    });
    $('#menu-secondary-menu a').eq(1).on('click', function() {
        $('html, body').animate({
            scrollTop: 23500
        }, 1000);
    });
    $('#menu-secondary-menu a').eq(2).on('click', function() {
        $('html, body').animate({
            scrollTop: 26300
        }, 1000);
    });
    $('#menu-secondary-menu a').eq(3).on('click', function() {
        $('html, body').animate({
            scrollTop: 28500
        }, 1000);
    });
    $('#menu-secondary-menu a').eq(4).on('click', function() {
        $('html, body').animate({
            scrollTop: 30500
        }, 1000);
    });
    $('#menu-secondary-menu a').eq(5).on('click', function() {
        $('html, body').animate({
            scrollTop: 32700
        }, 1000);
    });

    $('.hot-links a.menu').on('click', function(event) {
        if($('.pages-menu').is('visible')) {
            $('.pages-menu').hide();
        } else {
            $('.pages-menu').show();
            $('body').one('click', function(event) {
                if($('.pages-menu').is('visible'))
                    $('.pages-menu').hide();

            });
        }
        event.preventDefault();
    });


    $('.side-menu-buttons a').each(function(key, item) {
        $(this).on('click', function(event) {
            var scroll_length =2000*(key);
            if(key === 4)
                scroll_length = 9500;
            $('html, body').animate({
                scrollTop: scroll_length
            }, 1000);
        })
    });

    var next = function() {
        if(typeof functions[i] === 'function'){
            functions[i]();
            i++;
        }
    };
    var functions = [
        function() {
            $('.homepage-step-1').removeClass('hidden', {duration: 500, complete: next});
        },
        function() {
            var i = 0;
            $('.homepage-step-1 span').addClass('green', {duration: 300, complete: function() {++i; i === $('.homepage-step-1 span').length ? next(): ''}});
        },
        function() {
            setTimeout(next, 2000);
        },
        function() {
            $('.homepage-step-1').animate({top: '0px'}, 1000, next);
        },
        function() {
            $('.homepage-step-1').animate({right: '0px'}, 1000, next);
            $('.homepage-figure').removeClass('none');
        },
        function() {
            $('.homepage-figure .phone').animate({top: '0px', opacity: 1}, 1000);
            $('.first-letter:eq(0)').removeClass('hidden', {duration: 1000, complete: next});
        },
        function() {
            $('.first-letter:eq(0)').next().animate({opacity: 1}, 500, next);
        },
        function() {
            $('.homepage-figure .tablet').animate({top: '36px', opacity: 1}, 1000);
            $('.homepage-figure .device').animate({top: '216px', opacity: 1}, 1000);
            $('.first-letter:eq(1)').removeClass('hidden', {duration: 1000, complete: next});
        },
        function() {
            $('.first-letter:eq(1)').next().removeClass('hidden', 1000, next);
        },
        function() {
            $('.homepage-figure .usb').animate({top: '295px', opacity: 1}, 1000);
            $('.homepage-figure .tv').animate({top: '162px', opacity: 1}, 1000);
            $('.first-letter:eq(2)').removeClass('hidden', {duration: 1000, complete: next});
        },
        function() {
            $('.first-letter:eq(2)').next().removeClass('hidden', 1000, next);
        },
        function() {
            $('.homepage-header .try-it-now').removeClass('hidden', 1000, next);
        },
        function() {
            $('.homepage-figure .phase-1').removeClass('hidden', { duration: 300, complete: next });
        },
        function() {
            $('.homepage-figure .phase-2').removeClass('hidden', { duration: 300, complete: next });
        },
        function() {
            $('.homepage-figure .phase-3').removeClass('hidden', { duration: 300, complete: next });
        },
        function() {
            $('.homepage-figure .phase-4').removeClass('hidden', { duration: 300, complete: next });
        },
        function() {
            $('.homepage-figure .phase-5').removeClass('hidden', { duration: 300, complete: next });
        },
        function() {
            $('.homepage-figure').animateRotate(0, 72, 500, 'linear');
            $('.homepage-figure .item').animateRotate(0, -72, 500, 'linear');
            $('.homepage-figure .item.active').removeClass('active');
            $('.homepage-figure .item.phone').addClass('active');

            $('.homepage-figure-content .item').removeClass('active', 300);
            $('.homepage-figure-content .phone').addClass('active', 500);
            setTimeout(next, 2000);
        },
        function() {
            $('.homepage-figure').animateRotate(72, 144, 500, 'linear');
            $('.homepage-figure .item').animateRotate(-72, -144, 500, 'linear');
            $('.homepage-figure .item.active').removeClass('active', 100);
            $('.homepage-figure .item.tablet').addClass('active', 100);

            $('.homepage-figure-content .item').removeClass('active', 300);
            $('.homepage-figure-content .tablet').addClass('active', 500);
            setTimeout(next, 2000);
        },
        function() {
            $('.homepage-figure').animateRotate(144, 216, 500, 'linear');
            $('.homepage-figure .item').animateRotate(-144, -216, 500, 'linear');
            $('.homepage-figure .item.active').removeClass('active', 100);
            $('.homepage-figure .item.device').addClass('active', 100);

            $('.homepage-figure-content .item').removeClass('active', 300);
            $('.homepage-figure-content .device').addClass('active', 500);
            setTimeout(next, 2000);
        },
        function() {
            $('.homepage-figure').animateRotate(216, 288, 500, 'linear');
            $('.homepage-figure .item').animateRotate(-216, -288, 500, 'linear');
            $('.homepage-figure .item.active').removeClass('active', 100);
            $('.homepage-figure .item.usb').addClass('active', 100);

            $('.homepage-figure-content .item').removeClass('active', 300);
            $('.homepage-figure-content .usb').addClass('active', 500);
            setTimeout(next, 2000);
        },
        function() {
            $('.homepage-figure').animateRotate(288, 360, 500, 'linear');
            $('.homepage-figure .item').animateRotate(-288, -360, 500, 'linear');
            $('.homepage-figure .item.active').removeClass('active', 100);
            $('.homepage-figure .item.tv').addClass('active', 100);

            $('.homepage-figure-content .item').removeClass('active', 300);
            $('.homepage-figure-content .tv').addClass('active', 500);
            setTimeout(next, 2000);
        },
    ];
    next();
}; /*eof homepage effects */

$(document).ready(function() {
    var placeToCenter = function(elem) {
        var p_w = elem.parent().width();
        var e_w = elem.width();
        elem.css('right', p_w / 2 - e_w /2);
    }

    /* Switch off jQuery animation on mobile screens and screen with window width more then 1024*/


    if ($(window).width() > 1024){
        $('.menu-secondary-menu-container').show();
        $('.menu-secondary-menu-container').attr('data-7500', 'top: 101px');
        $('.menu-secondary-menu-container').attr('data-7000', 'top: 1000px');
        homepage_effects();
        var s = skrollr.init();
        placeToCenter($('.homepage-step-1'));
    }

  /*function window_width_depending() {


    }
    window_width_depending();
  $(window).bind('resize',function() {

        window_width_depending();
    });*/
    var waitForFinalEvent = (function () {
        var timers = {};
        return function (callback, ms, uniqueId) {
            if (!uniqueId) {
                uniqueId = "Don't call this twice without a uniqueId";
            }
            if (timers[uniqueId]) {
                clearTimeout (timers[uniqueId]);
            }
            timers[uniqueId] = setTimeout(callback, ms);
        };
    })();
    $(window).resize(function () {
        waitForFinalEvent(function(){
            location.reload();
            //...
        }, 100, "some unique string");
    });



});


} )( jQuery );