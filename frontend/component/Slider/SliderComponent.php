<?php
function SliderComponent()
{
    ?>
    <link rel="stylesheet" href="../component/Slider/SliderComponent.css" />
    <div id="demo" class="container-fluid carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="songs.php?id=31">
                    <img src="../asset/img/lactroi.jpg" alt="lactroi" class="d-block img-fluid">
                </a>
            </div>
            <div class="carousel-item">
                <a href="songs.php?id=1">
                    <img src="../asset/img/tinhnaokhongnhutinhdau.jpg" alt="tinhnaokhongnhutinhdau"
                         class="d-block img-fluid">
                </a>
            </div>
            <div class="carousel-item">
                <a href="songs.php?id=123">
                    <img src="../asset/img/wdym.jpg" alt="whatdoyoumean" class="d-block img-fluid">
                </a>
            </div>
        </div>
        <button class="carousel-control-prev slider__control" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon position-relative"></span>
        </button>
        <button class="carousel-control-next slider__control" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon position-relative"></span>
        </button>
    </div>
    <?php
}

?>