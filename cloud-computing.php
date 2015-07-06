<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cloud Computing</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="" />
<link rel="icon" type="image/ico" href="favicon.ico" />

<!-- main css -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/demo.css" rel="stylesheet" />
<link rel="stylesheet" href="css/over-effect.css" />
<link rel="stylesheet" href="css/sweetalert.css"> 

<!-- Font css -->
<link href="fonts/fonts.css" rel="stylesheet"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- html 5 js -->
<!--[if IE]>
     	<script src="js/html5shiv.js"></script>
    <![endif]-->

<!-- main script -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/browser-selector.js"></script>

<!-- placeholder script -->
<script src="js/placeholder.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/modernizr.js"></script>
<!-- general script -->
<script src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" href="css/style-scroll.css"> <!-- Gem style -->
<link rel="stylesheet" type="text/css" href="css/valid.css"/>
</head>
<body>
<?php include_once("analyticstracking.php");?>
<div class="mobile-nav-block"> <span class="m-title">Navigation</span>
  <?php include('navigation.php');?>
</div>

<!-- start html -->
<div id="wrapper"> 
  <!-- header part html -->
  
  <header>
	<?php include('header.php');?>
  </header>
  <div class="clear"><!----></div>
  <div class="banner cf">
    <div id="owl-demo" class="owl-carousel">
      <div class="item">
        <div class="slider-banner" ><img src="images/who-banner.jpg" alt="" title=""> </div>
        <div class="container">
          <div class="text-block-mian">
            <p><span class="yellow"> cloud </span> <span class="green">computing</span> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="content-area">
    <div class="mobile-development-block cf">
      <div class="container">
      <div class="cloud-computing-block">
      <div class="cloud-left">
      <h1>Cloud Computing</h1>
      <p> Virtualization is the main enabling technology for cloud computing. Virtualization makes the rigid physical infrastructure fluid or 'soft' which makes it easy to use and manage. This provides the required flexibility that helps speed up the IT operations, maximize resource utilization, reduce IT infrastructure costs, simplify IT deployment and ensure ROI on technology investments. It also helps automate provisioning of resources so that users can access applications and services seamlessly. This reduces the possibility of human errors and helps improve the overall customer experience.</p>
      
      </div>
      <div class="cloud-right"><img src="images/cloud-right-image.png" alt="" title=""></div>
      </div>
      <div class="clear"></div>
      <h5>Cloud Computing- Your Advantage</h5>
      <p>Cloud computing or ‘the cloud’ maximizes the effect of the shared resources. Multiple users can share them as well as dynamically reallocate them as per their need.</p>
      <p>We work in 3 major domains- cloud deployment, cloud integration and cloud computing consultancy to offer you an ultimate solution for all your business requirements. Where cloud deployment enables you extend your B2B (Business-to-Business) to B2C (Business-to-Customers) and get its benefits; using cloud integration, you can access your personal data from any location and any device as and when you need them.
</p>
	   <p>Avail yourself of their advantages; you need an independent and expert cloud consultancy from the skilled people whom you can trust.</p>
	   <p>The cloud computing infrastructure includes various components as shown below:</p>
		<ul>
				<li>Servers</li>
				<li>Virtualization</li>
				<li>Storage</li>
				<li>Network</li>
				<li>Management</li>
				<li>Security</li>
				<li>Backup & Recovery</li>
				<li>Infrastructure systems</li>
			</ul>


      
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
  <div class="clear"><!----></div>
  
  <!-- footer part html -->
  <footer>
	<?php include('footer.php');?>
  </footer>
  <div class="clear"><!----></div>

</div>
<script src="js/jquery.form-validator.min.js"></script>
<script src="js/sweetalert-dev.js"></script>
<script>  
$(function() {
$("form#frmsub").submit(function(e) {
	var isValid = $('#frmsub').isValid();
    if(isValid) {
			
		$.ajax({
			url :'MVC/subsc.php',
			type : 'POST',
			dataType: 'json',
			data: 
			{
				"email_address":$("#email_address").val(),
			},
			beforeSend: function(){
				$('#loading_image_sub').show();
			},
			complete: function(){
				$('#loading_image_sub').hide();
			},
			success: function(data) {
				console.log(data);
				swal
				(
				{
				  title: "Success!",
				  text: data['message'],
				  confirmButtonText: "okey!",
				 closeOnConfirm: true,
				},
					function(isConfirm)
					{
					  if (isConfirm)
					  {
						document.getElementById('email_address').value = '';
					  }
					}
				);	
		
			}
		});
	}	
	return false;
    });
  });
  
</script>
<script>
  $.validate();
</script>
</script>
  <a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>