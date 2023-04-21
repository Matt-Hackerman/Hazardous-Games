var selected = false;
var currentArea = "Menu";
var keyMap = {
    87: 'WKEY',
    65: 'AKEY',
    83: 'SKEY',
    68: 'DKEY',
    38: 'ARROWUP',
    40: 'ARROWDOWN',
    37: 'ARROWLEFT',
    39: 'ARROWRIGHT',
    13: 'ENTER',
}
var keys = {};
$(document).ready(function () {
    
    getKey = function(key) {
        return keyMap[(key.which || key.keyCode)] || '';
    };
    
    $(document).keydown(function(event) {
        switch (getKey(event)) {
            case 'ARROWUP':
                event.preventDefault();
                keys['UP'] = true;
                break;
            case 'ARROWDOWN':
                event.preventDefault();
                keys['DOWN'] = true;
                break;
            case 'ARROWLEFT':
                event.preventDefault();
                keys['LEFT'] = true;
                break;
            case 'ARROWRIGHT':
                event.preventDefault();
                keys['RIGHT'] = true;
                break;
            
            case 'WKEY':
                event.preventDefault();
                keys['UP'] = true;
                break;
            case 'SKEY':
                event.preventDefault();
                keys['DOWN'] = true;
                break;
            case 'AKEY':
                event.preventDefault();
                keys['LEFT'] = true;
                break;
            case 'DKEY':
                event.preventDefault();
                keys['RIGHT'] = true;
                break;

            case 'ENTER':
                event.preventDefault();
                keys['ENTER'] = true;
                break;
            default:
                break;
        }
        moveCursor(keys);
    });
    
    $(document).keyup(function(event) {
        switch (getKey(event)) {
            case 'ARROWUP':
                event.preventDefault();
                delete keys['UP'];
                break;
            case 'ARROWDOWN':
                event.preventDefault();
                delete keys['DOWN'];
                break;
            case 'ARROWLEFT':
                event.preventDefault();
                delete keys['LEFT'];
                break;
            case 'ARROWRIGHT':
                event.preventDefault();
                delete keys['RIGHT'];
                break;
            
            case 'WKEY':
                event.preventDefault();
                delete keys['UP'];
                break;
            case 'SKEY':
                event.preventDefault();
                delete keys['DOWN'];
                break;
            case 'AKEY':
                event.preventDefault();
                delete keys['LEFT'];
                break;
            case 'DKEY':
                event.preventDefault();
                delete keys['RIGHT'];
                break;

            case 'ENTER':
                event.preventDefault();
                delete keys['ENTER'];
                break;
            default:
                break;
        }
    });


});

var mainMenu = ["NoviceDiff", "AdvancedDiff", "ExpertDiff", "MasterDiff"];

function moveCursor(keys){
    if($(".selected").length <= 0){
        $(".selectable").first().addClass("selected");
    }else{
        let current = $(".selected").attr("id");
        if(currentArea == "Menu"){
            if(keys['UP'] || keys['LEFT']){
                for(let x = 0; x < 4; x++){
                    let y = x - 1;
                    if(y < 0){
                        y = 3;
                    }
                    if(mainMenu[x] == current){
                        $("#" + mainMenu[x]).removeClass("selected");
                        $("#" + mainMenu[y]).addClass("selected");
                    }
                }
            }else if(keys['DOWN'] || keys['RIGHT']){
                for(let x = 0; x < 4; x++){
                    let y = x + 1;
                    if(y > 3){
                        y = 0;
                    }
                    if(mainMenu[x] == current){
                        $("#" + mainMenu[x]).removeClass("selected");
                        $("#" + mainMenu[y]).addClass("selected");
                    }
                }
            }else if(keys['ENTER']){
                console.log('Test');
                $(".modeSelection").remove();
            }

        }
    }
}