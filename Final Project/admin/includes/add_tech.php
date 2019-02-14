
<?php

if(isset($_POST['add_tech']))
{
    
   insert_tech_into_technician_table($_POST);  
    
    
}



?>









<form method="post" action=" ">


    
    
<div class="form-group">
    <label for="tech_mail">Technician Email</label>    
    <input type="text" class="form-control" name="Email" >
</div>
    
    
<div class="form-group">
    <label for="tech_password">Technician Password</label>    
    <input type="text" class="form-control" name="Password" >
</div>

    
    
<div class="form-group">
    <label for="tech_name">Technician Name</label>    
    <input type="text" class="form-control" name="Name" >
</div>

    
    
<div class="form-group">
    <label for="tech_phone">Technician Phone</label>    
    <input type="text" class="form-control" name="Phone" >
</div>

    
    
<div class="form-group">
    <label for="tech_age">Technician Age</label>    
    <input type="text" class="form-control" name="Age" >
</div>

    
    
<div class="form-group">
    <label for="tech_gender">Technician Gender</label>    
    <input type="text" class="form-control" name="Gender">
</div>

    

         
    
<div class="form-group">
    <label for="tech_workadd">Technician Work Address</label>    
    <input type="text" class="form-control" name="workshopAddress" >
</div>

    
    
<div class="form-group">
    <label for="tech_starthour">Technician Start hour</label>    
    <input type="text" class="form-control" name="startHour" >
</div>

    
    
<div class="form-group">
    <label for="tech_endhour">Technician End Hour</label>    
    <input type="text" class="form-control" name="endHour">
</div>

    
    
<div class="form-group">
    <label for="tech_category">Technician Category</label>    
    <input type="text" class="form-control" name="Category">
</div>

    
    
<div class="form-group">
    <label for="tech_about">Technician About</label>    
    <input type="text" class="form-control" name="About">
</div>

    
    
    
    
    
<div class="group-control">
    <input type="submit" class="form-control btn btn-primary" name="add_tech" value="Add Technician">
</div>


    







</form>