<html>
    <head>
        <title>Parking ITIC</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/stylecss.css">
    </head>
    <div class="inscription">
    <body>
        <div align="center">
            <div class="inscrit"><h1>Inscription</h1></div>
            <br> <br>
            <div class="inscription_form">
            <form method="POST" action="controllers/inscriptionController.php">
               <br>
                <table>
                   <tr>
                        <td align="right">
                            <label for="prenom">Prénom :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre prénom" name="prenom" id="prenom"/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="right">
                            <label for="nom">Nom :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre nom" name="nom" id="nom"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            <label for="mail">Adresse e-mail :</label>
                        </td>
                        <td>
                            <input type="email" placeholder="Jesuis@gmail.com" name="mail" id="mail"/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="right">
                            <label for="mail2">Confirmez-votre e-mail :</label>
                        </td>
                        <td>
                            <input type="email" placeholder="Jesuis@gmail.com" name="mail2" id="mail2"/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="right">
                            <label for="pseudo">Pseudo :</label>
                        </td>
                        <td>
                            <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo"/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="right">
                            <label for="mdp">Mot de passe :</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Votre mot de passe" name="mdp" id="mdp"/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="right">
                            <label for="mdp2">Confirmez votre mot de passe :</label>
                        </td>
                        <td>
                            <input type="password" placeholder="Confirmez le mdp" name="mdp2" id="mdp2"/>
                        </td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td align="center">
                            <br>
                            <input type="submit" name="form_inscription" value="Je m'inscris.">
                        </td>
                    </tr>
                </table>
            </form>
            </div>
           
        </div>  
    </body>
    </div>
</html>
     