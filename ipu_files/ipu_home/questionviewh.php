 <?php
   
                   $questionid=$_GET['qid'];
                   mysql_connect("localhost","root","ipuconnections");
                   mysql_select_db("ipu_connections");
                   mysql_query("UPDATE user_questions SET question_count=(question_count+1) WHERE question_id='$questionid'");
                   $sql=mysql_query("SELECT * FROM user_questions WHERE question_id='$questionid'");
                   $row=mysql_fetch_array($sql);
                   echo "<span class='question_asked'><h>";
                   echo $row['question'];
                   echo "</span></h>";
                   echo "<br>";
?>