/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////  QUOTE / BACKGROUND JS  ////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function quotesBackdropGen() {
    let quotes = [
        "\"They're goin' ta bury what's left of ye in a soup can!\"",
        "\"KaaaaaBooooooom!!!\"",
        "\"oof tuff break, now pick yourself up and get back out there!\"",
        "\"Closed Casket it is then\"",
        "\"aaaahahahahaha you dummy it was the green wire!\"",
        "\"What!?... What!?!? was that, you're suposed to be a professional\"",
        "\"Oh, they're goin' ta have to glue you back together... IN HELL!\"",
        "\"And that's what yeh get for touching that!\"",
        "\"Let that be a bloody lesson to yeh!\"",
        "\"HeLlO!... hElLO... CAN ANYONE HEAR ME IM TRAPPED IN A FUNCTION GENERATING QUOTES!!!... oh no they're coming\"",
    ];

    let backdrops = [
        "'../images/c4-texture.png'", 
        "'../images/tnt-texture.png'",
        "'../images/nuke-texture.png'"
    ];

    let ranQuote = Math.floor(Math.random() * 10);
    let ranBackdrop = Math.floor(Math.random() * 3);

    $('.quote').html(quotes[ranQuote]);
    $('.bd-con').css({
        'background-image' : 'url(' + backdrops[ranBackdrop] + ')'
    });
}

quotesBackdropGen();
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////  TIMER / START JS  /////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

var initial = 300001;
var count = initial;
var counter;
var initialMillis;

function timer() {
    if (count <= 0) {
        clearInterval(counter);
        return;
    }
    var current = Date.now();
    
    count = count - (current - initialMillis);
    initialMillis = current;
    displayCount(count);
}

function displayCount(count) {
    if (initial == 300001) {
        $('.timer p').html("5.00.000");
    }
    else {
        var res = Math.floor(count / 1000);
        var milliseconds = count.toString().substr(-3);
        var seconds = res % 60;
        var minutes = (res - seconds) / 60;
    
        $('.timer p').html(minutes + '.' + seconds + '.' + milliseconds);
    }
    if (minutes <= 2 && seconds <= 29){
        $('.timer').css({
            'color' : 'red'
        })
    }
    if (minutes <= 0 && seconds <= 0 && milliseconds <= 0){
        $('.timer p').html("Danger");
        $('.timer p').css({
            'text-align' : 'center'
        });
        setInterval(blink_text, 100);
        gameOver();
    }
}

$('.start').click(function() {
    $('.gameStart').addClass('hidden');
    $('.page-1, .page-2').css({
        'transition' : 'none'
    });
    clearInterval(counter);
    initialMillis = Date.now();
    counter = setInterval(timer, 1);
    initial = 300000;
});

displayCount(initial);

$('#retry').click(function() {
    location.reload();
});



function gameOver() {
    $('.handBook-con').addClass('hidden');
    setTimeout(function() { //overall timer
        $('.timer p').html(" ");
        $('.screenCrack').removeClass('hidden');
        $('.gameOver').css({
            'background-image' : "url('../images/boom.gif')",
            'background-size' : 'cover',
            'background-position' : 'center',
            'z-index' : '2'
        });

        $('.gameOver').removeClass('hidden');
        setTimeout(function() { //remove bomb timer
            $('.bd-con').addClass('hidden');
            $('.tool-bar').addClass('hidden');
        }, 700);

        setTimeout(function() { //explo timer
            $('.gameOver').css({
                'background-image' : 'none',
            });
        }, 1000);

        setTimeout(function() { //explo timer
            $('.endScreen').removeClass('hidden');
            $('.scoreCard').removeClass('hidden');
        }, 700);

    }, 1000);
}

function blink_text() {
    $('.timer p').fadeOut(50);
    $('.timer p').fadeIn(50);
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////  Game JS  //////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$('.tool').click(selectTools);

function selectTools() {
    if ($(this).hasClass('selected-tool')) {
        $(this).removeClass('selected-tool');
        $('.tool').removeClass('disabled-tool');
    }
    else if($('.selected-tool').length == 0) {
        $(this).addClass('selected-tool');
        $('.tool').addClass('disabled-tool');
        $(this).removeClass('disabled-tool');
        if($('#pry').hasClass('selected-tool')) {
            console.log('pry tool selected');
        }
    }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////  HAND BOOK JS  /////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function openBook() {
    if ($('.openBook').hasClass('open')) {
        $('.handBook-con').css({
            'left' : '-37.2%'
        });
        $('.openBook').html('> Hand Book >');
        $('.openBook').removeClass('open');
        
        $('.mini-gameInfo-Expanded').css({
            'left' : '-50%'
        });
    }
    else {
        $('.handBook-con').css({
            'left' : '0'
        });
        $('.openBook').html('< Hand Book <');
        $('.openBook').addClass('open');
        if ($('.mini-gameExpand').hasClass('open')) {
            $('.mini-gameInfo-Expanded').css({
                'left' : '40%'
            });
        }
        else {
            $('.mini-gameInfo-Expanded').css({
                'left' : '-50%'
            });
        }
    }
}

function expand() {
    //gets mini game info id
    console.log($(this).attr('id'));
    if ($(this).hasClass('open')) {
        $('.mini-gameInfo-Expanded').css({
            'left' : '-50%'
        });
        $('.mini-gameExpand').removeClass('open');
        $('.mini-gameExpand').removeClass('disabled');
        $(this).html('More Info');
    }
    else if($(".open").length <= 1){
        $('.mini-gameInfo-Expanded').css({
            'left' : '40%'
        });
        $('.mini-gameExpand').addClass('disabled');
        $(this).addClass('open');
        $(this).removeClass('disabled');
        $(this).html('View Less');
    }
}

$('.openBook').click(openBook);
$('.mini-gameExpand').click(expand);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////  PAGES JS  /////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$('#next').click(function() {
    $('#prev').removeClass('hidden');
    $('#next').addClass('hidden');

    $('.page-1').css({
        'left' : '-100%',
        'transition' : 'none'
    });

    $('.page-2').css({
        'right' : '50%',
        'transition' : '300ms'
    });
});

$('#prev').click(function() {
    $('#prev').addClass('hidden');
    $('#next').removeClass('hidden');

    $('.page-1').css({
        'left' : '0',
        'transition' : '300ms'
    });

    $('.page-2').css({
        'right' : '0',
        'transition' : 'none'
    });
});
