
<?php
include_once("courses.php");

$database=new Database;
$conn=$database->connect('epiz_22959892','9cW6bhTzFKyjy','epiz_22959892_school');
$courses=new courses($conn);

$courses->delete($_GET['id']);
header('Location: readintablecourse.php');
?>