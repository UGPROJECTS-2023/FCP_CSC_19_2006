<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("parcel",$conn);
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM sales_order WHERE transaction_id='" . $_POST["users"][$i] . "'");
}
header("Location: allocate.php");
?>
