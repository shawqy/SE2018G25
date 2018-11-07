<?php
include_once("student.php");

$database=new Database;
$conn=$database->connect('epiz_22959892','9cW6bhTzFKyjy','epiz_22959892_school');
$students=new student($conn);

$students->add($_POST['username']);
header('Location: readintable.php');


?>