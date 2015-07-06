<?php

		
		include('model.php');
		$obj=new model();
		header('Content-type: application/json');
		$conn=$obj->database();
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		$obj->add_enq($name,$email,$message,$conn);
		$conf=$obj->send_mail($name,$email,$message,'','','','');
		if($conf=='done')
		{
			$obj->mail_for_client_enq($name,$email,$message);		
			$data = array('status' => 200, 'message' => 'Your enquiry submitted successfully');
	        echo json_encode($data);
		}
		else
		{
			$data = array('status' => 400, 'message' => 'Your enquiry Not submitted successfully');
	        echo json_encode($data);
		}


?>