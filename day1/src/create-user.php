<?php
    require 'connect.php';
    if(!$_POST['email']){//POST è il verbo che usa l'https x inviare i dati
        die('ce stai a provà eh?');
    }
    
    $connection = connect ();// col prepare, preparo la query da mandare al db
    $query = $connection->prepare("  
        INSERT INTO users (email, password, first_name, last_name, role_id) VALUES
    (?,?,?,?,?);  
");

$queryRes = $query -> execute([ //esegue la funzione execute, al posto dei ? inserisce i valori
    $_POST['email'],
    $_POST['password'],
    $_POST['firstName'],
    $_POST['lastName'],
    $_POST['roleId'],
]);

header ('location: http://localhost/day1/src/users.php ? success =' . ($queryRes? 'true' : 'false'));