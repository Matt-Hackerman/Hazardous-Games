$(document).ready(function() {
    let rowLetter = "b";
    let carType;
    let carNumber;
    let carDelay;
    let carDirection;
    let carWidth = "carWidth";
    for(let x=0; x<=10;x++){
        carType = Math.ceil(Math.random()*4);
        if(carType == 4){
            carWidth = "car4Width";
        } else {
            carWidth = "carWidth";
        }
        carNumber = Math.ceil(Math.random()*3);
        carDelay = Math.random() * 2;
        carDirection = Math.floor(Math.random()*2);
        console.log(carNumber);
        if(rowLetter != "a" && rowLetter != "g" && rowLetter != "m"){
            for(let y = 0; y < carNumber; y++){
                
                $("." + rowLetter + 1).append('<div class="car car' + carType + ' ' + carWidth + '" style="animation-delay:' + carDelay + 's; animation-name: drive' + carDirection + '"><div class="wheelContainer"><div class="wheel"></div><div class="wheel"></div></div> <div class="base"></div><div class="wheelContainer"><div class="wheel"></div><div class="wheel"></div></div></div>');

                if(carType == 1){
                    carDelay += (Math.random()) + 1.25;
                }else if(carType == 2){
                    carDelay += (Math.random() * .75) + .75;
                }else if(carType == 3){
                    carDelay += (Math.random() * .20) + .5;
                }else if(carType == 4){
                    carDelay += (Math.random() * 2) + 1.25;
                }
            }
        }
        console.log("." + rowLetter + 1);
        console.log(carType);
        rowLetter = rowLetter.charCodeAt()+1;
        rowLetter = String.fromCharCode(rowLetter);
    }


    let lives = 3;
    let hit = false;
    let intervalId = window.setInterval(function(){
        let car = document.querySelectorAll('.car');
        for(let x=0; x<car.length; x++){
            let carCoord = car[x].getBoundingClientRect();
            console.log(carCoord);
            if(hit == false){
                if(frogCoord.right >= carCoord.left+(window.innerWidth*0.025) &&
                    frogCoord.left <= carCoord.right-(window.innerWidth*0.025) &&
                    frogCoord.bottom >= carCoord.top &&
                    frogCoord.top <= carCoord.bottom
                ) {
                    // alert("Life Lost");
                    lives -= 1;
                    if(lives == 2){
                        $("#life2").remove();
                        alert("2 lives left");
                    } else if(lives == 1){
                        $("#life1").remove();
                        alert("1 life left");
                    }
                    if(lives == 0){
                        alert("You lose");
                        document.location.reload(true);
                    } else {
                        let frog1 = $("#frog");
                        current = "m7"
                        let frogInners = frog1.detach();
                        frogInners.appendTo("." + current);
                        hit = false;
                        frogCoord = document.querySelector('.' + current).getBoundingClientRect();
                    }
                }
            }
        }
        
    }, 1000/300);

        
    

    let current = "m7";
    let frog = document.querySelector('.' + current);
    let frogCoord = frog.getBoundingClientRect();

    
    let fired = false;

    let goal1 = false;
    let goal2 = false;
    let goal3 = false;
    let goal4 = false;
    let goal5 = false;

    document.addEventListener("keydown", function(event) {
        
        let frog1 = $("#frog");
        let letter = current[0];
        let number = current.substring(1, current.length);
        // alert(event.key);
        if(!fired){
            if (event.key === "w"){
                if(current != "b2" && current != "b3" && current != "b5" && current != "b6" && current != "b8" && current != "b9" && current != "b11" && current != "b12"){
                    fired = true;
                    let frogInners = frog1.detach();
                    let charcode = letter.charCodeAt()-1;
                    let newletter = String.fromCharCode(charcode);
                    current = current.replace(current[0], newletter);
                    let newFrog = $("." + current);
                    frogInners.appendTo(newFrog);
                    frogCoord = document.querySelector('.' + current).getBoundingClientRect();
                    if(current == "a1") {
                        if(goal1 == true){
                            lives -= 1;
                            if(lives == 2){
                                $("#life2").remove();
                                alert("2 lives left");
                            } else if(lives == 1){
                                $("#life1").remove();
                                alert("1 life left");
                            }
                        }
                        goal1 = true;
                        frogInners = frog1.detach();
                        let image = $(`<img src='${"../images/frogger.png"}'>`);
                        image.addClass("frogTemp");
                        image.appendTo("." + current);
                        current = "m7"
                        frogInners.appendTo("." + current);
                    } else if(current == "a4") {
                        if(goal2 == true){
                            lives -= 1;
                            if(lives == 2){
                                $("#life2").remove();
                                alert("2 lives left");
                            } else if(lives == 1){
                                $("#life1").remove();
                                alert("1 life left");
                            }
                        }
                        goal2 = true;
                        frogInners = frog1.detach();
                        let image = $(`<img src='${"../images/frogger.png"}'>`);
                        image.addClass("frogTemp");
                        image.appendTo("." + current);
                        current = "m7"
                        frogInners.appendTo("." + current);
                    } else if(current == "a7") {
                        if(goal3 == true){
                            lives -= 1;
                            if(lives == 2){
                                $("#life2").remove();
                                alert("2 lives left");
                            } else if(lives == 1){
                                $("#life1").remove();
                                alert("1 life left");
                            }
                        }
                        goal3 = true;
                        frogInners = frog1.detach();
                        let image = $(`<img src='${"../images/frogger.png"}'>`);
                        image.addClass("frogTemp");
                        image.appendTo("." + current);
                        current = "m7"
                        frogInners.appendTo("." + current);
                    } else if(current == "a10") {
                        if(goal4 == true){
                            lives -= 1;
                            if(lives == 2){
                                $("#life2").remove();
                                alert("2 lives left");
                            } else if(lives == 1){
                                $("#life1").remove();
                                alert("1 life left");
                            }
                        }
                        goal4 = true;
                        frogInners = frog1.detach();
                        let image = $(`<img src='${"../images/frogger.png"}'>`);
                        image.addClass("frogTemp");
                        image.appendTo("." + current);
                        current = "m7"
                        frogInners.appendTo("." + current);
                    } else if(current == "a13") {
                        if(goal5 == true){
                            lives -= 1;
                            if(lives == 2){
                                $("#life2").remove();
                                alert("2 lives left");
                            } else if(lives == 1){
                                $("#life1").remove();
                                alert("1 life left");
                            }

                        }
                        goal5 = true;
                        frogInners = frog1.detach();
                        let image = $(`<img src='${"../images/frogger.png"}'>`);
                        image.addClass("frogTemp");
                        image.appendTo("." + current);
                        current = "m7"
                        frogInners.appendTo("." + current);
                    }
                    if(goal1 == true && goal2 == true && goal3 == true && goal4 == true && goal5 == true) {
                        alert("you win!");
                        document.location.reload(true);
                    }
                }

            } else if (event.key === "s"){
                if(letter != "m"){
                    fired = true;
                    let frogInners = frog1.detach();
                    let charcode = letter.charCodeAt()+1;
                    let newletter = String.fromCharCode(charcode);
                    current = current.replace(current[0], newletter);
                    let newFrog = $("." + current);
                    frogInners.appendTo(newFrog);
                    frogCoord = document.querySelector('.' + current).getBoundingClientRect();
                }
            } else if (event.key === "a"){
                if(number != "1" && letter != "a"){
                    fired = true;
                    let frogInners = frog1.detach();
                    let newNumber = parseInt(number)-1;
                    current = current.replace(current.substring(1, current.length), newNumber);
                    let newFrog = $("." + current);
                    frogInners.appendTo(newFrog);
                    frogCoord = document.querySelector('.' + current).getBoundingClientRect();
                }
            } else if (event.key === "d"){
                if(number != "13" && letter != "a"){
                    fired = true;
                    let frogInners = frog1.detach();
                    let newNumber = parseInt(number)+1;
                    current = current.replace(current.substring(1, current.length), newNumber);
                    let newFrog = $("." + current);
                    frogInners.appendTo(newFrog);
                    frogCoord = document.querySelector('.' + current).getBoundingClientRect();
                }
            }
        }
    });

    document.addEventListener('keyup', (e) => {
        fired = false;
    });
    
    

});





