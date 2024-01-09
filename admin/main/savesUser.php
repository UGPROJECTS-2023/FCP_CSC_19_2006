<?php
session_start();
include('../connect.php');
$a = $_POST['uname'];
$b = $_POST['password'];
$c = $_POST['name'];
$d = $_POST['position'];

// query
$sql = "INSERT INTO user (username,password,name,position) VALUES (:a,:b,:c,:d)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d));
header("location: user.php");

?>