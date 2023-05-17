// Dark Mode setting
$('#siteTheme').click(function() {
    if ($('#siteTheme').prop('checked')) {
        $('body').removeClass("light");
        $('body').addClass("dark");
        $('.game-butt').removeClass("light");
        $('.game-butt').addClass("dark");
        
    } 
    else {
        $('body').removeClass("dark");
        $('body').addClass("light");
        $('.game-butt').removeClass("dark");
        $('.game-butt').addClass("light");
        
    }
});
