<?php	
		include('model.php');
		$obj=new model();
		$conn=$obj->database();
		header('Content-type: application/json');
		
		$blog_id=$_POST['blog_comt'];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$comt=$_POST['comt'];
		
		$conf=$obj->cmt($conn,$blog_id,$name,$email,$comt);
		if($conf=='1')
		{
			$cmtData=array();
			$cmtData=$obj->fetch_cmt($conn,$blog_id);  
			print_r($cmtData);	
		}
		else
		{
			$cmtData=array();
			$cmtData=$obj->fetch_cmt($conn,$blog_id);
			print_r($cmtData); 
		}
?>