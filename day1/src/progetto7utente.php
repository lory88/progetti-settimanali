<!DOCTYPE html>
<html>
    <head>
        <title>Registrazione</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
    <form action="save7-utenti.php" method="POST">
            <h1>Registrazione</h1>
            <input type="text" id="email" placeholder="Email" name="email" maxlength="50" required>
            <input type="password" id="password" placeholder="Password" name="password" required>
            <input type="text" id="first_name" placeholder="First_name" name="first_name" maxlength="50" required>
            <input type="text" id="last_name" placeholder="Last_name" name="last_name" maxlength="50" required>
            <button type="submit" name="register">Registrati</button>
        </form>
    </body>
</html>