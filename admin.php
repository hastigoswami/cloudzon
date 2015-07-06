<?php
	include('control2.php');
?>
<!DOCTYPE html>
<html>
	
<head>
	<title>Admin</title>
		<meta charset="utf-8">
		<link href="css/loginstyle.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
<?php include_once("analyticstracking.php");?>
	
				 <!-----start-main---->
				<div class="login-form">
					<div class="head">
						<center><img src="images/logo.png" alt=""/></center>
						
					</div>
				<form method="post">
					<li>
						<input type="text" name="adminname" class="text" placeholder="User Name" ><em class=" icon user"></em>
					</li>
					<li>
						<input type="password" name="adminpass" placeholder="Password"><em class=" icon lock"></em>
					</li>
					<div class="p-container">
								
						<center><input type="submit" value="SIGN IN" name="adminlogin"></center>
							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
		 		
</body>
</html>