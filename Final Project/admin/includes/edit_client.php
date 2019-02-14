
<?php
if(isset($_POST['edit_client']))
{
    
    update_client_by_id();  
    
    
}


$data=select_all_from_client_table_by_id();


?>




<form method="post" action=" ">


<div class="form-group">
    <label for="client_id">Client Id</label>    
    <input type="text" class="form-control" name="client_id" value="<?php echo $data['id']; ?>">
</div>


<div class="form-group">
    <label for="client_email">Client Email</label>    
    <input type="text" class="form-control" name="client_email" value="<?php echo $data['Email']; ?>">
</div>


<div class="form-group">
    <label for="client_password">Client Password</label>    
    <input type="text" class="form-control" name="client_password" value="<?php echo $data['Password']; ?>">
</div>


<div class="form-group">
    <label for="client_name">Client Name</label>    
    <input type="text" class="form-control" name="client_name" value="<?php echo $data['Name']; ?>">
</div>


<div class="form-group">
    <label for="client_address">Client Address</label>    
    <input type="text" class="form-control" name="client_address" value="<?php echo $data['Address']; ?>">
</div>


<div class="form-group">
    <label for="client_gender">Client Gender</label>    
    <input type="text" class="form-control" name="client_gender" value="<?php echo $data['Gender']; ?>">
</div>


<div class="form-group">
    <label for="client_phone">Client Phone</label>    
    <input type="text" class="form-control" name="client_phone" value="<?php echo $data['Phone']; ?>">
</div>



<div class="group-control">
    <input type="submit" class="form-control btn btn-primary" name="edit_client" value="Edit Client">
</div>


    







</form>