<?php

if(isset($_POST['Log_in']))
{
    mysql_connect("localhost","root","ipuconnections");
    mysql_select_db("ipu_connections");

	$user_login_email=$_POST['user_email_id'];
	$user_login_password=$_POST['password'];
    
    $quer1=mysql_query("SELECT * FROM user_details WHERE user_email='$user_login_email' AND user_password='$user_login_password'");
    $count=mysql_num_rows($quer1);

    if($count>0)
    {
    	session_start();
    	$_SESSION['tempuser']=$user_login_email;
    	header("location:ipu_files/ipu_home/home.php");
    }
    else
    {
    	echo "<script>alert('Username or password is incorrect');</script>";
    }
}

?>