<?php

include 'db_inc.php';

/* Product name */
$product_name = 'Tofu';

/* Query */
$query = "DELETE FROM products WHERE name = '" . mysqli_real_escape_string($mysqli, $product_name) . "'";

/* Execute the query */
$result = mysqli_query($mysqli, $query);

/* Check for errors */
if (!$result)
{
   echo 'Query error: ' . mysqli_error($mysqli);
   die();
}

echo mysqli_affected_rows($mysqli) . ' products have been deleted.';