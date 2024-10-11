'use strict';
var isMobile = window.innerWidth < 768;



function menuBurger() {
    function closeMenu() {
        $('html, body').removeClass('overflow');
        $('.header__top').removeClass('open-menu');
        $('#mobileMenu').removeClass('open');
    }
    function openMenu() {
        $('html, body').addClass('overflow');
        $('.header__top').addClass('open-menu');
        $('#mobileMenu').addClass('open');
    }
    function openCloseByBurger() {
        if ($('#mobileMenu').hasClass('open')) {
            closeMenu();
        } else {
            openMenu();
        }
    }
    $(document).on('click', '#mobileMenuBtn', openCloseByBurger);
}
function tabsOffer() {
    if ($(window).width() < 768) {
        // Mobile Accordion behavior
        $('.cyfix-tab-content-mob').hide(); // Приховати всі спочатку
        $('.cyfix-tab-content').hide(); // Приховати всі спочатку

        $('#content-mob-1').slideDown(); // Відкрити перший контент

        $('.cyfix-tab-titles label').off('click').on('click', function () {
            var tabId = $(this).attr('for').split('-')[2];
            var content = $('#content-mob-' + tabId);
            $('.cyfix-tab-titles label').removeClass('open');
            if (content.is(':visible')) {
                content.slideUp(); // Close if already open
            } else {
                $('.cyfix-tab-content-mob').slideUp(); // Close all
                content.slideDown(); // Open the clicked one
                $(this).toggleClass('open');
            }
        });
    } else {
        // Desktop Tabs behavior
        $('.cyfix-tab-content').hide();
        $('input[name="cyfix-tab-group"]:checked').each(function () {
            var tabId = $(this).attr('id').split('-')[2];
            $('#content-' + tabId).show();
        });

        $('.cyfix-tab-titles label').on('click', function () {
            $('.cyfix-tab-titles label').removeClass('open');
            $(this).toggleClass('open');

            var tabId = $(this).attr('for').split('-')[2];
            $('.cyfix-tab-content').hide();
            $('#content-' + tabId).show();
        });
    }
}
$(document).ready(function () {
    menuBurger();
    tabsOffer();
})


$(window).resize(function () {
    tabsOffer();
});