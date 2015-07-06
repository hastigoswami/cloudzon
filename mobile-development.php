<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mobile Development</title>
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
            <p><span class="yellow"> Mobile</span> <span class="green">Development</span> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="content-area">
    <div class="mobile-development-block cf">
      <div class="container">
        <h1>iPhone App Development</h1>
        <h5>We Don't Build Applications. We Build Business.</h5>
        <p>No wonder the evolution of smart phone applications has been initiated and caused by the iPhone. We have a dedicated team of iPhone app developers who have complete knowledge of the iPhone SDK, Mac development environment, Cocoa/Objective C and Xcode / Interface Builder. We aim to build marvelous yet useful and scalable yet efficient iPhone application. Our creative and knowledgeable team of iPhone app programmers can make any complex mobile app idea come alive and help your business benefit from the success of the iPhone device.</p>
        <h2>Android App Development</h2>
        <h5>Go With Android. Go With the BUZZ.</h5>
        <p>Leveraging the supremacy of Google, the dexterity of free open source and the power of the Open Handset Alliance, Android app development platform has become the talk of the town. At CloudZon, we have a cream of Android App developers who deliver Android App solutions that surpass your expectations. Our team of developers is well-acquainted with C, C++, Java, Windows XP, Vista and Android SDK (Software Development Kit). Our paralleled technical expertise enables us to build feature rich Android apps in a cost-effective manner.</p>
        <ul>
          <li>Business and Finance Apps</li>
          <li>Entertainment Apps</li>
          <li>M-commerce Apps</li>
          <li>News, Weather Forecast and Travel Apps </li>
          <li>Sports and Fitness Apps</li>
          <li>Social Media Networking Apps</li>
          <li>Educational Apps</li>
          <li>Search Tool and Utility Apps</li>
          <li>Widget Development</li>
          <li>Multimedia App Development</li>
          <li>Enterprise App Development</li>
          <li>App Testing</li>
          <li>Maintenance and Upgradation</li>
          <li>App with Bluetooth, Wi-Fi and GPS</li>
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