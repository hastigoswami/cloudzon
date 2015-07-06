<?php
		include('MVC/model.php');
		$obj=new model();
		$conn=$obj->database();
		
		$Data=$obj->all_blog($conn);
		//$data='0';
		$datablog=array();
		while($row=mysqli_fetch_array($Data))
		{
			$datablog[]=$row;
		}
		$blogData=$datablog;
?>