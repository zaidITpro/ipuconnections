<?php

if(isset($_POST['Sign_up']))
{
	mysql_connect("localhost","root","ipuconnections");
	mysql_select_db('ipu_connections');
	$Email=$_POST['email'];
	$quer1=mysql_query("SELECT * FROM user_details WHERE user_email='$Email'");
	$count=mysql_num_rows($quer1);

	if($count>0)
	{
		echo "<script>alert('There is already an exisiting account associated with this email');</script>";
	}
	else
	{
	     $Name=$_POST['name'];
	     $Password=$_POST['password'];
	     $Gender=$_POST['sex'];
         $quer2=mysql_query("INSERT INTO user_details(user_name, user_email, user_password, user_sex) values('$Name','$Email','$Password','$Gender')");

         session_start();

         $_SESSION['tempuser']=$Email;
         if($Gender=="Male")
         {
         	header("location:ipu_files/ipu_home/home.php");
         }
         else
         {
         	header("location:ipu_files/ipu_home/home.php");
         }

	}
}

?>