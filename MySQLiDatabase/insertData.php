<?php
require_once 'dbconfig.php';
$sqlStmt="insert into teacher
 values (500,'niti','6567667436','niti@gmail.com')";
$queryId = mysqli_query($connectionId,$sqlStmt);
if($queryId==true)
    echo "</h2> a new teacher added successfully  </h2>";
else 
    echo "<h2>" .mysqli_error($connectionId)."</h2>";
?>
<a href ="manipulateDatabase.php">return </a></br>
