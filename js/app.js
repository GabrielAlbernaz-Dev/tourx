$(document).ready(()=>{
    const $navbar = $('header .navbar');
    $(window).on('scroll load',()=>{
        if($(this).scrollTop() > $(this).height() / 4 ) $navbar.addClass('fixed-top');
        else $navbar.removeClass('fixed-top');
    })
})