
<?php
include_once("courses.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$courses=new courses($conn);

$courses->edit($_GET['id'],$_POST['newname'],$_POST['newmax_degree'],$_POST['newstudy_year']);
header('Location: readintablecourse.php');

 
?>