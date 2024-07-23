<?php
require '../vendor/autoload.php';
require '../config.php';
require '../functions.php';

//Show login options

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <a href="login.php?provider=google">Login with Google</a><br>
    <a href="login.php?provider=github">Login with Github</a><br>
    <a href="login.php?provider=apple">Login with Apple</a><br>
    <button onclick="startFido2Login()">Login with FIDO2</button>

    <script>
        function startFido2Login() {
            //javaScript to start FIDO2 login process
        }
    </script>
</body>
</html>
