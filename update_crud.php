<?php 

if (isset($_GET['nom-salle'])) {
	include "connexion1.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$mname= validate($_GET['nom_salle']);

	$sql = "SELECT * FROM salle WHERE nom_salle=$mname";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: creation.php");
    }


}else if(isset($_POST['update'])){
    include "connexion1.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	
	$mname = validate($_POST['nom_salle']);
	$capacite = validate($_POST['capacite']);
    $dispo = validate($_POST['disponibilite']);


	if (empty($mname)) {
		header("Location: creation.php?id=$mname&error=id is required");
	
    
	}else {

       $sql = "UPDATE salle
               SET capacite='$capacite', disponibilite=$dispo'
               WHERE nom_salle=$mname ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: creation.php?success=successfully updated");
       }else {
          header("Location: creation.php?id=$mname&error=unknown error occurred&");
       }
	}
}else {
	header("Location: creation.php");
}