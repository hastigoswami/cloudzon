<?php
	include('model.php');
	$obj=new model();
	header('Content-type: application/json');
	$conn=$obj->database();
	
		$name=$_POST['s_name'];
		$company_name=$_POST['s_company_name'];
		$email=$_POST['s_email'];
		$phone=$_POST['s_phone'];
		$web=$_POST['s_website'];
		
		$assistance=$_POST['s_preferance'];
		$message=$_POST['s_message'];
		
		$conf=$obj->support($name,$company_name,$email,$phone,$web,$assistance,$message,$conn);
		
		$conf=$obj->send_mail($name,$email,$message,$assistance,$company_name,$phone,$web);
		if($conf=='done')
		{
			$data = array('status' => 200, 'message' => "Your query has been sent successfully. We will contact you very soon.");
	        echo json_encode($data);
		}
		else
		{
			$data = array('status' => 400, 'message' => "Your query Not submitted successfully.");
	        echo json_encode($data);
		}
?>