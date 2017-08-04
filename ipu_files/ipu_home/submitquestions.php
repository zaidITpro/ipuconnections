<?php
 
   session_start();
   if(isset($_SESSION['tempuser']))
   {
   	     
         mysql_connect("localhost","root","ipuconnections");
         mysql_select_db("ipu_connections");
         $useremail=$_SESSION['tempuser'];
   	     $user=mysql_query("SELECT * FROM user_details WHERE user_email='$useremail'");
   	     $user_record=mysql_fetch_array($user);
   	     $userid=$user_record[0];
         if(isset($_POST['submit_textarea']))
         {
         	$question_text=$_POST['question_text'];
         	$question_category=$_POST['question_category'];
            $dateandtime=date('Y/m/d h:i:s A', time());
         	mysql_query("INSERT INTO user_questions(user_id, question, question_category, question_dateandtime) values('$userid','$question_text','$question_category', '$dateandtime')");
         }
   }
   ?>