<?php
include_once __DIR__ . "/../../../backend/api/Category/CategoryView.class.php";
function HeaderComponent()
{
    $CategoryView = new CategoryView();
    $categories = $CategoryView->showAllCategory();
    ?>
    <link rel="stylesheet" href="../component/Header/HeaderComponent.css" />
    <nav class="navbar navbar-expand-sm header__navbar mb-4">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand" href="#" style="font-family: Arial, Helvetica, sans-serif;">
                <img src="../asset/img/nhaccuatui.jpeg" alt="nhaccuatui" class="rounded img-fluid"
                     style="width: 25px; height: 25px;">
                <strong class="header__logo-text">NCT</strong>
            </a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">Album</a>
                    <ul class="dropdown-menu rounded-1 shadow-sm" aria-labelledy="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Mưa</a></li>
                        <li><a class="dropdown-item" href="#">Ái</a></li>
                        <li><a class="dropdown-item" href="#">Bức Tường</a></li>
                        <li><a class="dropdown-item" href="#">Sky</a></li>
                        <li><a class="dropdown-item" href="#">Ba Da Bum</a></li>
                        <li><a class="dropdown-item" href="#">Đom Đóm</a></li>
                        <li><a class="dropdown-item" href="#">Nha</a></li>
                        <li><a class="dropdown-item" href="#">Cầu hôn</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">Tuyển Tập</a>
                    <ul class="dropdown-menu rounded-1 shadow-sm" aria-labelledy="dropdownMenuButton">
                        <?php
                        foreach ($categories as $category) {
                            ?>
                            <li><a class="dropdown-item" href="#"><?php echo $category['name'] ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                        BXH
                    </a>
                    <ul class="dropdown-menu rounded-1 shadow-sm" aria-label="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Việt Nam</a></li>
                        <li><a class="dropdown-item" href="#">Quốc Tế</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false" style="color: black;">
                        Nghệ Sĩ
                    </a>
                    <ul class="dropdown-menu rounded-1 shadow-sm" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Việt Nam</a></li>
                        <li><a class="dropdown-item" href="#">Quốc Tế</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex align-items-stretch column-gap-2">
                <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="search" style="width: 360px;"
                       id="icon-check">
                <a class="px-3 text-decoration-none rounded-2 d-flex justify-content-center align-items-center header__login-link"
                   href="#">Đăng nhập</a>
                <a class="px-3 text-reset text-decoration-none rounded-2 d-flex justify-content-center align-items-center"
                   href="#" style="color: white;">Đăng kí</a>
            </form>
        </div>
    </nav>
    <?php
}

?>
