<?php
 function HeaderComponent(){
    ?>
    <link rel="stylesheet" href="../component/Header/HeaderComponent.css"/>
    <link rel="stylesheet" href="HeaderComponent.css">
    <nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid d-flex align-items-center">
      <a class="navbar-brand" href="#" style="font-family: Arial, Helvetica, sans-serif;">
        <img src="../img/nhaccuatui.jpeg" alt="nhaccuatui" class="rounded img-fluid" style="width: 25px; height: 25px;">
        <strong>NCT</strong>
      </a>
      <ul class="navbar-nav me-auto mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: blue; text-decoration: none;">#phienbanmoi</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id = "dropdownMenuButton" role = "button" data-bs-toggle = "dropdown" aria-expanded = "false" style="color: black;">Album</a>
        <ul class = "dropdown-menu" aria-labelledy = "dropdownMenuButton">
          <li><a class = "dropdown-item" href="#">Mưa</a></li>
          <li><a class = "dropdown-item" href="#">Ái</a></li>
          <li><a class = "dropdown-item" href="#">Bức Tường</a></li>
          <li><a class = "dropdown-item" href="#">Sky</a></li>
          <li><a class = "dropdown-item" href="#">Ba Da Bum</a></li>
          <li><a class = "dropdown-item" href="#">Đom Đóm</a></li>
          <li><a class = "dropdown-item" href="#">Nha</a></li>
          <li><a class = "dropdown-item" href="#">Cầu hôn</a></li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id = "dropdownMenuButton" role = "button" data-bs-toggle = "dropdown" aria-expanded = "false" style="color: black;">Tuyển Tập</a>
        <ul class = "dropdown-menu" aria-labelledy = "dropdownMenuButton">
          <li><a class = "dropdown-item" href="#">Ballad</a></li>
          <li><a class = "dropdown-item" href="#">Rock</a> </li>
          <li><a class = "dropdown-item" href="#">Pop</a></li>
          <li><a class = "dropdown-item" href="#">Rap</a></li>
          <li><a class = "dropdown-item" href="#">Nhạc Trẻ</a> </li>
        </ul>
        </li>
        <li class="nav-item dropdown">
          <a class ="nav-link dropdown-toggle" href="#" id = "dropdownMenuButton" role = "button" data-bs-toggle = "dropdown" aria-expanded = "false" style="color: black;">
            BXH
          </a>
          <ul class = "dropdown-menu" aria-labelledy = "dropdownMenuButton">
          <li><a class = "dropdown-item" href="#">Việt Nam</a></li>
          <li><a class = "dropdown-item" href="#">Quốc Tế</a> </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-bs-toggle="dropdown"
            aria-expanded="false" style="color: black;">
            Nghệ Sĩ
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Việt Nam</a></li>
            <li><a class="dropdown-item" href="#">Quốc Tế</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="search" style="width: 250px;"
          id="icon-check">
        <a class="nav-link" href="#" style="color: black;">Đăng nhập</a>
        <a class="nav-link btn btn-primary" href="#" style="color: white;">Đăng kí</a>
      </form>
    </div>
  </nav>
  <?php
 }
  ?>
