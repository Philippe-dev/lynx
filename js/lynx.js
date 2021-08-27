$(function () {
    $('img').each(function () {
        if ($(this).attr('alt') == '') {
            $(this).replaceWith("<span class=\"image\">image</span>");
        } else {
            $(this).replaceWith("<span class=\"image\">" + $(this).attr('alt') + "</span>");
        }
        
    });
});