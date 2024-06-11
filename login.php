<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Toko Baju</title>
</head>
<body>
    <div class="login">
        <h1>Mancunian Shop</h1>
        <form action="verifikasi_login.php" method="post">
            <fieldset>
                <legend>Login Place</legend>
                    <p>
                        <label for="username">Username</label>
                        <input type="text" name="username" >
                    </p>
                    <p>
                        <label for="password">Password </label>
                        <input type="password" name="password" id="">
                    </p>
                    <p>
                        <input type="submit" value="Log In" name="submit">
                    </p>
            </fieldset>
        </form>
    </div>
</body>
</html>