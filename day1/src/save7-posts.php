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
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>titolo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $queryRes = $pdo->query("SELECT id, titolo from posts");//seleziono gli elementi

                    foreach($queryRes as $row) {
                        echo "
                            <tr>
                                <td>{$row["id"]}</td>
                                <td>{$row["titolo"]}</td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>