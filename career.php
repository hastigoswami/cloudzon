<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Career</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="" />
<link rel="icon" type="image/ico" href="favicon.ico" />

<!-- main css -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/demo.css" rel="stylesheet" />

<!-- Font css -->
<link href="fonts/fonts.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="css/valid.css"/>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- html 5 js -->
<!--[if IE]>
     	<script src="js/html5shiv.js"></script>
    <![endif]-->

<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<link rel="stylesheet" href="css/style-scroll.css">
<!-- Gem style -->
<!-- alert style -->

<link rel="stylesheet" href="css/sweetalert.css">
<style>
.star-block{width:100%; float:left; font-size:22px; color:#3a3a3a; margin-top:20px; background:url(./images/star.png) no-repeat left top;padding: 4px 0px 0px 43px;height: 37px;}
.star-block a{color:#f48209;}
.star-block a:hover{color:#3a3a3a;}

</style>
</head>
<body>
<?php include_once("analyticstracking.php");?>
<div id="popup2" class="modal-box"> <a href="#" class="js-modal-close close">×</a>
  <div class="modal-body">
    <div class="form-popup-one cf">
      <h1>JOB APPLY</h1>
      <form method="post" id="frmjob" enctype="multipart/form-data">
        <div class="left">
          <input type="text" placeholder="Your Name" class="input-style" id="name" name="name" data-validation="required" data-validation-error-msg-container="#required-error-dialog">
          <input type="text" placeholder="Qualification" class="input-style" id="qualif" name="qualif" data-validation="required" data-validation-error-msg-container="#required-error-dialog">
          <input type="text" placeholder="Email" class="input-email" id="email" name="email" data-validation="email"  data-validation-error-msg-container="#email-error-dialog">
          <input type="text" placeholder="Location" class="input-style" id="location" name="location" data-validation="required" data-validation-error-msg-container="#required-error-dialog">
          <input type="text" placeholder="Phone Number" class="input-style" id="phone" name="phone" data-validation="length,number" data-validation-length="10-14" data-validation-error-msg-container="#length-error-dialog" maxlength="14">
          <input type="text" placeholder="Year/Month Experience" class="input-style" id="exp" name="exp">
		  
		  <select id="reference" class="input-style">
		  	<option value="0" selected="selected">-----------------------------------------------------Select Reference-----------------------------------------------------</option>
			<option value="social_media">Social Media(Facebook/Twitter/Linkedin)</option>
			<option value="Friend">Friend</option>
			<option value="search_engine">Search Engine(Google,Yahoo)</option>
		  </select>
          
		  <textarea data-placeholder="" class="input-style" rows="4" cols="50" id="skill" placeholder="Technical Skill" name="skill" data-validation="required" data-validation-error-msg-container="#required-error-dialog"></textarea>
          <p> Upload only .pdf, .doc & .docx file
            <input type="file" id="fileField" name="fileField" class="input-style" data-validation="required" data-validation-allowing="pdf, doc, docx"  data-validation-max-size="2M" data-validation-error-msg-container="#required-error-dialog">
          </p>
          <input class="submit" type="submit" value="submit">
          <em id="loading_image" class="ajax-loader" style="display:none;"><img src="images/ajax-loader.gif" alt="loader"></em> </div>
      </form>
    </div>
  </div>
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
        <div class="slider-banner"><img src="images/career-bg.png" alt="" title=""> </div>
        <div class="container">
          <div class="text-block-mian">
            <p><span class="yellow">Career</span> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="">
    <div class="working-with-cz cf">
      <div class="container cf">
        <div class="work-with-cz cf">
          <div class="left-part">
            <h2>working with cloudZon</h2>
          </div>
          <div class="right-part">
            <h3>CloudZon promotes a culture of individual and professional growth within an environment of continuous learning and team collaboration.</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="tree-img">
      <div class="container"> <img src="images/tree.png" alt="tree-img"> </div>
    </div>
    <div class="middle-content-block cf">
      <div class="container">
        <div class="first-point">
          <h3>Learn and Grow:</h3>
          <p>CloudZon promotes a culture of individual and professional growth within an environment of continuous learning and team collaboration. By bringing your expertise to teams with diverse talents and backgrounds, you'll be both contributing and learning simultaneously during the course of project work. We foster open interactions with other colleagues at Trigent through social and technical forums giving ample opportunity for all to explore avenues of growth in all aspects of ones tenure at Trigent.</p>
        </div>
        <div class="first-point">
          <h3>Make a Difference:</h3>
          <p>The strength of CloudZon employee culture comes from its diversity. We welcome employees of all backgrounds and passions, and place a high value on the unique perspectives that make up CloudZon.</p>
        </div>
        <div class="first-point">
          <h3>Be Recognized and Rewarded:</h3>
          <p>Top performers are frequently recognized in meaningful ways for their contributions and accomplishments. Winners provide rewards that "wow" their top performers and make them feel valued and appreciated. Common rewards include cash rewards, meals, time savings services, development opportunities, and promotions. Many winners also provide rewards aligned with the type of recognition their employees value (public vs. private, formal vs. informal, interests, etc.</p>
        </div>
        <div class="opening-block">
          <div class="container cf">
            <div class="opening">
            <h2>Current Openings (Ahmedabad Location)</h2>
              <div class="opening-main cf" id="part">
                
                <a href="#" id="seo" class="box">
                  <h3>Business Development Manager</h3>
                  <p><strong>Experience: </strong> 3+ Year </p>
                  <p><strong>Location: </strong> Ahmedabad, India </p>
                  <span class="part-btn">Job Description</span> </a>
                <a href="#" id="seo2" class="box">
                  <h3>Content Writer</h3>
                  <p><strong>Experience: </strong> 1+ Year </p>
                  <p><strong>Location: </strong> Ahmedabad, India </p>
                  <span class="part-btn">Job Description</span> </a>
                <a href="#" id="seo3" class="box last">
                  <h3>Search Engine Optimization (SEO)</h3>
                  <p><strong>Experience: </strong> 1+ Year </p>
                  <p><strong>Location: </strong> Ahmedabad, India </p>
                  <span class="part-btn">Job Description</span> </a>
              </div>
              <div class="career-left" style="display:none;" id="seoshow"> <a href="#" class="open-btn" id="clzz"> Openings at CloudZon</a>
                <div class="clear"></div>
                <h2>Business Development Manager</h2>
                <ul>
                  <li> To generate business leads by feelancing portal or personally or telephony.</li>
                  <li> To achieve agreed targets of lead qualification and revenue generation every month.</li>
                  <li> To run specific campaigns for selling the software development and customization services.</li>
                  <li> To create sales collaterals, proposals, RFI/RFP responses and any such marketing materials.</li>
                  <li> To interact with the offshore development center for proper communication and delivery of the projects.</li>
                  <li> To perform as an engagement/account manager for all clients of the company To participate in client calls.</li>
                  <li>Should have Strong presentation, communication, organization, multitasking, and time management.</li>
                </ul>
                <p><strong>Experience: </strong> 3+ Year</p>
                <p><strong>Qualification: </strong> MBA with IT background or any other relevant degree</p>
                <p><strong>Type of Position: </strong> Full time </p>
              </div>
              <div class="career-left" style="display:none;" id="seoshow3"> <a href="#" class="open-btn" id="clzz3"> Openings at CloudZon</a><br>
                <div class="clear"></div>
                <h2>Search Engine Optimization (SEO)</h2>
                <ul>
                  <li> Should have over all knowledge of Website optimization / performance, On-Page. </li>
                  <li>optimization, Off-page optimization, PPC, Social Media Optimization, Search Engine Marketing and Web Analytics.</li>
                  <li> Experience with link building process, keyword generation, internet marketing and Search Engine optimization techniques (preferably google) and competitive analysis is must.</li>
                  <li>Should be able to handle Google optimization,Yahoo, Bing, Reciprocal Linking Management, Directory Submissions, Planning and Implementing Internet Marketing Strategies with Social media optimization.</li>
                  <li>Should be strong in technical and analytical skills with a proven track record for SEO with latest Market Trends.</li>
                  <li>Good knowledge of HTML and CSS skill, proficient with Wordtracker, Google Adwords keyword tool and other SEO tools. Working knowledge on DMOZ editors, Zeal editors.</li>
                </ul>
                <p><strong>Experience: </strong> 1+ Year </p>
                <p><strong>Type of Position: </strong> Part time/Contractual </p>
              </div>
              <div class="career-left" style="display:none" id="seoshow2"> <a href="#" class="open-btn" id="clzz2"> Openings at CloudZon</a>
                <div class="clear"></div>
                <h2>Content Writer</h2>
                <ul>
                  <li>Copy writing (PR, Article and Blogs)</li>
                  <li>Creative content writing</li>
                  <li>Use to with social media and other online platforms</li>
                  <li>Developing content for IT, marketing campaign, newsletters, social media etc.</li>
                </ul>
                <p><strong>Experience: </strong>1+ Year </p>
                <p><strong>Type of Position: </strong> Part time/Contractual </p>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
		<div class="apply-btn"> <a class="apply-job hvr-sweep-to-bottom" href="#" title="Apply For Job" data-modal-id="popup2">apply for job</a> </div>-
        <!--<div class="star-block">Apply on <a href="mailto:info@cloudzon.com">info@cloudzon.com</a> for the positions mentioned above.</div>->
      </div>
    </div>
  </section>
  <div class="clear"><!----></div>
  
  <!-- footer part html -->
  <footer>
    <?php include('footer.php');?>
  </footer>
</div>
<!-- main script --> 
<script src="js/jquery-1.10.2.min.js"></script> 
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
$("#reference").blur(function(e) {
var ref=$('#reference').val();
	if(ref==0)
	{
		document.getElementById("reference").style.borderColor = "#FF0000";
		//var isValid = $('#frmjob').isValid = false;
	}
	else
	{
		document.getElementById("reference").style.borderColor = "#96b796";
		//document.getElementById("reference").addClass('valid');
		//var isValid = $('#frmjob').isValid();
	}
 });
$("form#frmjob").submit(function(e) {
	if($('#reference').val()==0)
	{
		var isValid = $('#frmjob').isValid = false;
		document.getElementById("reference").style.borderColor = "#FF0000";
	}
	else
	{
		var isValid = $('#frmjob').isValid();
	}
    if(isValid) {
			
				
				   var data = new FormData();
				   data.append('name', $("#name").val());
				   data.append('qualif', $("#qualif").val());
				   data.append('email', $("#email").val());
				   data.append('location', $("#location").val());
				   data.append('phone', $("#phone").val());
				   data.append('exp2', $("#exp").val());
				   data.append('reference', $("#reference").val());
				   data.append('skill', $("#skill").val());
				   data.append('fileField', $("#fileField")[0].files[0]);
				   
				 $.ajax({
					type : "POST",
					url : "MVC/job.php",
					dataType: 'json',
					data : data,
					cache: false,
					contentType: false,
					processData: false,
					mimeType: "multipart/form-data",
			beforeSend: function(){
				$('#loading_image').show();
			},
			complete: function(){
				$('#loading_image').hide();
			},
			success: function(data) {
				if(data['message'] == "Must be uploaded in PDF,DOC,DOCX format." || data['message']=="Sorry,Your details not submitted successfully.")
				{
					swal(
						{
				 		 title: "Error!",
				 		 text: data['message'],
				 		 confirmButtonText: "okey!",
						 closeOnConfirm: true
						});
							
							document.getElementById('fileField').value = '';
							document.getElementById("fileField").className = "input-style";
							$('#fileField').addClass("error");
				}
				else
				{
					swal
					(
					{
				  		title: "Success!",
				  		text: data['message'],
				  		confirmButtonText: "okey!",
				 		closeOnConfirm: true
						},
						function(isConfirm)
						{
					  		if (isConfirm)
					 		{
								window.location.assign("career.php");
					  		}
						}
					);	
		        }
			},
			error : function(data)
			{
				swal
				(
				{
				  title: "Error!",
				  text: data['message'],
				  confirmButtonText: "okey!",
				 closeOnConfirm: true
				},
					function(isConfirm)
					{
					  if (isConfirm)
					  {
						window.location.assign("career.php");
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
				"email_address":$("#email_address").val()
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
				 closeOnConfirm: true
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
		$("#frmjob").trigger('reset');
		document.getElementById("reference").style.borderColor = "#313131";
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
$(function() {
$("#seo").click(function(e) {
		$('#part').hide();
		e.preventDefault();
		$('#seoshow').show();
		//$('#seoshow').focus();
		$("#seoshow").focus();
    });
$("#seo2").click(function(e) {
		$('#part').hide();
		e.preventDefault();
		$('#seoshow2').show();
		//$('#seoshow').focus();
		$("#seoshow").focus();
    });
$("#seo3").click(function(e) {
		$('#part').hide();
		e.preventDefault();
		$('#seoshow3').show();
		//$('#seoshow').focus();
		$("#seoshow").focus();
    });	
$("#clzz").click(function(e) {
		$('#part').show();
		e.preventDefault();
		$('#seoshow').hide();
		//$('#seoshow').focus();
		$("#part").focus();
    });
$("#clzz2").click(function(e) {
		$('#part').show();
		e.preventDefault();
		$('#seoshow2').hide();
		//$('#seoshow').focus();
		$("#part").focus();
    });
$("#clzz3").click(function(e) {
		$('#part').show();
		e.preventDefault();
		$('#seoshow3').hide();
		//$('#seoshow').focus();
		$("#part").focus();
    });
  });
  
</script> 
<script>
  $.validate();
</script> 
<script>
$(document).ready(function(){
    $('#career').addClass("active");
});
</script> 
<a href="#0" class="cd-top">Top</a> 
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>