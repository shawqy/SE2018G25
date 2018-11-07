<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <form <?php echo" action='editstudent.php?oldname=".$_GET['name']."'";?>  method="POST">
     <input type='text' name="newname" value="<?php echo $_GET['name'];?>">
     <input type="submit" name="submit"  value="edit">

     </form>
</body>
