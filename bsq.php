<?php
// je lis mon fichier
$ouvrir = fopen($argv[1], "r");
//je lis la premiere ligne pour connaitre le nombre de ligne de mon fichier
$nbligne = fgets($ouvrir);

var_dump($nbligne);
// je lis tout le fichier 
 $lire = fread($ouvrir , filesize($argv[1])); 

var_dump($lire);
//je regarde quand est ce que j'arrive sur un retour a la ligne pour definir la taille d'une ligne
$largeurligne = strpos($lire,"\n")+1;

var_dump($largeurligne);
// je cherche la position des o dans mon fichier a partir de la ligne 2
$cherchezero = preg_match_all('#o#', $lire, $matches, PREG_OFFSET_CAPTURE);

var_dump($cherchezero);
var_dump($matches);

foreach($o as $value){
    
    if("o" == $o){
        

    }


}