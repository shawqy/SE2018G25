
<?php
if(isset($_POST['edit_tech']))
{
    
    update_tech_by_id();  
    
    
}


$data=select_all_from_tech_table_by_id();


?>















<form method="post" action=" ">


<div class="form-group">
    <label for="tech_id">Technician Id</label>    
    <input type="text" class="form-control" name="tech_" value="<?php echo $data['id']; ?>">
</div>

    
    
<div class="form-group">
    <label for="tech_mail">Technician Email</label>    
    <input type="text" class="form-control" name="tech_mail" value="<?php echo $data['Email']; ?>">
</div>
    
    
<div class="form-group">
    <label for="tech_password">Technician Password</label>    
    <input type="text" class="form-control" name="tech_password" value="<?php echo $data['Password']; ?>">
</div>

    
    
<div class="form-group">
    <label for="tech_name">Technician Name</label>    
    <input type="text" class="form-control" name="tech_name" value="<?php echo $data['Name']; ?>">
</div>

    
    
<div class="form-group">
    <label for="tech_phone">Technician Phone</label>    
    <input type="text" class="form-control" name="tech_phone" value="<?php echo $data['Phone']; ?>">
</div>

    
    
<div class="form-group">
    <label for="tech_age">Technician Age</label>    
    <input type="text" class="form-control" name="tech_age" value="<?php echo $data['age']; ?>">
</div>

    
    
<div class="form-group">
    <label for="tech_gender">Technician Gender</label>    
    <input type="text" class="form-control" name="tech_gender" value="<?php echo $data['Gender']; ?>">
</div>

    

         
    
<div class="form-group">
    <label for="tech_workadd">Technician Work Address</label>    
    <input type="text" class="form-control" name="tech_workadd" value="<?php echo $data['workshopAddress']; ?>">
</div>

    
    
<div class="form-group">
    <label for="tech_starthour">Technician Start Hour</label>    
    <input type="text" class="form-control" name="tech_starthour" value="<?php echo $data['startHour']; ?>">
</div>

    
    
<div class="form-group">
    <label for="tech_endhour">Technician End Hour</label>    
    <input type="text" class="form-control" name="tech_endhour" value="<?php echo $data['endHour']; ?>">
</div>

    
    
<div class="form-group">
    <label for="tech_category">Technician Category</label>    
    <input type="text" class="form-control" name="tech_category" value="<?php echo $data['Categroy']; ?>">
</div>

    
    
<div class="form-group">
    <label for="tech_about">Technician About</label>    
    <input type="text" class="form-control" name="tech_about" value="<?php echo $data['about']; ?>">
</div>

    
    
    
    
    
<div class="group-control">
    <input type="submit" class="form-control btn btn-primary" name="edit_tech" value="Edit Technician">
</div>


    







</form>