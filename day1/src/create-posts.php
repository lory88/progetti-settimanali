<?php
require_once 'connect.php';
$connection = connect();
$query = $connection -> prepare("
    INSERT INTO posts(titolo, contenuto, commento, user_id) VALUES
    (?,?,?,?);
");

$queryRes = $query -> execute ([
    $_POST['titolo'],
    $_POST['contenuto'],
    $_POST['commento'],
    $_POST['user_id'],

]);

header ('location: http://localhost/day1/src/posts.php ? success =' . ($queryRes ? 'true' : 'false'));