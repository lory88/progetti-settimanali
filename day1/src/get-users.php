<?php
    require 'connect.php';

    $pdo=connect();

    try {
        $pdo->query("INSERT INTO posts (titolo, user_id) VALUES 
            ('{$_POST['titolo']}','{$_POST['user']}');
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
    <?php
    require 'connect.php';
    
    $pdo = connect();    
    $queryRes = $pdo->query('SELECT * FROM posts;');
?>

    <table>
        <thead>
            <tr>
                <th>registrazione utente</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
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
</body>
</html>