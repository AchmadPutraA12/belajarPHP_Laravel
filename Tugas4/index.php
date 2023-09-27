<?php 
$username1 = ["admin","achmad","haris"];
$password2 = ["admin","achmad","haris"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 PHP</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="profile">
            <img src="images/menu.png" class="menu">
            <img src="images/setting.png" class="setting">
            <img src="images/achmad.jpg" class="gambar-profil">
            <h3>Tugas Ke 4 PHP</h3>
            <p>Achmad Putra Arifky</p>
            <br>
            <div class="">
                <form method="POST">
                    <label for="">Username</label>
                    <input class="input-field" name="username" type="text" placeholder="USERNAME" required>
                    <br><br>
                    <label for="">Password</label>
                    <input class="input-field" name="password" type="password" placeholder="PASSWORD" required>
                    <br><br>
                    <button name="simpan" class="center" id="click">Login</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['simpan'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
        function Login ($username, $password){
            if ($username == "admin" && $password == "admin"){
                header("Location: belajar.php");
            }else{
                header("Location: index.php");
            }
        }
        Login($user,$pass);
    }
    ?>
</body>

</html>