<?php
    require 'connect.php';

$connection = connect();
$posts = $connection-> query ("
    SELECT * FROM posts;
");
//join users on posts.user_id = users.id;


require_once 'header.php';
?>

<h1> Posts</h1>
<?php if(isset($_GET ['success'])) : ?>
    <div>
        <?php if ($_GET ['success'] === 'true') : ?>
            Il tuo post è stato pubblicato!
        <?php else: ?>
            Errore il tuo post non è stato pubblicato!
        <?php endif; ?>
    </div>
<?php endif; ?>

        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Titolo</th>
                    <th>Contenuto</th>
                    <th>Commenti</th>
                    <th></th>
                </tr>
            </thead>
                <tbody>
                    <?php foreach($posts as $post) : ?>
                            <tr>
                                <td><?= $post['id']?></td>
                                <td><?= $post['titolo']?></td>
                                <td><?= $post['contenuto']?></td>
                                <td><?= $post['commento']?></td>
                                <td>
                                    <a href="delete-post.php?id=<?=$post['id']?>">delete post</a>
                                </td>               
                            </tr>
                <?php endforeach; ?>  
            </tbody>
        </table>

        <?php require_once 'footer.php'; ?>