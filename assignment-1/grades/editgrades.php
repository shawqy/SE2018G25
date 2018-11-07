
<?php
include_once("grades.php");

$database=new Database;
$conn=$database->connect('epiz_22959892','9cW6bhTzFKyjy','epiz_22959892_school');
$grades=new grades($conn);

$grades->edit($_GET['student_id'],$_POST['newstudent_id'],$_POST['newcourse_id'],$_POST['newdegree'],$_POST['newexamine_at']);
header('Location: readintablegrade.php');

 
?>

