<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="" />
<link rel="icon" type="image/ico" href="favicon.ico" />

<!-- main css -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/demo.css" rel="stylesheet" />
<link rel="stylesheet" href="css/over-effect.css" />

<!-- Font css -->
<link href="fonts/fonts.css" rel="stylesheet"/>
<link rel="stylesheet" href="css/sweetalert.css"> 
<link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,900,100italic,300italic,400italic,700italic,700,300,100' rel='stylesheet' type='text/css'>
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
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<!-- general script -->
<script src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" href="css/style-scroll.css"> <!-- Gem style -->
</head>
<body>
<?php include_once("analyticstracking.php");?>
<div class="mobile-nav-block"> <span class="m-title">Navigation</span>
  <?php
  	include('navigation.php');
  ?>
</div>

<!-- start html -->
<div id="wrapper"> 
  <!-- header part html -->
  
  <header>
    <?php include('header.php'); ?>
  </header>
  
  <div class="clear"><!----></div>
  <div class="banner cf">
    <div id="owl-demo" class="owl-carousel">
      <div class="item">
        <div class="slider-banner" ><img src="images/who-banner.jpg" alt="" title=""> </div>
        <div class="container">
          <div class="text-block-mian">
            <p><span class="yellow">ABOUT US</span> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="content-area">
    <div class="who-we-block">
      <div class="container">
        <h1> We are CloudZon<br>
          for achieving the highest client satisfaction</h1>
         


        <span>give 100 percent commitment so as to excel in each and every project that we undertake.</span> <em></em>
        <h2>CloudZon is growing together, How?</h2>
        <p>If the people working in a company grow, the company’s growth will take care of itself.</p>
        <div class="domain_block">
          <h2> <span>Domain Expertise</span> </h2>
          <p>We master in web and mobile technology. Nevertheless, there are three trending areas we are focused on.</p>
        </div>
      </div>
    </div>
    <div class="service-block cf">
      <div class="container">
        <div class="service">
          <div class="icon"><img src="images/enterprise_solution.png" alt="" title=""></div>
          <span class="solution">Enterprise Solutions</span>
          <p>CloudZon provides end to end services across various set of on premise and on cloud Enterprise Solutions. Our services are designed for addressing today’s key business challenges. We leverage our core capabilities, proven methodology, tools, accelerators and best practices for enterprise application transformation. With our right blend of solution approach and domain expertise, we enable customers to drive maximum business value.</p>
        </div>
        <div class="service">
          <div class="icon"><img src="images/mobile_application.png" alt="" title=""></div>
          <span class="solution">Mobile Applications</span>
          <p>Care for business-growth? Work with inventive thought-leaders. Get high-performance, profit-attracting and custom mobile apps. Take your app ideas to a new level. We let your brand create niche product and knowledge authority, in the busy online-era. Our methodologies are designed to help brands gain excellence. We turn sporadic app-ideas into steaming revenue. So, you taste the thrust of purpose-centric apps. We value the power of a smooth two-way communication. Share your ideas with our mobile app development SMEs. We will listen, guide and take your business-aspirations where you want them. </p>
        </div>
        <div class=" service last">
          <div class="icon"><img src="images/cloud_computring.png" alt="" title=""></div>
          <span class="solution">Cloud Computing</span>
          <p>Cloud computing provides a highly elastic environment that enables on-demand infrastructure capabilities over the internet to scalable computing resources (networks, servers, storage, applications, and services) that can be deployed quickly with cost efficiency and minimal management effort.<br>According Gartner report – Cloud is changing the way applications are designed, tested and deployed, resulting in a significant shift in Application Development priorities. Cost is major driver, but also agility, flexibility and speed to deploy new applications.</p>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    
    <div class="clear"></div>
   
    <div class="clear"></div>
    
  </section>
  <div class="clear"><!----></div>
  
  <!-- footer part html -->
  <footer>
	<?php include('footer.php');?>
  </footer>

  <div class="clear"><!----></div>

</div>
<link rel="stylesheet" type="text/css" href="css/valid.css"/>
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
<script>
$(document).ready(function(){
    $('#about_us').addClass("active");
});
</script>
</script>
  <a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>