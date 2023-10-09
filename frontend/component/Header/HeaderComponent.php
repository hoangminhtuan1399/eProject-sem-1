<?php
function HeaderComponent()
{
    ?>
    <link rel="stylesheet" href="../component/Header/HeaderComponent.css" />
    <nav class="navbar navbar-expand-sm header__navbar mb-4">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand" href="index.php" style="font-family: Arial, Helvetica, sans-serif;">
                <img src="../asset/img/nhaccuatui.jpeg" alt="nhaccuatui" class="rounded img-fluid"
                     style="width: 25px; height: 25px;">
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
                            <a class="nav-link dropdown" href="#" id="dropdownMenuButton" style="color: black;">
                                BXH
                            </a>
                            <ul class="dropdown-menu rounded-1 shadow-sm" aria-label="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Việt Nam</a></li>
                                <li><a class="dropdown-item" href="#">Quốc Tế</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="#" id="dropdownMenuButton" style="color: black;">
                                Nghệ Sĩ
                            </a>
                            <ul class="dropdown-menu rounded-1 shadow-sm" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Việt Nam</a></li>
                                <li><a class="dropdown-item" href="#">Quốc Tế</a></li>
                            </ul>
                        </li>
            </ul>
            <div class="d-flex align-items-stretch column-gap-2">
                <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="search" style="width: 360px;"
                       id="icon-check">
                <button type='button'
                        class="px-3 text-decoration-none rounded-2 d-flex justify-content-center align-items-center header__login-link"
                        data-toggle="modal" data-target="#UpWindow">Đăng nhập
                </button>
                <a class="px-3 text-reset text-decoration-none rounded-2 d-flex justify-content-center align-items-center"
                   href="#" style="color: white;">Đăng kí</a>
            </div>
        </div>
        </ul>
    </nav>
    <?php
}
?>