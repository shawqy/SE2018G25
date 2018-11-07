
<?php
include_once("student.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$students=new student($conn);

$students->edit($_POST['newname'],$_GET['oldname']);
header('Location: readintable.php');

 
?>