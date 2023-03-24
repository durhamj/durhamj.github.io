<?php

/* Include the connection script */
include 'db_inc.php';

/* Values */
$product_name = '';
$product_price = 0;

$products = array();
$products[] = array('name' => 'tofu', 'price' => 5);
$products[] = array('name' => 'chicken', 'price' => 10);
$products[] = array('name' => 'cheese', 'price' => 8);

/* Build the query */
$query = "INSERT INTO products (name, price) VALUES (?, ?)";

/* Prepare step: send the query template to the MySQL server */
$stmt = $mysqli->prepare($query);

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