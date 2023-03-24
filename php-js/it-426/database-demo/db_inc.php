<?php

$host = 'localhost' ;

$user = 'myUser';

$passwd = 'myPasswd';

$schema = 'myschema';

$mysqli = mysqli_connect($host, $user, $passwd, $schema);

/* Check to see if the connection succeeds */

if (!$mysqli)
{
   echo 'Connection failed<br>';
   echo 'Error number: ' . mysqli_connect_errno() . '<br>';
   echo 'Error message: ' . mysqli_connect_error() . '<br>';
   die();
}

echo 'Successfully connected!<br>';

?>