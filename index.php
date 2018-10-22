<?php  

        session_start();
        
	
	try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=parking","root","");
	}
	catch(Exception $e)
	{
		die("bdd non trouvee");
	}


    if(!isset($_GET['p']) || $_GET['p'] == "") //ca n existe pas
		 $_GET['p'] = "accueil";

		if(!file_exists("controllers/".$_GET['p']."Controller.php"))
			$_GET['p']='404';
		
	

require ("controllers/".$_GET['p']."Controller.php");
    
	
	ob_start(); //arrete l affichage
            include "views/".$_GET['p']."View.php";
            $content = ob_get_contents(); // recupere la page appelle
	ob_end_clean(); //relance l'affichage


    include "layout.php";