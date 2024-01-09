<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savedescription.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i>Distribute</h4></center>
<hr>
<div id="ac">
<span>Sender  Name : </span><input type="text" style="width:265px; height:30px;" name="cname" required/><br>
<span>Address : </span><input type="text" style="width:265px; height:30px;" name="address" /><br>
<span>Phone Address : </span><input type="text" style="width:265px; height:30px;" name="phone" /><br>
<span> Destination: </span><input type="text" style="width:265px; height:30px;" name="destination" /><br>
<span>Date: </span><input type="text" style="width:265px; height:30px;" name="datetime" value="<?php echo date('Y-M-D')?>"/><br>

<span>Description : </span><textarea style="width:265px; height:80px;" name="description" /></textarea><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>