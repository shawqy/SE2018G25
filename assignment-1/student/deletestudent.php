
<?php
include_once("student.php");

$database=new Database;
$conn=$database->connect('epiz_22959892','9cW6bhTzFKyjy','epiz_22959892_school');
$students=new student($conn);

$students->delete($_GET['id']);
header('Location: readintable.php');
?>