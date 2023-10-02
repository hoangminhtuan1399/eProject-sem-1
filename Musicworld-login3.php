<!DOCTYPE html>
<html>

<head>
    <title>Form Đăng Nhập</title>
</head>

<body>

    <h2>Đăng Nhập</h2>

    <form action="Musicworld-login3.php" method="post">

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

            <tr>
                <td>
                    <input type="submit" value="Đăng Nhập">
                </td>
            </tr>
        </table>

    </form>

</body>

</html>

//kiểm tra đăng nhập
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "your_username" && $password === "your_password") {
        echo "Đăng nhập thành công!";
    } else {
        echo "Đăng nhập thất bại. Vui lòng kiểm tra lại thông tin đăng nhập.";
    }
}
?>

