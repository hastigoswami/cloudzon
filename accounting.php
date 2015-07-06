<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Accounting Soluitons</title>
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
            <p><span class="yellow">Accounting</span> <span class="green">Solutions</span> </p>	
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
         
            <h1>CloudZon Infoconnect Accounting Solutions </h1>
            <p> CloudZon Infoconnect Accountants Services is an Indian accounting firm located in Ahmedabad. We provide back-office accounting and bookkeeping services by using the latest technologies in India, UK, US, Canada. Our aim is to reduce the burden of critical non-core functions by managing them in a more efficient, productive, and profitable manner.</p>
            <p>With our knowledge and experience, we provide services for all your Bookkeeping, Accounting, whether it is creation of your books from scratch, updating your books periodically, or maintaining them full-time, we provide you personalized and professional services while saving your time and money and helping you to concentrate on your core business activity. Having industry experience helps us to know and understand the issues which you face on a daily basis. Our organization stands on the grounds of the core values of honesty, transparency and integrity that have helped us to serve our clients better and build lasting relationships with them. <strong>CloudZon</strong> believes that trust and confidentiality are key elements of a successful outsourcing partnership.</p>
            <p>Managed Accounting with us is cost efficient. You get a dedicated team for similar or less than what it would normally cost to hire one in-house book keeper. Our teams comprise of efficient Finance Manager, Accountants/ Bookkeeper and a Customer Support Contact who are trained and experienced at providing managed accounting services as per standards. Your team is only a phone call, instant message, or e-mail away to provide prompt and accurate service.</p>
            <p>CloudZon Accounting Services can virtually operate as your Back office for all Bookkeeping and Accounting services .We can work with customized applications and web based Bookkeeping and accounting software depending on the financial data given to us by clients. CloudZon Accounting Services offer weekly, Bi-weekly, monthly or yearly Accounting and bookkeeping including Reporting services.</p>
            <p>CloudZon Accounting Services provide financial Services which includes "Financial Projections," Forecasting and Analysis for your existing business or for new startups to help you with your Project reports, Funding applications and loan applications.</p>
         
         
        </div>
        <div class="clear"></div>
        <p><strong>Our Mission</strong></p>
        <ul>
          <li>To provide accurate, timely and cost effective accounting, bookkeeping and financial services.</li>
          <li> 	Ensure confidentiality of Clients information by adhering to strict security measures.</li>
          <li> 	Take initiative and plan activities with the ultimate goal of long term satisfaction. No shortcuts and compromises which result in poor quality.</li>
          <li>Ensure our clients are satisfied and revert back to us for their future bookkeeping needs.

</li>
          
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
</script>
  <a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>