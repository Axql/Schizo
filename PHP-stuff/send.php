<?php

include 'functions.php';

if (isset($_POST['email']) == true) 
{
      Sendmail($_POST['email']);
      echo "mail is gestuurd";
      
} else
{
    echo " Voer een geldig email adress in";
}

var_dump($_POST);