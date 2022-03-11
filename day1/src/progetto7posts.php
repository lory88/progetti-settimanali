<?php
    require 'connect.php';
    
    $pdo = connect();    
    $queryRes = $pdo->query('SELECT id, first_name FROM users;');//seleziono gli id e il nome utente
?>


<!DOCTYPE html>
<html>
    <head>
        <title>POSTS</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
    <form action="save7-posts.php" method="POST">
        <input type="text" name="titolo" id="titolo">
        <select name="user" >
            <?php
            foreach($queryRes as $row){ //per il menu a tendina
                echo "<option value={$row['id']}>{$row['first_name']}</option>";
            }
            ?>     
</select>
               
<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Comments</label>
  <button type="submit" name="salva">Salva</button>

            </form>
</body>
</html>
