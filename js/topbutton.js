jQuery('.topbutton').on('click', function() {
    jQuery('html, body').animate({ scrollTop: 0 }, speed);
    return false;
});