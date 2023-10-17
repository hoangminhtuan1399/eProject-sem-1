<?php
function HeaderComponent()
{
    include_once __DIR__ . "/../../../backend/api/Category/CategoryView.class.php";
    $CategoryView = new CategoryView();
    $categories = $CategoryView->showAllCategory();
    $currentURL = explode('/', $_SERVER['REQUEST_URI']);
    $currentPage = end($currentURL);
    $userSignedIn = isset($_SESSION['username']) && strlen(trim($_SESSION['username'])) > 0;

?>

    <link rel="stylesheet" href="../component/Header/HeaderComponent.css" />
    <nav class="navbar navbar-expand-lg bg-primary-subtle mb-4">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="index.php" style="font-family: Arial, Helvetica, sans-serif;">
                <img src="../asset/img/nhaccuatui.jpeg" alt="nhaccuatui" class="rounded img-fluid" style="width: 25px; height: 25px;">
                <strong class="header__logo-text">NCT</strong>
            </a>
            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <div class="navbar-nav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown position-static">
                            <div class="dropdown-menu w-50 mt-0" aria-labelledby="navbarDropdown" style="
                          border-top-left-radius: 0;
                          border-top-right-radius: 0;
                        ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="dropdownMenuButton" style="color: black; cursor: pointer">
                                Tuyển Tập
                            </a>
                            <ul class="dropdown-menu rounded-1 shadow-sm" aria-labelledy="dropdownMenuButton">
                                <?php
                                foreach ($categories as $category) {
                                ?>
                                    <li><a class="dropdown-item" href="category.php?id=<?php echo $category['category_id'] ?>"><?php echo $category['name'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="dropdownMenuButton" style="color: black; cursor: pointer">
                                BXH
                            </a>
                            <ul class="dropdown-menu rounded-1 shadow-sm dropdown-wrap" aria-label="dropdownMenuButton">
                                <li><a class="dropdown-item" href="all-song.php?mode=local">Việt Nam</a></li>
                                <li><a class="dropdown-item" href="all-song.php?mode=international">Quốc Tế</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" id="dropdownMenuButton" style="color: black; cursor: pointer">
                                Nghệ Sĩ
                            </a>
                            <ul class="dropdown-menu rounded-1 shadow-sm dropdown-wrap" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="all-singer.php?mode=local">Việt Nam</a></li>
                                <li><a class="dropdown-item" href="all-singer.php?mode=international">Quốc Tế</a></li>
                            </ul>
                        </li>
                        </li>
                    </ul>
                </div>
                <div class="d-flex gap-2 flex-column flex-lg-row">
                    <form class="d-flex" action="search.php" method="GET">
                        <div class="input-group search_login-register">
                            <input name="search" type="text" class="form-control rounded pe-1 me-2" aria-label="search" placeholder="Tìm Kiếm" required>
                            <button class="btn btn-primary rounded m-0" id="search-button" type="submit">Tìm kiếm</button>
                            <input type="hidden" name="type" value="song">
                        </div>
                    </form>

                    <?php
                    if ($userSignedIn) {
                        $username = $_SESSION['username'];
                    ?>
                        <p class="mb-0 d-flex align-items-center column-gap-1">Xin chào <strong><?php echo $username ?></strong></p>
                        <button type="button" class="btn btn-link px-0" data-bs-toggle="modal" data-bs-target="#ModalSignOut">Đăng xuất</button>
                        <div class="modal fade" id="ModalSignOut" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h6 class="fw-bold">Bạn muốn đăng xuất chứ?</h6>
                                    </div>
                                    <div class="modal-footer">
                                        <form action="handle-sign-out.php" method="POST">
                                            <input type="hidden" name="currentPage" value="<?php echo $currentPage ?>">
                                            <button type="submit" class="btn btn-danger">Đăng xuất</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Không</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <!-- Singin -->
                        <div class="d-flex column-gap-2">
                            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ModalFormLogin">
                                Đăng nhập
                            </button>
                            <div class="modal fade" id="ModalFormLogin" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-light-subtle">
                                        <div class="modal-body">
                                            <div class="myform">
                                                <h2 class="text-center">Đăng nhập</h2>
                                                <form id="sign-in-form" class="needs-validation" novalidate action="handle-sign-in.php" method="POST">
                                                    <input type="hidden" name="currentPage" value="<?php echo $currentPage ?>">
                                                    <div class="mb-3 mt-4">
                                                        <label for="signin-username" class="form-label">Tên đăng nhập: </label>
                                                        <input type="text" class="form-control" name="username" id="signin-username" required>
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập tên đăng nhập
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="signin-password" class="form-label">Mật khẩu:</label>
                                                        <input type="password" class="form-control" name="password" id="signin-password" required>
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập mật khẩu
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                                    <p class="mt-3">Chưa có tài khoản?
                                                        <button type="button" class="btn p-0 text-decoration-underline" data-bs-toggle="modal" data-bs-target="#ModalSingupForm">
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
                            <div class="modal fade" id="ModalSingupForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-light-subtle">
                                        <div class="modal-body">
                                            <div class="myform">
                                                <h2 class="text-center">Đăng ký</h2>
                                                <form id="sign-up-form" class="needs-validation" novalidate action="handle-sign-up.php" method="POST">
                                                    <input type="hidden" name="currentPage" value="<?php echo $currentPage ?>">
                                                    <div class="mb-3 mt-2">
                                                        <label for="signup-email" class="form-label">Email: </label>
                                                        <input type="email" name="email" class="form-control" id="signup-email" required>
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập email
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4">
                                                        <label for="signup-username" class="form-label">Tên đăng nhập: </label>
                                                        <input type="text" name="username" class="form-control" id="signup-username" required>
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập tên đăng nhập
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="signup-password" class="form-label">Mật khẩu:</label>
                                                        <input type="password" name="password" class="form-control" id="signup-password" required>
                                                        <div class="invalid-feedback">
                                                            Vui lòng nhập mật khẩu
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="signup-confirm-password" class="form-label">Xác nhận mật
                                                            khẩu:</label>
                                                        <input type="password" name="confirm-password" class="form-control" id="signup-confirm-password" required>
                                                        <div class="invalid-feedback">
                                                            Mật khẩu không khớp
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                                                    <p class="mt-3">Đã có tài khoản?
                                                        <button type="button" class="btn p-0 text-decoration-underline" data-bs-toggle="modal" data-bs-target="#ModalFormLogin">
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
                    <?php
                    }
                    ?>
                </div>
            </div>
    </nav>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                const signInForm = document.querySelector('#sign-in-form') || document.createElement('div');
                signInForm.addEventListener('submit', function(event) {
                    if (signInForm.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    signInForm.classList.add('was-validated');
                }, false);

                const signUpForm = document.querySelector('#sign-up-form') || document.createElement('div');
                signUpForm.addEventListener('submit', function(event) {
                    let confirmPasswordStatus = true;
                    const passwordInput = signUpForm.querySelector('#signup-password');
                    const confirmPasswordInput = signUpForm.querySelector('#signup-confirm-password');
                    if (confirmPasswordInput.value !== passwordInput.value) {
                        confirmPasswordInput.setCustomValidity('Mật khẩu không khớp');
                        confirmPasswordStatus = false;
                    } else {
                        confirmPasswordInput.setCustomValidity('');
                    }
                    if (signUpForm.checkValidity() === false || !confirmPasswordStatus) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    signUpForm.classList.add('was-validated');
                }, false);
            }, false);
        })();
    </script>
    <?php
    if (isset($_SESSION['signIn'])) {
        $signInStatus = $_SESSION['signIn'];
        if ($signInStatus === 'fail') {
    ?>
            <div id="signin-toast" class="toast mt-2 position-absolute top-0 start-50 translate-middle-x text-bg-danger align-items-center" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
                <div class="d-flex">
                    <div class="toast-body">
                        Sai tên đăng nhập hoặc mật khẩu!
                    </div>
                </div>
            </div>
            <?php
        } else {
            if ($signInStatus === 'success') {
            ?>
                <div id="signin-toast" class="toast mt-2 position-absolute top-0 start-50 translate-middle-x text-bg-success align-items-center" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
                    <div class="d-flex">
                        <div class="toast-body">
                            Đăng nhập thành công!
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        $_SESSION['signIn'] = '';
        ?>
        <script>
            window.addEventListener('load', function() {
                const toastElement = document.querySelector('#signin-toast') || document.createElement('div');
                new bootstrap.Toast(toastElement).show();
            });
        </script>
        <?php
    }
    if (isset($_SESSION['signUp'])) {
        $signUpStatus = $_SESSION['signUp'];
        if ($signUpStatus === 'fail') {
        ?>
            <div id="signup-toast" class="toast mt-2 position-absolute top-0 start-50 translate-middle-x text-bg-danger align-items-center" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
                <div class="d-flex">
                    <div class="toast-body">
                        Tên đăng nhập hoặc email đã tồn tại!
                    </div>
                </div>
            </div>
            <?php
        } else {
            if ($signUpStatus === 'success') {
            ?>
                <div id="signup-toast" class="toast mt-2 position-absolute top-0 start-50 translate-middle-x text-bg-success align-items-center" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
                    <div class="d-flex">
                        <div class="toast-body">
                            Đăng ký thành công!
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        $_SESSION['signUp'] = '';
        ?>
        <script>
            window.addEventListener('load', function() {
                const toastElement = document.querySelector('#signup-toast') || document.createElement('div');
                new bootstrap.Toast(toastElement).show();
            });
        </script>
    <?php
    }
    ?>
<?php
}

?>