
<?php
if(isset($_POST['add_client']))
{
    
    insert_client_into_client_table();  
    
    
}




?>
















<form method="post" action=" ">



<div class="form-group">
    <label for="client_email">Client Email</label>    
    <input type="text" class="form-control" name="client_email" >
</div>


<div class="form-group">
    <label for="client_password">Client Password</label>    
    <input type="text" class="form-control" name="client_password" >
</div>


<div class="form-group">
    <label for="client_name">Client Name</label>    
    <input type="text" class="form-control" name="client_name" >
</div>


<div class="form-group">
    <label for="client_address">Client Address</label>    
    <input type="text" class="form-control" name="client_address" >
</div>


<div class="form-group">
    <label for="client_gender">Client Gender</label>    
    <input type="text" class="form-control" name="client_gender" >
</div>


<div class="form-group">
    <label for="client_phone">Client Phone</label>    
    <input type="text" class="form-control" name="client_phone" >
</div>



<div class="group-control">
    <input type="submit" class="form-control btn btn-primary" name="add_client" value="Add Client">
</div>


    







</form>