
<?php
include_once("grades.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$grades=new grades($conn);

$grades->delete($_GET['student_id']);
header('Location: readintablegrade.php');
?>