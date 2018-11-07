<?php
include_once("database.php");

class courses{
	public $conn;
	public function __construct($connt)
{
   $this->conn=$connt;
}
//................................//
public function inf ($id)
{
 $sql="SELECT * FROM courses WHERE id=$id";
 $stmt= $this->conn->prepare($sql);
 $stmt->execute();
 $course_inf=[];
 $course=$stmt->fetch(PDO::FETCH_ASSOC);

 foreach ($courses as $key => $value) {
 	$course_inf[$key]=$value;
 }
 
 return $course_inf;
}


//.......................//
public function all()
{
 $sql="SELECT *FROM courses";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();
 $courses_inf=[];
 while($course=$stmt->fetch(PDO::FETCH_ASSOC))
 {
 	 $courses_inf[]=$course;

 }
 return $courses_inf;
}

public function add($name,$max_degree,$study_year)
{
 $sql="INSERT INTO courses (name,max_degree,study_year) VALUE ('$name',$max_degree,$study_year)";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();

}
//.......................//
public function search($keyword)
{
 $sql="SELECT *FROM courses WHERE name like ('%$keyword%')";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();
 $courses_inf=[];
 while($courses=$stmt->fetch(PDO::FETCH_ASSOC))
 {
 	 $courses_inf[]=$courses;

 }
 return $courses_inf;

}
//...........................//
public function delete($id)
{
 $sql="DELETE FROM courses WHERE id = $id;";
 $stmt=$this->conn->prepare($sql);
 $stmt->execute();

}
//...............................//
public function edit($id,$name,$max_degree,$study_year) {  
	$sql="UPDATE courses SET name='$name',max_degree =$max_degree,study_year =$study_year WHERE id='$id'"; 
	 $stmt=$this->conn->prepare($sql); 
	  $stmt->execute();
	  

}
}
?>