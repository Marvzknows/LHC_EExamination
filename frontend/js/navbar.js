$(document).ready(function () {
    const openNavbarBtn = $('#open_menu');
    const closeNavbarBtn = $('#close_menu');
    const mobileNavbar = $('#mobile_navbar');
    const logo = $('#logo');

    
    openNavbarBtn.click(function() {
        mobileNavbar.css('right', '0');
        $('body').css('overflow', 'hidden');
    })

    closeNavbarBtn.click(function() {
        mobileNavbar.css('right', '-950px');
        $('body').css('overflow', '');
    })

    logo.click(function() {
        alert('Logo Clicked');
    })
});