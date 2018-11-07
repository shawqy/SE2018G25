<?php
include_once("grades.php");

$database=new Database;
$conn=$database->connect('epiz_22959892','9cW6bhTzFKyjy','epiz_22959892_school');
$grades=new grades($conn);

$grades->add($_POST['student_id'],$_POST['course_id'],$_POST['degree'],$_POST['examine_at']);

header('Location: readintablegrade.php');


?>
