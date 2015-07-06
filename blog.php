<?php
	include('MVC/blogteg.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="" />
<link rel="shortcut icon" href="favicon.ico">


<!-- main css -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/demo.css" rel="stylesheet" />
<link rel="stylesheet" href="css/over-effect.css" />
<link rel="stylesheet" href="css/sweetalert.css"> 
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/magic.min.css" />
<!-- Font css -->
<link href="fonts/fonts.css" rel="stylesheet"/>
<link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,900,100italic,300italic,400italic,700italic,700,300,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
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
        <div class="slider-banner"><img src="images/career-bg.png" alt="" title=""> </div>
        <div class="container">
          <div class="text-block-mian">
            <p><span class="yellow">Blog</span> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="">
      <div class="blogs cf">
      	<div class="container cf">
        	<div class="two-blogs">
			<?php
			$numItems = count($blogData);
			$i=0;
			foreach($blogData as $value)
			{
				if(++$i === $numItems)
				{
					$last=$value['id'];
  				}
			}
			foreach($blogData as $value)
			{
			?>
            	<div class="secondd cf">
                	<div class="first-blog cf">
                		<a href="fullblog.php?blogid=<?php echo $value['id'];?>&to=<?php echo $last;?>"><img src="<?php echo $value['blog_img'];?>" alt="blog-one" class="newsE"></a>
                    	<div class="desc">
                    		<a href="fullblog.php?blogid=<?php echo $value['id'];?>&to=<?php echo $last;?>"><h2><?php echo $value['title'];?></h2></a>
                   			<p><?php echo $value['less_content'];?></p>
                    		<div class="cal-edit">
                    			<span class="cal"><img src="images/calendar.png" alt="calendar"><h3><?php echo $value['show_date'];?></h3></span>
                    		</div>
                    	</div>
					</div>
                </div>
			<?php
			}
			?>
			
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
<script src="js/browser-selector.js"></script>
<script src="js/main_animetion.js"></script>
<!-- placeholder script -->
<script src="js/placeholder.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/modernizr.js"></script>
<!-- general script -->
<script src="js/script.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
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
    $('#blog_t').addClass("active");
});
</script>
</script>
  <a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>