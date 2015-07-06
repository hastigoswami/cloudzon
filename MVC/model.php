<?php
class model
{
	public function database()
	{
		$conn=mysqli_connect('localhost','root','','cz_cloudzon');
		return $conn;
	}
	
	public function add_enq($name,$email,$message,$conn)
	{
		$now=date('Y-m-d H:i:s');
		$sql="insert into itranscript_enq(name,email,message,date) values('$name','$email','$message','$now')";
		$ex=mysqli_query($conn,$sql);
		return $ex;
	}
	
	public function subscribe($email,$conn)
	{
		$now=date('Y-m-d H:i:s');
		$sql="insert into subscribe(email,date) values('$email','$now')";
		$ex=mysqli_query($conn,$sql);
		return $ex;
	}
	public function send_mail($name,$email,$message,$assistance,$company_name,$phone,$web)
	{
		
		date_default_timezone_set('Etc/UTC');

		require 'phpmailer/PHPMailerAutoload.php';
		
		//Create a new PHPMailer instance
		$mail = new PHPMailer;
		
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		//$mail->SMTPDebug = 1;
		
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		
		//Set the hostname of the mail server
		$mail->Host = 'mail.cloudzon.com';
		
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;
		
		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';
		$mail->Username = 'support@cloudzon.com';                // SMTP username
		$mail->Password = 'cloud@123';                  // SMTP password
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		
		$mail->From = $email;
		$mail->FromName = $name;
	
		$mail->AddAddress('support@cloudzon.com');               // Name is optional
		
		$mail->IsHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = 'Enquiry From: '.$name;
		if($company_name=='')
		{
			$mail->Subject = 'Enquiry From: '.$name;
			$mail->Body= "Name: ".$name."<br>Email: ".$email."<br>Message: ".$message;
		}
		else if($company_name=='templates_buy_REQUEST')
		{
			$mail->Subject = 'BUY TEMPLATE';
			$mail->Body= "Name: ".$name."<br>Email: ".$email."<br>Contact No: ".$phone;
		}
		else
		{
			$mail->Subject = 'Enquiry From: '.$name;
			
			$assistance_new=explode(",",$assistance);
			$assistance_fd="";
			foreach($assistance_new as $value)
			{
				//$assistance_fd=.$assistance_new."<br>";
				$assistance_fd=$assistance_fd."<br>".$value;
				//nl2br($value."\n");
				//$assistance_fdt=$assistance_fdt."<br>".
				
			}
			$mail->Body= "Name : ".$name."<br>Email : ".$email."<br>Company Name : ".$company_name."<br>Phone No : ".$phone."<br>Web Side : ".$web."<br> Support Requested For<br>-------------------------------".$assistance_fd."<br><br>Message<br>------------------<br>".$message;
		}
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		if(!$mail->Send()) {
			echo "Message not send";
		   exit;
		}
		return 'done';
	}
	public function send_mail_it($name,$email,$company_name)
	{
		
		date_default_timezone_set('Etc/UTC');

		require 'phpmailer/PHPMailerAutoload.php';
		
		//Create a new PHPMailer instance
		$mail = new PHPMailer;
		
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		//$mail->SMTPDebug = 1;
		
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		
		//Set the hostname of the mail server
		$mail->Host = 'mail.cloudzon.com';
		
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;
		
		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';
		$mail->Username = 'support@cloudzon.com';                // SMTP username
		$mail->Password = 'cloud@123';                  // SMTP password
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		
		$mail->From = $email;
		$mail->FromName = $name;
	
		$mail->AddAddress('support@cloudzon.com');               // Name is optional
		
		$mail->IsHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = 'Quotation From: '.$name;
		if($company_name=='')
		{
			$mail->Body= "Name: ".$name."<br>Email: ".$email."<br>Company Name: ".$company_name;
		}
		else
		{
			$mail->Body= "<br>Name : ".$name."<br>Email : ".$email."<br>Company Name : ".$company_name;
		}
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		
		if(!$mail->Send()) {
			echo "Message not send";
		   exit;
		}
		return 'done';
	}
	public function mail_for_client_cont($name,$email,$message)
	{
			date_default_timezone_set('Etc/UTC');
			
			//Create a new PHPMailer instance
			$mail = new PHPMailer;
			
			//Tell PHPMailer to use SMTP
			$mail->isSMTP();
			
			
			
			#email.host=smtp.gmail.com
#email.port=587
#email.username=cloudzoncloudzon@gmail.com
#email.password=CloudRock@135

			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			//$mail->SMTPDebug = 1;
			
			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
			
			//Set the hostname of the mail server
			$mail->Host = 'mail.cloudzon.com';
			
			//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			$mail->Port = 587;
			
			//Set the encryption system to use - ssl (deprecated) or tls
			$mail->SMTPSecure = 'tls';
			$mail->Username = 'support@cloudzon.com';                // SMTP username
			$mail->Password = 'cloud@123';                  // SMTP password
			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
			
			$mail->From = 'support@cloudzon.com';
			$mail->FromName = 'CloudZon';
			$mail->AddAddress($email,$name);  // Add a recipient

			$mail->IsHTML(true);                                  // Set email format to HTML
			
			$mail->Subject = 'CloudZon';
			$mail->Body    ="Dear ".$name.",<br><br>Thanks for choosing CloudZon.<br><br>We will revert back you soon.<br><br>Thanks,<br>Team CloudZon";
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			if(!$mail->Send()) {
					echo "Message not send";
			   		exit;
			   }
			//echo 'Message has been sent';
	}	
	public function mail_for_client_enq($name,$email,$message)
	{
			date_default_timezone_set('Etc/UTC');
			
			//Create a new PHPMailer instance
			$mail = new PHPMailer;
			
			//Tell PHPMailer to use SMTP
			$mail->isSMTP();
			
			
			
			#email.host=smtp.gmail.com
#email.port=587
#email.username=cloudzoncloudzon@gmail.com
#email.password=CloudRock@135

			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			//$mail->SMTPDebug = 1;
			
			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
			
			//Set the hostname of the mail server
			$mail->Host = 'mail.cloudzon.com';
			
			//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			$mail->Port = 587;
			
			//Set the encryption system to use - ssl (deprecated) or tls
			$mail->SMTPSecure = 'tls';
			$mail->Username = 'support@cloudzon.com';                // SMTP username
			$mail->Password = 'cloud@123';                  // SMTP password
			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
			
			$mail->From = 'support@cloudzon.com';
			$mail->FromName = 'CloudZon';
			$mail->AddAddress($email,$name);  // Add a recipient

			$mail->IsHTML(true);                                  // Set email format to HTML
			
			$mail->Subject = 'CloudZon';
			$mail->Body    ="Dear ".$name.",<br><br>Thanks for choosing CloudZon.<br><br>We will revert back you soon.<br><br>Thanks,<br>Team CloudZon";
			//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			
			if(!$mail->Send()) {
					echo "Message not send";
			   		exit;
			   }
			//echo 'Message has been sent';
	}	
	public function resume($name,$qualif,$email,$location,$phone,$exp,$reference,$skill,$path,$conn)
	{
		$now=date('Y-m-d H:i:s');
		$sql="insert into job_apply(name,qualification,email,location,phone,experience,reference,skill,resume_path,date) values('$name','$qualif','$email','$location','$phone','$exp','$reference','$skill','$path','$now')";
		$ex=mysqli_query($conn,$sql);
		return $ex;
	}
	
	public function contact_us($conn,$name,$email,$msg)
	{
		$now=date('Y-m-d H:i:s');
		$sql="insert into contact_us(name,email,message,date) values('$name','$email','$msg','$now')";
		$ex=mysqli_query($conn,$sql);
		return $ex;
	}
	
	
	public function support($name,$company_name,$email,$phone,$web,$assistance,$any,$conn)
	{
		$now=date('Y-m-d H:i:s');
		$sql="insert into support(name,company_name,email,phone,web,assistance,any,date) values('$name','$company_name','$email','$phone','$web','$assistance','$any','$now')";
		$ex=mysqli_query($conn,$sql);
		return $ex;
	}
	
	
	public function itranscript($name,$position,$email,$number,$company_name,$company_add,$week,$letter,$no_line,$doc_type,$process_doc,$features,$outsource,$time,$quality,$price,$security,$any,$interested,$conn)
	{
		$now=date('Y-m-d');
		$sql="insert into itranscript(name,position,email,number,company_name,company_add,week,letter,no_line,doc_type,process_doc,features,outsource,time,quality,price,security,any,interested,date) values('$name','$position','$email','$number','$company_name','$company_add','$week','$letter','$no_line','$doc_type','$process_doc','$features','$outsource','$time','$quality','$price','$security','$any','$interested','$now')";
		$ex=mysqli_query($conn,$sql);
		return $ex;
	}
	
	public function all_blog($conn)
	{
		$sql="select * from blog_web ORDER BY `show_date` DESC";
		$ex=mysqli_query($conn,$sql);
		return $ex;
	}
	
	public function one_blog($conn,$id)
	{
		$sql="select * from blog_web where id='$id'";
		$ex=mysqli_query($conn,$sql);
		return $ex;
	}
	
	public function cmt($conn,$blog_id,$name,$email,$comt)
	{
		$now=date('Y-m-d H:i:s');

		$sql="insert into blog_comment(blog_id,name,email,comment,date) values('$blog_id','$name','$email','$comt','$now')";
		
		$ex=mysqli_query($conn,$sql);
		return $ex;
	}
	
	public function fetch_cmt($conn,$blog_id)
	{
		$sql="select * from blog_comment where blog_id='$blog_id' ORDER BY `date` DESC";
		
		$ex=mysqli_query($conn,$sql);
		
		$cmtData=array();
			
		while($row=mysqli_fetch_array($ex))
		{
			$cmtData[]=$row;
		}
		return $cmtData;
	}
	
	public function buy($name,$email,$contact,$conn)
	{
		//$sql1="insert into buy_template(name,contact,email) values('$name','$email','$contact')";
		$now=date('Y-m-d H:i:s');
		$sql="insert into buy_template(name,contact,email,date) values('$name','$email','$contact','$now')";
		$ex=mysqli_query($conn,$sql);
		return $ex;
	}
	
	
//for admin
	
	
	public function admin_login($conn,$name,$pass)
	{
		$sql="select * from admin where name='$name' AND pass='$pass'";
		$data=mysqli_query($conn,$sql);
		return $data;
	}	
	
	
	public function show_enq($conn)
	{
		$sql="select * from itranscript_enq";
		$data=mysqli_query($conn,$sql);
		return $data;
	}
	
	
	public function show_resume($conn)
	{
		$sql="select * from job_apply";
		$data=mysqli_query($conn,$sql);
		return $data; 
	}
	
	
	public function show_contact_us($conn)
	{
		$sql="select * from contact_us";
		$data=mysqli_query($conn,$sql);
		return $data;
	}
	
	
	
	
	
}
?>