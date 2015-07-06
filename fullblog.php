<?php
	include('MVC/fblog.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>One-Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="" />
<link rel="shortcut icon" href="favicon.ico">


<!-- main css -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/demo.css" rel="stylesheet" />
<link rel="stylesheet" href="css/over-effect.css" />
<link rel="stylesheet" href="css/sweetalert.css"> 
<link rel="stylesheet" href="css/hover.css"> 
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
			<div class="blog-content-all cf">
            	<div class="first-blog-f">
                	<div class="first-blg">
                    <div class="img-blog">
                		<img  src="<?php echo $oneblogData['blog_img'];?>" alt="blog-one">
                        </div>
                     
                		<h2 ><?php echo $oneblogData['title'];?></h2>
                		<p><?php echo $oneblogData['full_content'];?></p>
                
                    </div>
                    <div class="clear"></div>
                	
                    
       			<?php
					foreach($cmtData as $value)
					{
				?>
	   				<div class="comment-write">
       					<h3 ><?php echo $value['name'];?></h3>
            			<div class="p cf" style="word-wrap: break-word;"><?php echo $value['comment'];?></div>
            			<h4 class="cf"><?php echo $value['date'];?></h4>
      				</div>	   
				<?php
					}
				$nextId=$_GET['blogid']+1;
				$last=$_GET['to'];
				$backId=$_GET['blogid']-1;
				if($backId=='1')
				{
					
				}
      			?>
				<div>
					
					<?php
					if($_GET['blogid']==1)
					{
					?>
					<?php	
					}
					else
					{
					?>
						<a href="fullblog.php?blogid=<?php echo $backId;?>&to=<?php echo $last;?>">
					<?php
					}
					?>
					<img src="images/back.png" height="30" width="30" style="float:left; margin-left:25px; margin-bottom:20px;" title="Back" id="back" class="hvr-pulse"></a>
					<?php
					if($_GET['blogid']==$_GET['to'])
					{
					?>
					 
					<?php	
					}
					else
					{
					?>
						<a href="fullblog.php?blogid=<?php echo $nextId;?>&to=<?php echo $last;?>">
					<?php
					}
					?>
					<img src="images/next.png" height="30" width="30" style="float:right; margin-right:25px;" title="Next" class="hvr-pulse"></a>
				</div>
					<div class="comment-box cf">
						<form method="post" name="frm" id="frmcmt">
                			<h2>Add New Comment</h2>
							<input type="hidden" name="blog_comt" id="blog_comt" value="<?php echo $oneblogData['id'];?>">
                    		<div class="cm-name cf"><h4>*Name :</h4><input class="comment-name" name="ctname" id="ctname" type="text" placeholder="" data-validation="required" data-validation-error-msg-container="#required-error-dialog"></div>
                    		<div class="cm-name cf"><h4>*Email :</h4><input class="comment-name" name="ctemail" id="ctemail" type="text" placeholder="" data-validation="email"  data-validation-error-msg-container="#email-error-dialog"><p></p></div>
                    		<div class="cm-name cf"><h4>*Comment :</h4><textarea class="comment-msg" name="ctcomment" id="ctcomment" data-validation="required" data-validation-error-msg-container="#required-error-dialog"></textarea></div>
						
                    		<input class="submit-btn" name="comment" type="submit" value="send" id="comment" style="float:right;">
						</form>
					</div>
               </div>
             
               <div class="side-blog-thumb cf">
					<div class="pop-blogs cf">
               			<h2>latest-blogs</h2>
						
						
				<?php
					$i=1;
					foreach($letestBlog as $value)
					{
				?>
               			<div class="blog-one cf">         	
               				<h2 style="text-shadow: 2px 2px 8px #FF0000;"><a href="fullblog.php?blogid=<?php echo $value['id'];?>&to=<?php echo $last;?>"><?php echo $i.".".$value['title'];?></a></h2>
               				<p><?php echo $value['less_content'];?></p>    
               			</div>
               	<?php
						if($i == '4')
						{
							break;
						}
						$i++;
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
/*  
//$(function() {
$('#comment').on('submit', function () {
//	$("#frmcmt").submit(function(e) 
	//{
		$.ajax({
			url :'MVC/cmt.php',
			type : 'POST',
			dataType: 'json',
			data: 
			{
				"blog_comt":$("#blog_comt").val(),
				"name":$("#ctname").val(),
				"email":$("#ctemail").val(),
				"comt":$("#ctcomment").val()
			},
				//beforeSend: function(){
				//	$('#loading_image_sub').show();
				//},
				//complete: function(){
				//	$('#loading_image_sub').hide();
				//},
			success: function(data) {
				console.log('abc');
			},
			error :function(data){
				console.log('abc124');
			}
			});
	});
//});
  */
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