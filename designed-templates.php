<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Designed Templates</title>
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

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" href="css/style-scroll.css"> <!-- Gem style -->

</head>
<body>

<?php include_once("analyticstracking.php");?>
<div id="popup2" class="modal-box"> <a href="#" class="js-modal-close close">×</a>
  <div class="modal-body">
    <div class="form-popup-one cf">
      <h1>Buy Now</h1>
      <form id="deginform">
        <div class="left">
          <input type="text" placeholder="Your Name" class="input-style" id="name" name="name" data-validation="required" data-validation-error-msg-container="#required-error-dialog">
          <input type="text" placeholder="Contact Number" class="input-style" id="contact" name="qualif" data-validation="required" data-validation-error-msg-container="#required-error-dialog">
          <input type="text" placeholder="Email" class="input-email" id="email" name="email" data-validation="email"  data-validation-error-msg-container="#email-error-dialog">

          <input class="submit" type="submit" value="submit">
          <em id="loading_image" class="ajax-loader" style="display:none;"><img src="images/ajax-loader.gif" alt="loader"></em> </div>
      </form>
    </div>
  </div>
</div>

<div id="popup4" class="modal-box"> <a href="#" class="js-modal-close close">×</a>
  <div class="modal-body">
    <div class="form-popup-one-i cf">
  
      <img src="images/designed-one.png" alt="designed-one">
    </div>
  </div>
</div>

<div id="popup5" class="modal-box"> <a href="#" class="js-modal-close close">×</a>
  <div class="modal-body">
    <div class="form-popup-one-i cf">
   <img src="images/designed-two.png" alt="designed-one">
    
    </div>
  </div>
</div>

 <div class="mobile-nav-block"><span class="m-title">Navigation</span>
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
        <div class="slider-banner"><img src="images/d-t-bg.png" alt="" title=""> </div>
        <div class="container">
          <div class="text-block-mian">
         <p>Designed<span class="yellow"> Templates</span> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="">
   		<div class="content-block cf">
        	<div class="container">
            	<h2>Amazing Templates at an Unbelievably Low Price! Instant Access!</h2>
                <div class="two-templates">
                	<div class="first-t">
                    	<img src="images/church-t.png" alt="church-t" class="church-t">
                       	<div class="detail-box cf">
                        	<h3>
                                <?php
                                    $ipAddress = $_SERVER['REMOTE_ADDR'];
                                    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
                                        $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
                                    }
                                    $country = file_get_contents("http://ipinfo.io/{$ipAddress}/country");
                                    $cm=trim($country);
                                    if($cm==="GB")
                                    {
                                        $priz='£11';

                                        //UK
                                ?>
                                        Price - £11/-
                                <?php
                                    }
                                    elseif($cm==='US')
                                    {
                                        $priz='$16';
                                        //US

                                ?>
                                        Price - $16/-
                                <?php

                                    }
                                    else
                                    {
                                        //India
                                        $priz = 'र999';
                                ?>
                                        Price - र999/-
                                <?php
                                    }
                                ?>
                            </h3>
                            <p>You get access to download any  template for just <?php echo $priz;?>/-. </p>
                            <a href="#" title="View Demo" class="v-btn" data-modal-id="popup4">View Demo</a>
                            <a href="#" title="Buy Now" class="b-btn" data-modal-id="popup2">Buy Now</a>
                        
                        </div>
                    </div>
                    <div class="first-t">
                    	<img src="images/chartered-t.png" alt="chartered-t" class="church-t">
                       	<div class="detail-box cf">
                        	<h3>Price - <?php echo $priz;?>/-</h3>
                            <p>You get access to download any  template for just <?php echo $priz;?>/-. </p>
                            <a href="#" title="View Demo" class="v-btn" data-modal-id="popup5">View Demo</a>
                            <a href="#" title="Buy Now" class="b-btn" data-modal-id="popup2">Buy Now</a>
                         
                        </div>
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
<script src="js/jquery-1.8.2.js"></script>
<!-- placeholder script -->
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
$("form#deginform").submit(function(e) {
	var isValid = $('#deginform').isValid();
    if(isValid) {
		$.ajax({
			url :'MVC/buy_temp.php',
			type : 'POST',
			dataType: 'json',
			data:
			{
				"name":$("#name").val(),
				"contact":$("#contact").val(),
				"email":$("#email").val()
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
						window.location.assign("designed-templates.php");
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
						window.location.assign("designed-templates.php");
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
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
		 $("#deginform").trigger('reset');
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});



</script>
<script>
  $.validate();
</script>
<script type='text/javascript' src='js/snap.svg-min.js'></script>
<script>
$(document).ready(function(){
    $('#port').addClass("");
});
</script>
</script>
  <a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>