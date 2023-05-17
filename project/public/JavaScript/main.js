// Dark Mode setting
$('#siteTheme').click(function() {
    if ($('#siteTheme').prop('checked')) {
        $('body').removeClass("light");
        $('body').addClass("dark");
    } 
    else {
        $('body').removeClass("dark");
        $('body').addClass("light");
    }
});
