<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("parcel",$conn);
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("UPDATE sales_order SET status = 'ARRIVED', arrive = NOW(),location='TARGET' WHERE transaction_id = '" . $_POST["users"][$i] . "'");
}
header("Location: allocate.php");
?>
