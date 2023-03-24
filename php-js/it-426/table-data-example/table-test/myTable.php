
<?php

/* Host name of the MySQL server */
$host = 'localhost';

/* MySQL account username */
$user = 'myUser';

/* MySQL account password */
$passwd = 'myPasswd';

/* The schema you want to use */
$schema = 'myschema';

/* Connection with MySQLi, procedural-style */
$mysqli = mysqli_connect($host, $user, $passwd, $schema);

/* Check if the connection succeeded */
if (!$mysqli)
{
   echo 'Connection failed<br>';
   echo 'Error number: ' . mysqli_connect_errno() . '<br>';
   echo 'Error message: ' . mysqli_connect_error() . '<br>';
   die();
}

$product_name = '';
$product_price = 0;

/* Array of products */
$products = array();
$products[] = array('name' => 'toothpaste', 'price' => 5);
$products[] = array('name' => 'shoes', 'price' => 60);
$products[] = array('name' => 'hat', 'price' => 20);

/* Query template */
$query = "INSERT INTO products (name, price) VALUES (?, ?)";

/* Prepare step: send the query template to the MySQL server */
$stmt = $mysqli->prepare($query);

if (!$stmt)
{
   echo 'Query error: ' . $mysqli-> error();
   die();
}

/* Bind step: bind the variables to the query ('s' for strings, 'i' for integers) */
if (!$stmt->bind_param('si', $product_name, $product_price))
{
   echo 'Binding failed: ' . $stmt->error;
   die();
}

/* Insert all the products from the array */
foreach ($products as $product)
{
   $product_name = $product['name'];
   $product_price = $product['price'];

   if (!$stmt->execute())
   {
      echo 'Execute failed: ' . $stmt->error;
      die();
   }
}

echo 'All products added!';

?>


  

