<?php

function insertUser($nom,$prenom,$mail,$pseudo,$mdp)    
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=parking", "root", "");
        //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
          echo "<script>alert('Server error');</script>";
          return false;

    }
    try {
        $insertmbr = $conn->prepare("INSERT INTO `users` ( `nom`, `prenom`, `email`, `mdp`,pseudo) VALUES ( ?, ?, ?, ?,?)");
        $execute = $insertmbr->execute(array($prenom, $nom, $mail, $mdp,$pseudo));
        return $execute;
    }
    catch(PDOException $e)
    {
        echo "<script>alert('Pseudo existe déja!');</script>";
        return false;
    }
  
}
?>