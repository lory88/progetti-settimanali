<?php
require_once 'connect.php';
$connection = connect();
$query = $connection ->prepare ("delete FROM posts where id = :id");
$query -> bindValue (':id',$_GET['id']);
$res = $query -> execute();
if ($res){
    echo "POST ELIMINATO";
}
echo $_GET['id'];
