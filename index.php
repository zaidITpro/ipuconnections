<?php
include 'Login.php';
include 'ipu_connections_sign_up.php';
?>


<html>

<head>
<title>IPU Connections</title>
<link rel="stylesheet" href="css/homepage.css" type="text/css">

<script type="text/javascript">
function check(){
	
	var i;
	for(i=0;i<Reg.length;i++)
	{
		if(Reg[i].value=="")
		{
			alert("Please Fill in the remaining fields first");
			Reg[i].focus()
			Reg[i].style="background:red;"
			return false;
			break;
		}
	}
	var gender_check=document.forms["Reg"]["sex"].value;
	var pass=document.forms["Reg"]["password"].value;
	var confirm_pass=document.forms["Reg"]["confirm_password"].value;
	if(pass.length<6)
	{
		alert("Your password length must be more than 6");
		Reg.password.focus();
		Reg.password.style="background:red";
		return false;
	}
	if(pass!==confirm_pass){
        alert("your Passwords are not matching");
        Reg.confirm_password.focus();
        Reg.confirm_password.style="background:red;"
        return false;
	}
	if(gender_check=="Select Sex:"){
		alert("Please choose the correct one");
		Reg.sex.focus();
		Reg.sex.style="background:red; width:100%; height:40px; margin-bottom:2.5%;";
		return false;
	}
 }
</script>


</head>

<body>
      <div id="frame">
                     <div id="header">
                                     <div id="logo_wrapper"><p>IPU CONNECTIONS</p>
                                     </div>

                                     <div id="login_form_wrapper">
                                           	<form  method="post">
		                                                      <input type="email" name="user_email_id" placeholder="Email"/>
		                                                      <div style="position:absolute; left:0%; top:26px; color:#fff;">
		                                                           <input class="none" type="checkbox" checked="checked">Keep me logged in
		                                                      </div>
		                                                      <input type="password" name="password" placeholder="Password"/>
		                                                      <div style="position:absolute; left:45%; top:26px; color:#fff;">
		                                                           <a href="forgot_password.php" style="color:red; text-decoration:none;">Forgot Password ?</a>
		                                                       </div>
		                                                       <input type="submit" value="Log In" name="Log_in">
		                                                      
	                                         </form>
                                     </div>
                     </div>

                     <div id="middle">
                                      <div id="sign_up_form">
                                          <form method="post" name="Reg" onSubmit="return check();">
                                                             <input type="text" name="name" placeholder="Name" size="20">
                                                             <input type="email" name="email" placeholder="Email" size="30">
                                                             
                                                             <input type="password" name="password" placeholder="password" size="20">
                                                             <input type="password" name="confirm_password" placeholder="confirm password" size="20">
                                                             <select name="sex" style="width:120;height:35;font-size:20px;padding:3; background:transparent; width:100%; height:40px; margin-bottom:2.5%; color:#808080; border-radius:5px;">
			                                                      <option value="Select Sex:"> Select Sex: </option>
			                                                      <option value="Female"> Female </option>
			                                                      <option value="Male"> Male </option>
		                                                     </select>
                                                             <input type="submit" name="Sign_up" value="Register me" style="background:#55acee; color:#ffffff; font-size:200%; text-align:center"/>
                                           </form>
                                         </div>
                     </div>

                     <div id="footer">
                     </div>
       </div>

</body>

</html>
