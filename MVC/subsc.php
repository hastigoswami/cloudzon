<?php
		
		include('model.php');
		$obj=new model();
		$conn=$obj->database();
		header('Content-type: application/json');
		
		$email=$_POST['email_address'];
		$conf=$obj->subscribe($email,$conn);
		if($conf=='1')
		{
			$data = array('status' => 200, 'message' => "You have subscribed newsletter successfully");
	       	echo json_encode($data);
		}
		else
		{
			$data = array('status' => 200, 'message' => "Not successfully subscribed");
	       	echo json_encode($data);
		}
?>