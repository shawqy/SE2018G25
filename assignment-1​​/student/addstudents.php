<?php
include_once("student.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$students=new student($conn);

$students->add($_POST['username']);
header('Location: readintable.php');


?>