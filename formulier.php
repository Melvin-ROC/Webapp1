<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if($username == "Melvin" && $password == "123") {
        $_SESSION['name'] = $username;
    } else {
        echo "Wachtwoord is niet goed!";
    }
}


if(isset($_SESSION['name']) && $_SESSION['name'] != "") {
    echo "Hoi " . $_SESSION['name'];
}
?>

<h1>Login formulier</h1>
<form action="formulier.php" method="POST">
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
    <button type="submit">Verstuur</button>
</form>

</body>
</html>