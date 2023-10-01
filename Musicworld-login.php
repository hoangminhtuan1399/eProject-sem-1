<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <table>
        <form action="Musicworld-process.php" class="dangnhap" method='POST'>
            <h1>Đăng Nhập</h1>
            <p>Những thông tin sau là bắt buộc</p>
            <tr>
                <td>
                    <label for="username"><b>Tên Đăng Nhập</b></label>
                </td>
                <td>
                    <input type="text" name="username" required>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password"><b>Mật Khẩu</b></label>
                </td>
                <td>
                    <input type="password" name="password" required>
                </td>
            </tr>

            <tr>
                <input class="btn btn-primary" type="submit" name="create" value="Đăng Nhập">
            </tr>
        </form>
    </table>
</body>

</html>

<?php
session_start();
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
if ($username == 'admin' && $password == '123') {
    $_SESSION['user'] = $username;
    header("location:home.php");
} else {
    echo "incorrect username and password";
}
?>