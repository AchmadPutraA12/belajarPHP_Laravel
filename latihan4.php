<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="pass"><br>
        <input type="submit" name="login" value="login" id="">

    </form>
</body>

</html>

<?php
$username = $_POST['username'];
$password = $_POST['pass'];
$login = $_POST['login'];
if (isset($login)) {
    echo 'Hallo : ' . $username . '<br> Password : ' . $password . '<div class="">asas</div>';
}
?>