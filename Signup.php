
<?php
if(isset($_POST['Sign_up']))
{
	mysql_connect("localhost","root","");
	mysql_select_db('ipuconnections');
	$Email=$_POST['email'];
	$que1=mysql_query("Select * from users where Email='$Email'");
	$count=mysql_num_rows($que1);

	if($count>0)
	{
		echo "<script>
		      alert('There is in already existing account associated with this email id');
		      </script>";

	}
	else
	{
		$Name=$_POST['name'];
		$Password=$_POST['password'];
		$Gender=$_POST['sex'];
		$que2=mysql_query("insert into users(Name,Email,Password,Gender) values('$Name','$Email','$Password','$Gender')");

		session_start();
		$_SESSION['tempfbuser']=$Email;
		if($Gender=="Male")
			{
				header("location:ipu_files/ipu_step/ipu_step1/step1_Male.php");
			}
			else
			{
				header("location:ipu_files/ipu_step/ipu_step1/step1_Female.php");
			}
	}
}
?>