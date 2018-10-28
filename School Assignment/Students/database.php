<?php
class Database{
   
     public $connection =null;


     function connect ($user,$pass,$dbname)
     {  
     	if(!empty($connection)) return;
     	 $dsn='mysql:host=localhost;dbname='.$dbname;
     	 try{
         $this->connection=new PDO($dsn,$user,$pass);
     	 }catch(PDOException $e){
     	 	echo $e->getMessage();
     	 }
     	return $this->connection;
     } 



     
}



?>