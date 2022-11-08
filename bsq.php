<?php

class coordonne
{
    public $x;
    public $y;
}
// je lis mon fichier
$ouvrir = fopen($argv[1], "r");
//je lis la premiere ligne pour connaitre le nombre de ligne de mon fichier
$nbligne = fgets($ouvrir);

var_dump($nbligne);
// je lis tout le fichier 
$lire = fread($ouvrir, filesize($argv[1]));

var_dump($lire);
//je regarde quand est ce que j'arrive sur un retour a la ligne pour definir la taille d'une ligne
$largeurligne = strpos($lire, "\n") + 1;

var_dump($largeurligne);
// je cherche la position des o dans mon fichier a partir de la ligne 2
$nbzero = preg_match_all('#o#', $lire, $matches, PREG_OFFSET_CAPTURE);

var_dump($matches);

$tableauxcoor = array();
//initialisation a zero de mon tableaux des coordonnee des obstacles
for ($i = 0; $i < $nbzero; $i++) {

    $tableauxcoor[$i] = new coordonne;
}

var_dump("hfhjfjjf" ,$tableauxcoor);
//je fais le calcul de mes coordonnée des obstacles pour tout le plateau
for($i = 0 ; $i < $nbzero ; $i++){

    $tableauxcoor[$i]->x=fmod($matches[0][$i][1] , $largeurligne) ;
    $tableauxcoor[$i]->y=(int)($matches[0][$i][1] / $largeurligne);

}

for ($i = 0; $i < $nbzero; $i++){
// je cherche la largeur maximal du carré
if($tableauxcoor[$i + 1]->y == $tableauxcoor[$i]){

    $largeurmax= $tableauxcoor[$i + 1]->x - ($tableauxcoor[$i ]->x)-2;
}
else $largeurmax = $largeurligne - $tableauxcoor[$i]->x -3;
//je cherche la hauteur maximale du carré


    

}

var_dump("toto", $tableauxcoor);