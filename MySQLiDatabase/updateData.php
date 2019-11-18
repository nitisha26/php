<?php


require_once 'dbconfig.php';
$sqlStmt ="update teacher set phone='42432536 ' where name='niti'";
$queryId = mysqli_query($connectionId,$sqlStmt);
if($queryId==true)
    echo "</h2> a new teacherupdated successfully  </h2>";
else 
    echo "<h2>" .mysqli_error($connectionId)."</h2>";
?>
<a href ="manipulateDatabase.php">return </a></br>
