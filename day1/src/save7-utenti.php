<?php
require 'connect.php';
$pdo=connect();

    try {
        $pdo->query("
            INSERT INTO users (email, password, first_name, last_name) VALUES
                ('{$_POST['email']}', '{$_POST['password']}', '{$_POST['first_name']}', '{$_POST['last_name']}');
        ");
    } catch(Exception $e) {
        var_dump($e);
    }
    ?>
    
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>registrazione utente</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

    <?php
    
         $queryRes = $pdo->query('SELECT email, first_name, last_name * FROM users;');
    
        foreach($queryRes as $row) {
            echo "
                <tr>
                    <td>{$row["id"]}</td>
                    <td>{$row["email"]}</td>
                    <td>{$row["first_name"]}</td>
                    <td>{$row["last_name"]}</td>

                </tr>
            ";
        }
    ?>
        </tbody>
    </table>
    
        <label>Utente registrato clicca sul link e procedi</label>
    <a href="progetto7posts.php"></a>

</body>
</html>
    