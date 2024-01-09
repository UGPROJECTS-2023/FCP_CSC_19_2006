<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['ptype'];
$b = $_POST['pname'];
// query
$sql = "UPDATE products 
        SET pname=?, ptype=?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$id));
header("location: products.php");

?>