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

//resizes game grid on screen size
$(window).on('load', function() {
    var gridRepeat = Math.floor(($(window).width() * .7) / 430);
    var gridResize = "repeat(" + gridRepeat + ", 1fr)";
    $('.game-grid').css ('grid-template-columns', gridResize);
});

$(window).on('resize', function() {
    gridRepeat = Math.floor(($(window).width() * .7) / 430);
    gridResize = "repeat(" + gridRepeat + ", 1fr)";
    $('.game-grid').css ('grid-template-columns', gridResize);
});