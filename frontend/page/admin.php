<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "music_world_db";


session_start();


$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("connection error");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "select * from music_world_db.users where username='" . $username . "' AND password='" . $password . "' ";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);
    print_r($result);
    if ($result->num_rows < 1) {
        echo "Tài khoản hoặc mật khẩu không đúng";
    } else {
        if ($row["role"] == "0") {

            $_SESSION["username"] = $username;

            header("location:test-user-home.php");
        } else {
            //header("location:test-login.php");
            $txt_erro = "Tài khoản hoặc mật khẩu không đúng";
        }

        if ($row["role"] == "1") {

            $_SESSION["username"] = $username;

            header("location:test-admin-home.php");
        } else {
            $txt_erro = "Tài khoản hoặc mật khẩu không đúng";
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link rel="stylesheet" href="test-login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>
    <header class="header">
        <H1>ĐĂNG NHẬP</H1>
    </header>
    <p>Những thông tin dưới đây là bắt buộc</p>
    <form action="#" method="POST">
        <div class="user">
            <table>
                <tr>
                    <td>
                        <label for="username">Tên đăng nhập:</label>
                    </td>
                    <td>
                        <input type="text" id="username" name="username" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="password">Mật khẩu:</label>
                    </td>
                    <td>
                        <input type="password" id="password" name="password" required>
                    </td>
                </tr>
            </table>
        </div>

        <div class="inputbox">
            <button class="btn-login">ĐĂNG NHẬP</button>
        </div>
        <?php
        if (isset($txt_erro) && ($txt_erro != "")) {
            echo "<font color='red'>" . $txt_erro . "</font>";
        }
        ?>
    </form>
</body>

</html>