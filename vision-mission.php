<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mission and Vision</title>
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
<link rel="stylesheet" type="text/css" href="css/valid.css"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- html 5 js -->
<!--[if IE]>
     	<script src="js/html5shiv.js"></script>
    <![endif]-->

<!-- main script -->

<link rel="stylesheet" href="css/style-scroll.css"> <!-- Gem style -->

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
             <p><span class="yellow"> Mission</span> and <span class="green">Vision</span> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="content-area">
    <div class="our-vision-block cf">
      <div class="container">
 
    <h4>Our Mission</h4>
    <p>CloudZon visualizes dynamic, innovative and creative entities with that spark of Commitment, Enthusiasm, Honesty, Loyalty and Solid integrity. We envision instilling robust human morals in our team members, and imparting knowledge, sensibleness and intense decisions about ethical rules of conduct. All this creates intelligent team to bring those "BEST Business solutions" for all our clients globally.</p>
   
  <p>Our mission is to be an innovative partner to your business by integrating unique ideas and technical expertise to all your projects - complex or simple. The prime motto is client satisfaction attained by generating trustworthiness, transparency with sense of confidentiality & commitment. We continuously strive for process improvements that help us to enhance the quality of services that are in line with professional conduct leading to long term business relationship.</p>
    
    
 <h4>Our Vision</h4>
<p>CloudZon  is completely focused on delivering world class business software solutions to the clients. Constant innovation is our buzzword and at CloudZon  we embrace latest technological platforms to build cutting-edge Transcription, Accounting, IT & Networking  solutions, which help our clients realize their goals in cost-efficient manner.</p>

<p>Our vision is to become leading and preferred provider in UK, US, INDIA of business software solutions, Transcription Service, Accounting Solution, Network Solutions for Word and this drives us ahead  in our work practices. Our goal is to build and deliver mission critical IT solutions for which empowers them to enhance their core business competency.</p>
    
  
    
  
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
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
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
	$('#m_v').addClass("active");
});
</script>
  <a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>