var start = false;
let lock1 = 0;

var running = false;

var dice = -1;

var completion = false;

var PlayerArr = [[0, 0, 0], [0, 0, 0], [0, 0, 0]];
var AIArr = [[0, 0, 0], [0, 0, 0], [0, 0, 0]];

$(document).ready(function () {

    $("#restart").click(function () {
        location.reload(false);
    })

    $(".gameBoard-Tile").on({
        mouseenter: function () {
            if ($(this).is(".col1.Player")) {
                $(".col1.Player.gameBoard-Tile").addClass("tileHover");
            } else if ($(this).is(".col2.Player")) {
                $(".col2.Player.gameBoard-Tile").addClass("tileHover");
            } else if ($(this).is(".col3.Player")) {
                $(".col3.Player.gameBoard-Tile").addClass("tileHover");
            } else if ($(this).is(".col1.AI")) {
                $(".col1.AI.gameBoard-Tile").addClass("tileHover");
            } else if ($(this).is(".col2.AI")) {
                $(".col2.AI.gameBoard-Tile").addClass("tileHover");
            } else if ($(this).is(".col3.AI")) {
                $(".col3.AI.gameBoard-Tile").addClass("tileHover");
            }
        },
        mouseleave: function () {
            $(".gameBoard-Tile").removeClass("tileHover");
        }
    })




    $(document).on('contextmenu', function (e) {
        e.preventDefault();
    });

    $("img").on('dragstart', function () {
        return false;
    });


    $("#begin").click(function () {


        var curPlayer = randInt(2); // Player is 1; AI is 2

        if (curPlayer == 1) {
            $(".startPopup").html("<h1>Player 2 goes first!</h1>");
        } else {
            $(".startPopup").html("<h1>Player 2 goes first!</h1>");
        }


        $(".startPopup").on('click', function () {
            if (start == true && lock1 == 0) {
                $(".startPopup-Container").remove();
                start = false;
                lock1 = 1;

                dice = randInt(6);
                running = true;


                if (curPlayer == 1) {
                    $("#PlayerDice").css("display", "block");
                    $("#PlayerDice").attr("src", "../images/Dice/dice" + dice + ".png");

                    $("#PlayerMask").css("display", "none");
                    $("#AIMask").css("display", "block");
                } else if (curPlayer == 2) {
                    $("#AIDice").css("display", "block");
                    $("#AIDice").attr("src", "../images/Dice/dice" + dice + ".png");

                    $("#AIMask").css("display", "none");
                    $("#PlayerMask").css("display", "block");
                }

                $(".gameBoard-Tile").click(function (event) {
                    var successfulAction = false;
                    if (curPlayer % 2 == 1 & !completion) { // Player

                        if (event.target.classList[1] === "col1") {

                            if ($(".diceBoard-Dice").parent(".col1.row1.gameBoard-Tile.Player").length == 0) {
                                PlayerArr[0][0] = dice;

                                console.log("Row 1");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col1.row2.gameBoard-Tile.Player").length == 0) {
                                PlayerArr[0][1] = dice;

                                console.log("Row 2");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col1.row3.gameBoard-Tile.Player").length == 0) {
                                PlayerArr[0][2] = dice;

                                console.log("Row 3");
                                successfulAction = true;
                            } else {
                                alert("Invalid Placement\nSelect an empty column");
                            }
                        } else if (event.target.classList[1] === "col2") {
                            if ($(".diceBoard-Dice").parent(".col2.row1.gameBoard-Tile.Player").length == 0) {
                                PlayerArr[1][0] = dice;

                                console.log("Row 1");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col2.row2.gameBoard-Tile.Player").length == 0) {
                                PlayerArr[1][1] = dice;

                                console.log("Row 2");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col2.row3.gameBoard-Tile.Player").length == 0) {
                                PlayerArr[1][2] = dice;

                                console.log("Row 3");
                                successfulAction = true;
                            } else {
                                alert("Invalid Placement\nSelect an empty column");
                            }
                        } else if (event.target.classList[1] === "col3") {
                            if ($(".diceBoard-Dice").parent(".col3.row1.gameBoard-Tile.Player").length == 0) {
                                PlayerArr[2][0] = dice;

                                console.log("Row 1");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col3.row2.gameBoard-Tile.Player").length == 0) {
                                PlayerArr[2][1] = dice;

                                console.log("Row 2");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col3.row3.gameBoard-Tile.Player").length == 0) {
                                PlayerArr[2][2] = dice;

                                console.log("Row 3");
                                successfulAction = true;
                            } else {
                                alert("Invalid Placement\nSelect an empty column");
                            }
                        }
                    } else if (curPlayer % 2 == 0) { // Player 2
                        if (event.target.classList[1] === "col1") {

                            if ($(".diceBoard-Dice").parent(".col1.row1.gameBoard-Tile.AI").length == 0) {
                                AIArr[0][0] = dice;

                                console.log("Row 1");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col1.row2.gameBoard-Tile.AI").length == 0) {
                                AIArr[0][1] = dice;

                                console.log("Row 2");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col1.row3.gameBoard-Tile.AI").length == 0) {
                                AIArr[0][2] = dice;

                                console.log("Row 3");
                                successfulAction = true;
                            } else {
                                alert("Invalid Placement\nSelect an empty column");
                            }
                        } else if (event.target.classList[1] === "col2") {
                            if ($(".diceBoard-Dice").parent(".col2.row1.gameBoard-Tile.AI").length == 0) {
                                AIArr[1][0] = dice;

                                console.log("Row 1");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col2.row2.gameBoard-Tile.AI").length == 0) {
                                AIArr[1][1] = dice;

                                console.log("Row 2");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col2.row3.gameBoard-Tile.AI").length == 0) {
                                AIArr[1][2] = dice;

                                console.log("Row 3");
                                successfulAction = true;
                            } else {
                                alert("Invalid Placement\nSelect an empty column");
                            }
                        } else if (event.target.classList[1] === "col3") {
                            if ($(".diceBoard-Dice").parent(".col3.row1.gameBoard-Tile.AI").length == 0) {
                                AIArr[2][0] = dice;

                                console.log("Row 1");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col3.row2.gameBoard-Tile.AI").length == 0) {
                                AIArr[2][1] = dice;

                                console.log("Row 2");
                                successfulAction = true;
                            } else if ($(".diceBoard-Dice").parent(".col3.row3.gameBoard-Tile.AI").length == 0) {
                                AIArr[2][2] = dice;

                                console.log("Row 3");
                                successfulAction = true;
                            } else {
                                alert("Invalid Placement\nSelect an empty column");
                            }
                        }
                    }

                    if (successfulAction == true) {
                        console.log(curPlayer);
                        applyDiceChanges(PlayerArr, AIArr, curPlayer);
                        dice = randInt(6);



                        for (let x = 1; x <= 3; x++) {
                            $(".columnScore.col" + x + ".Player").text(perColumnScore(PlayerArr[x - 1]))
                        }
                        for (let x = 1; x <= 3; x++) {
                            $(".columnScore.col" + x + ".AI").text(perColumnScore(AIArr[x - 1]))
                        }
                        let PlayerScore = getTotal(PlayerArr);
                        let AIScore = getTotal(AIArr)
                        $(".score.Player").text(PlayerScore);
                        $(".score.AI").text(AIScore);

                        completion = isComplete(PlayerArr, AIArr);
                        if (!completion) {
                            if (curPlayer % 2 == 1) {
                                $("#PlayerDice").css("display", "none");
                                $("#AIDice").css("display", "block");
                                $('#AIMask').css("display", "none");
                                $('#PlayerMask').css("display", "block");
                                $("#AIDice").attr("src", "../images/Dice/dice" + dice + ".png");
                            } else {
                                $("#AIDice").css("display", "none");
                                $("#PlayerDice").css("display", "block");
                                $('#PlayerMask').css("display", "none");
                                $('#AIMask').css("display", "block");
                                $("#PlayerDice").attr("src", "../images/Dice/dice" + dice + ".png");
                            }

                            curPlayer += 1;
                        } else {
                            $('#AIMask').css("display", "block");
                            $('#PlayerMask').css("display", "block");
                            $("#AIDice").css("display", "none");
                            $("#PlayerDice").css("display", "none");

                            $(".scoreCheck").text(PlayerScore + " - " + AIScore);
                            if (PlayerScore > AIScore) {
                                $(".winnerName").text("Player 1 wins");
                            } else if (AIScore > PlayerScore) {
                                $(".winnerName").text("Player 2 wins");
                            } else {
                                $(".winnerName").text("Tie");
                            }
                            $('.winPopup-Container').css("display", "flex");

                        }
                    }
                });
            }
            start = true;
        });


    });


});

function randInt(max) {
    return Math.ceil(Math.random() * max);
}

function getTotal(arr) {
    let total = 0;
    $(arr).each(function (index, value) {
        total += perColumnScore(value);
    });
    return total;
}

function perColumnScore(arr) {
    let total = 0;

    var counts = arrCounts(arr);


    for (let x = 1; x <= 6; x++) {
        let temp = 0;
        for (let y = 0; y < counts[x]; y++) {
            temp += x;
        }
        if (temp != undefined & counts[x] != undefined) {
            total += temp * counts[x];
        }
    }

    return total;
}

function arrCounts(arr) {
    return arr.reduce(function (obj, elem) {
        obj[elem] = (obj[elem] || 0) + 1;
        return obj;
    }, {});
}

function applyDiceChanges(PArr, AArr, curPlayer) {

    // AArr[x][y]

    for (let x = 0; x < 3; x++) {
        for (var y = 0; y < 3; y++) {
            for (var z = 0; z < 3; z++) {
                if (PArr[x][y] == AArr[x][z] & curPlayer % 2 == 1) {
                    if (AArr[x][z + 1] != undefined & AArr[x][z + 1] > 0 & AArr[x][z] != AArr[x][z + 1]) {
                        AArr[x][z] = AArr[x][z + 1];
                        AArr[x][z + 1] = 0;
                    } else {
                        AArr[x][z] = 0;
                    }
                }
                if (AArr[x][y] == PArr[x][z] & curPlayer % 2 == 0) {
                    if (PArr[x][z + 1] != undefined & PArr[x][z + 1] > 0 & PArr[x][z] != PArr[x][z + 1]) {
                        PArr[x][z] = PArr[x][z + 1];
                        PArr[x][z + 1] = 0;
                    } else {
                        PArr[x][z] = 0;
                    }
                }
            }
        }
    }

    for (let x = 0; x < 3; x++) {
        for (var y = 0; y < 3; y++) {
            let PlayerDice = "../images/Dice/dice" + PArr[x][y] + ".png";
            let AIDice = "../images/Dice/dice" + AArr[x][y] + ".png";

            let AICounts = arrCounts(AIArr[x]);
            let PCounts = arrCounts(PArr[x]);

            if (PArr[x][y] != 0) {
                $(".col" + (x + 1) + ".row" + (y + 1) + ".Player").html(
                    '<img class="diceBoard-Dice dice" src="' + PlayerDice + '">'
                );

                if (PCounts[PArr[x][y]] == 2) {
                    $(".col" + (x + 1) + ".row" + (y + 1) + ".Player > .diceBoard-Dice.dice").addClass("diceDouble");
                } else if (PCounts[PArr[x][y]] == 3) {
                    $(".col" + (x + 1) + ".row" + (y + 1) + ".Player > .diceBoard-Dice.dice").addClass("diceTriple");
                }
            } else if (PArr[x][y] == 0) {
                $(".col" + (x + 1) + ".row" + (y + 1) + ".Player").html("");
            }
            if (AArr[x][y] != 0) {
                $(".col" + (x + 1) + ".row" + (y + 1) + ".AI").html(
                    '<img class="diceBoard-Dice dice" src="' + AIDice + '">'
                );

                if (AICounts[AIArr[x][y]] == 2) {
                    $(".col" + (x + 1) + ".row" + (y + 1) + ".AI > .diceBoard-Dice.dice").addClass("diceDouble");
                } else if (AICounts[AIArr[x][y]] == 3) {
                    $(".col" + (x + 1) + ".row" + (y + 1) + ".AI > .diceBoard-Dice.dice").addClass("diceTriple");
                }
            } else if (AArr[x][y] == 0) {
                $(".col" + (x + 1) + ".row" + (y + 1) + ".AI").html("");
            }


        }
    }
}

function isComplete(PArr, AArr) {
    var PArrString = JSON.stringify(PArr);
    var AArrString = JSON.stringify(AArr);

    console.log(PArrString + "\n" + AArrString);

    if (PArrString.indexOf("0") == -1 || AArrString.indexOf("0") == -1) {
        return true;
    }
    return false;
}