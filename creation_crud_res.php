<?php 

if (isset($_POST['nom-salle'])) {
	include "connexion2.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$mname = validate($_POST['nom-salle']);
	$date = validate($_POST['date']);
    $heured= validate($_POST['heure-debut']);
    $heuref= validate($_POST['heure-fin']);



	if (empty($mname)) {
		header("Location: reservation.php?error=Name is required&$mname");
	}else {

       $sql = "INSERT INTO reservation(date, heure-debut,heure-fin) 
               VALUES('$date', '$heured','$heuref')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: reservation.php?success=successfully created");
       }else {
          header("Location: reservation.php?error=unknown error occurred&$mname");
       }
	}

}
?>
<form method ="POST" enctype="multipart/form-data">
	<input type="file" name="file" id="file">
	<input type="submit" name="submit" value="submit">
</form>
