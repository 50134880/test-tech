<?php 

if (isset($_GET['nom-salle'])) {
	include "connexion2.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$mname= validate($_GET['nom-salle']);

	$sql = "SELECT * FROM reservation WHERE nom-salle=$mname";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: reservation.php");
    }


}else if(isset($_POST['update'])){
    include "connexion2.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	
	$mname = validate($_POST['nom-salle']);
	$date = validate($_POST['date']);
    $heured = validate($_POST['heure-debut']);
    $heuref = validate($_POST['heure-fin']);




	if (empty($mname)) {
		header("Location: reservation.php?id=$mname&error=id is required");
	
    
	}else {

       $sql = "UPDATE salle
               SET date='$date', heure-debut='$heured',heure-fin='$heuref'
               WHERE nom-salle=$mname ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: reservation.php?success=successfully updated");
       }else {
          header("Location: reservation.php?id=$mname&error=unknown error occurred&");
       }
	}
}else {
	header("Location: reservation.php");
}