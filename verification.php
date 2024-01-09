<?php
	//Start session
	session_start();
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db('parcel', $link);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$code = clean($_POST['code']);
	
	
	//Input Validations
	if($code == '') {
		$errmsg_arr[] = 'EMPTY STRING';
		$errflag = true;
	}
	
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php?code='FALSE'");
		exit();
	}
	
	//Create query
	$qry="SELECT * FROM sales_order WHERE invoice='$code'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
					
					session_start();
					$gencode = mysql_fetch_assoc($result);
					$_SESSION['invoice'] = $gencode['invoice'];
					
					//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
					
					header("location: index.php?code=TRUE");
					exit();	
		
			
		}else {
			//Login failed
			header("location: index.php?code=FALSE");
			exit();
		}
	}else {
		die("Query failed");
	}
?>