<?php include "db.php"; ?>


<?php    

      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;



?>
<?php



function send_query($query)
{
   global $connection;
    
  $result=mysqli_query($connection,$query);
    
    if(!$result) die("Query FAILED" );

    return $result;

}


function select_all_from_client_table_by_id()
{
    if(isset($_GET['client_id']))
    
    {
    
        $client_id=$_GET['client_id'];
        
        $query="SELECT * FROM client WHERE `id`=$client_id";
        $result=send_query($query);
        
        $row=mysqli_fetch_assoc($result);
        return $row;
        
    }
    
}

function select_all_from_tech_table_by_id()
{
    if(isset($_GET['tech_id']))
    
    {
    
        $tech_id=$_GET['tech_id'];
        
        $query="SELECT * FROM technician WHERE `id`=$tech_id";
        $result=send_query($query);
        
        $row=mysqli_fetch_assoc($result);
        return $row;
        
    }
    
}

function display_all_techs_in_table_with_edit_and_delete_button()
{
        
    
    
    $result=send_query("SELECT * FROM `technician`");
    
        
        
            
        while($row=mysqli_fetch_assoc($result))
                {

            
            $tech_id=$row['id'];
            $tech_mail=$row['Email'];
            $tech_password=$row['Password'];
            $tech_name=$row['Name'];
            $tech_phone=$row['Phone'];
            $tech_age=$row['age'];
            $tech_gender=$row['Gender'];
            $tech_workadd=$row['workshopAddress'];
            $tech_starthour=$row['startHour'];
            $tech_endhour=$row['endHour'];
            $tech_category=$row['Categroy'];
            $tech_photo=$row['Photo'];
            $tech_about=$row['about'];
            
            
            
            
            
            
            
?>
              
                <tr>
                   
                   
        <td><a class='btn btn-primary' href="tech.php?Admin=edit&tech_id=<?php echo $tech_id;?>">Edit</a></td>
                 
       <td><a class='btn btn-warning' href="tech.php?Admin=delete_saved_tech&tech_id=<?php echo $tech_id;?>">Delete</a></td>
                   
                   <td><?php echo $tech_id ;?></td>
                   <td><?php echo $tech_mail ;?></td>
                   <td><?php echo $tech_password ;?></td>
                   <td><?php echo $tech_name ;?></td>
                   <td><?php echo $tech_phone ;?></td>
                   <td><?php echo $tech_age ;?></td>
                   <td><?php echo $tech_gender ;?></td>
                   <td><?php echo $tech_workadd ;?></td>
                   <td><?php echo $tech_starthour ;?></td>
                   <td><?php echo $tech_endhour ;?></td>
                   <td><?php echo $tech_category ;?></td>
                   <td><?php echo $tech_about ;?></td>
               
                   
                   
               </tr>  
                  
<?php

        
        
        }
    
}
 

function display_all_reqs_techs_in_table_with_edit_and_delete_button()
{
        
    
    
    $result=send_query("SELECT * FROM `request technician`");
    
        
        
            
        while($row=mysqli_fetch_assoc($result))
                {

            
            $tech_id=$row['id'];
            $tech_mail=$row['Email'];
            $tech_password=$row['Password'];
            $tech_name=$row['Name'];
            $tech_phone=$row['Phone'];
            $tech_age=$row['age'];
            $tech_gender=$row['Gender'];
            $tech_workadd=$row['WorkshopAddress'];
            $tech_starthour=$row['startHour'];
            $tech_endhour=$row['endHour'];
            $tech_category=$row['Categroy'];
            $tech_about=$row['about'];
            
            
            
            
            
            
            
?>
              
                <tr>
                   
                   
                 
                   <td><a class='btn btn-warning' href="tech.php?Admin=delete_requested_tech&req_tech_id=<?php echo $tech_id;?>">Delete</a></td>
                    
                   <td><a class='btn btn-success' href="tech.php?Admin=accept_requested_tech&req_tech_id=<?php echo $tech_id;?>">Accept</a></td>
                   
                    
                   <td><?php echo $tech_id ;?></td>
                   <td><?php echo $tech_mail ;?></td>
                   <td><?php echo $tech_password ;?></td>
                   <td><?php echo $tech_name ;?></td>
                   <td><?php echo $tech_phone ;?></td>
                   <td><?php echo $tech_age ;?></td>
                   <td><?php echo $tech_gender ;?></td>
                   <td><?php echo $tech_workadd ;?></td>
                   <td><?php echo $tech_starthour ;?></td>
                   <td><?php echo $tech_endhour ;?></td>
                   <td><?php echo $tech_category ;?></td>
                   <td><?php echo $tech_about ;?></td>
                   
                   
               </tr>  
                  
<?php

        
        
        }
    
}
    


function display_all_clients_in_table_with_edit_and_delete_button()
{
    
    
    
    $result=send_query("SELECT * FROM client");    
        while($row=mysqli_fetch_assoc($result))
                {

            
            $client_id=$row['id'];
            $client_email=$row['Email'];
            $client_password=$row['Password'];
            $client_name=$row['Name'];
            $client_phone=$row['Phone'];
            $client_addresse=$row['Address'];
            $client_gender=$row['Gender'];

        
            
            
            
            
            
            
?>
              
                <tr>
                   
                    
                   <td><a class='btn btn-primary' href="client.php?Admin=edit&client_id=<?php echo $client_id;?>">Edit</a></td>
                 
                   <td><a class='btn btn-warning' href="client.php?Admin=delete&client_id=<?php echo $client_id;?>">Delete</a></td>
                   
                    
                   <td><?php echo $client_id ;?></td>
                   <td><?php echo $client_email ;?></td>
                   <td><?php echo $client_password ;?></td>
                   <td><?php echo $client_name ;?></td>
                   <td><?php echo $client_phone ;?></td>
                   <td><?php echo $client_addresse ;?></td>
                   <td><?php echo $client_gender ;?></td>
                   
               </tr>  
                  
<?php

        
        
        }
    
}


function display_all_feedbacks_in_table_with_delete_button()
{
    
    
    
    $result=send_query("SELECT * FROM feedbacks");    
        while($row=mysqli_fetch_assoc($result))
                {

            
            $feedback_id=$row['Feedback_ID'];
            $feedback_client_id=$row['Client_ID'];
            $feedback_technician_id=$row['Technician_ID'];
            $feedback_content=$row['The Feedback'];
            $feedback_rate = $row['rate'];
            
            
            
            $query1="SELECT Email FROM technician WHERE `id`={$feedback_technician_id}";
            
            $result1=send_query($query1);
            $row1=mysqli_fetch_assoc($result1);
            
            
            
            $query2="SELECT Email FROM client WHERE `id`={$feedback_client_id}";
            
            $result2=send_query($query2);
            $row2=mysqli_fetch_assoc($result2);
            
            
            
?>
              
                <tr>
                   
                    
                   <td><a class='btn btn-warning' href="feedback.php?Admin=delete&feedback_id=<?php echo $feedback_id;?>">Delete</a></td>
                   
                    
                   <td><?php echo $feedback_id ;?></td>
                   <td><?php echo $row1['Email'] ;?></td>
                   <td><?php echo $row2['Email'] ;?></td>
                   <td><?php echo $feedback_content ;?></td>
                   <td><?php echo $feedback_rate ;?></td>
                   
               </tr>  
                  
<?php

        
        
        }
    
}


 

function delete_saved_tech_from_technician_table()
{
    
    if(isset($_GET['tech_id']))
    {
        $tech_id=$_GET['tech_id'];
        
        
        $query="DELETE FROM `technician` WHERE `id`=$tech_id";
        send_query($query);
        
        
    }
    
    
    
    
}

function delete_req_tech_from_request_technician_table()
{
    
    if(isset($_GET['req_tech_id']))
    {
        $tech_id=$_GET['req_tech_id'];
        
        
        $query="DELETE FROM `request technician` WHERE `id`=$tech_id";
        send_query($query);
        
        
    }
    
    
    
    
}    
   
function delete_client_from_client_table()
{
    
    if(isset($_GET['client_id']))
    {
        $client_id=$_GET['client_id'];
        
        
        $query="DELETE FROM `client` WHERE `id`=$client_id";
        send_query($query);
        
        
    }
    
    
    
    
}    
    
function delete_feedback_from_feedback_table()
{
    
    
    
    if(isset($_GET['feedback_id']))
    {
        $feedback_id=$_GET['feedback_id'];
        
        
        $query="DELETE FROM `feedbacks` WHERE `Feedback_ID`=$feedback_id";
        send_query($query);
        
        
    }
    
}



function insert_tech_into_technician_table($row)
{

           //$tech_id=$row['id'];
            $tech_mail=$row['Email'];
            $tech_password=$row['Password'];
            $tech_name=$row['Name'];
            $tech_phone=$row['Phone'];
            $tech_age=$row['age'];
            $tech_gender=$row['Gender'];
            $tech_workadd=$row['WorkshopAddress'];
            $tech_starthour=$row['startHour'];
            $tech_endhour=$row['endHour'];
            $tech_category=$row['Categroy'];
            //$tech_photo=$row['Photo'];
            $tech_about=$row['about'];
           
    
    $query="INSERT INTO `technician` (`Email`, `Password`, `Name`, `Phone`, `age`, `Gender`, `WorkshopAddress`, `startHour`, `endHour`, `Categroy`, `about`) VALUES ('$tech_mail',' $tech_password','$tech_name','$tech_phone','$tech_age','$tech_gender','$tech_workadd','$tech_starthour','$tech_endhour','$tech_category','$tech_about')";
    send_query($query);
    
    
}

function accept_requested_tech()
{
    
    if(isset($_GET['req_tech_id']))
    
    {
        
        $req_tech_id=$_GET['req_tech_id'];
        
        $query="SELECT * FROM `request technician` WHERE id=$req_tech_id";
        
        $result=send_query($query);
        
        $row=mysqli_fetch_assoc($result);
        

        insert_tech_into_technician_table($row);
        
        delete_req_tech_from_request_technician_table();

        mail_send($row['Email']);
        
    }
    
    
    
}


function update_client_by_id()
{
    
    if(isset($_GET['client_id']))
    {
        
            $client_id=$_GET['client_id'];
            $client_email=$_POST['client_email'];
            $client_password=$_POST['client_password'];
            $client_name=$_POST['client_name'];
            $client_phone=$_POST['client_phone'];
            $client_address=$_POST['client_address'];
            $client_gender=$_POST['client_gender'];
        
        
        $query="UPDATE client SET `Email`='{$client_email}',    
                                  `Password`='{$client_password}',    
                                  `Name`='{$client_name}',    
                                  `Phone`='{$client_phone}',    
                                  `Address`='{$client_address}',    
                                  `Gender`='{$client_gender}'
                                  
                                  WHERE `id`=$client_id";
        
        send_query($query);
        
        
    }
    
    
    
    
}


function update_tech_by_id()
{
    
    if(isset($_GET['tech_id']))
    {
            $tech_id=$_GET['tech_id'];
            $tech_mail=$_POST['tech_mail'];
            $tech_password=$_POST['tech_password'];
            $tech_name=$_POST['tech_name'];
            $tech_phone=$_POST['tech_phone'];
            $tech_age=$_POST['tech_age'];
            $tech_gender=$_POST['tech_gender'];
            $tech_workadd=$_POST['tech_workadd'];
            $tech_starthour=$_POST['tech_starthour'];
            $tech_endhour=$_POST['tech_endhour'];
            $tech_category=$_POST['tech_category'];
            $tech_about=$_POST['tech_about'];
            
        
        
        
        
        
        
        $query="UPDATE technician SET `Email`='{$tech_mail}',
                                      `Password`='{$tech_password}',
                                      `Name`='{$tech_name}',
                                      `Phone`='{$tech_phone}',
                                      `age`='{$tech_age}',
                                      `Gender`='{$tech_gender}',
                                      `workshopAddress`='{$tech_workadd}',
                                      `startHour`='{$tech_starthour}',
                                      `endHour`='{$tech_endhour}',
                                      `Categroy`='{$tech_category}',
                                      `About`='{$tech_about}'
                                        
                                  WHERE `id`=$tech_id";
        
        send_query($query);
        
        
    }
    
    
    
    
}



function insert_client_into_client_table()
{
    
    
    $client_email=$_POST['client_email'];    
    $client_password=$_POST['client_password'];    
    $client_name=$_POST['client_name'];    
    $client_address=$_POST['client_address'];    
    $client_phone=$_POST['client_phone'];    
    $client_gender=$_POST['client_gender'];    
     
    
     $query="INSERT INTO `client` (`Email`,`Password`,`Name`,`Address`,`Gender`,`Phone`) VALUES 
     
     ('{$client_email}','{$client_password}','{$client_name}','{$client_address}','{$client_gender}','{$client_phone}')";
    
    
    send_query($query);
    
    
    
    
    
    
    
    
    
    
    
}






function mail_send($mail_to)
  {
      
      require '../PHPMailer-master/src/Exception.php';
      require '../PHPMailer-master/src/PHPMailer.php';
      require '../PHPMailer-master/src/SMTP.php';


       
$mail_subject="Techfix Reply";      
       
       
$mail_standard_form="Dear ,
                        Hope you are doing well.

                        Regarding the request you applied for,you are accepted and now you can login as Technician.

                        Best regards,
                        
                        Techfix Team.";
       
      
      
            $mail= new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPDebug=0;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->IsHTML(true);
            $mail->Username="techfixa@gmail.com";
            $mail->Password="techfix1*admin";
            $mail->SetFrom("techfixa@gmail.com");
            $mail->Subject=$mail_subject;
            $mail->Body=$mail_standard_form;
            $mail->AddAddress("$mail_to");


       
       $mail->send();
  
}








?>