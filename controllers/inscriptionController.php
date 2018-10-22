<?php
     require "../models/inscriptionModel.php";
    
    $erreur = "";
    if(!isset($_POST['prenom']) || empty($_POST['prenom']))
        $erreur = $erreur."\nIl faut remplir le prenom !";
    // plein de contion de véréfication 

    if($erreur==""){
        $execute= insertUser($_POST['prenom'],$_POST['nom'],$_POST['mail'],$_POST['pseudo'],sha1($_POST['mdp']));
        if ($execute) {
            header("Location: ../login");
        }
    }
  /*       if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['ddn']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['pseudo']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
         {


     $pseudolength = strlen($pseudo);
     if($pseudolength <= 255)
     {
        if($mail == $mail2)
         {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
                $reqmail = $bdd->prepare("SELECT * FROM user WHERE mail_user = ?");
                $reqmail->execute(array($mail));
                $mailexist = $reqmail->rowCount();
                if($mailexist == 0)
                {
                 if($mdp == $mdp2)
                 {
                   $execute= insert($nom,$prenom,$mail,$pseudo,$mdp);
                     if ($execute) {
                         header('Location: confirmed.php');                                
                     }
                 }
                 else
                 {
                     $erreur = "Vos mots de passe ne correspondent pas.";  
                  }
                }
                else
                {
                    $erreur = "Cette adresse mail est déjà utilisée.";
                }
            }
            else
            { 
                 $erreur = "Votre adresse mail n'est pas valide.";  
            }    
         }
         else
             {
                 $erreur = "Vos adresses mail ne correspondent pas.";
             }
     }
     else
     {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères.";
     }       
 }
 else
 {
     $erreur ="Il faut remplir tous les champs !";
 }
*/
   /*  if(isset($erreur))
     {
         echo $erreur;
     }
     ?>*/ 
	 
//	 require "views/inscriptionView.php";