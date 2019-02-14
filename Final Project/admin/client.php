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
            
            case 'delete': 
                        
                    delete_client_from_client_table();
                    include "includes/view_all_clients.php";
                    break;
            
            case 'edit': 
                      
                include "includes/edit_client.php";
                    break;
            
            case 'add': 
                      
                include "includes/add_client.php";
                    break;
            
            default: 
                    include "includes/view_all_clients.php";
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
