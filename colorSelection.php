<?php
    session_start();
    if($_SESSION['authenticated'] != true){
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.js"></script>
    <script type="text/javascript" src="js/jquery.horizonScroll.js"></script>
</head>
    <body>

        <div class="horizon-prev"><img src="images/l-arrow.png"></div>
        <div class="horizon-next"><img src="images/r-arrow.png"></div>


        <section data-role="section" id="section-black"></section>
        <section data-role="section" id="section-dark-green"></section>
        <section data-role="section" id="section-green"></section>
        <section data-role="section" id="section-light-green"></section>
        <section data-role="section" id="section-blue"></section>
        <section data-role="section" id="section-indigo"></section>
        <section data-role="section" id="section-light-blue"></section>
        <section data-role="section" id="section-heavenly"></section>
        <section data-role="section" id="section-red"></section>
        <section data-role="section" id="section-orange"></section>
        <section data-role="section" id="section-amber"></section>
        <section data-role="section" id="section-yellow"></section>
        <section data-role="section" id="section-fucsia"></section>
        <section data-role="section" id="section-pink"></section>
        <section data-role="section" id="section-light-pink"></section>
        <section data-role="section" id="section-white"></section>

        <div class="dock_container" id="demo">
            <div class="dock">
                <ul>
                    <li>
                        <span>Nero</span>
                        <div class="color black" onclick="$(document).horizon('scrollTo', 'section-black'); changeColor('light');"></div>
                    </li>
                    <li>
                        <span>Verde Scuro</span>
                        <div class="color darkGreen" onclick="$(document).horizon('scrollTo', 'section-dark-green'); changeColor('mid');"></div>
                    </li>
                    <li>
                        <span>Verde</span>
                        <div class="color green" onclick="$(document).horizon('scrollTo', 'section-green'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Verde Chiaro</span>
                        <div class="color lightGreen" onclick="$(document).horizon('scrollTo', 'section-light-green'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Blu</span>
                        <div class="color blue" onclick="$(document).horizon('scrollTo', 'section-blue'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Indaco</span>
                        <div class="color indigo" onclick="$(document).horizon('scrollTo', 'section-indigo'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Azzurro</span>
                        <div class="color lightBlue" onclick="$(document).horizon('scrollTo', 'section-light-blue'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Celeste</span>
                        <div class="color heavenly" onclick="$(document).horizon('scrollTo', 'section-heavenly'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Rosso</span>
                        <div class="color red" onclick="$(document).horizon('scrollTo', 'section-red'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Arancione</span>
                        <div class="color orange" onclick="$(document).horizon('scrollTo', 'section-orange'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Ambra</span>
                        <div class="color amber" onclick="$(document).horizon('scrollTo', 'section-amber'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Giallo</span>
                        <div class="color yellow" onclick="$(document).horizon('scrollTo', 'section-yellow'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Fucsia</span>
                        <div class="color fucsia" onclick="$(document).horizon('scrollTo', 'section-fucsia'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Rosa</span>
                        <div class="color pink" onclick="$(document).horizon('scrollTo', 'section-pink'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Rosa chiaro</span>
                        <div class="color lightPink" onclick="$(document).horizon('scrollTo', 'section-light-pink'); changeColor('dark');"></div>
                    </li>
                    <li>
                        <span>Bianco</span>
                        <div class="color white" onclick="$(document).horizon('scrollTo', 'section-white'); changeColor('dark');"></div>
                    </li>
                </ul>
            </div>
        </div>

        <script type="text/javascript">
            $('section').horizon();

            function changeColor(i) { 
                if (i == "dark") {
                    document.getElementById("demo").style.background = "#00000066";
                } else if(i == "mid"){
                    document.getElementById("demo").style.background = "#ffffff1a";
                } else {
                    document.getElementById("demo").style.background = "#ffffff33";
                }
            }
        </script>
    </body>
</html>
