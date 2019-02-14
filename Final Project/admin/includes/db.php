<?php 


$db['db_host'] = "fdb25.awardspace.net";
$db['db_user'] = '2964376_techfix';
$db['db_password'] = '1500772shawqy';
$db['db_basename'] = '2964376_techfix';


foreach( $db as $key => $value)
{
    
    
    define(strtoupper($key),$value);
}




$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_BASENAME);






if($connection)
{
    
    echo "We are connected";
}










?>