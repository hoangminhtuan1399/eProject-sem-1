<?php
function HeaderComponent()
{
    $currentURL = explode('/', $_SERVER['REQUEST_URI']);
    $currentPage = end($currentURL);
    ?>
    <link rel="stylesheet" href="../component/Header/HeaderComponent.css" />
    <nav class="navbar navbar-expand-sm header__navbar mb-4">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand" href="index.php" style="font-family: Arial, Helvetica, sans-serif;">
                <img src="../asset/img/nhaccuatui.jpeg" alt="nhaccuatui" class="rounded img-fluid"
                     style="width: 25px; height: 25px;">
                <strong class="header__logo-text">NCT</strong>
            </a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown position-static">
                    <div class="dropdown-menu w-50 mt-0" aria-labelledby="navbarDropdown" style="
                          border-top-left-radius: 0;
                          border-top-right-radius: 0;
                        ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" id="dropdownMenuButton" style="color: black;">
                                Tuyển Tập
                            </a>
                            <ul class="dropdown-menu rounded-1 shadow-sm" aria-labelledy="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Ballad</a></li>
                                <li><a class="dropdown-item" href="#">Rock</a></li>
                                <li><a class="dropdown-item" href="#">Pop</a></li>
                                <li><a class="dropdown-item" href="#">Rap</a></li>
                                <li><a class="dropdown-item" href="#">Nhạc Trẻ</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="" id="dropdownMenuButton" style="color: black;">
                                BXH
                            </a>
                            <ul class="dropdown-menu rounded-1 shadow-sm" aria-label="dropdownMenuButton">
                                <li><a class="dropdown-item" href="all-song.php?mode=local">Việt Nam</a></li>
                                <li><a class="dropdown-item" href="all-song.php?mode=international">Quốc Tế</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="" id="dropdownMenuButton" style="color: black;">
                                Nghệ Sĩ
                            </a>
                            <ul class="dropdown-menu rounded-1 shadow-sm" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="all-singer.php?mode=local">Việt Nam</a></li>
                                <li><a class="dropdown-item" href="all-singer.php?mode=international">Quốc Tế</a></li>
                            </ul>
                        </li>
            </ul>
        </div>
        <div class="d-flex flex-shrink-0 align-items-stretch column-gap-3 pe-2">
            <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="search" style="width: 360px;"
                   id="icon-check">
            <button class="btn btn-primary my-2 my-sm-0" id="search-button" type="submit">Tìm kiếm</button>
            <!-- Singin -->
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ModalFormLogin">
                Đăng nhập
            </button>
            <div class="modal fade" id="ModalFormLogin" tabindex="-1" aria-labelledby="ModalFormLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-light-subtle">
                        <div class="modal-body">
                            <div class="myform">
                                <h2 class="text-center">Đăng nhập</h2>
                                <form class="needs-validation" novalidate action="handle-sign-in.php" method="POST">
                                    <input type="hidden" name="currentPage" value="<?php echo $currentPage ?>">
                                    <div class="mb-3 mt-4">
                                        <label for="signin-username" class="form-label">Tên đăng nhập: </label>
                                        <input type="text" class="form-control" name="username" id="signin-username"
                                               required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập tên đăng nhập
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="signin-password" class="form-label">Mật khẩu:</label>
                                        <input type="password" class="form-control" name="password"
                                               id="signin-password" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập mật khẩu
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                    <p class="mt-3">Chưa có tài khoản?
                                        <button type="button" class="btn p-0 text-decoration-underline"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ModalSingupForm">
                                            Đăng ký
                                        </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -- Singup -- -->
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ModalSingupForm">
                Đăng ký
            </button>
            <div class="modal fade" id="ModalSingupForm" tabindex="-1" aria-labelledby="ModalFormLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-light-subtle">
                        <div class="modal-body">
                            <div class="myform">
                                <h2 class="text-center">Đăng ký</h2>
                                <form class="needs-validation" novalidate action="handle-sign-up.php" method="POST">
                                    <input type="hidden" name="currentPage" value="<?php echo $currentPage ?>">
                                    <div class="mb-3 mt-2">
                                        <label for="signup-email" class="form-label">Email: </label>
                                        <input type="email" name="email" class="form-control" id="signup-email"
                                               required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập email
                                        </div>
                                    </div>
                                    <div class="mb-3 mt-4">
                                        <label for="signup-username" class="form-label">Tên đăng nhập: </label>
                                        <input type="text" name="username" class="form-control" id="signup-username"
                                               required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập tên đăng nhập
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="signup-password" class="form-label">Mật khẩu:</label>
                                        <input type="password" name="password" class="form-control"
                                               id="signup-password" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập mật khẩu
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="signup-confirm-password" class="form-label">Xác nhận mật
                                            khẩu:</label>
                                        <input type="password" name="confirm-password" class="form-control"
                                               id="signup-confirm-password" required>
                                        <div class="invalid-feedback">
                                            Mật khẩu không khớp
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                                    <p class="mt-3">Đã có tài khoản?
                                        <button type="button" class="btn p-0 text-decoration-underline"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ModalFormLogin">
                                            Đăng nhập
                                        </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                const validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        let confirmPasswordStatus = true;
                        const password = form.querySelector('#signup-password')?.value;
                        const confirmPasswordInput = form.querySelector('#signup-confirm-password');

                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <?php
    if (isset($_SESSION['signIn'])) {
        $signInStatus = $_SESSION['signIn'];
        if ($signInStatus === 'fail') {
            ?>
            <div id="signin-toast" class="toast mt-2 position-absolute top-0 start-50 translate-middle-x text-bg-danger align-items-center"
                 role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3000">
                <div class="d-flex">
                    <div class="toast-body">
                        Sai tên đăng nhập hoặc mật khẩu
                    </div>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                </div>
            </div>
            <script>
                window.addEventListener('load', function() {
                    const toastElement = document.querySelector('#signin-toast');
                    new bootstrap.Toast(toastElement).show();
                })
            </script>
            <?php
            $_SESSION['signIn'] = '';
        }
    }
    ?>
    <?php
}

?>