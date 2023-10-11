<?php
function HeaderComponent()
{
?>
    <link rel="stylesheet" href="../component/Header/HeaderComponent.css" />
    <nav class="navbar navbar-expand-sm header__navbar mb-4">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand" href="index.php" style="font-family: Arial, Helvetica, sans-serif;">
                <img src="../asset/img/nhaccuatui.jpeg" alt="nhaccuatui" class="rounded img-fluid" style="width: 25px; height: 25px;">
                <strong class="header__logo-text">NCT</strong></a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown position-static">
                    <div class="dropdown-menu w-50 mt-0" aria-labelledby="navbarDropdown" style="
                          border-top-left-radius: 0;
                          border-top-right-radius: 0;
                        ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" id="dropdownMenuButton" style="color: black;">Tuyển
                        Tập</a>
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
                        <li><a class="dropdown-item" href="songspage.php?mode=local">Việt Nam</a></li>
                        <li><a class="dropdown-item" href="songspage.php?mode=international">Quốc Tế</a></li>
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
            <div class="d-flex align-items-stretch column-gap-3 ">
                <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="search" style="width: 360px;" id="icon-check">
                <!-- Singin -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalFormLogin">
                    Singin
                </button>
                <div class="modal fade" id="ModalFormLogin" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="myform bg-light">
                                    <h1 class="text-center">Singin</h1>
                                    <form>
                                        <div class="mb-3 mt-4">
                                            <label for="exampleInputtext" class="form-label">Name User: </label>
                                            <input type="text" class="form-control" id="exampleInputtext">
                                        </div>
                                        <div class="mb-3">
                                            <label for="InputPassword" class="form-label">Password:</label>
                                            <input type="password" class="form-control" id="InputPassword">
                                        </div>
                                        <button type="submit" class="btn btn-secondary">Login</button>
                                        <p>Not a member? <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalSingupForm">
                                                SingUp
                                            </button></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -- Singup -- -->
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ModalSingupForm">
                    Singup
                </button>
                <div class="modal fade" id="ModalSingupForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                <div class="myform bg-light">
                                    <h1 class="text-center">Singup</h1>
                                    <form>
                                        <div class="mb-3 mt-4">
                                            <label for="exampleInputtext" class="form-label">Name User: </label>
                                            <input type="text" class="form-control" id="exampleInputtext">
                                        </div>
                                        <div class="mb-3 mt-4">
                                            <label for="exampleInputEmail" class="form-label">Email: </label>
                                            <input type="email" class="form-control" id="exampleInputEmail">
                                        </div>
                                        <div class="mb-3">
                                            <label for="InputPassword" class="form-label">Password:</label>
                                            <input type="password" class="form-control" id="InputPassword">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ConfirmPassword" class="form-label">Confirm Password:</label>
                                            <input type="password" class="form-control" id="ConfirmPassword">
                                        </div>
                                        <button type="submit" class="btn btn-secondary">Singup</button>
                                        <p>You are Member? <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalFormLogin">
                                                SingIn</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </ul>
    </nav>
<?php
}
?>