<?php
 
   
           mysql_connect("localhost","root","ipuconnections");
           mysql_select_db("ipu_connections");
           $query=$_SESSION['query']; 
           $user_query=mysql_query("SELECT * FROM user_questions WHERE question_category='$query' OR question='$query'");
           
           while($row = mysql_fetch_array($user_query))
           {
    
               echo "<span class='questions'><a href='questionview.php?qid=$row[question_id]'>";
               echo $row['question'];
               echo "</a></span>";
               echo "<br>";
               echo "<span class='questions_meta'><h>Category:&nbsp;</h>";
               echo $row['question_category'];
               echo "</span>";
               echo "&nbsp; &nbsp;";
               echo "<span class='questions_meta'><h>Asked at:&nbsp;</h>";
               echo $row['question_dateandtime'];
               echo "</span>";
               echo "<br>";
        

            }
 	 
 ?>