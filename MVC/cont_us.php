<?php
		include('model.php');
		$obj=new model();
		header('Content-type: application/json');
		$conn=$obj->database();
	
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$message=$_REQUEST['message'];
		$var1 = $obj->contact_us($conn,$name,$email,$message);
		$conf=$obj->send_mail($name,$email,$message,'','','','');
		
		if($var1==1)
		{
		
			$obj->mail_for_client_cont($name,$email,$message);
			$data = array('status' => 200, 'message' => "Thank you! Your message has been successfully sent. We will contact you very soon!");
	        echo json_encode($data);

		}
		else
		{
		
			$data = array('status' => 400, 'message' => "Not submitted successfully!");
	        echo json_encode($data);
	       // echo json_encode("error");

		}
?>