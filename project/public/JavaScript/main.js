$('#siteTheme').click(function() {
    if ($('#siteTheme').prop('checked')) {
        $('body').removeClass("light");
    } 
    else {
        $('body').addClass("light");
    }
});