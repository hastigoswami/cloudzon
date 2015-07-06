<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>iTranscript</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="" />
<link rel="icon" type="image/ico" href="favicon.ico" />

<!-- main css -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/demo.css" rel="stylesheet" />
<link rel="stylesheet" href="css/over-effect.css" />
<link rel="stylesheet" href="css/check_redio.css" />

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
<link rel="stylesheet" type="text/css" href="css/valid.css"/>
	<!-- alert style -->

<link rel="stylesheet" href="css/sweetalert.css"> 

</head>
<?php include_once("analyticstracking.php");?>
<body>
<div id="popup1" class="modal-box cf" style="top:0px !important;"> <a href="#" class="js-modal-close close">×</a>
  <div class="modal-body">
    <div class="form-popup cf">
      <h2>cloudzon infoconnect</h2>
      <div class="clear"><!----></div>
      <form method="post" id="frmit">
        <div class="left">
		
          <input type="text" id="popname" placeholder="* Name" class="input-style" data-validation="required" data-validation-error-msg-container="#required-error-dialog">
		  
		  <input type="text" id="popposition" placeholder="Position" class="input-style">
		  
		  <input id="popemail" type="text" id="email" placeholder="* Email ID" class="input-email" data-validation="email"  data-validation-error-msg-container="#email-error-dialog">
		  
		  <input type="text" id="popnumber" placeholder="* Telephone No" class="input-style" data-validation="length,number" data-validation-length="10-14" data-validation-error-msg-container="#length-error-dialog" maxlength="14">
		  
		  <input type="text" id="popcompany_name" placeholder="* Company Name" class="input-style" data-validation="required" data-validation-error-msg-container="#required-error-dialog">
		  
		  <input type="text" id="popcompany_add" placeholder="Company Address" class="input-style"> 
		     
		</div>
        <div class="clear"><!----></div>
        <div class="volume cf">
          <h3>1. What is the volume of documents transcribed: </h3>
          <table cellspacing="0">
            <tr>
              <td width="60%">No of letters /Week</td>
              <td><input type="text" id="popweek" style="background-color: #e7e7e7;  padding: 7px;  border:1px solid #000; width: 87%;"  data-validation="required"/ data-validation-error-msg-container="#required-error-dialog"><em>*</em>
              </td>
            </tr>
            <tr>
              <td>No of lines /Letter</td>
			  <td>
			  	<div class="td">
					<div class="one-r"><label class="age">A.  Below 10</label>
                		<input class="age-s styled" type="radio" name="a" id="xyz" value="a" checked="checked">
         			</div>
                	<div class="one-r"><label class="age">B.  Below 20</label>
                		<input class="age-s styled" type="radio" name="a" id="xyz" value="b">
					</div>
                	<div class="one-r"> <label class="age">C.  Below 30</label>
                		<input class="age-s styled" type="radio" name="a" id="xyz" value="c">
					</div>
                	<div class="one-r"><label class="age">D.  More than 30</label>
                		<input class="age-s styled" type="radio" name="a" id="xyz" value="d">
					</div>
                </div>
			  </td>
            </tr>
            <tr>
              <td>Incase of more then 30 lines per letter mention approx number of lines per letter</td>
              <td><input type="text" id="popno_line" style="  background-color: #e7e7e7;  padding: 7px;  border: 1px solid #000; width: 87%;" data-validation="required" data-validation-error-msg-container="#required-error-dialog"/><em>*</em></td>
            </tr>
          </table>
        </div>
        <div class="process cf">
          <h3>2.  What are the types of documents(At least one checkbox select)</h3>
          <div class="process-labels">
            <div class="one"><span>A. Legal(memos, file notes, police interviews, dictation of letters and reports) </span>
              <figure>
                <input type="checkbox" name="doc[]" class="styled" value="a" data-validation="checkbox_group" data-validation-qty="min1" checked="checked" data-validation-error-msg-container="#required-error-dialog">
              </figure>
            </div>
            <div class="one"><span>B.  Finance (Media reports, financial briefings, conference calls ) </span>
              <figure>
                <input type="checkbox" name="doc[]" class="styled" value="b">
              </figure>
            </div>
            <div class="one"> <span>C. Medical ( Referral letter, Operative notes, history & physical consultation) </span>
              <figure>
                <input type="checkbox" name="doc[]" class="styled" value="c">
              </figure>
            </div>
          </div>
        </div>
        <div class="process cf">
          <h3>3.   How do you process transcription of documents presently ?  (At least one checkbox select)</h3>
          <div class="process-labels">
            <div class="one"><span>A. Handwritten and Scanned </span>
              <figure>
                <input type="checkbox" name="p_doc[]" class="styled" value="a" data-validation="checkbox_group" data-validation-qty="min1" checked="checked" data-validation-error-msg-container="#required-error-dialog">
              </figure>
            </div>
            <div class="one"><span>B.  Inhouse set up of transcribers </span>
              <figure>
                <input type="checkbox"  name="p_doc[]" class="styled" value="b">
              </figure>
            </div>
            <div class="one"> <span>C. Outsource to another service provider</span>
              <figure>
                <input type="checkbox"  name="p_doc[]" class="styled" value="c">
              </figure>
            </div>
            <div class="one"> <span>D. Any Other  Please mention below </span>
              <figure>
                <input type="checkbox"  name="p_doc[]" class="styled" value="d">
              </figure>
            </div>
          </div>
        </div>
        <div class="process cf">
          <h3>4.   Would you prefer to use transcription services if it provides following features ? (At least one checkbox select)</h3>
          <div class="process-labels">
            <div class="one"><span>A. Cost savings upto £200- £4000</span>
              <figure>
                <input type="checkbox" name="features[]" class="styled" value="a" data-validation="checkbox_group" data-validation-qty="min1" checked="checked" data-validation-error-msg-container="#required-error-dialog">
              </figure>
            </div>
            <div class="one"><span>B.  Turnaround Time is 6 - 24 hours </span>
              <figure>
                <input type="checkbox" name="features[]" class="styled" value="b">
              </figure>
            </div>
            <div class="one"> <span>C.  99% of accuracy and Quality check </span>
              <figure>
                <input type="checkbox" name="features[]" class="styled" value="c">
              </figure>
            </div>
            <div class="one"> <span>D.  Security and confidentiality of Data </span>
              <figure>
                <input type="checkbox" name="features[]" class="styled" value="d">
              </figure>
            </div>
          </div>
        </div>
        <div class="process cf">
          <h3>5. How much does your company spent approximately on transcriptions services and secretarial 
            support for transcription services ?
            Do you have inhouse setup/outsource transcription services to another provider ? </h3>
          <div class="blank-box"><input type="text" id="outsource" style=" background-color:none;  padding: 7px;  border: 1px solid #000; width: 91%; margin-right:3px;" data-validation="required" data-validation-error-msg-container="#required-error-dialog"/><span class="star" style="color:#F00; margin-left:3px; font-size:18px;">*</span></div>
        </div>
        <div class="clearfix"></div>
        <div class="process cf">
          <h3>6.  If you decide to outsource transcription to a service provider what would be the key decision making factors?
            (RATE ON A SCALE:  Strongly Disagree (1,2,3,4,5)---Strongly Agree). </h3>
          <div class="doctype-labels">
            <div class="one"><span>A. Turn Around Time</span>
             	<figure>
                <input type="radio" id="one" name="one" class="styled" value="1">
				<input type="radio" id="one" name="one" class="styled" value="2">
				<input type="radio" id="one" name="one" class="styled" value="3">
				<input type="radio" id="one" name="one" class="styled" value="4">
				<input type="radio" id="one" name="one" class="styled" value="5" checked="checked">
              </figure>
            </div>
            <div class="one"><span>B. Quality & Accuracy of Documents </span>
			  <figure>
                <input type="radio" id="two" name="two" class="styled" value="1">
				<input type="radio" id="two" name="two" class="styled" value="2">
				<input type="radio" id="two" name="two" class="styled" value="3">
				<input type="radio" id="two" name="two" class="styled" value="4">
				<input type="radio" id="two" name="two" class="styled" value="5" checked="checked">
              </figure>
			</div>
            <div class="one"> <span>C.  Price</span>
				<figure>
                <input type="radio" id="three" name="three" class="styled" value="1">
				<input type="radio" id="three" name="three" class="styled" value="2">
				<input type="radio" id="three" name="three" class="styled" value="3">
				<input type="radio" id="three" name="three" class="styled" value="4">
				<input type="radio" id="three" name="three" class="styled" value="5" checked="checked">
              </figure>
			</div>
            <div class="one"> <span>D.  Security & Confidentiality of  Data </span>
				<figure>
                <input type="radio" id="four" name="four" class="styled" value="1">
				<input type="radio" id="four" name="four" class="styled" value="2">
				<input type="radio" id="four" name="four" class="styled" value="3">
				<input type="radio" id="four" name="four" class="styled" value="4">
				<input type="radio" id="four" name="four" class="styled" value="5" checked="checked">
              </figure>
			</div>
            <div class="one"> <span>E.  Any Other (pls mention) </span>
				<figure>
                <input type="text" id="any" class="input-style">
              </figure>
			</div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="provider cf">
          <div class="yes-or-no cf">
            <h3>7.  Would you be interested in setting up a meeting with us to show how this saving could be achieved by outsourcing the
              dictation and provide more information on outsourcing transcription services? </h3>
            <div class="yes-no">
              <label>Yes</label>
              <figure>
                <input type="radio"  id="xyz2" name="xyz2" checked="checked" value="yes" class="styled">
              </figure>
            </div>
            <div class="yes-no">
              <label>No</label>
              <figure>
                <input type="radio" id="xyz2" name="xyz2" class="styled" value="no">
              </figure>
            </div>
          </div>
        </div>
        <a href="#" title="submit">
        <input class="submit-btn" type="submit" value="send" style="float:left;"><em id="loading_image_it" style="display:none;" class="ajax-loader"><img src="images/ajax-loader.gif" alt="loader"></em>
        </a>
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
        <div class="slider-banner" ><img src="images/itranscript.jpg" alt="" title=""> </div>
        <div class="container">
          <div class="text-block-mian">
            <p><span class="yellow">iTranscript</span> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- center part html -->
  <section class="content-area">
    <div class="itranscript-block cf">
      <div class="container">
        <div class="itranscript-left">
          <h4>What we provide ?</h4>
          <p>CloudZon is a leading provider of transcription management solutions and has been working as a division of Global MedData Inc for 12 years serving over 650 clients in USA and UK in Industry, commerce and healthcare. </p>
          <p>CloudZon  provides transcription management solutions with minimum start-up and ongoing maintenance costs. The transcription services offered by us start with your dictation, which is uploaded through our secure online server. Your files are then prepared by our team of professional transcribers at one of our global processing centres and transformed into a document of your chosen format and template specific to your needs.</p>
          <p>Each file goes through  quality assurance process before being re-uploaded via our secure online server for your personal use. Our unique system allows documents to be populated within your record system, and will also generate all reports for checking.</p>
          <p>Our company is fully compliant with Data Protection Act and HIPAA</p>
          <h4>Multi-Stage Quality and Accuracy</h4>
          <p>We aim to provide documents that are a minimum of 98.5% accurate. Our quality assurance (QA) procedures are governed by the guidelines issued by the American Association of Medical Transcription (AAMT), working on a 3-tier quality process model. </p>
          <p>And then we take this one step further, to ensure that you receive the best quality possible we have added an extra tier within our QA model, where between 30-100% of all files are checked by a dedicated team within UK/US to ensure that quality is maintained for an accuracy level of  99+%.</p>
          <h4>How much does it cost? </h4>
          <p>Research shows that savings of up to 40% can be achieved by using our services as compared with in house transcription. </p>
          <p>Rates are based on line/character count method, i.e. 65 characters make a line. A character is defined as a letter, number, space, symbol and a function key. We do not charge by minutes or duration of dictation. You save because you only pay for what is actually typed with no initial cost and a non zero maintenance cost with Net Line 65 Keystroke’ principle </p>
          <p>Your priority is our priority-- depending on urgency, we provide a Turn-Around Time (TAT) is 6,12, 24 or 48 hours. Dictations, voice files or transcribed text files can be uploaded and downloaded anywhere with access to a web browser and internet. The files transcribed can be created in any format or document template specific to your needs.</p>
          <h4>Security and Data-Protection</h4>
          <p><strong>Privacy—</strong> all communication with websites is performed over an encrypted channel using 128-bit SSL (Secured Socked Layer). <br>
            <strong>Firewall Protection—</strong> CISCO firewall is continuously configured with the latest updates to protect our internal network from intruders or hackers.<br>
            <strong>Daily Data Backup—</strong>Daily Tape back ups and monthly backup to DVD (securely stored off-site) are performed to protect against data loss.</br>
            <strong>Redundant Data Protection—</strong> we deploy state-of-the-art Hewlett-Packard Compaq servers with mirrored hard drives.<br>
            <strong>Latest Virus Protection—</strong>updated regularly. Staff Bound to Strict Confidentiality and Disclosure— All of our data processing staff members are bound to a chain of trust agreements and abide to strict confidentiality and non disclosure agreements.</p>
          <h4>Why choose us ?</h4>
          <ul>
            <li><strong>Affordable Transcription.</strong> We are dedicated to quality @ Affordable price rates based on per line count method </li>
            <li><strong>Accurate Transcription</strong> Proven experience in maintaining a 99% accuracy for transcribed documents</li>
            <li><strong>Quality</strong> Specialist transcribers for with in-depth understanding of the relevant subject matter</li>
            <li><strong>Rush TAT</strong> Dependant on urgency, Turn-Around Time (TAT) is 12, 24 or 48 hours</li>
            <li><strong>On time Delivery</strong> Delivery commitment as per schedule & within budget every time.</li>
            <li><strong>Security-Privacy-Confidentiality</strong> We respect your privacy, confidentiality and security of data very seriously and abide by the DPA and HIPAA laws </li>
            <li><strong>Excellent Customer Service </strong> We offer great service that delivers the highest quality customer experience.</li>
          </ul>
        </div>
        <div class="itranscript-right">
          <h2>Recent video</h2>
          <video width="100%" controls>
            <source src="images/iTranscript_from_CloudZon.mp4" type="video/mp4">
            <source src="images/iTranscript_from_CloudZon.ogg" type="video/ogg">
            Your browser does not support HTML5 video. </video>
          <a href="" class="get-btn" data-modal-id="popup1">get a quote</a>
          <div class="contact-block">
            <div class="container">
              <div class="left-side">
                <h2>Quick Enquiry</h2>
				<form method="post" id="frmeq" onSubmit="return false">
					
					<p>
					  Name:
					  <input name="name" type="text" id="name" data-validation="required" data-validation-error-msg="Name field is required">
					</p>
					
					<p>
					  E-mail:
					 	 <input name="email" type="text" id="email1" data-validation="email" data-validation-error-msg="Email field is required">
					</p>
					
					<p>
					  Message:
     				 <textarea name="message" id="message" data-validation="required" data-validation-error-msg="Message box should not be empty"></textarea>
					</p>
					  <input class="submit-btn" type="submit" value="send" style="float:left;"><em id="loading_image" style="display:none;" class="ajax-loader"><img src="images/ajax-loader.gif" alt="loader"></em>
				  </form>
              </div>
            </div>
          </div>
          <div class="itranscript-logo"></div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
  <div class="clear"></div>
  
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
<script src="js/sweetalert-dev.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/modernizr.js"></script>
<!-- general script -->
<script src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script src="js/jquery.form-validator.min.js"></script>
<script src="js/custom-form-elements.js"></script>

<script>  
$(function() {
$("form#frmeq").submit(function(e) {
	var isValid = $('#frmeq').isValid();
    if(isValid) {
		$.ajax({
			url :'MVC/enq.php',
			type : 'POST',
			dataType: 'json',
			data:
			{
				"name":$("#name").val(),
				"email":$("#email1").val(),
				"message":$("#message").val()
			},
			beforeSend: function(){
				$('#loading_image').show();
			},
			complete: function(){
				$('#loading_image').hide();
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
						window.location.assign("itranscript.php");
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
						window.location.assign("itranscript.php");
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
$("form#frmit").submit(function(e) {
	var isValid = $('#frmit').isValid();
    if(isValid) {
				var doc = [];
				var i=0;
				$("input[name='doc[]']:checked").each(function() {
					doc[i++] = $(this).val();
				});
				var doc2 = doc.join();
				
				var p_doc = [];
				var i=0;
				$("input[name='p_doc[]']:checked").each(function() {
					p_doc[i++] = $(this).val();
				});
				var p_doc2 = p_doc.join();
				
				var features = [];
				var i=0;
				$("input[name='features[]']:checked").each(function() {
					features[i++] = $(this).val();
				});
				var features2 = features.join();
				
				
				var one1 = document.querySelector('input[name = "one"]:checked').value;
				var two2 = document.querySelector('input[name = "two"]:checked').value;
				var three3 = document.querySelector('input[name = "three"]:checked').value;
				var four4 = document.querySelector('input[name = "four"]:checked').value;
				
				var xyz2 = document.querySelector('input[name = "xyz2"]:checked').value;
				var a2 = document.querySelector('input[name = "a"]:checked').value;
				
				
		$.ajax({
			url :'MVC/it_qu.php',
			type : 'POST',
			dataType: 'json',
			data:
			{
				"popname":$('#popname').val(),
				"popposition":$('#popposition').val(),
				"popemail":$('#popemail').val(),
				"popnumber":$('#popnumber').val(),
				"popcompany_name":$('#popcompany_name').val(),
				"popcompany_add":$('#popcompany_add').val(),
				"popweek":$('#popweek').val(),
				"xyz":a2,
				"popno_line":$('#popno_line').val(),
				"doc":doc2,
				"p_doc":p_doc2,
				"features":features2,
				"outsource":$('#outsource').val(),
				"one":one1,
				"two":two2,
				"three":three3,
				"four":four4,
				"any":$('#any').val(),
				"xyz2":xyz2
			},
			beforeSend: function(){
				$('#loading_image_it').show();
			},
			complete: function(){
				$('#loading_image_it').hide();
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
						window.location.assign("itranscript.php");
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
						window.location.assign("itranscript.php");
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

<script>
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
		$("#frmit").trigger('reset');
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


</script>
  <a href="#0" class="cd-top">Top</a>
<script src="js/main.js"></script> <!-- Gem jQuery -->
</body>
</html>