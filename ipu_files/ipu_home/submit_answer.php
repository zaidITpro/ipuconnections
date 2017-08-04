<?php
         if(isset($_POST['submit_textarea']))
         {
            mysql_connect("localhost","root","ipuconnections");
            mysql_select_db("ipu_connections");
            $questionid=$_GET['qid'];
            $question_details=mysql_query("SELECT * FROM user_questions WHERE question_id='$questionid'");
            $question_array=mysql_fetch_array($question_details);
            $userid=$question_array[1];
         	$answer_text=$_POST['answer_text'];
            $dateandtime=date('Y/m/d h:i:s A', time());
         	mysql_query("INSERT INTO user_questions_answers(user_id, question_id, answer, answer_dateandtime) values('$userid','$questionid','$answer_text', '$dateandtime')");
         }
?>