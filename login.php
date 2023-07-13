<?php
session_start();
include "connexion.php";

if (isset($_POST['nom_ad']) && isset($_POST['mdp'])) {
    $uname = $_POST['nom_ad'];
    $pass = $_POST['mdp'];
    
    if (empty($uname) || empty($pass)) {
        header("Location: index.php?error=Both username and password are required");
        exit();
    } else {
        // Prepare the SQL statement to prevent SQL injection
        $stmt = $conn->prepare("SELECT * FROM admin WHERE nom_ad = ? AND md5(mdp) = ?");
        $stmt->bind_param("ss", $uname, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $_SESSION['nom_ad'] = $row['nom_ad'];
            
            echo"hello";
            exit();
        } else {
            header("Location: index.php?error=Invalid username or password");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>