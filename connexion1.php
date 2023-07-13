<?php 
$sname= "localhost";
$mname="root";
$capacite="";
$dispo="";


$db_name="reservation_salle";
$conn = mysqli_connect($sname,$mname,$capacite,$dispo,$db_name);

if (!$conn) {
    echo "Connection failed!";
}
?>