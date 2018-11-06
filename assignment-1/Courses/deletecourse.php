
<?php
include_once("courses.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$courses=new courses($conn);

$courses->delete($_GET['id']);
header('Location: readintablecourse.php');
?>