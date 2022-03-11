<?php

function connect() {
    $db = "blog";
    $hostname = "localhost:3306";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO( //l'oggetto pdo permette l'accesso al database
            "mysql:host=$hostname;dbname=$db",
            $username,
            $password
        );
    } catch(Exception $e) {
        echo "Errore!";
        var_dump($e);
    }

    return $pdo;
}