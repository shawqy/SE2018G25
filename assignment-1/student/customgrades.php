<?php
include_once("student.php");

$database=new Database;
$conn=$database->connect('epiz_22959892','9cW6bhTzFKyjy','epiz_22959892_school');
$students=new student($conn);


?>
 <html>
    <body>  
     <form action="customgrades.php"  method="POST">
     <input type="text" name="name" value="student_name">
     <input type="submit" name="submit"  value="search">

     </form>
      





         
        <table border='1'>
        	<?php
        	if($_SERVER['REQUEST_METHOD']!='POST')
        	{

         
            $studentss_inf = $students->customgrades();

            foreach ($studentss_inf as $row) {
            
            echo" <tr> <td>".$row['sn']."</td> <td>".$row['name']."</td> <td>".$row['degree']."</td> <td>".$row['max_degree']."</td> </tr>";
            }  
  


             
        
            }
            else
            {
                $studentss_inf = $students->customgrades();

            foreach ($studentss_inf as $row) {
                if($row['sn']==$_POST['name'])
                {
             echo" <tr> <td>".$row['sn']."</td> <td>".$row['name']."</td> <td>".$row['degree']."</td> <td>".$row['max_degree']."</td> </tr>";
                }
            }  
          
    


            }
        
        ?>
        </table>
  </body>
</html>
