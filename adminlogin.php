<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Login</title>
        <meta name="description" content="Admin Login | DBMS Mini Project">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/styles1.css">
    </head>
    <body>
        <div class="login-form">
            <h2>Login to your account</h2>
            <form action="php/checklogin.php" method="POST">
                <label>Email
                    <input type="email" id="email" placeholder="email" name="email">
                </label>
                <br><br>

                <label>Password
                    <input type="password" id="password" placeholder="password" name="password">
                </label>
                <br><br>

                <div class="submit-form">
                    <input type="submit" id="login" name="login" value="Login">
                </div>
            </form>
        </div>
    </body>
</html>