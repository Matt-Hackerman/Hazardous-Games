var start = false;
let lock1 = 0;

var dice = -1;
$(document).ready(function() {
    $("#begin").click(function() {
        
        var starting = randInt(2); // Player is 1; AI is 2
        
        if(starting == 1){
            $(".startPopup").html("<h1>Player goes first!</h1>");
        }else{
            $(".startPopup").html("<h1>Opponent goes first!</h1>");
        }
        
        
        $(document).click(function() {
            if(start == true && lock1 == 0){
                $(".startPopup-Container").remove();
                start = false;
                lock1 = 1;

                dice = randInt(6);
                
                

                if(starting == 1){
                    $("#PlayerDice").css("display", "block");
                    $("#PlayerDice").attr("src","../images/Dice/dice" + dice + ".png");
                }else if(starting == 2){
                    $("#AIDice").css("display", "block");
                    $("#AIDice").attr("src","../images/Dice/dice" + dice + ".png");
                }
                
            }
            start = true;
        });


    });
});

function randInt(max){
    return Math.ceil(Math.random() * max);
}