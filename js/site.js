"use strict";

$(document).ready(function () {
    /* Video Lightbox */
    if ($.isFunction($.fn.simpleLightboxVideo)) {
        $('.video').simpleLightboxVideo();
    }

    /* ScrollUp */
    if ($.isFunction($.fn.scrollUp)) {
        $.scrollUp({
            scrollText: '▲', // Ícone para rolar para o topo (opcional)
            scrollSpeed: 300
        });
    }

    /* Responsive Navigation */
    $("#nav-mobile").html($("#nav-main").html());

    $("#nav-trigger span").on("click", function () {
        let $nav = $("nav#nav-mobile ul");
        if ($nav.hasClass("expanded")) {
            $nav.removeClass("expanded").slideUp(250);
            $(this).removeClass("open");
        } else {
            $nav.addClass("expanded").slideDown(250);
            $(this).addClass("open");
        }
    });

    $("#nav-mobile ul a").on("click", function () {
        let $nav = $("nav#nav-mobile ul");
        if ($nav.hasClass("expanded")) {
            $nav.removeClass("expanded").slideUp(250);
            $("#nav-trigger span").removeClass("open");
        }
    });

    /* Sticky Navigation */
    if ($.isFunction($.fn.stickyNavbar)) {
        $('#header').stickyNavbar({
            activeClass: "active",
            animateCSS: true,
            animationDuration: 200,
            bottomThreshold: 10,
            startAt: 0,
            easing: 'easeInOutExpo',
            zIndex: 9999
        });
    }

    /* Waypoints */
    $('#content').waypoint(function (direction) {
        if (direction === 'down') {
            $('#header').addClass('nav-solid fadeInDown');
        } else {
            $('#header').removeClass('nav-solid fadeInDown');
        }
    }, { offset: '10%' }); // Inicia o efeito 10% antes de atingir o topo
});

/* Preloader and animations */
$(window).on('load', function () {
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({'overflow-y': 'visible'});

    /* WOW Elements */
    if (typeof WOW === 'function') {
        new WOW().init();
    }

    /* Parallax Effects */
    if ($.isFunction($.fn.enllax)) {
        $(window).enllax({
            type: 'background', // ou 'foreground' para efeito em primeiro plano
            ratio: 0.5
        });
    }
});
