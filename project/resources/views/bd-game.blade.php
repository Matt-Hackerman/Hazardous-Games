<html>
    <head>
        <title>Bomb Defusal</title>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../game-css/bdGame.css">
        <link href="https://fonts.cdnfonts.com/css/exedore" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/arcade-classic" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="gameStart">
            <div class="directions">
                <h1>Welcome To Bomb Defusal Cadet!</h1>
                <div class="direction-galla">
                    <p class="page-1">
                        We have issued you military grade tools and a hand book with information pertaining to all kinds of explosive devices. If you
                        are unsure of how to proceed look to your hand book for more information, remember to take your time you only get 
                        one shot. Good Luck Cadet!
                    </p>
                    <div class="page-2">
                        <h1>Hand Book Controls</h1>
                        <p>
                            Click on hand book to open and close, D can also open the Hand Book and A will close the Hand Book.
                        </p>
                        <h1>Tool Controls</h1>
                        <p>
                            You select tools by clicking on them, once selected you can click on items in the mini game to preform 
                            an action. After you are finished using the tool click on the tool to de-select it, you can only have one 
                            tool selected at a time.
                        </p>
                    </div>
                </div>
                <div class="button-con">
                    <button id="prev" class="arrow-btn hidden"><ion-icon name="caret-back-outline"></ion-icon></button>
                    <button id="next" class="arrow-btn"><ion-icon name="caret-forward-outline"></ion-icon></button>
                </div>
                <button class="start">Begin</button>
            </div>
        </div>

        <div class="handBook-con">
            <div class="handBook">
                <div class="handBook-info">
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="../images/wire-game-img.png" alt="mini-game-1">
                        </div>
                        <div id="mgInfo-1" class="mini-gameExpand">More Info</div>
                    </div>
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="../images/code-game-img.png" alt="mini-game-2">
                        </div>
                        <div id="mgInfo-2" class="mini-gameExpand">More Info</div>
                    </div>
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="../images/switch-game-img.png" alt="mini-game-3">
                        </div>
                        <div id="mgInfo-3" class="mini-gameExpand">More Info</div>
                    </div>
                    {{-- <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="" alt="mini-game-4">
                        </div>
                        <div id="mgInfo-4" class="mini-gameExpand">More Info</div>
                    </div>
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="" alt="mini-game-5">
                        </div>
                        <div id="mgInfo-5" class="mini-gameExpand">More Info</div>
                    </div>
                    <div class="mini-gameInfo-con">
                        <div class="mini-gameImg">
                            <img src="" alt="mini-game-6">
                        </div>
                        <div id="mgInfo-6" class="mini-gameExpand">More Info</div>
                    </div> --}}
                </div>
            </div>
            <div class="openBook" title="Hand Book">> Hand Book ></div>
        </div>

        <div class="scan-con hidden">
            <div class="scan-end"></div>
            <div class="scan"></div>
        </div>

        <div class="hacking-con hidden">
            <div class="hacking">
                <div id="hackMini-easy" class="hacking-miniGame hidden">
                    <h1>Hack Interrupted</h1>
                    <div class="hackNumbers-con">
                        <div id="num1" class="miniGameNum">1</div>
                        <div id="num2" class="miniGameNum">2</div>
                        <div id="num3" class="miniGameNum">3</div>
                        <div id="num4" class="miniGameNum">4</div>
                        <div id="num5" class="miniGameNum">5</div>
                        <div id="num6" class="miniGameNum">6</div>
                    </div>
                </div>
            </div>
            <div class="pro-bar-con">
                <div class="pro-bar"></div>
            </div>
        </div>

        <div class="mini-gameInfo-Expanded">
            <div class="wire-info hidden">
                <h1>Wire Info</h1>
                <p>Check the wires if you see a white wire remember these steps exactly.</p>
                <ul>
                    <li>"Cut a red wire"</li>
                    <li>"Cut a red wire"</li>
                    <li>"Cut a white wire"</li>
                </ul>
                <h1>Wire Info</h1>
                <p>Check the wires if you see there are 3 blue wires and 1 green wire remember these steps exactly.</p>
                <ul>
                    <li>"Cut a blue wire"</li>
                    <li>"Cut a blue wire"</li>
                    <li>"Cut a blue wire"</li>
                    <li>"Cut a green wire"</li>
                </ul>
                <h1>Wire Info</h1>
                <p>Check the wires if you see all red wires remember these steps exactly.</p>
                <ul>
                    <li>"Use Scan tool"</li>
                    <li>"Hover over wires with the scan tool"</li>
                    <li>"Cut all wires that are not colored yellow"</li>
                </ul>
            </div>
            <div class="code-info hidden">
                <h1>Code Pad Info</h1>
                <p>
                    Use the pry tool to pry off the metal plate on the code pad, then use the hacking tool to get the code. 
                    wait to see if the hack is interrupted if so check the color of the boxes under Hack Interrupted.
                </p>
                <ul>
                    <li>If green enter the numbers in this order [1, 2, 3, 4, 5, 6]</li>
                    <li>If yellow enter the numbers in this order [1, 3, 5]</li>
                    <li>If red enter the numbers in this order [6, 5, 4, 3, 2, 1]</li>
                </ul>
                <p>After the hack has finished your code will appear on the code pad, all you have to do is hit enter.</p>
            </div>
            <div class="switch-info hidden">
                <h1>Switch Info</h1>
                <p>Check the number of switches in place if you see 5 follow this order.</p>
                <ul>
                    <li>"up"</li>
                    <li>"up"</li>
                    <li>"down"</li>
                    <li>"up"</li>
                    <li>"down"</li>
                </ul>
                <h1>Switch Info</h1>
                <p>Check the number of switches in place if you see 7 follow this order.</p>
                <ul>
                    <li>"down"</li>
                    <li>"down"</li>
                    <li>"up"</li>
                    <li>"down"</li>
                    <li>"up"</li>
                    <li>"up"</li>
                    <li>"up"</li>
                </ul>
                <h1>Switch Info</h1>
                <p>Check the number of switches in place if you see 10 follow this order.</p>
                <ul>
                    <li>"up"</li>
                    <li>"up"</li>
                    <li>"up"</li>
                    <li>"up"</li>
                    <li>"down"</li>
                    <li>"down"</li>
                    <li>"up"</li>
                    <li>"down"</li>
                    <li>"up"</li>
                    <li>"up"</li>
                </ul>
            </div>
        </div>

        <div class="gameOver hidden"></div>

        <div class="screenCrack hidden"></div>

        <div class="endScreen hidden"></div>

        <div id="victory" class="scoreCard hidden">
            <h1>Victory</h1>
            <div class="quote-win">"Congrats cadet we knew you had in ya!"</div>
            <h2>Mini Game 1:<p id="win">Completed</p></h2>
            <h2>Mini Game 2:<p id="win">Completed</p></h2>
            <h2>Mini Game 3:<p id="win">Completed</p></h2>
            <button id="retry-win" class="scoreCard-btn">Play Again?</button>
        </div>

        <div id="failure" class="scoreCard hidden">
            <h1>game over</h1>
            <div class="quote">"They're goin' ta bury what's left of ye in a soup can!"</div>
            <h2 id="mini-game-1">Mini Game 1:<p>Failure</p></h2>
            <h2 id="mini-game-2">Mini Game 2:<p>Failure</p></h2>
            <h2 id="mini-game-3">Mini Game 3:<p>Failure</p></h2>
            <button id="retry-lose" class="scoreCard-btn">Play Again?</button>
        </div>

        <div class="bdGame-grid">
            <div class="tool-bar">
                <div id="wire" class="tool" title="Wire Cutters">
                    <img src="../images/wire-tool.png" alt="wire cutters">
                </div>
                <div id="scan" class="tool" title="scanner">
                    <img src="../images/scanner-tool.png" alt="scanner">
                </div>
                <div id="pry" class="tool" title="Pry Tool">
                    <img src="../images/pry-tool.png" alt="pry tool">
                </div>
                <div id="hacking" class="tool" title="Hacking Device">
                    <img src="../images/hacking-tool.png" alt="hacking device">
                </div>
            </div>

            <div class="bd-con">
                <div class="bd-grid">
                    <div class="timer-con">
                        <div class="timer"><p>5.00.00</p></div>
                        <div class="lights-con">
                            <div id="l1" class="light"></div>
                            <div id="l2" class="light"></div>
                            <div id="l3" class="light"></div>
                        </div>
                    </div>

                    <div id="mg1" class="mini-game">
                        <div class="cut-wire-con">
                            <div id="wire1" class="wire-con">
                                <div class="wire-dec-top"></div>
                                <div class="wire-top"></div>
                                <div class="wire-cut"></div>
                                <div class="wire-bottom"></div>
                                <div class="wire-dec-bottom"></div>
                            </div>
                            <div id="wire2" class="wire-con">
                                <div class="wire-dec-top"></div>
                                <div class="wire-top"></div>
                                <div class="wire-cut"></div>
                                <div class="wire-bottom"></div>
                                <div class="wire-dec-bottom"></div>
                            </div>
                            <div id="wire3" class="wire-con">
                                <div class="wire-dec-top"></div>
                                <div class="wire-top"></div>
                                <div class="wire-cut"></div>
                                <div class="wire-bottom"></div>
                                <div class="wire-dec-bottom"></div>
                            </div>
                            <div id="wire4" class="wire-con">
                                <div class="wire-dec-top"></div>
                                <div class="wire-top"></div>
                                <div class="wire-cut"></div>
                                <div class="wire-bottom"></div>
                                <div class="wire-dec-bottom"></div>
                            </div>
                            <div id="wire5" class="wire-con">
                                <div class="wire-dec-top"></div>
                                <div class="wire-top"></div>
                                <div class="wire-cut"></div>
                                <div class="wire-bottom"></div>
                                <div class="wire-dec-bottom"></div>
                            </div>
                            <div id="wire6" class="wire-con">
                                <div class="wire-dec-top"></div>
                                <div class="wire-top"></div>
                                <div class="wire-cut"></div>
                                <div class="wire-bottom"></div>
                                <div class="wire-dec-bottom"></div>
                            </div>
                        </div>
                    </div>
                    <div id="mg2" class="mini-game">
                        <div class="code-pad-con">
                            <div class="code-pad-code"></div>
                            <div class="code-pad-body">
                                <div class="code-pad-numbers">
                                    <div class="code-pad-num">1</div>
                                    <div class="code-pad-num">2</div>
                                    <div class="code-pad-num">3</div>
                                    <div class="code-pad-num">4</div>
                                    <div class="code-pad-num">5</div>
                                    <div class="code-pad-num">6</div>
                                    <div class="code-pad-num">7</div>
                                    <div class="code-pad-num">8</div>
                                    <div class="code-pad-num">9</div>
                                    <div class="code-pad-num hidden"></div>
                                    <div class="code-pad-num">0</div>
                                </div>
                                <div class="code-pad-panel">
                                    <img id="pan-img" src="../images/plate-texture.jpg" alt="metal plate">
                                </div>
                                <div class="code-pad-enter">Enter</div>
                            </div>
                        </div>
                    </div>
                    <div id="mg3" class="mini-game">
                        <div class="switch-game-con">
                            <div class="test-switch">Test</div>
                            <div class="switches-con">
                                <div class="switch-con">
                                    <div id="s1" class="switch hidden up"></div>
                                </div>
                                <div class="switch-con">
                                    <div id="s2" class="switch hidden up"></div>
                                </div>
                                <div class="switch-con">
                                    <div id="s3" class="switch hidden up"></div>
                                </div>
                                <div class="switch-con">
                                    <div id="s4" class="switch hidden up"></div>
                                </div>
                                <div class="switch-con">
                                    <div id="s5" class="switch hidden up"></div>
                                </div>
                                <div class="switch-con">
                                    <div id="s6" class="switch hidden up"></div>
                                </div>
                                <div class="switch-con">
                                    <div id="s7" class="switch hidden up"></div>
                                </div>
                                <div class="switch-con">
                                    <div id="s8" class="switch hidden up"></div>
                                </div>
                                <div class="switch-con">
                                    <div id="s9" class="switch hidden up"></div>
                                </div>
                                <div class="switch-con">
                                    <div id="s10" class="switch hidden up"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="../JavaScript/main.js"></script>
        <script src="../JavaScript/bdGame.js"></script>
    </body>
</html>