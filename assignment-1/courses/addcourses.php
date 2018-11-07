<?php
include_once("courses.php");

$database=new Database;
$conn=$database->connect('epiz_22959892','9cW6bhTzFKyjy','epiz_22959892_school');
$courses=new courses($conn);

$courses->add($_POST['CourseName'],$_POST['CourseMaxDegree'],$_POST['CourseStudyYear']);

header('Location: readintablecourse.php');


?>