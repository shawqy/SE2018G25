<?php
include_once("courses.php");

$database=new Database;
$conn=$database->connect('root','01019553795h','school');
$courses=new courses($conn);

?>
  <html>
    <body>  
     <form action="readintablecourse.php"  method="POST">
     <input type="text" name="name" value="coursename">
     <input type="submit" name="submit"  value="search">

     </form>



      <table border='1'>
        	<?php
        	if($_SERVER['REQUEST_METHOD']!='POST')
        	{

         
            $courses_inf = $courses->all();

            foreach ($courses_inf as $course) {
            
            echo" <tr> <td>".$course['id']."</td> <td>".$course['name']."</td> <td>".$course['max_degree']."</td>  <td>".$course['study_year']."</td> <td><a href='deletecourse.php?id=".$course['id']."'>Delete</a></td> <td><a href='editformcourse.php?id=".$course['id']."&&name=".$course['name']."&&max_degree=".$course['max_degree']."&&study_year=".$course['study_year']."'>EDIT</a></td></tr>";
            } 
            } 
             else
            {
            	 $courses_inf = $courses->search($_POST['name']);

            foreach ($courses_inf as $course) {
             
             echo" <tr> <td>".$course['id']."</td> <td>".$course['name']."</td> <td>".$course['max_degree']."</td>  <td>".$course['study_year']."</td> </tr>";
            }  
          
            }

             
        
            
            
        ?>
        </table>
        <?php 
        echo "<a href='addformcourses.php'>Add</a>"  ;

        ?> 
    </body>
</html>

      










