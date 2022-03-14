<?php
require 'connect.php';
$connection = connect();
$users = $connection -> query("
    SELECT * FROM users
    join roles on users.role_id = roles.id;
");

require_once 'header.php';
?>
    
<h1> Users</h1> <!-- GET serve per passare dei parametri dall'url al browser
il get serve x mandare delle variabili che l'utente puo vedere nell'url-->
<?php if (isset($_GET['success'])) : ?>  
    <div>
        <?php if ($_GET['success'] === 'true') : ?>
            Utente registrato con successo!!
            <?php else: ?>
                Errore nella creazione dell'utente!
        <?php endif; ?>
    </div>   
<?php endif; ?>
<table>
        <thead>
            <tr>
                <th>id</th>
                <th>email</th>
                <th>First name</th>
                <th>Last name</th>
                <th>role</th>
                <th></th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($users as $user) :?>
                <tr>
                    <td><?= $user["id"]?></td>
                    <td><?= $user["email"]?></td>
                    <td><?= $user["first_name"]?></td>
                    <td><?= $user["last_name"]?></td>
                    <td><?= $user["name"]?></td>
                    <td>
                    <a href="delete-user.php?id=<?= $user['id'] ?>">Delete</a>
                    </td>
                </tr>
        <?php endforeach;?>
    <tbody>
</table>
<a href="create-posts-form.php">clicca per entrare nei posts</a>
    
<?php require_once 'footer.php'; ?>