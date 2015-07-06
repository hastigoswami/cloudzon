<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Networking</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="" />
<link rel="icon" type="image/ico" href="favicon.ico" />

<!-- main css -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/demo.css" rel="stylesheet" />
<link rel="stylesheet" href="css/over-effect.css" />

<!-- Font css -->
<link href="fonts/fonts.css" rel="stylesheet"/>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- html 5 js -->
<!--[if IE]>
     	<script src="js/html5shiv.js"></script>
    <![endif]-->

<!-- main script -->

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/valid.css"/>
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
             <p><span class="yellow">Networking</span> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="content-area">
    <div class="networking-block cf">
      <div class="container">
      <h1>CloudZon's cloud services offer technology solutions for your business that are 
secure, easier to use and often times more affordable for all businesses.</h1>
 
    <h5>Server Management:</h5>
    <p>The nucleus of your small business network is without a doubt your servers. They house critical applications, databases, and email functionality. Your servers are mission critical for the overall success of your business and health of your network. CloudZon understands how vital your server environment is to the life of your business; that's why we deploy the most technologically advanced tools to help us monitor the most critical aspects of your server environment and manage the performance of your servers round the clock with real time alerts.</p>
      
 
    <h5>Networking Solutions:</h5>
      
  
    <p>CloudZon believes that in order to be successful in today's business environment, technology needs to work for you not against you. Technology is a vital part of business - it can advance a company and help a business reach or exceed its goals. CloudZon's Network Management solution provides premium support for your entire network. This is done while managing the advancement of your technology as it relates to your business goals and objectives.</p>
   <h5>IT Support:</h5>
   <p>We provide Customized IT Support Solutions to fit your business and budget. Focus on what you do best, we'll handle the rest.</p>
   <p>At CloudZon we know every business's technology needs are different and having the right IT support in place is mission-critical. Whether you have 5 employees or 500; we can craft an IT management strategy that's right for your organization, and we will find the most cost-effective way to get just the right level of support.</p>
   <p>CloudZon's On Demand Support Services give you affordable access to a responsive, professional and complete IT department, when you need us.</p>
   <p>A proactive and flexible IT service plan for small businesses to get the IT support they need when they need it. CloudZon's On Demand IT Service gives small businesses access to a complete IT department, a proactive and automated preventative maintenance schedule, and the flexibility to control IT budgets. CloudZon's On Demand IT Service is ideal for small businesses seeking more than just reactive hourly IT support.</p>
   <p>Cloduzon's team consists of a complete IT department that is at your disposal with just a phone call or email. You will have access to complete network support from our remote and onsite highly trained engineers should the need arise. CloudZon understands that response times are critical when you have technology issues.</p>
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