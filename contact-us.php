<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="" />
<link rel="icon" type="image/ico" href="favicon.ico" />

<!-- main css -->
<link href="css/style.css" rel="stylesheet" />

<link href="css/demo.css" rel="stylesheet" />
<link rel="stylesheet" href="css/over-effect.css" />
<link href="css/style-overlay.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="css/valid.css"/>

<!-- Font css -->
<link href="fonts/fonts.css" rel="stylesheet"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- html 5 js -->
<!--[if IE]>
     	<script src="js/html5shiv.js"></script>
    <![endif]-->



<!--new pop up--> 

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/popupstyle.css" />


<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" href="css/style-scroll.css"> <!-- Gem style -->

	<!-- alert style -->

<link rel="stylesheet" href="css/sweetalert.css"> 




</head>
<body>
<?php include_once("analyticstracking.php");?>

<div id="modal" class="popupContainer" style="display:none;">
		<div class="popupHeader">
			<span class="header_title">Usa</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</div>
		
		<section class="popupBody">
			<!-- Social Login -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.74222303225!2d-122.21089109999998!3d37.490409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fa302f220e821%3A0xf192b0b64eb1b343!2s1725+E+Bayshore+Rd%2C+Redwood+City%2C+CA+94063%2C+USA!5e0!3m2!1sen!2sin!4v1432126605841" width="100%" height="450" frameborder="0" style="border:0"></iframe>

			<!-- Username & Password Login form -->
			

			<!-- Register Form -->
			
		</section>
	</div>
    <div id="modal1" class="popupContainer" style="display:none;">
		<div class="popupHeader">
			<span class="header_title">uk</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</div>
		
		<section class="popupBody">
			<!-- Social Login -->
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2421.0746680705!2d-1.1286104!3d52.640564000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4877611bbd43dc57%3A0xe133f108abae99cf!2sSt+Matthews+Business+Centre%2C+Gower+St%2C+Leicester+LE1+3LJ%2C+UK!5e0!3m2!1sen!2sin!4v1432172597184" width="500" height="450" frameborder="0" style="border:0"></iframe>

			<!-- Username & Password Login form -->
			

			<!-- Register Form -->
			
		</section>
	</div>
    <div id="modal2" class="popupContainer" style="display:none;">
		<div class="popupHeader">
			<span class="header_title">india</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</div>
		
		<section class="popupBody">
			<!-- Social Login -->
         <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d117513.53094793046!2d72.42989190924199!3d23.012833889404398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x0%3A0x19070987e29bbe74!2sIscon+Elegance!3m2!1d23.012850999999998!2d72.50371!4m5!1s0x395e9b26c6eff23d%3A0x19070987e29bbe74!2sIscon+Elegance%2C+Opposite+Karnavati+Club%2C+Sarkhej+-+Gandhinagar+Highway%2C+Anandnagar+Rd%2C+Sarkhej+-+Gandhinagar%2C+Prahlad+Nagar%2C+Ahmedabad%2C+Gujarat+380015!3m2!1d23.012850999999998!2d72.50371!5e0!3m2!1sen!2sin!4v1432714593375" width="500" height="450" frameborder="0" style="border:0"></iframe>

			<!-- Username & Password Login form -->
			

			<!-- Register Form -->
			
		</section>
	</div>


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
        <div class="slider-banner"><img src="images/contact-us-bg.png" alt="" title=""></div>
        <div class="container">
          <div class="text-block-mian">
           <p><span class="yellow">Contact Us</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="content-area">
    <div class="form-info-block cf">
      <div class="contact-block">
        <div class="container">
          <div class="left-side">
            <h2>Please fill the details below</h2>
            <form method="post" id="form1">
             	<label>your name</label>
              	<p>	
				<input type="text" id="name" data-validation="required" data-validation-error-msg="Name field is required">
              	</p>
			  	<label>your email</label>
              	<p>
				<input type="text" id="email" data-validation-error-msg="Email field is required" data-validation="email">
              	</p>
			  	<label>your message</label>
				<p>
              	<textarea id="message" data-validation="required" data-validation-error-msg="Message box should not be empty"></textarea>
              	</p>
			  <input class="submit-btn" type="submit" id="submit" value="send"><em id="loading_image" style="display:none;" class="ajax-loader"><img src="images/ajax-loader.gif" alt="loader"></em>
            
			</form>
          </div>
        </div>
        <div class="right-side">
          <div class="first-block"> <img class="support-img" src="images/support-img.png" alt="support">
            <div class="support-desc">
              <h2>support</h2>
              <p>For technical support and maintenance issues, contact customer support.</p>
              <a href="mailto:support@cloudzon.com" class="deafult-btn">Email us</a>
            </div>
          </div>
          <div class="first-block"> <img class="support-img" src="images/sales-img.png" alt="support">
            <div class="support-desc">
              <h2>sales</h2>
              <p>To become a CloudZon client, please contact a sales representative.</p>
              <a href="mailto:support@cloudzon.com" class="deafult-btn">Email us</a>
            </div>
          </div>
          <!--<div class="first-block"> <img class="support-img" src="images/quote-img.png" alt="support">
            <div class="support-desc">
              <h2>request a quote</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Non equidem invideo. Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Non equidem invideo.</p>
            </div>
          </div>-->
        </div>
      </div>
    </div>
    <div class="where-we-work">
      <div class="container">
        <h2>where we work</h2>
        <div id="effect-1" class="effects clearfix">
          <div class="address-part">
            <ul>
              <li>
               	     <div class="add-heading img ">
                  <div class="overlay"> <a class="map-btn" id="modal_trigger" href="#modal" title="View Map">view map</a> </div>
                  <div class="country-name"> <span class="cntry-ico"><img src="images/us-ico.png"></span> <span class="cntry">US</span> </div>
                  <p>CloudZon<br/>
                    1725 East Bayshore Rd,<br/>
                    Suite 103 Redwood City,<br/>
                    CA 94063.<br/>
                    
                    Phone: +1 650-369-9734<br/>
                    Fax: 650-369-9736<br/>
                    Email:<span class="yellow"> info@cloudzon.com</span><br/> Web Site: <span class="yellow">http://www.cloudzon.com/</span></p>
                </div>
              </li>
              <li>
             
               
                 <div class="add-heading img">
                  <div class="overlay"> <a class="map-btn" id="modal_trigger1" href="#modal1" title="View Map">view map</a> </div>
                  <div class="country-name"> <span class="cntry-ico"><img src="images/uk-ico.png"></span> <span class="cntry">UK</span> </div>
                  <p>CloudZon UK Ltd.<br/>
                    Regus Building,Office 307, 3rd Floor,<br/>
                    St. Georges House, <br/> 6 St Georges’s way,<br/>
                    Leicester,LE1 1SH.<br/>
                    Tele no: +44 845 257 8024<br/>
                    Email:<span class="yellow"> info@cloudzon.com</span><br/> Web Site: <span class="yellow">http://www.cloudzon.com/</span></p>
                </div>
              </li>
              <li>
                <div class="add-heading img last">
                  <div class="overlay"> <a class="map-btn" id="modal_trigger2" href="#modal2" title="View Map">view map</a> </div>
                  <div class="country-name"> <span class="cntry-ico"><img src="images/india-ico.png"></span> <span class="cntry">India</span> </div>
                  <p>CloudZon Infoconnect Pvt Ltd.<br/>
                    206, Iscon Elegance, Near Shapath V,<br/>
                    S.G.Highway, Ahmedabad-380015,<br/>
                    
                    India.<br/>
                    Tel: +91 79 65220313<br/>
                    Email:<span class="yellow"> info@cloudzon.com</span><br/> Web Site:  <span class="yellow">http://www.cloudzon.com/</span></p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="clear"><!----></div>
  
  <!-- footer part html -->
  <footer>
	<?php include('footer.php');?>
  </footer>
  <div class="clear"><!----></div>
</div>



<!-- main script -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/browser-selector.js"></script>
<script src="js/jquery.form-validator.min.js"></script>
<script src="js/notify.min.js"></script>
<!-- placeholder script -->
<script src="js/placeholder.js"></script>
<script src="js/sweetalert-dev.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>

<!-- general script -->
<script src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<!--<script>
$('#loading_image').bind('ajaxStart', function(){
    $(this).hide();
}).bind('ajaxStop', function(){
    $(this).show();
});
</script>-->

<script>  
$(function() {
$("form#form1").submit(function(e) {
	var isValid = $('#form1').isValid();
    if(isValid) {
		$.ajax({
			url :'MVC/cont_us.php',
			type : 'POST',
			dataType: 'json',
			data:
			{
				"name":$("#name").val(),
				"email":$("#email").val(),
				"message":$("#message").val()
			},
			success: function(data) {
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
						window.location.assign("contact-us.php");
					  }
					}
				);	
		
			},
			beforeSend: function(){
				$('#loading_image').show();
			},
			complete: function(){
				$('#loading_image').hide();
			},
			error : function(data)
			{
				swal
				(
				{
				  title: "Error!",
				  text: data['message'],
				  confirmButtonText: "okey!",
				 closeOnConfirm: true,
				},
					function(isConfirm)
					{
					  if (isConfirm)
					  {
						window.location.assign("contact-us.php");
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
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
	$("#modal_trigger1").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
	$("#modal_trigger2").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

	$(function(){
		// Calling Login Form
		$("#login_form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>
  <a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>