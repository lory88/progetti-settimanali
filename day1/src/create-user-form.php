<?php
    require_once 'connect.php';

    $connection = connect();
    $roles = $connection -> query ('SELECT * FROM roles');
    
    require_once 'header.php';

    ?>
<form action="create-user.php" method="POST">
            <h1>Registrazione</h1>
            <input type="text" id="email" placeholder="Email" name="email" maxlength="50" required>
            <input type="password" id="password" placeholder="Password" name="password" required>
            <input type="text" id="first_name" placeholder="First_name" name="firstName" maxlength="50" required>
            <input type="text" id="last_name" placeholder="Last_name" name="lastName" maxlength="50" required>
            <button type="submit" name="register">Registrati</button>
            <select name ="roleId">
                <?php foreach($roles as $role) :?>
                    <option value="<?=$role['id'];?>"><?=$role ['name'];?> </option>
                <?php endforeach; ?>
            </select>
</form>

<?php require_once 'footer.php'; ?>