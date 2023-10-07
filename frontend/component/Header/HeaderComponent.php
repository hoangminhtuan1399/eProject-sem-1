<?php
function HeaderComponent()
{
?>
    <link rel="stylesheet" href="../component/Header/HeaderComponent.css" />
    <nav class="navbar navbar-expand-sm header__navbar mb-4">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand" href="#" style="font-family: Arial, Helvetica, sans-serif;">
                <img src="../img/nhaccuatui.jpeg" alt="nhaccuatui" class="rounded img-fluid" style="width: 25px; height: 25px;">
                <strong class="header__logo-text">NCT</strong></a>
            <ul class="navbar-nav me-auto">
            <li class="nav-item dropdown position-static">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-mdb-toggle="dropdown" aria-expanded="false">
            Bài Hát
          </a>
          <div class="dropdown-menu w-50 mt-0" aria-labelledby="navbarDropdown" style="
                          border-top-left-radius: 0;
                          border-top-right-radius: 0;
                        ">
            <div class="container-fluid ">
              <div class="row my-3">
                <div class="col-md-3 col-lg-3 mb-3 mb-lg-2">
                  <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action"><b>Việt Nam</b></a>
                    <a href="" class="list-group-item list-group-item-action">Nhạc trẻ</a>
                    <a href="" class="list-group-item list-group-item-action">Trữ Tình</a>
                    <a href="" class="list-group-item list-group-item-action">Rap Việt</a>
                    <a href="" class="list-group-item list-group-item-action">Pop Ballad</a>
                    <a href="" class="list-group-item list-group-item-action">Nhạc Trịnh</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action"><b>Âu Mỹ</b></a>
                    <a href="" class="list-group-item list-group-item-action">Pop</a>
                    <a href="" class="list-group-item list-group-item-action">Rock</a>
                    <a href="" class="list-group-item list-group-item-action">Latin</a>
                    <a href="" class="list-group-item list-group-item-action">Indie</a>
                    <a href="" class="list-group-item list-group-item-action">Blues/Jazz</a>
                    <a href="" class="list-group-item list-group-item-action">Âu Mỹ Khác</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action"><b>Châu Á</b></a>
                    <a href="" class="list-group-item list-group-item-action">Nhạc Hàn</a>
                    <a href="" class="list-group-item list-group-item-action">Nhạc Hoa</a>
                    <a href="" class="list-group-item list-group-item-action">Nhạc Ấn Độ </a>
                    <a href="" class="list-group-item list-group-item-action">Nhạc Campuchia</a>
                    <a href="" class="list-group-item list-group-item-action">Nhạc Nhật </a>
                    <a href="" class="list-group-item list-group-item-action">Nhạc Thái</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="list-group list-group-flush">
                    <a href="" class="list-group-item list-group-item-action"><b>Khác</b></a>
                    <a href="" class="list-group-item list-group-item-action">Thiếu Nhi</a>
                    <a href="" class="list-group-item list-group-item-action">Không Lời</a>
                    <a href="" class="list-group-item list-group-item-action">Beat</a>
                    <a href="" class="list-group-item list-group-item-action">Thể Loại Khác</a>
                    <a href="" class="list-group-item list-group-item-action">Tui hát</a>
                  </div>
                </div>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="#" id="dropdownMenuButton" style="color: black;">Tuyển Tập</a>
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
                <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="search" style="width: 360px;" id="icon-check">
                <button type='button' class="px-3 text-decoration-none rounded-2 d-flex justify-content-center align-items-center header__login-link" data-toggle="modal" data-target="#UpWindow">Đăng nhập</button>
                <a class="px-3 text-reset text-decoration-none rounded-2 d-flex justify-content-center align-items-center" href="#" style="color: white;">Đăng kí</a>
            </div>
        </div>
        </ul>
    </nav>
<?php

}

    ?>