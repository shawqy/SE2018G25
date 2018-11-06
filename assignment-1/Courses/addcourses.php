<?php
include_once("courses.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$courses=new courses($conn);

$courses->add($_POST['CourseName'],$_POST['CourseMaxDegree'],$_POST['CourseStudyYear']);

header('Location: readintablecourse.php');


?>