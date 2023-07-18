$(document).ready(function () {
    var divs = $('.test');
    var divCount = divs.length;
    var currentIndex = 0;

    $(document.body).on('DOMMouseScroll mousewheel', function (e) {
        var delta = e.originalEvent.wheelDelta || -e.originalEvent.detail;
        if (delta < 0) {
            currentIndex = Math.min(currentIndex + 1, divCount - 1);
        } else {
            currentIndex = Math.max(currentIndex - 1, 0);
        }

        $('html, body').stop().animate({
            scrollTop: divs.eq(currentIndex).offset().top
        }, 1000);

        return false;
    });

    $(window).resize(function () {
        $('html, body').scrollTop(divs.eq(currentIndex).offset().top);
    });
});




$(document).ready(function () {
    $('#scrollButton').click(function () {
        $('html, body').animate({
            scrollTop: $('#contact').offset().top
        }, 1000);
    });
});