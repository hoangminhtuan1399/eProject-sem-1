<?php
    require("Connectdb.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">\
    <link rel="stylesheet" href="login-to-admin/admin-login.css">
    <title>Document</title>
</head>

<body>
    <h2>Đăng Nhập</h2>
    <div class="main">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

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
                <?php
                    if(isset($txt_erro)&&($txt_erro!="")){
                        echo $txt_erro;
                    }
                ?>
            </table>

        </form>
    </div>

</body>

</html>