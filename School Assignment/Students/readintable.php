<?php
include_once("student.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$students=new student($conn);

?>
  <html>
    <body>  
     <form action="readintable.php"  method="POST">
     <input type="text" name="name" value="rody">
     <input type="submit" name="submit"  value="search">

     </form>
      





         
        <table border='1'>
        	<?php
        	if($_SERVER['REQUEST_METHOD']!='POST')
        	{

         
            $students_inf = $students->all();

            foreach ($students_inf as $student) {
            
            echo" <tr> <td>".$student['id']."</td> <td>".$student['name']."</td> <td><a href='deletestudent.php?id=".$student['id']."'>Delete</a></td> <td><a href='editformstudent.php?name=".$student['name']."'>EDIT</a></td> </tr>";
            }  
          

             
        
            }
            else
            {
            	 $students_inf = $students->search($_POST['name']);

            foreach ($students_inf as $student) {
            
            echo" <tr> <td>".$student['id']."</td> <td>".$student['name']."</td> <td><a href='deletestudent.php?id=".$student['id']."'>Delete</a></td> <td><a href='editformstudent.php?name=".$student['name']."'>EDIT</a></td> </tr>";
            }  
          
    


            }
        
        ?>
        </table>
        <?php 
        echo "<a href='addformstudent.php'>Add</a>"  ;
        ?> 
    </body>
</html>

      




