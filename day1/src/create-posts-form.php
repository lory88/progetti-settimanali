<?php
require_once 'connect.php';

$connection = connect(); //si collega al db
$users = $connection -> query ('SELECT id, first_name FROM users');//query metodo dell'oggetto pdo

require_once "header.php";
?>

<form action = "create-posts.php" method ="POST">
    <div>
        <label for ="titolo"> Titolo</label>
        <input type ="text" name ="titolo" id="titolo">
    </div>
    <div>
        <label for ="contenuto"> Contenuto</label>
        <input type ="text" name ="contenuto" id="contenuto">
    </div>
    <div>
        <label for ="commento"> Commenti</label>
    <textarea class="form-control" name="commento" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
    </div>
    <select name = "user_id">
        <?php foreach ($users as $user) : ?>
            <option value="<?=$user['id'];?>"><?=$user ['first_name'];?> </option>
        <?php endforeach; ?>
    </select>
    <div>
        <button name ="submit">Salva</button>
    </div>
</form>

<?php require_once 'footer.php'; ?>