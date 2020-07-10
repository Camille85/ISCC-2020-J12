<!DOCTYPE html>
<html>
    <head>
        <title>Page de connexion</title>
    </head>
    <body>
        <form action="securite.php" method="post" enctype= "multipart/form-data">
                <label for="login"></label>
                <input type="text" id="login" name="user_login" placeholder="Login">
                <label for="password"></label>
                <input type="mdp" id="password" name="user_password" placeholder="Password">
                <button type="Connexion" id="button">Connexion</button>
        </form>
    </body>
</html>