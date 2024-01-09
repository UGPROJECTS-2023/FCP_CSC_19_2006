<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['username'];
$b = $_POST['password'];
$c = $_POST['name'];
$d = $_POST['position'];
// query
$sql = "UPDATE user 
        SET username=?, password=?, name=?, position=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$id));
header("location: user.php");

?>