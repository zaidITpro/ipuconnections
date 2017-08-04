<?php
    mysql_connect("localhost","root","ipuconnections");
    mysql_select_db("ipu_connections");
    $useremail=$_SESSION['tempuser'];
    $user_record=mysql_query("SELECT * FROM user_details WHERE user_email='$useremail'");
    $userid=$user_record[0];
    
    $last_question_id=mysql_query("SELECT LAST(question_id) FROM user_questions");
    $sql=mysql_query("SELECT * FROM user_questions WHERE user_id!='$userid' ORDER BY question_dateandtime > DATE_SUB(curdate(),INTERVAL 1 WEEK) DESC LIMIT 8");
    while($row = mysql_fetch_array($sql))
    {
    
    echo "<span class='latest_questions'><a href='questionview.php?qid=$row[question_id]'>";
    echo $row['question'];
    echo "</a></span>";
    echo "<br>";
    echo "<br>";
        

    }

?>