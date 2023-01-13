<?php

// Déclaration des variables
$nom = "Charles"; // String
$pays = "Bénin";

$age = 18; // Int

// Afficher une variable
echo $nom;

echo 'Je m\'appelle ' . $nom . ' et j\'ai ' . $age . 'ans <br>';

echo "Je m'appelle $nom et j'ai $age ans et je suis au $pays";

// Obtenir le type d'une variable en php
echo gettype($nom);

// Déclaration et affectation d'un tableau
$tab = ["nom"=>"Edem", "age" =>18, "pays" => "Bénin"];
$tab1 = array("nom"=>"Charles", "age" =>20, "pays" => "Ghana");

// Afficher le contenu du tableau
print_r($tab1);
// echo '<br>';

// Afficher un element du tableau
echo $tab1["nom"];

// Les fonctions
function hello($nom){
    echo "Salut $nom";
}
// hello("Charles");
function carre(int $x){
    return $x * $x;
}

function delta(int $x, int $y,int $z){
    return carre($y)-(4*$x*$z);
}

echo "Le delta = " . delta(2,3,1);
// hello($nom);
// echo carre(3);