<?php
		include('model.php');
		$obj=new model();
		header('Content-type: application/json');
		$conn=$obj->database();
		
		$name=$_POST['name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$conf=$obj->buy($name,$email,$contact,$conn);
		if($conf==1)
		{
			//$obj->mail_for_client_enq($name,$email,$message);
			$obj->send_mail($name,$email,'','','templates_buy_REQUEST',$contact,'');	
			$data = array('status' => 200, 'message' => 'Our Customer representative contact you shortly');
	        echo json_encode($data);
		}
		else
		{
			$data = array('status' => 400, 'message' => 'Your query Not submitted successfully');
	        echo json_encode($data);
		}


?>