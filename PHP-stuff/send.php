<?php

include 'functions.php';

if (isset($_POST['email']) == true) 
{
      send_email($_POST['email'], $_POST['punten']);

      echo "<br>De score zit in uw Inbox";
    header("Refresh:10; quiz.php");
} else
{
    echo " Voer een geldig email adress in ";
}





