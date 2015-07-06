<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Support</title>
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
<link rel="stylesheet" href="css/style-scroll.css"> <!-- Gem style -->
	<!-- alert style -->

<link rel="stylesheet" href="css/sweetalert.css"> 
<style>
span.form-error.help-block {
    color: red;
    display: block;
    margin-top: 113px;
    padding-left: 0;
}
element.style{
    border-color: red;
}
input.error {
    background: #ffebef url(images/icon-fail.png) no-repeat scroll right center;
    color: #480000;
}
input.valid {
    background: #e3ffe5 url(images/icon-ok.png) no-repeat scroll right center;
    border-color: #96b796 !important;
    color: #002f00;
}
textarea.error {
	border-color: red;
	color: #480000;
}
textarea.valid {
    border-color: #96b796 !important;
    color: #002f00;
}
</style>
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
        <div class="slider-banner"><img src="images/support-bg.jpg" alt="" title=""> </div>
        <div class="container">
          <div class="text-block-mian">
            <p><span class="yellow">Support</span> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="content-area">
    <div class="who-we-block">
      <div class="container">
        <h1>You will get always support regarding your any designing problem from CloudZon</h1>
        <span>As a client, if you need technical assistance, want to get your website updated, need help with your email, etc - then please use this form to contact us.</span>
        <form method="post" id="frmsupp">
          <ul>
            <div style="margin-bottom: 15px; font-weight: bold; display: none;" class="greenMsgLarge"></div>
            <li>
              <label> <em class="icon icon-person"><img src="images/support-icon1.png" alt="" title=""></em>
                <input type="text" name="s_name" id="s_name" placeholder="Name" data-validation="required" data-validation-error-msg-container="#required-error-dialog">
              </label>
          </li>
            <li class="right">
              <label> <em class="icon icon-company"><img src="images/support-icon2.png" alt="" title=""></em>
                <input type="text" name="s_company_name" id="s_company_name" placeholder="Company" data-validation="required" data-validation-error-msg-container="#required-error-dialog">
              </label>
            </li>
            <li>
              <label> <em class="icon icon-email"><img src="images/support-icon3.png" alt="" title=""></em>
                <input type="text" name="s_email" id="s_email" placeholder="Email Addresss" data-validation="email"  data-validation-error-msg-container="#email-error-dialog">
              </label>
            </li>
            <li class="right">
              <label> <em class="icon icon-phone"><img src="images/support-icon4.png" alt="" title=""></em>
                <input type="text" name="s_phone" id="s_phone"  placeholder="Phone" data-validation="length,number" data-validation-length="10-14" data-validation-error-msg-container="#length-error-dialog" maxlength="14">
              </label>
            </li>
            <li>
              <label> <em class="icon icon-website"><img src="images/support-icon5.png" alt="" title=""></em>
                <input type="text" name="s_website" id="s_website" placeholder="Website Address" data-validation="required" data-validation-error-msg-container="#required-error-dialog">
              </label>
            </li>
            <li class="checkbox"> <span class="checkbox_title"> Check all boxes that apply </span>
								  <span style="font-size:17px;"><font color="#FF0000" size="+2">*</font> Select 1 checkbox </span>
			  <label>
			  	<input name="s_preferance[]" data-validation="checkbox_group" data-validation-qty="min1" type="checkbox" value="I need assistance with my email account(s)" checked="checked" data-validation-error-msg-container="#required-error-dialog">
                I need assistance with my email account(s). </label>
              <label>
                <input type="checkbox" name="s_preferance[]" value="I need assistance with my website stat tracking" data-validation-qty="min1">
                I need assistance with my website stat tracking. </label>
              <label>
                <input type="checkbox" name="s_preferance[]" value="I need my website updated" data-validation-qty="min1">
                I need my website updated. </label>
              <label>
                <input type="checkbox" name="s_preferance[]" value="I need technical assistance or client support" data-validation-qty="min1">
                I need technical assistance or client support. </label>
              <label>
                Other (Mention below) </label>
            </li>
            <li class="textarea">
              <label> <em class="icon icon-textarea"></em>
                <textarea name="s_message" id="s_message" placeholder="Message"></textarea>
              </label>
            </li>
            
            <div style="clear: both;"></div>
            <li class="info_para"> *Your information is kept private. <br>
              We ONLY use this information to assist you.* </li>
            <li class="submit_btn">
              <div>
                <input type="submit" class="yellow-btn" value="Submit" style="margin-left:15px; float:left;"><em id="loading_image_su" style="display:none;" class="ajax-loader"><img src="images/ajax-loader.gif" alt="loader"></em>
                <div style="float: right;margin-left: 15px;margin-top: 15px;text-align: left;width: 300px;" class="redMsgLarge" id="support_msg"></div>
              </div>
            </li>
          </ul>
        </form>
      </div>
    </div>
    <div class="support-bottom-block cf">
      <div class="container">
        <div class="support-bottom-left"><img src="images/suport-image.jpg" alt="" title=""></div>
        <div class="support-bottom-right">
          <h2>CloudZon Support</h2>
          <p>Make sure your CloudZon solutions meet your business needs simply and seamlessly – with help from CloudZon Service and Support. Whether you want to speed up implementation, move to the cloud, customize your solution, optimize IT, or do something completely different – the CloudZon Service and Support team is here to make it happen.</p>
          
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




<script src="js/jquery-1.8.2.js"></script>
<script src="js/browser-selector.js"></script>
<script src="js/jquery.form-validator.min.js"></script>
<!-- placeholder script -->
<script src="js/placeholder.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/modernizr.js"></script>
<!-- general script -->
<script src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script src="js/sweetalert-dev.js"></script>

<script>
  $.validate();
  
</script>

<script>  
$(function() {
$("form#frmsupp").submit(function(e) {
	var isValid = $('#frmsupp').isValid();
    if(isValid) {
				var s_preferance = [];
				var i=0;
				$("input[name='s_preferance[]']:checked").each(function() {
					s_preferance[i++] = $(this).val();
				});
				var s_preferance2 = s_preferance.join();
				
				
		$.ajax({
			url :'MVC/suppo.php',
			type : 'POST',
			dataType: 'json',
			data:
			{
				"s_name":$("#s_name").val(),
				"s_company_name":$("#s_company_name").val(),
				"s_email":$("#s_email").val(),
				"s_phone":$("#s_phone").val(),
				"s_website":$("#s_website").val(),
				"s_preferance":s_preferance2,
				"s_message":$("#s_message").val()
			},
			beforeSend: function(){
				$('#loading_image_su').show();
			},
			complete: function(){
				$('#loading_image_su').hide();
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
						window.location.assign("support.php");
					  }
					}
				);	
		
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
						window.location.assign("support.php");
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

$(document).ready(function(){
    $('#support').addClass("active");
});
</script>
  <a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>