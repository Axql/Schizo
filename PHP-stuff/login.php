<?php 
include 'functions.php';

for($i = 0; $i < 32; $i++)
{
    Sendmail("336637@student.mboutrecht.nl");
    echo $i;
}