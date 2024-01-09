<?php
session_start();
include('../connect.php');
$a = $_POST['invoice'];
$b = $_POST['pt'];
$c = $_POST['product'];
$d = $_POST['qty'];
$date = $_POST['date'];
$price =$_POST['price'];
$cname =$_POST['cname'];
$destination =$_POST['destination'];

$result = $db->prepare("SELECT * FROM products WHERE product_id= :userid");
$result->bindParam(':userid', $c);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$pname=$row['pname'];
$ptype=$row['ptype'];
}
$total = $price * $d;
// query
$sql = "INSERT INTO sales_order (invoice,product,pname,qty,ptype,date,price, total,destination,cname) VALUES (:a,:b,:c,:d,:e,:k,:l,:j,:m,:n)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$c,':c'=>$pname,':d'=>$d,':e'=>$ptype,':k'=>$date,':l'=>$price,':j'=>$total,':m'=>$destination,':n'=>$cname));
header("location: sales.php?id=$b&invoice=$a");


?>