$(document).ready(function() {
    // Ref's
    let currentIndex = 0;
    const items = $('.carousel-item');
    const itemCount = items.length;

    // #region Handle Carousel
    $('.next').click(function() {
        currentIndex = (currentIndex + 1) % itemCount;
        updateCarousel();
    });

    $('.prev').click(function() {
        currentIndex = (currentIndex - 1 + itemCount) % itemCount;
        updateCarousel();
    });

    function updateCarousel() {
        const offset = -currentIndex * 100;
        $('.carousel-inner').css('transform', `translateX(${offset}%)`);
        items.removeClass('active');
        items.eq(currentIndex).addClass('active');
    }
    // #regionend

});
