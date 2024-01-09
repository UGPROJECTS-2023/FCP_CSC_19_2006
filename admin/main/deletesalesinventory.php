<?php
	include('../connect.php');
	$id=$_GET['id'];
	$qty=$_GET['qty'];
	
	$result = $db->prepare("DELETE FROM sales_order WHERE transaction_id= :id");
	$result->bindParam(':id', $id);
	$result->execute();
		header("location: sales_inventory.php");
?>