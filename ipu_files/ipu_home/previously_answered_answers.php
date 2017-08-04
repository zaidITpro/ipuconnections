<div class="answer_text">

<?php

   mysql_connect("localhost","root","ipuconnections");
   mysql_select_db("ipu_connections");
   $questionid=$_GET['qid'];
   $question_details=mysql_query("SELECT * FROM user_questions WHERE question_id='$questionid'");
   $question_array=mysql_fetch_array($question_details);
   $userid=$question_array[1];
   $user_details=mysql_query("SELECT * FROM user_details WHERE user_id='$userid'");
   $user_array=mysql_fetch_array($user_details);
   $user_name=$user_array[1];
   $answers_record=mysql_query("SELECT * FROM user_questions_answers WHERE question_id='$questionid'");
   $count=mysql_num_rows($answers_record);
   if($count>0)
   {
   	      while($row = mysql_fetch_array($answers_record))
   	      {
   	      	     
                 echo $row['answer'];
                 echo "<br>";
                 echo "<br>";
                 echo "<span class='answer_meta'><b>Answered By:</b>&nbsp;";
                 echo $user_array['user_name'];
                 echo "</span>";
                 echo "&nbsp; &nbsp;";
                 echo "<span class='answer_meta'><b>Answered at:</b>&nbsp;";
                 echo $row['answer_dateandtime'];
                 echo "</span>";
                 echo "<br>";
                 echo "<br>";
                 echo "<br>";
        
   	      }
   }
   else
   {
   	       echo "The Question is not answered yet, Be the first to Answer";

   }
?>

</div>