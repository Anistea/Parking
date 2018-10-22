
<html>
    <head>
        <title>Parking ITIC</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/stylecss.css">
    </head>
    <body>
       <div class="connexion">
        <div align="center">
           <br> <br>
            <h1>Connexion</h1>
            <br><br><br><br>
            <div class="connexion_form">
            <form method="POST">
            <input type="text" name="pseudo_connect" placeholder="Pseudo">
            <input type="password" name="mdp_connect" placeholder="Mot de passe">
            <br><br><br><br>
            <input type="submit" name="form_connect" value="Se connecter !">
            </form>
            </div>
                   <?php
            if(isset($erreur))
            {
                echo $erreur;
            }
            ?>
        </div>  
        <br> <br> <br> <br>  
    </div>
    </body>
</html>