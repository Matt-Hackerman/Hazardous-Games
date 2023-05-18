$(document).ready(function(){
    myGameArea.start();
    myGamePiece = new component($('canvas').width() * .05, $('canvas').height() * .05, "red", ($('canvas').width() * .5)-($('canvas').width() * .05)/2, ($('canvas').height())-($('canvas').height() * .1));
    for(x=0;x<2;x++){
        live = new component($('canvas').width() * .03, $('canvas').height() * .03, "red", $('canvas').width() * liveX, $('canvas').height() * .96 );
        liveArray.push(live);
        liveX += .06;
    }
    yVar = .1;
    xVar = .38;
    color = "green";
    for(x=0;x<40;x++){
        enemy = new component($('canvas').width() * .04, $('canvas').height() * .04, color, ($('canvas').width() * xVar)-$('canvas').width() * .03/2, ($('canvas').height() * yVar));
        xVar += .08;
        if(x == 3){
            xVar = .22;
            yVar += .06;
            color = "red";
        }
        if(x == 11){
            xVar = .22;
            yVar += .06;
        }
        if(x == 19){
            xVar = .14;
            yVar += .06;
            color = "blue";

        }
        if(x == 29){
            xVar = .14;
            yVar += .06;
        }
        enemies.push(enemy);
    }
    $(':root').css({'--starsHeight': $('canvas').height() + "px"});
    $(':root').css({'--starsWidth': $('canvas').width() + "px"});
   
    if(check == true) {
        one = Math.floor(Math.random() * 40);
        oneY = enemies[one].y;
        oneX = enemies[one].x;
        two = Math.floor(Math.random() * 40);
        twoY = enemies[two].y;
        twoX = enemies[two].x;
        three = Math.floor(Math.random() * 40);
        threeY = enemies[three].y;
        threeX = enemies[three].x;
        enemyOne = enemies[one];
        enemyTwo = enemies[two];
        enemyThree = enemies[three];
        check = false;
    }

});
var fire = 0;
var fire2 = 0;
var enemies = [];
var myGamePiece;
var bullet;
var bullets = []; 
var bullets2 = [];
let prevWidth;
let prevHeight;
var check = true;
var one = 1;
var two = 2; 
var three = 3;
var oneY;
var twoY;
var threeY;
var oneX;
var twoX;
var threeX;
var enemyOne;
var enemyTwo;
var enemyThree
var lives = 3;
var liveArray = [];
var liveX = .03;
var runtime = 1000/60;
var score = 0;
var firstClick = false;


function startGame() {
}

function shoot(){
    if(fire < 1){
        bullet = new component($('canvas').width() * .01, $('canvas').height() * .01, "white", myGamePiece.x + (myGamePiece.width/2)-5, myGamePiece.y);
        bullets.push(bullet);  
        fire = 30;
    } 
}

function shoot2(x, y, x2, y2, x3, y3){
    if(fire2 < 1){
        if(enemyOne != null){
            bullet2 = new component($('canvas').width() * .01, $('canvas').height() * .01, "yellow", x + enemyOne.width / 2, y + enemyOne.height/1.5);
            bullets2.push(bullet2);  
        }
        if(enemyTwo != null) {
            bullet2 = new component($('canvas').width() * .01, $('canvas').height() * .01, "yellow", x2 + enemyOne.width / 2, y2 + enemyOne.height/1.5);
            bullets2.push(bullet2);
        }
        if(enemyThree != null) {
            bullet2 = new component($('canvas').width() * .01, $('canvas').height() * .01, "yellow", x3 + enemyOne.width / 2, y3 + enemyOne.height/1.5);
            bullets2.push(bullet2);  
        } 
        fire2 = 40;
    }
}



function update(){
    prevWidth = $('canvas').width();
    prevHeight = $('canvas').height();
    $(':root').css({'--starsHeight': prevHeight + "px"});
    $(':root').css({'--starsWidth': prevWidth + "px"});
    resize();
    updateGameArea(prevWidth, prevHeight);
}

function dive(enemy1, enemy2, enemy3){
    enemy1.y += 3;
    enemy1.x += 2;
    enemy2.y += 3;
    enemy2.x -= 1;
    enemy3.y += 3;
    enemy3.x += 1;
    shoot2(enemy1.x, enemy1.y, enemy2.x, enemy2.y, enemy3.x, enemy3.y);
}

function resize() {
    myGameArea.canvas.width = $(document).width() * .4;
    myGameArea.canvas.height = $(document).height() * .9;
}


function respawn(comp, y, x){
    comp.y = y
    comp.x = x;
}

function reload(){
    location.reload(false);
}

function startNow(){
    if(firstClick == false) {
        $('.start').css("display", "none");
        var interval = setInterval(function(){
            update();
            fire--;
            fire2--;
            $('.score').text(score);
            if(lives == 2){
                liveArray.splice(1, 1);
            }else if(lives == 1){
                liveArray.splice(0, 1)
            }else if(lives <= 0){
                $('.retry').css("display", "unset");
                clearInterval(interval);
            }
            moveShip(keys);
            for(y=0;y<enemies.length; y++){
                for(x=0;x<bullets.length;x++){
                    if(enemies[y] != undefined & enemies[y] != null){
                        if((bullets[x].y + bullets[x].height) >= enemies[y].y && bullets[x].y <= (enemies[y].y + enemies[y].height) && (enemies[y].x + enemies[y].width) >= (bullets[x].x) &&  enemies[y].x <= (bullets[x].x + bullets[x].width)){
                            enemies.splice(y, 1);
                            bullets.splice(x, 1);
                            score += 100;
                        }
                        else if(bullets[x].y <= 0){
                            bullets.splice(x, 1);
                        }
                        
                    }
                    if((bullets[x].y + bullets[x].height) >= enemyOne.y && bullets[x].y <= (enemyOne.y + enemyOne.height) && (enemyOne.x + enemyOne.width) >= (bullets[x].x) &&  enemyOne.x <= (bullets[x].x + bullets[x].width)){
                        enemyOne.y = $('canvas').height();
                    }
                    if((bullets[x].y + bullets[x].height) >= enemyTwo.y && bullets[x].y <= (enemyTwo.y + enemyTwo.height) && (enemyTwo.x + enemyTwo.width) >= (bullets[x].x) &&  enemyTwo.x <= (bullets[x].x + bullets[x].width)){
                        enemyTwo.y = $('canvas').height();
                    }
                    if((bullets[x].y + bullets[x].height) >= enemyThree.y && bullets[x].y <= (enemyThree.y + enemyThree.height) && (enemyThree.x + enemyThree.width) >= (bullets[x].x) &&  enemyThree.x <= (bullets[x].x + bullets[x].width)){
                        enemyThree.y = $('canvas').height();
                    }
                }
            }
            for(x=0;x<bullets2.length;x++){
                if((bullets2[x].y + bullets2[x].height) >= myGamePiece.y && bullets2[x].y <= (myGamePiece.y + myGamePiece.height) && (myGamePiece.x + myGamePiece.width) >= (bullets2[x].x) &&  myGamePiece.x <= (bullets2[x].x + bullets2[x].width)){
                    bullets2.splice(x, 1);
                    lives -= 1;
                }
                else if(bullets2[x].y >= $('canvas').height()){
                    bullets2.splice(x, 1);
                }
            }

            if(toggle == true){
                for(y=0;y<enemies.length; y++){
                    enemies[y].x += 1;
                }
                oneX += 1;
                twoX += 1;
                threeX += 1;
                count += 1;
                if(count == max){
                    toggle = false;
                }
            } else {
                for(y=0;y<enemies.length; y++){
                    enemies[y].x -= 1;
                }
                oneX -= 1;
                twoX -= 1;
                threeX -= 1;
                count -= 1;
                if(count == -max){
                    toggle = true;
                }
            }
            let xPerc = oneX / prevWidth;
            let yPerc = oneY / prevHeight; 
            let nX = xPerc * $('canvas').width();
            let nY = yPerc * $('canvas').height();
            oneX = nX;
            oneY = nY;

            xPerc = twoX / prevWidth;
            yPerc = twoY / prevHeight; 
            nX = xPerc * $('canvas').width();
            nY = yPerc * $('canvas').height();
            twoX = nX;
            twoY = nY;

            xPerc = threeX / prevWidth;
            yPerc = threeY / prevHeight; 
            nX = xPerc * $('canvas').width();
            nY = yPerc * $('canvas').height();
            threeX = nX;
            threeY = nY;
        

            

            if(enemies.length == 0){
                yVar = .1;
                xVar = .38;
                color = "green";
                score += 5000;
                for(x=0;x<40;x++){
                    enemy = new component($('canvas').width() * .04, $('canvas').height() * .04, color, ($('canvas').width() * xVar)-$('canvas').width() * .03/2, ($('canvas').height() * yVar));
                    xVar += .08;
                    if(x == 3){
                        xVar = .22;
                        yVar += .06;
                        color = "red";
                    }
                    if(x == 11){
                        xVar = .22;
                        yVar += .06;
                    }
                    if(x == 19){
                        xVar = .14;
                        yVar += .06;
                        color = "blue";

                    }
                    if(x == 29){
                        xVar = .14;
                        yVar += .06;
                    }
                    enemies.push(enemy);
                }
            }

            if(check == true) {
                one = Math.floor(Math.random() * enemies.length);
                oneY = enemies[one].y;
                oneX = enemies[one].x;
                two = Math.floor(Math.random() * enemies.length);
                twoY = enemies[two].y;
                twoX = enemies[two].x;
                three = Math.floor(Math.random() * enemies.length);
                threeY = enemies[three].y;
                threeX = enemies[three].x;
                enemyOne = enemies[one];
                enemyTwo = enemies[two];
                enemyThree = enemies[three];
                check = false;
            }
            
            dive(enemyOne, enemyTwo, enemyThree);
            if(enemyOne.y > $('canvas').height() && enemyTwo.y > $('canvas').height() && enemyThree.y > $('canvas').height()){
                respawn(enemyOne, oneY, oneX);
                respawn(enemyTwo, twoY, twoX);
                respawn(enemyThree, threeY, threeX);
                check = true;
            }
            if(enemies.length == 1 && enemies[0].y + enemies[0].height > $('canvas').height() || enemies[1].y + enemies[1].height > $('canvas').height()){
                enemies.splice(0, 1);
            }
        }, runtime);
    }
};

var count = 0;
var max = 25;
var toggle = true;
var myGameArea = { 
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.height = $(document).height() * .9;
        this.canvas.width = $(document).width() * .4;
        this.context = this.canvas.getContext("2d");
        $('.container').append(this.canvas);
    },

    clear : function() {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.x = x;
    this.y = y;
    this.resize = function(prevWidth, prevHeight, width, height){
        ctx = myGameArea.context;
        ctx.beginPath();
        ctx.fillStyle = color;
        let xPercent = this.x / prevWidth;
        let yPercent = this.y / prevHeight; 
        let newX = xPercent * $('canvas').width();
        let newY = yPercent * $('canvas').height();
        this.x = newX;
        this.y = newY;
        this.width = $('canvas').width() * width;
        this.height = $('canvas').height() * height;
        ctx.fillRect(this.x, this.y, this.width, this.height);
    }
}

function updateGameArea() {
    myGameArea.clear();
    myGamePiece.resize(prevWidth, prevHeight, .05, .05);
    for(x=0;x<liveArray.length;x++){
        liveArray[x].resize(prevWidth, prevHeight, .03, .03)
    }
    for(x=0;x<enemies.length;x++){
        if(enemies[x] != null){
            enemies[x].resize(prevWidth, prevHeight, .04, .04);
        }
    }
    for(x=0;x<bullets.length;x++){
        if(bullets[x] != null){
            bullets[x].y -= 10;
            bullets[x].resize(prevWidth, prevHeight,.01, .03);
        }
    }
    for(x=0;x<bullets2.length;x++){
        if(bullets2[x] != null){
            bullets2[x].y += 10;
            bullets2[x].resize(prevWidth, prevHeight,.01, .03);
        }
    }
}

var keyMap = {
    37: 'ARROWLEFT',
    39: 'ARROWRIGHT',
    32: 'SPACE',
}

var keys = {};
$(document).ready(function () {
    
    getKey = function(key) {
        return keyMap[(key.which || key.keyCode)] || '';
    };
    
    $(document).keydown(function(event) {
        switch (getKey(event)) {
            case 'ARROWLEFT':
                event.preventDefault();
                keys['LEFT'] = true;
                break;
            case 'ARROWRIGHT':
                event.preventDefault();
                keys['RIGHT'] = true;
                break;
            case 'SPACE':
                event.preventDefault();
                keys['SPACE'] = true;
                break;
            default:
                break;
        }     
    });
    
    $(document).keyup(function(event) {
        switch (getKey(event)) {
            case 'ARROWLEFT':
                event.preventDefault();
                delete keys['LEFT'];
                break;
            case 'ARROWRIGHT':
                event.preventDefault();
                delete keys['RIGHT'];
                break;
            case 'SPACE':
                event.preventDefault();
                delete keys['SPACE'];
                break;
            default:
                break;
        }
    });


});

function moveShip(keys){ 
    if (keys['LEFT'] && myGamePiece.x > 0){
        myGamePiece.x -= $(document).width() * .005;
    }if (keys['RIGHT'] && (myGamePiece.x + myGamePiece.width) < $('canvas').width()){
        myGamePiece.x += $(document).width() * .005;
    }if (keys['SPACE']){
        shoot();
    }

}