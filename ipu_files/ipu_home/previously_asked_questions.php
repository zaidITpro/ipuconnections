
 <?php
mysql_connect("localhost","root","ipuconnections");
mysql_select_db("ipu_connections");
$useremail=$_SESSION['tempuser'];
$user=mysql_query("SELECT * FROM user_details WHERE user_email='$useremail'");
$user_record=mysql_fetch_array($user);
$userid=$user_record[0];
$sql=mysql_query("SELECT * FROM  user_questions where user_id='$userid'");

  
    while($row = mysql_fetch_array($sql))
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
