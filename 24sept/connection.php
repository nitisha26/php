<?php 
require_once 'dbconfig.php';
if (!mysqli_connect_errno())
{
    
    
    echo "You are connected to the $dbname database</br>";
    //redirect to manipulation page

    header("location:manipulateDatabase.php");
}
else{
   ECHO "YOU ARE NOT CONNECTED TO $dbname databse</br>";
   //redirect to the error page
   header("location:errorDatabase.php");
}

?>