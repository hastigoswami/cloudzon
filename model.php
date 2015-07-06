<?php
class model
{
	
	public function database()
	{
		$conn=mysqli_connect('localhost','root','root','cz_cloudzon');
		return $conn;
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