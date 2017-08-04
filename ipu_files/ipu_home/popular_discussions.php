
 <?php
mysql_connect("localhost","root","ipuconnections");
mysql_select_db("ipu_connections");
$sql=mysql_query("SELECT * FROM  user_questions ORDER BY question_count DESC LIMIT 10");

  
    while($row = mysql_fetch_array($sql))
    {
    
    echo "<span class='latest_questions'><a href='questionview.php?qid=$row[question_id]'>";
    echo $row['question'];
    echo "</a></span>";
    echo "<br>";
    echo "<br>";
        

    }

?>
