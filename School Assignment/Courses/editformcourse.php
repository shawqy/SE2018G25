

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 

 <form method="POST"  action=" <?= 'editcourse.php?id=' . $_GET['id']; ?> " >
     <input type='text' name="newname" value="<?php echo $_GET['name'];?>">
     <input type='text' name="newmax_degree" value="<?php echo $_GET['max_degree'];?>">
     <input type='text' name="newstudy_year" value="<?php echo $_GET['study_year'];?>">
     <input type="submit" name="submit"  value="edit">

     </form>
</body>
