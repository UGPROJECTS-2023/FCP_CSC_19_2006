<?php
session_start();
include('../connect.php');
$a = $_POST['pname'];
$b = $_POST['ptype'];

// query
$sql = "INSERT INTO products (pname,ptype) VALUES (:a,:b)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b));
header("location: products.php");


?>