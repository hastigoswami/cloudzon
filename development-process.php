<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Development Process</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="" />
<link rel="icon" type="image/ico" href="favicon.ico" />

<!-- main css -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/demo.css" rel="stylesheet" />
<link rel="stylesheet" href="css/over-effect.css" />
<link rel="stylesheet" type="text/css" href="css/valid.css"/>
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
             <p><span class="yellow">Development</span> <span class="green">Process</span> </p>
          </div>
        </div>
      </div> 

    </div>
  </div>
  
  <!-- center part html -->
  <section class="content-area">
    <div class="our-vision-block cf">
      <div class="container">
      <div class="rowtl">
      <ul>
    <li class="odd">
	<div class="tleft">
	<div class="text-middle"><i><img src="images/oportunity-icon.png"></i>Opportunity assessment</div>
	</div>

	<div class="tright "><span>Happens to be the first phase, where we conduct due diligence with focused approach by project managers and stake holders. Requirements are determined, who & how the system/application/software will be used is assessed. These details are then analyzed for validity, followed with implementation and viability possibilities.</span></div>
	</li>
    <li class="even">
	<div class="tleft">
	<div class="text-middle"><i><img src="images/design-icon.png"></i>Designing software</div>
	</div>

	<div class="tright"><span>Designing software/system comes in next phase, which is prepared from the specification document prepared in the first phase. It helps in specifying hardware as well as system requirements, a way of defining the entire architecture of the project. This system architecture serves as the stepping stone for the next phase.</span></div>
	</li>
     <li class="odd">
	<div class="tleft">
	<div class="text-middle"><i><img src="images/caoding-icon.png"></i>Coding and Implementation</div>
	</div>

	<div class="tright "><span>One of the lengthiest phases takes off, upon receiving the architecture of the entire system/project. The work here on is segregated in various modules/sites/units and the actual coding kick starts. This phase; though a kind of a back drop of all activities, is the most important as the real/actual coding is done here, yielding success in future.</span></div>
	</li>
    <li class="even">
	<div class="tleft">
	<div class="text-middle"><i><img src="images/testing-icon.png"></i>Testing</div>
	</div>

	<div class="tright"><span>Testing is done on codes written, against the requirement specifications provided by the clients for quality assurance.  Testing ensures the product actually meets the requirements gathered during the requirement phase. It comprises of Unit testing, integration testing, system testing and user acceptance testing, all of them really important for any project to succeed.</span></div>
	</li>
     <li class="odd">
	<div class="tleft">
	<div class="text-middle"><i><img src="images/deploy-icon.png"></i>Deployment</div>
	</div>

	<div class="tright "><span>Deployment phase is where the project – in form of a kid is handed over; deployed at client's site, ready to enhance their brand image.</span></div>
	</li>
    <li class="even">
		<div class="tleft">
			<div class="text-middle"><i><img src="images/maintanace-icon.png"></i>Maintenance</div>
		</div>

		<div class="tright"><span>Maintenance is one of the last, but an ongoing phase. Once the client starts using our software/application; that is when real life issues/scenarios start erupting. Our engineers 24*7 ensure that these issues get resolved as and when they arise.</span></div>
	</li>
      </ul>
      </div>
      </div>
      </div>
     
    <div class="clearfix"></div>
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
<script>
$(document).ready(function(){
    $('#about_us').addClass("active");
	$('#d_p').addClass("active");
});
</script>
</script>
  <a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>