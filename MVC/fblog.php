<?php
		include('MVC/model.php');
		$obj=new model();
		$conn=$obj->database();
		
		$datablog=$obj->all_blog($conn);
		$letestBlog=array();
		while($row=mysqli_fetch_array($datablog))
		{
			$letestBlog[]=$row;
		}
		
		
		$id=$_REQUEST['blogid'];
		$data=$obj->one_blog($conn,$id);
		$oneblogData=mysqli_fetch_array($data);
		
		$cmtData=$obj->fetch_cmt($conn,$id);
		if(isset($_REQUEST['comment']))
		{
			$blog_id=$_POST['blog_comt'];
			$name=$_POST['ctname'];
			$email=$_POST['ctemail'];
			$comt=$_POST['ctcomment'];
			
			$conf=$obj->cmt($conn,$blog_id,$name,$email,$comt);
			if($conf=='1')
			{
				//$cmtData=array();
				$cmtData=$obj->fetch_cmt($conn,$blog_id);  	
			}
			else
			{
				//$cmtData=array();
				$cmtData=$obj->fetch_cmt($conn,$blog_id);
			}	
		}
?>