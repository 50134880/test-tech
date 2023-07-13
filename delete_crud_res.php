<?php  

if(isset($_GET['nom-salle'])){
   include "connexion2.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$nom = validate($_GET['nom-salle']);

	$sql = "DELETE FROM reservation
	        WHERE nom-salle=$nom";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: reservation.php?success=successfully deleted");
   }else {
      header("Location: reservation.php?error=unknown error occurred&$nom");
   }

}else {
	header("Location: reservation.php");
}