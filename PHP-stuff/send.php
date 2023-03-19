<?php

include 'functions.php';
require('config.php');

if (isset($_POST['email']) == true) 
{
    $email = $_POST['email'];
    $punten = $_POST['punten'];
      send_email($email, $punten);

      echo "De score zit in uw Inbox ";
    header("Refresh:10; quiz.php");



$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo " er is verbinding gemaakt";
    }
} catch (PDOException $e) {
    echo "er is geen verbinding met de db";
    $e->getMessage();
}


    try {
        // Maak een update query voor het updaten van een record
        $sql = "INSERT INTO Score (	email, Score)
                VALUES (
                    :email
                    ,:punten
                    );";

        // Roep de prepare-method aan van het PDO-object $pdo
        $statement = $pdo->prepare($sql);

        $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $statement->bindValue(':punten', $_POST['punten'], PDO::PARAM_STR);
      
        $statement->execute();

      
        header("Refresh:3; quiz.php");
    } catch (PDOException $e) {
        // echo "Het record is niet geupdate";
        echo $e;
        header("Refresh:10; antwoord.php");
    }
    exit();
}

else
{
    echo " Voer een geldig email adress in ";
}





