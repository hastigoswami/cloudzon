<?php
	include('control2.php');
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>AdminPanel</title>
	<link media="all" rel="stylesheet" type="text/css" href="css/all.css" />
	<link rel="icon" type="image/ico" href="favicon.ico" />
	
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="css/edemo.css">
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.7.2.min.js"><\/script>');</script>
	<script type="text/javascript" src="js/jquery.main.js"></script>
	<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" /><![endif]-->
</head>
<body>
<?php include_once("analyticstracking.php");?>
	<?php
	if(!$_SESSION['admin'])
	{
		header('location:admin.php');
	}
	$logout=$_SESSION['admin'];
	?>
	<div id="wrapper">
		<div id="content">
			<div class="c1">
				<?php
					include('adminmenu.php');
				?>
				<div class="tabs">
					<div id="tab-1" class="tab">
						<article>
							<div class="text-section">
								<h1 align="center">Resume Data</h1>
							</div>
							<br><br><br>
							
								<?php
									include('resumeTable.php');
								?>
							
						</article>
					</div>
					<div id="tab-2">
						<article>
							<div class="text-section">
								<h1 align="center">Enquiry Data</h1>
							</div>
							<br><br><br>
								<?php
									include('enquiryTable.php');
								?>
						</article>
					</div>
					<div id="tab-3" class="tab">
						<article>
							<div class="text-section">
								<h1 align="center">Contact Us Data</h1>
							</div>
							<br><br><br>
							
								<?php
									include('contactTable.php');
								?>
						</article>
					</div>
                    <div id="tab-4" class="tab">
                        <article>
                            <div class="text-section">
                                <h1 align="center">Itranscript data</h1>
                            </div>
                            <br><br><br>

                            <?php
                                include('itranscriptTable.php');
                            ?>
                        </article>
                    </div>
					<div id="tab-5" class="tab">
						<article>
							<div class="text-section">
								<h1 align="center">Add Blog</h1>
							</div>
							<br><br><br>
							<form method="post" enctype="multipart/form-data">
								<table align="center">
									<tr>
										<th>Blog Title:</th>
										<td><input type="text" name="blog_title"></td>
									</tr>
									<tr>
										<th>Blog Less Content:</th>
										<td><input type="text" name="less_content"></td>
									</tr>
									<tr>
										<th>Blog full Content:</th>
										<td><input type="text" name="full_content"></td>
									</tr>
									<tr>
										<th>Show Date:</th>
										<td><input type="text" name="show_date"></td>
									</tr>
									<tr>
										<th>Blog Image</th>
										<td><input type="file" name="blog_img"></td>
									</tr>
									<tr>
										<td colspan="2" align="center"><input type="submit" name="send" value="Submit"></td>
									</tr>
								</table>
							</form>
						</article>
					</div>
				</div>
			</div>
		</div>
		<?php
			include('aside.php');
		?>
		
	</div>
	<footer>
		<div style="top:100px;"><center>� Copyright 2015 Cloudzon. All right reserved</center></div>
	</footer>


<script>
$(document).ready(function() {
	$('#example').dataTable( {
	} );
	$('#example2').dataTable( {
	} );
	$('#example3').dataTable( {
	} );
	$('#example4').dataTable( {
	} );
} );
</script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>


</body>
</html>