<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['cashier'];
$c = $_POST['date'];
//$d = $_POST['ptype'];
$d = $_POST['total'];
$cname = $_POST['cname'];
$dest = $_POST['dest'];


$sql = "INSERT INTO sales (invoice_number,cashier,date,total,cname, destination) VALUES (:a,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$cname,':f'=>$dest));
header("location: preview.php?invoice=$a");
exit();

// query

?>