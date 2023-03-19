<?php

require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
require '../PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$punten = 0;

function vraag1($answer1)
{
    global $punten;
    if ($answer1 == "1") {
        $punten++;
    }
    if ($answer1 == "2") {
        $punten += 2;
    }
    if ($answer1 == "3") {
        $punten += 3;
    }
    if ($answer1 == "4") {
        $punten += 4;
    }
}

function vraag2($answer2)
{
    global $punten;
    if ($answer2 == "1") {
        $punten++;
    }
    if ($answer2 == "2") {
        $punten += 2;
    }
    if ($answer2 == "3") {
        $punten += 3;
    }
    if ($answer2 == "4") {
        $punten += 4;
    }
}
function vraag3($answer3)
{
    global $punten;
    if ($answer3 == "1") {
        $punten++;
    }
    if ($answer3 == "2") {
        $punten += 2;
    }
    if ($answer3 == "3") {
        $punten += 3;
    }
    if ($answer3 == "4") {
        $punten += 4;
    }
}
function vraag4($answer4)
{
    global $punten;
    if ($answer4 == "1") {
        $punten++;
    }
    if ($answer4 == "2") {
        $punten += 2;
    }
    if ($answer4 == "3") {
        $punten += 3;
    }
    if ($answer4 == "4") {
        $punten += 4;
    }
}
function vraag5($answer5)
{
    global $punten;
    if ($answer5 == "1") {
        $punten++;
    }
    if ($answer5 == "2") {
        $punten += 2;
    }
    if ($answer5 == "3") {
        $punten += 3;
    }
    if ($answer5 == "4") {
        $punten += 4;
    }
}
function vraag6($answer6)
{
    global $punten;
    if ($answer6 == "1") {
        $punten++;
    }
    if ($answer6 == "2") {
        $punten += 2;
    }
    if ($answer6 == "3") {
        $punten += 3;
    }
    if ($answer6 == "4") {
        $punten += 4;
    }
}
function vraag7($answer7)
{
    global $punten;
    if ($answer7 == "1") {
        $punten++;
    }
    if ($answer7 == "2") {
        $punten += 2;
    }
    if ($answer7 == "3") {
        $punten += 3;
    }
    if ($answer7 == "4") {
        $punten += 4;
    }
}
function vraag8($answer8)
{
    global $punten;
    if ($answer8 == "1") {
        $punten++;
    }
    if ($answer8 == "2") {
        $punten += 2;
    }
    if ($answer8 == "3") {
        $punten += 3;
    }
    if ($answer8 == "4") {
        $punten += 4;
    }
}
function vraag9($answer9)
{
    global $punten;
    if ($answer9 == "1") {
        $punten++;
    }
    if ($answer9 == "2") {
        $punten += 2;
    }
    if ($answer9 == "3") {
        $punten += 3;
    }
    if ($answer9 == "4") {
        $punten += 4;
    }
}
function vraag10($answer10)
{
    global $punten;
    if ($answer10 == "1") {
        $punten++;
    }
    if ($answer10 == "2") {
        $punten += 2;
    }
    if ($answer10 == "3") {
        $punten += 3;
    }
    if ($answer10 == "4") {
        $punten += 4;
    }
}
function vraag11($answer11)
{
    global $punten;
    if ($answer11 == "1") {
        $punten++;
    }
    if ($answer11 == "2") {
        $punten += 2;
    }
    if ($answer11 == "3") {
        $punten += 3;
    }
    if ($answer11 == "4") {
        $punten += 4;
    }
}


function TotaalPunten()
{
    global $punten;
    if ($punten > 22)
            {
                return "u heeft $punten van de 44 punten gehaald it betekend dat u  schizofrenie heeft";
            }
        else
        {
            return "u heeft $punten van de 44 punten gehaald it betekend dat u geen schizofrenie heeft";
        }
   
}

function CountPoints()
{
    global $punten;
    return $punten;
}
//fucntion to send a mail using PHP mailer and gmail

function send_email($to_address , $points) {
    // Instantiate a new PHPMailer object
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Enable verbose debug output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = '341652165a@gmail.com'; // SMTP username
        $mail->Password = 'muvipgvfzgnolkuu'; // SMTP password
        $mail->SMTPSecure = "tls"; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        // Recipients
        $mail->setFrom('341652165a@gmail.com');
        $mail->addAddress($to_address); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Uitslag scizofrenie test';
        
            if ($points > 22)
            {
                $mail->Body = "u heeft " . $points . " van de 44 punten gehaald it betekend dat u  geen schizofrenie heeft";
            }
        else
        {
            $mail->Body = "u heeft " . $points . " van de 44 punten gehaald it betekend dat u  schizofrenie heeft";
        }
        

        // Send the email
        $mail->send();
        echo 'Email has been sent to ' . $to_address;
    } catch (Exception $e) {
        echo 'Message could not be sent. Error: ' . $mail->ErrorInfo;
    }
}