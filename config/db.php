<?php
    // creation des parametres de notre base de donnees avec mysqli
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'igs-db';

    // $port = 8080;
    // connection a notre base de donnees
    $connection = new mysqli($server, $user, $password, $dbname);

    if($connection->connect_error) {
        echo "Erreur lors de la connexion a la base de donnees, Errors => " . $connection->connect_error;
    }else {
        echo "Connexion effectuee avec success";
    }
?>