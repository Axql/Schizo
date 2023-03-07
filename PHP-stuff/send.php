<?php

include 'functions.php';

if (isset($_POST['email']) == 1) 
{
      Sendmail($_POST['email']);
      echo "mail is gestuurd";
      
} else
{
    echo " Voer een email adress in";
}

var_dump($_POST);