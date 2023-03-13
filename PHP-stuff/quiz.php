<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8/>

    <title>PHP QUIZ | Webdevtrick.com</title>

    <link rel="stylesheet" type="text/css" href="../css/style.css " />
</head>

<body>
    <div class="nav-bar">
        <nav>
            <img src="../Img/schitzofrenie-logo.png" alt="logo" class="logo">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../html/info.html">Informatie</a>
                    <ul>
                        <li><a href="../html/geschiedenis.html">Geschiedenis</a></li>
                        <li><a href="../html/symptomen.html">Symptomen</a></li>
                        <li><a href="../html/behandeling.html">Behandeling</a></li>
                    </ul>
                </li>
                <li><a href="Quiz.php">Quiz</a></li>
                <li><a href="login.php">Login</a></li>
        </nav>
    </div>

    <style>
        body
        {
            overflow: hidden;
        }
    </style>
    <form action="antwoord.php " method="post">

        <div id="quiz">
            <ol>
                <li>
                    <div id="vraag1">
                        <h6>Hoor je (minstens 1 keer per week) dingen die anderen niet horen, 
                        </h6> <h6>zoals ongewone geluiden, stemmen van fluisterende of pratende mensen?</h6>

                        <div>
                            <input type="radio" name="vraag-1-punt" id="vraag-1-punt" value="4" />
                            <label for="vraag-1-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-1-punt" id="vraag-1-punt" value="3" />
                            <label for="vraag-1-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-1-punt" id="vraag-1-punt" value="2" />
                            <label for="vraag-1-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-1-punt" id="vraag-1-punt" value="1" />
                            <label for="vraag-1-punt">altijd</label>
                        </div>
                    </div>

                    <div id="vraag2">
                        <h3>Hoor je (minstens 1 keer per week) stemmen tegen elkaar praten, terwijl je alleen bent?</h3>

                        <div>
                            <input type="radio" name="vraag-2-punt" id="vraag-2-punt" value="4" />
                            <label for="vraag-2-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-2-punt" id="vraag-2-punt" value="3" />
                            <label for="vraag-2-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-2-punt" id="vraag-2-punt" value="2" />
                            <label for="vraag-2-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-2-punt" id="vraag-2-punt" value="1" />
                            <label for="vraag-2-punt">altijd</label>
                        </div>
                    </div>

                    <div id="vraag3">
                        <h3>Zie je dingen die anderen niet kunnen zien, zoals flitsen, schaduwen, voorwerpen, vormen van mensen of dieren?</h3>

                        <div>
                            <input type="radio" name="vraag-3-punt" id="vraag-3-punt" value="4" />
                            <label for="vraag-3-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-3-punt" id="vraag-3-punt" value="3" />
                            <label for="vraag-3-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-3-punt" id="vraag-3-punt" value="2" />
                            <label for="vraag-3-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-3-punt" id="vraag-3-punt" value="1" />
                            <label for="vraag-3-punt">altijd</label>
                        </div>
                    </div>
                    <div id="vraag4">
                        <h3>Heb je het idee dat je achtervolgd wordt?</h3>

                        <div>
                            <input type="radio" name="vraag-4-punt" id="vraag-4-punt" value="4" />
                            <label for="vraag-4-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-4-punt" id="vraag-4-punt" value="3" />
                            <label for="vraag-4-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-2-punt" id="vraag-2-punt" value="2" />
                            <label for="vraag-2-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-4-punt" id="vraag-4-punt" value="1" />
                            <label for="vraag-4-punt">altijd</label>
                        </div>
                    </div>

                    <div id="vraag5">
                        <h3>Heb je het idee dat anderen je kwaad willen doen? Dat ze je misschien willen vergiftigen of zelfs willen vermoorden?</h3>

                        <div>
                            <input type="radio" name="vraag-5-punt" id="vraag-5-punt" value="4" />
                            <label for="vraag-5-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-5-punt" id="vraag-5-punt" value="3" />
                            <label for="vraag-5-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-5-punt" id="vraag-5-punt" value="2" />
                            <label for="vraag-5-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-5-punt" id="vraag-5-punt" value="1" />
                            <label for="vraag-5-punt">altijd</label>
                        </div>
                    </div>

                    <div id="vraag6">
                        <h3>Denk je dat er een complot tegen je wordt gesmeed?</h3>

                        <div>
                            <input type="radio" name="vraag-2-punt" id="vraag-2-punt" value="4" />
                            <label for="vraag-2-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-6-punt" id="vraag-6-punt" value="3" />
                            <label for="vraag-6-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-6-punt" id="vraag-6-punt" value="2" />
                            <label for="vraag-6-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-6-punt" id="vraag-6-punt" value="1" />
                            <label for="vraag-6-punt">altijd</label>
                        </div>
                    </div>

                    <div id="vraag7">
                        <h3>Heb je het gevoel dat een dubbelganger de plaats heeft ingenomen van een familielid, vriend of bekende?</h3>

                        <div>
                            <input type="radio" name="vraag-7-punt" id="vraag-7-punt" value="4" />
                            <label for="vraag-7-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-7-punt" id="vraag-7-punt" value="3" />
                            <label for="vraag-7-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-7-punt" id="vraag-7-punt" value="2" />
                            <label for="vraag-7-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-7-punt" id="vraag-7-punt" value="1" />
                            <label for="vraag-7-punt">altijd</label>
                        </div>
                    </div>

                    <div id="vraag8">
                        <h3>Denk je (minstens 1 keer per week) dat mensen je gedachten kunnen lezen?</h3>

                        <div>
                            <input type="radio" name="vraag-8-punt" id="vraag-8-punt" value="4" />
                            <label for="vraag-8-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-8-punt" id="vraag-8-punt" value="3" />
                            <label for="vraag-8-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-8-punt" id="vraag-8-punt" value="2" />
                            <label for="vraag-8-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-8-punt" id="vraag-8-punt" value="1" />
                            <label for="vraag-8-punt">altijd</label>
                        </div>
                    </div>

                    <div id="vraag9">
                        <h3>Worden je gedachten hardop uitgezonden, zodat anderen weten wat je denkt?</h3>

                        <div>
                            <input type="radio" name="vraag-9-punt" id="vraag-9-punt" value="4" />
                            <label for="vraag-9-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-9-punt" id="vraag-9-punt" value="3" />
                            <label for="vraag-9-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-9-punt" id="vraag-9-punt" value="2" />
                            <label for="vraag-9-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-9-punt" id="vraag-9-punt" value="1" />
                            <label for="vraag-9-punt">altijd</label>
                        </div>
                    </div>

                    <div id="vraag10">
                        <h3>Heb je het idee dat iemand telepathisch met je communiceert?</h3>

                        <div>
                            <input type="radio" name="vraag-10-punt" id="vraag-10-punt" value="4" />
                            <label for="vraag-10-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-10-punt" id="vraag-10-punt" value="3" />
                            <label for="vraag-10-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-10-punt" id="vraag-10-punt" value="2" />
                            <label for="vraag-10-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-10-punt" id="vraag-10-punt" value="1" />
                            <label for="vraag-10-punt">altijd</label>
                        </div>
                    </div>

                    <div id="vraag11">
                        <h3>Heb je het idee dat er gedachten uit je hoofd worden gehaald?</h3>

                        <div>
                            <input type="radio" name="vraag-11-punt" id="vraag-11-punt" value="4" />
                            <label for="vraag-11-punt">nooit</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-11-punt" id="vraag-11-punt" value="3" />
                            <label for="vraag-11-punt">soms</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-11-punt" id="vraag-11-punt" value="2" />
                            <label for="vraag-11-punt">heel vaak</label>
                        </div>

                        <div>
                            <input type="radio" name="vraag-11-punt" id="vraag-11-punt" value="1" />
                            <label for="vraag-11-punt">altijd</label>
                        </div>

                    </div>
                    <input type="submit" value="Submit" />
        </div>
    </form>

    </div>


</body>

</html>