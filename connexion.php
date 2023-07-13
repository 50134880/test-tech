<?php 
$sname= "localhost";
$mname="root";
$password="";

$db_name="reservation_salle";
$conn = mysqli_connect($sname,$mname,$password,$db_name);

if (!$conn) {
    echo "Connection failed!";
}
?>