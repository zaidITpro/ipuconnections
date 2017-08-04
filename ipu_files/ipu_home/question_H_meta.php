<?php
    
    mysql_connect("localhost","root","ipuconnections");
    mysql_select_db("ipu_connections");
    $questionid=$_GET['qid'];
    $question_details=mysql_query("SELECT * FROM user_questions WHERE question_id='$questionid'");
    $question_array=mysql_fetch_array($question_details);
    $user_details=mysql_query("SELECT * FROM user_details WHERE user_id='$question_array[1]'");
    $user_array=mysql_fetch_array($user_details);
    echo "<br>";
    echo "<span class='question_H_meta'><b>Asked By:</b> ";
    echo $user_array['user_name'];
    echo "&nbsp;&nbsp;";
    echo "</span>";
    echo "<span class='question_H_meta'><b>Category:</b> ";
    echo $question_array['question_category'];
    echo "&nbsp;&nbsp;";
    echo "</span>";
    echo "<span class='question_H_meta'><b>Asked at:</b> ";
    echo $question_array['question_dateandtime'];
    echo "</span>";
?>