$(document).ready(function () {
    const openNavbarBtn = $('#open_menu');
    const closeNavbarBtn = $('#close_menu');
    const mobileNavbar = $('#mobile_navbar');
    const baseURL = 'http://localhost/lionheart-web-system';
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
        window.location.href = `${baseURL}/frontend/index.php`;
    })
});