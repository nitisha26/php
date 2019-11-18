	` 

<?php
require_once 'dbconfig.php';

$emp = array(
    array("employee_id"=>7369,"last_name"=>"Smith","first_name"=>"John","emp_type"=>"consultant"),
    array("employee_id"=>7499,"last_name"=>"Allen","first_name"=>"Kevin","emp_type"=>"Permanent"),
    array("employee_id"=>7521,"last_name"=>"Wang","first_name"=>"Cynthia","emp_type"=>"Permanent"),
    array("employee_id"=>7728,"last_name"=>"Clark","first_name"=>"Card","emp_type"=>"Temporary"),
    array("employee_id"=>7728,"last_name"=>"Clark","first_name"=>"Card","emp_type"=>"Temporary") 
    
);

$sqlStmt = "insert into employee values";
$i = 0;
foreach($emp as $key)
{
   $sqlStmt.="(".$key['employee_id'].",'".$key['last_name']."','".$key['first_name']."','".$key['emp_type']."')";
  
   if($i < count($emp)-1)
   {
      
       $sqlStmt .=",\n";
   }
       $i++;
       $sqlStmt .=";";

}   



$queryId = mysqli_query($connectionId, $sqlStmt);

if($queryId==true)
    echo "<h2>A new Employee is added successfully.</h2>";
else
    echo "<h2>".mysqli_error($connectionId)."</h2>";
?>

<a href="manipulateDatabase.php">Return</a><br/> 