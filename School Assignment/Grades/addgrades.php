<?php
include_once("grades.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$grades=new grades($conn);

$grades->add($_POST['student_id'],$_POST['course_id'],$_POST['degree'],$_POST['examine_at']);

header('Location: readintablegrade.php');


?>
