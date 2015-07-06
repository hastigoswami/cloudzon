<?php
	
	include('model.php');
	$obj=new model();
	$conn=$obj->database();
	header('Content-type: application/json');
	
		$name=$_POST['name'];
		$qualif=$_POST['qualif'];
		$email=$_POST['email'];
		$location=$_POST['location'];
		$phone=$_POST['phone'];
		$exp=$_POST['exp2'];
		
		//$portfolio=$_POST['portfolio'];
		$reference=$_POST['reference'];
		$skill=$_POST['skill'];
		
		//$like_dislike=$_POST['like_dislike'];
		//$respon=$_POST['respon'];
		
		//$fileField=$_POST['fileField'];
		$target_dir = "resume/";
		$target_file = $target_dir . basename($_FILES['fileField']["name"]);
		//$resume="test";
		$uploadOk=1;
		
		   if (is_uploaded_file($_FILES['fileField']['tmp_name']))
		   {
		   	  $FileType = pathinfo($target_file,PATHINFO_EXTENSION);
			  
			  if($FileType != "pdf" && $FileType != "doc" && $FileType != "docx")
			  {
				   $uploadOk = 0;
			  	   $data = array('status' => 200, 'message' => "Must be uploaded in PDF,DOC,DOCX format.");
	        	   echo json_encode($data);
			  }
			  else if ($_FILES['fileField']["size"] > 1000000) 
			  {
				  $uploadOk = 0;
				  $data = array('status' => 200, 'message' => "Sorry,Your details not submitted successfully.");
	        	  echo json_encode($data);
			  }
			  else if ($uploadOk == 0)
			  {
			  	   $data = array('status' => 200, 'message' => "Sorry,Your details not submitted successfully.");
	        	   echo json_encode($data);
			  }
			  else
			  {
				 $filename = $name.$_FILES['fileField']["size"];
				 $ok = move_uploaded_file($_FILES['fileField']['tmp_name'],"resume/$filename.$FileType");
				 $path="MVC/resume/$filename.$FileType";
				 if($ok == 1)
				 {
				 	$conf=$obj->resume($name,$qualif,$email,$location,$phone,$exp,$reference,$skill,$path,$conn);
				 	$data = array('status' => 200, 'message' => "Your details has been submitted successfully.");
	        	   	echo json_encode($data);
				 }
				 else 
				 {
				 		$data = array('status' => 200, 'message' => "Sorry,Your details not submitted successfully.");
	        	   		echo json_encode($data);
				 }
			  }
			 
		   }
		   else
		   {			  
			  	$data = array('status' => 200, 'message' => "Sorry, Your details not submitted successfully.");
	        	echo json_encode($data);
		   }
?>