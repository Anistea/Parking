
 <html>
   <head>
   <meta charset="utf-8">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/stylecss.css">
</head>
    <body>
	   <nav>
	      <ul>

              <?php 
//              var_dump($_SESSION['connecte']);die;
                    if(isset($_SESSION['connecte'])) { 
                        echo '<li><a href="accueils">Accueils</a></li>
                            <li><a href="compte">Mon Parking</a></li>
                            <li><a href="logout">Deconnexion</a></li>';
                       // if($_SESSION['lvl'] >=3 ) { 
                       // echo '<li><a href="admin">Admin</a></li>';
                       // }
                     }else{
                        echo '<li><a href="accueil">Accueil</a></li>
                        <li><a href="inscription">Inscription</a></li>
                        <li><a href="login">Connexion</a></li>';
                     } 
                ?>

		  </ul>
	   </nav>
	   <?php echo $content; ?>
	   <footer>
	       <ul> 
                    <li><a href="#">Retour en haut de page</a></li>
                    <li><a>Copyright © 2018 tout droits réservés.</a></li>
                 <!--        <div class="container">
                            <ul class="pagination pagination-sm">
                               <li><a href="accueil">1</a></li>
                               <li><a href="inscription">2</a></li>
                               <li><a href="login">3</a></li>       -->
                               <?php /*if(isset($_SESSION['connecte'])) { */?>
                             <!--  <li><a href="accueil">1</a></li>
                               <li><a href="compte">2</a></li>
                               <li><a href="logout">3</a></li>    -->
                               <?php /*if($_SESSION['lvl'] >=3 ) { */?>
                             <!--  <li><a href="admin">0</a></li>
                           </ul>
                    </div> -->
                </ul>
	   
	   </footer>
	
	</body>
 
 </html>