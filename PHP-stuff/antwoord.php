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


?>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Punten</title>
  <link rel="stylesheet" href="../css/style.css">
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
        <li><a href=".Quiz.php">Quiz</a></li>
              <li><a href=".login.php">Login</a></li>
    </nav>

    <img src="../Img/foto-behandeling.jpg" alt="error"/>

  </div>


<form action="send.php" method="post">
    <h3>voer uw E-Mail in voor een mailtje van uw score</h3>
    <label for="email">Enter your email:</label>
    <input type="email" id="email" name="email">
    <input type="hidden" name="punten" value = <?php echo CountPoints();?>>
    <input type="submit" value="Submit" class="button">
</form>

</html>