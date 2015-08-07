<?php
	include('MVC/model.php');
	session_start();
	$obj2=new model();
	$conn=$obj2->database();
	

	if(isset($_REQUEST['adminlogin']))
	{
		$name=$_REQUEST['adminname'];
		$pass=$_REQUEST['adminpass'];
		$data=$obj2->admin_login($conn,$name,$pass);
		$ex=mysqli_num_rows($data);
		if($ex<=0)
		{
			header("location:admin.php");
		}
		else
		{	
			$_SESSION["admin"] =$name;
			header("location:Admindesk.php");
		}
	}
	
	if(isset($_REQUEST['logoutname']))
	{
		unset($_SESSION["admin"]);
		header("location:admin.php");
	}
	if(isset($_SESSION["admin"]))
	{
		$resumeData=$obj2->show_resume($conn);
		$enqData=$obj2->show_enq($conn);
		$contactData=$obj2->show_contact_us($conn);
        $itranscript_data=$obj2->show_itranscript_data($conn);
	}
?>