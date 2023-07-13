<?php  

if(isset($_GET['nom-salle'])){
   include "connexion1.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$nom = validate($_GET['nom-salle']);

	$sql = "DELETE FROM salle
	        WHERE nom-salle=$nom";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: creation.php?success=successfully deleted");
   }else {
      header("Location: creation.php?error=unknown error occurred&$nom");
   }

}else {
	header("Location: creation.php");
}