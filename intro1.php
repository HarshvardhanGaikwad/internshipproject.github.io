<?php
session_start();
$root=$_SERVER["DOCUMENT_ROOT"];
include ($root."/user/get/session_redirect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Title | QUANTUMHUNTS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Edit your QUANTUMHUNTS resume on the go" name="description" />
        <meta content="QUANTUMHUNTS" name="author" />

<?php
$root=$_SERVER["DOCUMENT_ROOT"];
include ($root."/user/get/index.php");
include ($root."/user/includes/header.php");
?>

    </head>
    <style>
    th{

        border:3px solid black;
        color :blue;
    }
    td{
        border:1px solid black;
    }
</style>

    <body data-layout="detached" class="loading">


<?php
include ($root."/user/includes/topbar.php");
?>


        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- ========== Left Sidebar Start ========== -->

<?php
include ($root."/user/includes/sidebar.php");
?>

                <!-- Left Sidebar End -->

                <div class="content-page">
                    <div class="content">




<?php

    $root=$_SERVER["DOCUMENT_ROOT"];
    include($root."/user/includes/right-sidebar.php");

?>




                        <div class="row">
                            

                            <div class="col-xl-8 col-lg-8">
                                


 
 
 
                            <script>
$(document).ready(function()
{ 
/*$("#assessment-intro").load("introduction/index.php?assessment=12345");    */

})

</script>


<div id="assessment-intro"></div>





<?php
$root=$_SERVER["DOCUMENT_ROOT"];
include ($root."/includes/connection.php");

    
    // Create connection
    $conn = new mysqli($db_servername, $db_username, $db_password, $db_dbname);
    
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>     



<table style="border:1px solid black;">
  <tr>
    <th>Question_id</th>
    <th>question set id</th>
    <th>Question</th>
    <th>option 1</th>
    <th>option 2</th>
    <th>option 3 </th>
    <th>option 4</th>
    <th>Actual answer</th> 
</tr>

<?php



$records = mysqli_query($conn,"select * from qh_questions"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['question_id']; ?></td>
    <td><?php echo $data['question_set_id']; ?></td>
    <td><?php echo $data['question_question']; ?></td>
    <td><?php echo $data['question_choice_1']; ?></td>
    <td><?php echo $data['question_choice_2']; ?></td>
    <td><?php echo $data['question_choice_3']; ?></td>
    <td><?php echo $data['question_choice_4']; ?></td>
    <td><?php echo $data['question_answer']; ?></td>
  </tr>	
<?php
}
?>
</table>          
 
 
                                
                                
                                
                                
                                
                                

                                
                                
                                
                                
                                
                               
                                
                                
                              
                                
                                
                                
                   

                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div> <!-- end col -->
                            
                            
                            
                            
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- End Content -->

                  <?php
                  "footbar.php";
                  ?>

                </div> <!-- content-page -->

            </div> <!-- end wrapper-->
        </div>
        <!-- END Container -->





<?php
$root=$_SERVER["DOCUMENT_ROOT"];
include ($root."/user/includes/footer.php");
?>



        
    </body>
</html>