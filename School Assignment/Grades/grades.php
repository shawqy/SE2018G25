<?php
include_once("database.php");

class grades{
	public $conn;
	public function __construct($connt)
{
   $this->conn=$connt;
}
//................................//



//.......................//
public function all()
{
 $sql="SELECT *FROM grades";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();
 $grades_inf=[];
 while($grade=$stmt->fetch(PDO::FETCH_ASSOC))
 {
 	 $grades_inf[]=$grade;

 }
 return $grades_inf;
}

public function add($student_id,$course_id,$degree,$examine_at)//   student_id, course_id, degree, examine_at
{
 $sql="INSERT INTO grades (student_id, course_id, degree, examine_at) VALUE ($student_id, $course_id, $degree, '$examine_at')";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();

}
//.......................//
public function search($student_id)
{
 $sql="SELECT *FROM grades WHERE student_id like ('%$student_id%')";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();
 $grades_inf=[];
 while($grade=$stmt->fetch(PDO::FETCH_ASSOC))
 {
 	 $grades_inf[]=$grade;

 }
 return $grades_inf;
}
public function delete($student_id)
{
 $sql="DELETE FROM grades WHERE student_id = $student_id;";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();

}
//...........................//

public function edit($old_student_id,$student_id, $course_id, $degree, $examine_at) {  
	$sql="UPDATE grades SET student_id=$student_id,course_id =$course_id,degree =$degree,examine_at='$examine_at' WHERE student_id=$old_student_id"; 
	 $stmt=$this->conn->prepare($sql); 
	  $stmt->execute();
	  

}
}
?>