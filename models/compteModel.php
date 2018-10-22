<?php

        $select = $bdd->prepare("SELECT `nomplace` FROM `places` WHERE `datedeb` is Null ");
        $select->execute();

/*function reserverplace($datedeb,$id_u,$id_p)    
{

    if
}
    
?>*/

  