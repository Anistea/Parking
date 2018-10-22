<html>
<head>
    <title>Parking ITIC</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/stylecss.css">
</head>
<body>
    <h1> Mon Parking </h1>
   <div class="boutton" align="center">
      <p>Réserver une place</p>
    </div>
    <br>
    
    <div class="boutton" align="center">
      <p>Voici votre place :</p>
    </div>
    <br>
    
    <div class="boutton" align="center">
      <p>Modifier mot de passe</p>
    </div>
    <br>
    
      <div id="réserver">
            <form method="post" action="models/compteModel.php">
            <p>
                 
                <label for="date"></label> <!--case date-->
                <input type="date" name="date" class="ecriture" id="date" placeholder="Date" size="35" maxlenght="100" /> <!--pseudo à l'intérieur de la case-->
            <br>
             
                <label for="time"></label>    <!--case heure-->
                <input type="time" name="time" class="ecriture" id="time" placeholder="Heure" size="35" maxlength="100" min="00:00" max="23:59" step="1800"/><!--mot de passe avec points et à l'intérieur de la case-->
            <br>
             
                <label for="number"></label>    <!--case du numéro de la place-->
                <input type="number" name="number" class="ecriture" id="number" placeholder="N° de la place" size="35" maxlength="100" min="1" max="10"/><!--mot de passe avec points et à l'intérieur de la case-->
             
            </p>
            
            <p>
                <input type="submit" name="envoyer" value="Réserver une place" class="boutons">
            </p>  <!--bouton envoyer-->
         
             </form>
             
         
        </div>  

    </body>
</html>
    

    <?php
     