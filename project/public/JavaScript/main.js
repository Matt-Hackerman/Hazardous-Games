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

let fillerArr = [
    "../images/filler1.jpg",
    "../images/filler2.png",
    "../images/filler3.jpg",
    "../images/filler4.png",
    "../images/filler5.png",
    "../images/filler6.jpg",
    "../images/filler7.jpg",
    "../images/filler8.jpg",
    "../images/filler9.jpg",
    "../images/filler10.jpg",
    "../images/filler11.jpg",
    "../images/filler12.jpeg"
];

$( document ).ready(function() {
    for (let i = 1; i <= 4; i++) {
        let ranFill = Math.floor(Math.random() * 12);
        $('#f' + i).attr('src', fillerArr[ranFill]);
        console.log(ranFill);
    }
});