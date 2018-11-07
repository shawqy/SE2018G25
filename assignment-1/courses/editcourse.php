
<?php
include_once("courses.php");

$database=new Database;
$conn=$database->connect('epiz_22959892','9cW6bhTzFKyjy','epiz_22959892_school');
$courses=new courses($conn);

$courses->edit($_GET['id'],$_POST['newname'],$_POST['newmax_degree'],$_POST['newstudy_year']);
header('Location: readintablecourse.php');

 
?>