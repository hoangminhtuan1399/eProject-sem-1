
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musicworld-registration</title>
</head>

<body>
    <div>
        <form action="Musicworld-register3.php" method="post">
            <div class="container">
                <h1>Đăng Ký</h1>
                <p>Thông tin dưới đây là bắt buộc</p>

                <table>
                    <tr>
                        <td>
                            <label for="username">Tên Đăng Nhập</label>
                        </td>
                        <td>
                            <input type="text" name="username" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="password">Mật Khẩu</label>
                        </td>
                        <td>
                            <input class="password" type="password" name="password" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="confirmpassword">Nhập lại Mật Khẩu</label>
                        </td>
                        <td>
                            <input class="confirmPassword" type="password" name="confirmpassword" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label for="email">Email</label>
                        </td>
                        <td>
                            <input type="email" name="email" required>
                        </td>
                    </tr>

                    <tr>
                        <button class="button" type="submit">Đăng Ký</button>
                    </tr>
                </table>

            </div>
        </form>

        <script>
            document.querySelector('.button').onclick = function(){

                var password = document.querySelector('.password').value,
                    confirmPassword = document.querySelector('.confirmPassword').value;

                    if(password == ""){
                        alert("Ô này là bắt buộc.")
                    }
                    else if(password != confirmPassword){
                        alert("Mật khẩu không khớp. Xin vui lòng thử lại!");
                        return false
                    }
                    else if(password == confirmPassword){
                        alert("Bạn đã đăng ký thành công.")
                        return true
                    }
            }
        </script>

    </div>
</body>

</html>
