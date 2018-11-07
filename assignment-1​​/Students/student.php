<?php
include_once("database.php");
class student{
 public $conn;
public function __construct($connt)
{
   $this->conn=$connt;
}

public function inf ($id)
{
 $sql="SELECT * FROM student WHERE id=$id";
 $stmt= $this->conn->prepare($sql);
 $stmt->execute();
 $student_inf=[];
 $student1=$stmt->fetch(PDO::FETCH_ASSOC);

 foreach ($student1 as $key => $value) {
 	$student_inf[$key]=$value;
 }
 
 return $student_inf;
}

public function all()
{
 $sql="SELECT *FROM student";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();
 $students_inf=[];
 while($students=$stmt->fetch(PDO::FETCH_ASSOC))
 {
 	 $students_inf[]=$students;

 }
 return $students_inf;
}

public function add($name)
{
 $sql="INSERT INTO student (name) VALUE ('$name')";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();

}

public function search($keyword)
{
 $sql="SELECT *FROM student WHERE name like ('%$keyword%')";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();
 $students_inf=[];
 while($students=$stmt->fetch(PDO::FETCH_ASSOC))
 {
 	 $students_inf[]=$students;

 }
 return $students_inf;

}
public function delete($id)
{
 $sql="DELETE FROM student WHERE id = $id;";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();

} public function edit($new,$old) {  
	$sql="UPDATE student SET name='$new'WHERE name='$old'"; 
	 $stmt=$this->conn->prepare($sql); 
	  $stmt->execute();

}


}
?>