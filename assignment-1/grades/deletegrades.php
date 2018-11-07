
<?php
include_once("grades.php");

$database=new Database;
$conn=$database->connect('epiz_22959892','9cW6bhTzFKyjy','epiz_22959892_school');
$grades=new grades($conn);

$grades->delete($_GET['student_id']);
header('Location: readintablegrade.php');
?>