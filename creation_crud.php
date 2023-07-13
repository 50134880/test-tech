<?php
if (isset($_POST['submit'])) {
    include "connexion1.php";
    
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $mname = validate($_POST['nom-salle']);
    $capacite = validate($_POST['capacite']);
    $dispo = validate($_POST['disponibilite']);
    
    if (empty($mname)) {
        header("Location: creation.php?error=Name is required");
        exit();
    } else {
        $sql = "INSERT INTO salle (`nom-salle`, `capacite`, `disponibilite`)
                VALUES ('$mname', '$capacite', '$dispo')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: creation.php?success=successfully created");
            exit();
        } else {
            header("Location: creation.php?error=Unknown error occurred");
            exit();
        }
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <label for="nom-salle">Salle Name:</label>
    <input type="text" name="nom-salle" id="nom-salle" required>

    <label for="capacite">Capacite:</label>
    <input type="text" name="capacite" id="capacite" required>

    <label for="disponibilite">Disponibilite:</label>
    <input type="text" name="disponibilite" id="disponibilite" required>

    <input type="submit" name="submit" value="Submit">
</form>