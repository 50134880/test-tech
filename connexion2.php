<?php 
$sname= "localhost";
$mname="root";
$date="";
$heured="";
$heuref="";



$db_name="reservation_salle";
$conn = mysqli_connect($sname,$mname,$date,$heured,$heuref,$db_name);

if (!$conn) {
    echo "Connection failed!";
}
?>