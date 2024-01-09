
<!DOCTYPE HTML>
<html>
<head>
<title>Parcel Tracking System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Roadster Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<!--webfonts-->
 <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

<script type="text/javascript">
function setFormAction() {
	
	document.frmUser.action = "incomming.php";
	document.frmUser.submit();
}
</script>
</head>
<body>
	<!--start-home-->
<div id="home" class="header">
		<div class="container">
	     <div class="header-top">
	        <div class="logo">
					<a href="index.html"><h1><span>P</span>ARCELLER</h1></a>
				</div>
					<div class="h-right">
					  <div class="working-hours">
							<div class="working-hours-label">
							WORKING HOURS </div>
							<div class="working-hours-time">
							<span>
							9AM - 8PM </span>
							</div>
							<div class="working-hours-date">
							SUN, SAT 9AM - 6PM </div>
					     </div>
						<div class="working-hours phone-number">
							<div class="icon-phone-1 phone-ico"><i class ="glyphicon glyphicon-earphone"></i></div>
							<div class="phone-text">
								<div class="phone-number-label">
								CALL US </div>
								<div class="phone-number-number">
								08063536580</div>
							 </div>
							 <div class="clearfix"> </div>
						 </div>
						 <div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
					<div class="quate">
									<a href="admin/index.php" class="hvr-bounce-to-bottom m1">LOGIN</a>
								</div>
					<span class="menu"></span>
				    <div class="top-menu">
								 
							<ul class="cl-effect-16">
								<li><a class="active" href="index.php" data-hover="HOME">Home</a></li> 
								
							</ul>
						</div>
							<!--script-for-menu-->
							<script>
							$( "span.menu" ).click(function() {
							  $( ".top-menu" ).slideToggle( "slow", function() {
								// Animation complete.
							  });
							});
						</script>
				<!-- start-search-->
			<div class="clearfix"> </div>
        </div>
	  </div>
	</div>
	<!--start-banner-bottom-->
<?php 
if(isset($_GET['code']) && $_GET['code']=='TRUE')
{
?>
<!--start-video-->
    <div class="news" id="news">
	    <div class="container">
			   <div class="news-top">
					<div id="verticalTab" class="resp-vtabs" style="display: block; width: 100%; margin: 0px;"><!-- start vertical Tabs-->
						<ul class="resp-tabs-list">
										<?php														 //Connect to mysql server
									$link = mysql_connect('localhost','root',"");
									if(!$link) {
										die('Failed to connect to server: ' . mysql_error());
									}
									
									//Select database
									$db = mysql_select_db('parcel', $link);
									if(!$db) {
										die("Unable to select database");
									}
									?>
							<li class="resp-tab-item"><span>Parcel Description</span></li>
							<li class="resp-tab-item"><span>Destination</span></li>
							<li class="resp-tab-item"><span>Parcel Location</span></li>
							
						</ul>
						<div class="resp-tabs-container">
							<span class="resp-arrow"></span><i class="icon_1"></i>
							<div class="new_posts resp-tab-content">
							   <div class="news-01">
							      <a href="single.html"> <img src="images/n1.jpg" alt=" " class="img-responsive" /></a>
								    <div class="item_info">
									  
                                     <?php
									 
										//Start session
										session_start();
										@$invoice = $_SESSION['invoice']; 
										$qry="SELECT * FROM sales_order WHERE invoice='$invoice'";
												$result=mysql_query($qry);
												if(mysql_num_rows($result) > 0) {
		
										
												$rows = mysql_fetch_assoc($result);
												$pname = $rows['pname'];
												$ptype =$rows['ptype'];
												$cname =$rows['cname'];
												$status =$rows['status'];
												$destination =$rows['destination'];
												$depart =$rows['arrive'];
												$qty =$rows['qty'];	
												$location =$rows['location'];									
											?>
											<a href="index.php?code=TRUE"><h3><?php echo 'Type: '.$ptype.'&nbsp;&nbsp;'.$pname; ?>
                                           
											<?php } ?>
																						
                                             </h3></a>
			
									
											<ul>
											   <li>Sender 
                                               <a href="#"> <i class="glyphicon glyphicon-user"></i><?php echo $cname; ?></a></li>
											   <li> Departure <i class="glyphicon glyphicon-calendar"></i><?php echo $depart; ?></li>
											   <li> Quantity <a href="#"><i class="glyphicon glyphicon-comment"></i><?php echo $qty; ?></a></li>
											</ul>				
									  </div>
							   </div>
							</div>
							<span class="resp-arrow"></span><i class="icon_2"></i>
							<div class="new_posts resp-tab-content">
			                   <div class="news-01">
							       <a href="single.html">  <img src="images/n2.jpg" alt=" " class="img-responsive" /></a>
									<div class="item_info">
									   <a href="index.php?code=TRUE"><h3><?php echo 'Destination: '.$destination; ?></h3></a>
											<ul>
											   <li>Sender 
                                               <a href="#"> <i class="glyphicon glyphicon-user"></i><?php echo $cname; ?></a></li>
											   <li> Departure <i class="glyphicon glyphicon-calendar"></i><?php echo $depart; ?></li>
											   <li> Status <a href="#"><i class="glyphicon glyphicon-comment"></i><?php echo $status; ?></a></li>
											</ul>				
									  </div>
							   </div>			
										
								</div>
							<span class="resp-arrow"></span><i class="icon_2"></i>
							<div class="new_posts resp-tab-content">
				              <div class="news-01">
							      <a href="single.html"> <img src="images/n3.jpg" alt=" " class="img-responsive" /></a>
								  <div class="item_info">
									     <a href="index.php?code=TRUE"><h3><?php echo 'Location: '.$location; ?></h3></a>
											<ul>
											   <li>Sender 
                                               <a href="#"> <i class="glyphicon glyphicon-user"></i><?php echo $cname; ?></a></li>
											   <li> Departure <i class="glyphicon glyphicon-calendar"></i><?php echo $depart; ?></li>
											   <li> Status <a href="#"><i class="glyphicon glyphicon-comment"></i><?php echo $status; ?></a></li>
											</ul>				
									  </div>
							   </div>
										
							</div>
							<span class="resp-arrow"></span><i class="icon_4"></i>
							  <div class="new_posts resp-tab-content">
							   <div class="news-01">
							     <a href="single.html"> <img src="images/n4.jpg" alt=" " class="img-responsive" /></a>
								 <div class="item_info">
									  <a href="single.html"><h3>Parcel Sender</h3></a>
											<ul>
											   <li><a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a></li>
											   <li><i class="glyphicon glyphicon-calendar"></i>04.Nov.2015</li>
											   <li><a href="#"><i class="glyphicon glyphicon-comment"></i>20 Comments</a></li>
											</ul>				
									  </div>
							   </div>
							  </div>									
						<div class="clearfix"></div>
					</div>
					<script src="js/easyResponsiveTabs.js"></script>
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true,   // 100% fit in a container
									closed: 'accordion', // Start closed if in accordion view
									activate: function(event) { // Callback function if tab is switched
										var $tab = $(this);
										var $info = $('#tabInfo');
										var $name = $('span', $info);

										$name.text($tab.text());

										$info.show();
									}
								});

								$('#verticalTab').easyResponsiveTabs({
									type: 'vertical',
									width: 'auto',
									fit: true
								});
							});
						</script>
				</div>
			<div class="clearfix"> </div>
		</div>
		</div>
</div>
		<!--//end if correct-->
<?php }
	else{ ?>
	
		<!--//news-->
	<div class="car-bottom">
		  <div class="container">
			  <div class="col-md-6 car-bottom-right">
					<h3>Please Type Your Tracking Code Here</h3>
					<?php if(isset($_GET['code']) && $_GET['code']=='TRUE')
						{echo"<h1 style='color:red;'>Invalide Tracking Code Tyr again</h1>";
							}?>
                    <h4>
					<form name="frmUser" method="post" action="verification.php">
					<input type="text" name="code" placeholder="Type Your Invoice Here" width="100" title="The Section Receive Transaction ID" style="width:100%; height:100px; font-size:36px;" onDblClick="setFormAction();" required/>
					
					</form> 
						</h4>

				</div>
					<div class="clearfix"></div>
		  </div>
		</div>

	<?php }?>
		<!--footer-->
			
			<div class="copy">
		              <p>© 2022Parceller. All Rights Reserved  </a> </p>
		            </div>
			<!--start-smooth-scrolling-->
			<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
									});
								});
								</script>
							<!--start-smoth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>