<?php

include 'db_inc.php';

/* Lower price threshold */
$price_thr = 9;

/* Query template with a named placeholder (:price_thr) */
$query = 'UPDATE products SET price = (price - 1) WHERE price > 9';

/* Query values (the lower price threshold) */
$values = array(

   ':price_thr' => $price_thr
);

/* Execute the query */
$result = mysqli_query($mysqli, $query);

/* Check for errors */
if (!$result)
{
   echo 'Query error: ' . mysqli_error($mysqli);
   die();
}

echo mysqli_affected_rows($mysqli) . ' products had their price lowered.';