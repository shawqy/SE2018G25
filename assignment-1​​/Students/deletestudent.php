
<?php
include_once("student.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$students=new student($conn);

$students->delete($_GET['id']);
header('Location: readintable.php');
?>