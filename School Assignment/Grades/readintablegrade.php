<?php
include_once("grades.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$grades=new grades($conn);

?>
  <html>
    <body>  
     <form action="readintablegrade.php"  method="POST">
     <input type="text" name="student_id" value="student_id">
     <input type="submit" name="submit"  value="search">

     </form>



      <table border='1'>
        	<?php
        	if($_SERVER['REQUEST_METHOD']!='POST')
        	{

         //student_id, course_id, degree, examine_at
            $grades_inf = $grades->all();

            foreach ($grades_inf as $grade) {
            
            echo" <tr>  <td>".$grade['student_id']."</td> <td>".$grade['course_id']."</td>  <td>".$grade['degree']."</td> <td>".$grade['examine_at']."</td> <td><a href='deletegrades.php?student_id=".$grade['student_id']."'>Delete</a></td><td><a href='editformgrades.php?student_id=".$grade['student_id']."&&course_id=".$grade['course_id']."&&degree=".$grade['degree']."&&examine_at=".$grade['examine_at']."'>EDIT</a></td></tr>";
            } 
            } 
             else
            {
            	 $grades_inf = $grades->search($_POST['student_id']);

            foreach ($grades_inf as $grade) {
             
             echo" <tr>  <td>".$grade['student_id']."</td> <td>".$grade['course_id']."</td>  <td>".$grade['degree']."</td> <td>".$grade['examine_at']."</td> <td><a href='deletegrades.php?student_id=".$grade['student_id']."'>Delete</a></td><td><a href='editformgrades.php?student_id=".$grade['student_id']."&&course_id=".$grade['course_id']."&&degree=".$grade['degree']."&&examine_at=".$grade['examine_at']."'>EDIT</a></td></tr>";
            }  
          
            }

             
        
            
            
        ?>
        </table>
        <?php 
        echo "<a href='addformgrades.php'>Add</a>"  ;

        ?> 
    </body>
</html>

      
