<?php
$DATABASE = "canteen_system";
$PASSWORD = "";
$HOSTNAME = "localhost";
$LOCALHOST = "root";
$con = mysqli_connect($HOSTNAME,$LOCALHOST,$PASSWORD,$DATABASE);
if($con)
{
    
}
else{
    echo "database not connected";
}
?>