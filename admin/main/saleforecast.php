<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="forecast.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i>Choose Month</h4></center>
<hr>
<div id="ac">
<span>1st month: </span><input type="text" id="mth1" style="width:265px; height:30px;" name="mth1" required onkeyup="fore();"/><br>
<span>2nd Month: </span><input type="text" id="mth2" style="width:265px; height:30px;" name="mth2" onkeyup="fore();"/><br>
<span>3rd Month : </span><input type="text" id="mth3" style="width:265px; height:30px;" name="mth3"onkeyup="fore();" /><br>
<span>Months Forecast: </span><select id="mth4" name="4th" >
							
                            <option>Select Month</option>
                            <option value="1">Jan</option>
                            <option value="2">Feb</option> 
                            <option value="3">Mar </option>
                            <option value="4">April </option>
                            <option value="5"> May</option>
                            <option value="6">June </option>
                            <option value="7"> July</option>
                            <option value="8"> Aug</option>
                            <option value="9">Sept </option>
                            <option value="10">Oct </option>
                            <option value="11">Nov </option>
                            <option value="12">Dec </option>
                            </select><br>
<span>Sales Forecast : </span><input type="text" style="width:265px; height:80px;" id="forecast" /><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i>Click To View Graph</button>
</div>
</div>
</form>