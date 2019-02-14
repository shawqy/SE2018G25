<?php include "includes/functions.php"; ?>


<!DOCTYPE html>
    <html lang="en">




    <?php include "includes/header.php"; ?>    



    <body>

            <div id="wrapper">

                <!-- Navigation -->


        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">




        <?php include "includes/nav.php"; ?>        





                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->




        <?php include "includes/side.php"; ?>        






            </nav>



        <div id="page-wrapper">
                



    <?php include "includes/footer.php"; ?>        


         
            
            
            
            
            
                
    <?php /*========================================================================*/
                
    if(isset($_GET['Admin']))
    {
        
        $Admin=$_GET['Admin'];
        
    }
                
                
                

    switch($Admin)        
        {
    
    
        case 'view_all_techs':
                include "includes/view_all_techs.php";
                break;
    
        
        case 'view_all_req_techs':
                include "includes/view_all_req_techs.php";
                break;
            
        
        case 'delete_saved_tech':
                 delete_saved_tech_from_technician_table();
                include "includes/view_all_techs.php";
                break;    
    
        case 'delete_requested_tech':
                delete_req_tech_from_request_technician_table();
                include "includes/view_all_req_techs.php";
                break;     
            
        
        case 'accept_requested_tech':
                accept_requested_tech();
                include "includes/view_all_req_techs.php";
                break;         
    
        case 'edit':
                include "includes/edit_tech.php";
                break;         
    
        
        case 'add':
                include "includes/add_tech.php";
                break;    
    
        default : 
                include "includes/view_all_techs.php";
                break;
    
        }
            
            
            
            
            
            
            
            
            
    
            
        /*============================================================================*/    
        ?>            
                    
        </div>
        <!-- /#page-wrapper -->
     




        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

    </body>

    </html>
