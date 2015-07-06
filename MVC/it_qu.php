<?php
	include('model.php');
	$obj=new model();
	header('Content-type: application/json');
	$conn=$obj->database();
	
		$name=$_POST['popname'];
		$position=$_POST['popposition'];
		$email=$_POST['popemail'];
		$number=$_POST['popnumber'];
		$company_name=$_POST['popcompany_name'];
		$company_add=$_POST['popcompany_add'];
		$week=$_POST['popweek'];
		$letter=$_POST['xyz'];
		$no_line=$_POST['popno_line'];
		$doc_type=$_POST['doc'];
		$process_doc=$_POST['p_doc'];
		$features=$_POST['features'];
		$outsource=$_POST['outsource'];
		$time=$_POST['one'];
		$quality=$_POST['two'];
		$price=$_POST['three'];
		$security=$_POST['four'];
		$any=$_POST['any'];
		$interested=$_POST['xyz2'];
	
		$conf_it=$obj->itranscript($name,$position,$email,$number,$company_name,$company_add,$week,$letter,$no_line,$doc_type,$process_doc,$features,$outsource,$time,$quality,$price,$security,$any,$interested,$conn);
		$obj->send_mail_it($name,$email,$company_name);
		
		if($conf_it=='1')
		{
			$data = array('status' => 200, 'message' => "Your details has been submitted successfully.");
	        echo json_encode($data);
		}
		else
		{
			$data = array('status' => 400, 'message' => "Your details Not submitted successfully.");
	        echo json_encode($data);
		}
?>