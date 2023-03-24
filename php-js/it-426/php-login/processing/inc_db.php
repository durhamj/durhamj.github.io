<?php
    $url='localhost';
    $username='user2';
    $password='PoorPasswrd';
    $schema='login';
    $mysqli=mysqli_connect($url,$username,$password,$schema);
    
if (!$mysqli)
{
   echo 'Connection failed<br>';
   echo 'Error number: ' . mysqli_connect_errno() . '<br>';
   echo 'Error message: ' . mysqli_connect_error() . '<br>';
   die();
}
?>