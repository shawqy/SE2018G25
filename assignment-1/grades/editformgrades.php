

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 

 <form method="POST"  action=" <?= 'editgrades.php?student_id=' . $_GET['student_id']; ?> " >
     <input type='text' name="newstudent_id" value="<?php echo $_GET['student_id'];?>">
     <input type='text' name="newcourse_id" value="<?php echo $_GET['course_id'];?>">
     <input type='text' name="newdegree" value="<?php echo $_GET['degree'];?>">
     <input type='text' name="newexamine_at" value="<?php echo $_GET['examine_at'];?>">
     <input type="submit" name="submit"  value="edit">

     </form>
</body>
