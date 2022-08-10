<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>
$(document).ready(function()
{ 
$("#assessment-intro").load("introduction/index.php?assessment=12345");    

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

<style>
    th{

        border:3px solid black;
        color :blue;
    }
    td{
        border:1px solid black;
    }
</style>



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
</body>
</html>