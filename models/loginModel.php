<?php
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
if (!empty($_POST['pseudo_connect'])) {
    $pseudo_connect = htmlspecialchars($_POST['pseudo_connect']);
    $mdp_connect = sha1($_POST['mdp_connect']);
    if(!empty($pseudo_connect) AND !empty($mdp_connect))
    {
        $requser = $conn->prepare("SELECT * FROM users WHERE pseudo = :pseudo AND mdp = :mdp LIMIT 1");
        $requser->bindValue(':pseudo', $pseudo_connect, PDO::PARAM_STR);
        $requser->bindValue(':mdp', $mdp_connect, PDO::PARAM_STR);
        $requser->execute();
        
        $user_exist = $requser->rowCount();
        if($user_exist == 1)
        {
            $user_info = $requser->fetch();
            $_SESSION['connecte'] = "whatever";
            $_SESSION['id_u'] = $user_info['id_u'];
            $_SESSION['pseudo'] = $user_info['pseudo'];
            $_SESSION['email'] = $user_info['email'];
            $_SESSION['prenom'] = $user_info['prenom'];
            $_SESSION['nom'] = $user_info['nom'];
            $_SESSION['lvl'] = $user_info['lvl'];
            header("Location: ../accueils");
            exit();
            print_r($_SESSION);
        }
        else
        {
            $erreur = "Pseudo ou mot de passe incorrect !";
        }
    }
    else
    {
        $erreur = "Tous les champs doivent être remplis !";
    }
}

?>
    