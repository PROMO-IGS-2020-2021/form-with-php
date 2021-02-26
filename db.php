<?php 

$server = "localhost";
$user="root";
$password = "goueguy0802";
$dbname = "igs_db";

$connexion = new mysqli($server,$user,$password,$dbname);

if($connexion->connect_error){
    die("Erreur lors de la connexion de la base de donnée".$connexion->connect_error);
}

?>