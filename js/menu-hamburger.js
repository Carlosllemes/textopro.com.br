$(document).ready(function() {
    // clear | remove menu for desktop classes
    $('#menu-hamburger > .menu__items > .dropdown').removeClass('dropdown').addClass('hamburger-dropdown');
    $('#menu-hamburger > .menu__items > .hamburger-dropdown > .sub-menu > .dropdown').removeClass('dropdown');

    $('body').prepend('<div class="mobile-dark-overlay"></div>');

    if ($('li.active-menu-topo')) {
        $('li.active-menu-topo').parents('.hamburger-dropdown').addClass('is-active');
    } else {
        $('li.active-menu-topo').parents('.hamburger-dropdown').removeClass('is-active');
    }

    if ($('.header-mobile').hasClass('active')) {
        $('section').addClass('is-inactive');
    } else {
        $('section').removeClass('is-inactive');
    }

    // create icon arrow down
    $('.hamburger-dropdown > a').after('<span class="js-dropdown"><i class="fas fa-chevron-down"></i></span>');

    //hamburger button
    $('.menu__collapse').click(function() {
        $('.collapse__icon').toggleClass('active');
        $('.header-mobile').toggleClass('active');
        $('.menu__collapsible').slideToggle('slow');
        $('.mobile-dark-overlay').fadeToggle('slow');
        $('body').toggleClass('lock-scroll');
    });

    // hamburger menu dropdowns
    $('.sub-menu').hide();
    $('.sub-menu-info').hide();
    $('.js-dropdown').each(function(i) {
        $(this).attr('data-menu-id', i);
    });

    $('.js-dropdown').click(function(e) {
        let currentDropdown = $(this).data('menu-id');
        $(this).find('.hamburger-dropdown').addClass('is-active');
        $(this).closest('.droppable').find('> .hamburger-dropdown > .is-active').each(function() {
            if (currentDropdown != $(this).data('menu-id')) {
                $(this).next().slideUp('fast');
                $(this).removeClass('is-active');
                $(this).prev().removeClass('is-selected');
            }
        });
        if (!$(this).hasClass('is-active')) {
            $(this).next().slideDown('fast');
            $(this).addClass('is-active');
            $(this).prev().addClass('is-selected');
            $(this).closest('.hamburger-dropdown').addClass('is-active');
        } else {
            $(this).next().slideUp('fast');
            $(this).removeClass('is-active');
            $(this).prev().removeClass('is-selected');
            $(this).closest('.hamburger-dropdown').removeClass('is-active');
        }
    });
});

// $(window).on('scroll', function(e) {
//     var shootScroll = false;
//     if (scrollY > 30 && !shootScroll) {
//         $('.header-mobile').addClass('headerFixed headerSlide');
//         shootScroll = true;
//     } else {
//         $('.header-mobile').removeClass('headerFixed headerSlide');
//     }
// });