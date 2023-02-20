<?php
include 'functions.php';
            
            $answer1 = $_POST['vraag-1-punt'];
            $answer2 = $_POST['vraag-2-punt'];
            $answer3 = $_POST['vraag-3-punt'];
            $answer4 = $_POST['vraag-4-punt'];
            $answer5 = $_POST['vraag-5-punt'];
            $answer6 = $_POST['vraag-6-punt'];
            $answer7 = $_POST['vraag-7-punt'];
            $answer8 = $_POST['vraag-8-punt'];
            $answer9 = $_POST['vraag-9-punt'];
            $answer10 = $_POST['vraag-10-punt'];
            $answer11 = $_POST['vraag-11-punt'];
        
           
            vraag1($answer1);
            vraag2($answer2);
            vraag3($answer3);
            vraag4($answer4);
            vraag5($answer5);
            vraag6($answer6);
            vraag7($answer7);
            vraag8($answer8);
            vraag9($answer9);
            vraag10($answer10);
            vraag11($answer11);
            
            echo TotaalPunten();
            
    $to = "336469@student.mboutrecht.nl";
    $subject = "deez nuts";


           
        ?>
        <html>
            <button><?php mail($to, $subject, "deez nuts across your face mf");?> click hier voor een mailtje</button>
        </html>