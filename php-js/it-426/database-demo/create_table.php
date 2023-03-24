<?php

include 'db_inc.php';


/* PRODUCTS table */

/* Query #1: create the table structure */
$products_query = 

'CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8';

/* Execute the SQL query */
if (!mysqli_query($mysqli, $products_query))
{
   /* if mysqli_query() returns FALSE it means an error occurred */
   echo 'Query error: ' . mysqli_error($mysqli);
   die();
}

echo 'Products table created successfully<br>';


/* Query #2: set the primary key */
$products_pk = 'ALTER TABLE `products` ADD PRIMARY KEY (`id`)';

/* Execute the SQL query */
if (!mysqli_query($mysqli, $products_pk))
{
   /* if mysqli_query() returns FALSE it means an error occurred */
   echo 'Query error: ' . mysqli_error($mysqli);
   die();
}

echo 'Primary key added successfully<br>';


/* Query #3: set the auto-increment */
$products_ai = 'ALTER TABLE `products` MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT';

/* Execute the SQL query */
if (!mysqli_query($mysqli, $products_ai))
{
   /* if mysqli_query() returns FALSE it means an error occurred */
   echo 'Query error: ' . mysqli_error($mysqli);
   die();
}

echo 'Auto-increment set successfully<br>';

?>