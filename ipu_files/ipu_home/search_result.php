<?php  
    session_start();
?>
 <?php
    if(isset($_POST['search_query']))
      {
          
          $_SESSION['query']=$_POST['query'];
          header("location:search_result.php");
     }
?>
<html>

<head>
<title>User | Home</title>
<link rel="stylesheet" href="css/all_pages.css" type="text/CSS"/>
<script type="text/javascript">
function check(){
  var value=document.forms["search_box"]["query"].value;
  if(value=="")
  {
      alert("please first enter the query, you want to search");
      return false;
  }
  else{
    return true;
  }
}
</script>
</head>


<body>
     <div id="frame">
                     
                     <?php include 'header.php'; ?>

                     <div id="middle">
                                     <div id="middle_left">
                                              

                                              <div class="content_box">
                                                  <h1>MATCHED RESULTS:-</h1>
                                                     
                                                          <?php include 'search_in_ipu_discussions.php'; ?>
                                                    
                                              </div>



                                           
                                       
                                      </div>
                                      <div id="middle_right">
                                                   <div class="middle_right_content_box">

                                                         <h class="middle_right_content_heading">LATEST DISCUSSIONS</h>

                                                            <hr style="margin-top:5px;"/>
                                                             
                                                           <?php include 'latest_discussions.php'; ?>
                                                  </div>

                                                     <div class="middle_right_content_box">
                                                         <h class="middle_right_content_heading">MOST POPULAR QUESTIONS</h>
                                                            <hr style="margin-top:5px;"/>
                                                            <?php include 'popular_discussions.php'; ?>
                                                  </div>


                                      </div>
                                         
                                     
                                                                    
                                                                      
                                                    
                                   
                     </div>
                     <?php include 'footer.php'; ?>
     </div>
 </body>



 </html>

 