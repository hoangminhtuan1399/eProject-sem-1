<php require_once('Musicworld-config.php'); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="Musicworld-registration.css">
        <style>
            
        </style>
        <title>Musicworld-registration</title>
        <script>
            function matchPassword() {
                var password1 = document.getElementById("password1");
                var password2 = document.getElementById("password2");
                if (password1 != password2) {
                    alert("Passwords did not match");
                } else {
                    alert("Password created successfully");
                }
            }
        </script>
    </head>

    <body>
        <table>
            <form action="Musicworld-process.php" method="post">
                <div class="conainer">
                        <h1>Đăng Ký</h1>
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
                                <label for="password1"><b>Mật Khẩu</b></label>
                            </td>
                            <td>
                                <input type="password" name="password1" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="password2"><b>Nhập Lại Mật Khẩu</b></label>
                            </td>
                            <td>
                                <input type="password" name="password2" required>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="email"><b>Email</b></label>
                            </td>
                            <td>
                                <input type="email" name="email" required>
                            </td>
                        </tr>

                        <div class="container"></div>
                    <footer>
                        <tr>
                            <input class="btn btn-primary" type="submit" name="create" value="Đăng Ký">
                        </tr>
                    </footer>
                </div>
            </form>
        </table>
    </body>

    </html>