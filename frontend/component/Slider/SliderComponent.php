<?php
function SliderComponent()
{
    ?>
    <div id="demo" class="container-fluid carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="#">
                    <img src="../img/thuantheoytroi.jpg" alt="thuantheoytroi" class="d-block img-fluid">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="../img/tinhnaokhongnhutinhdau.jpg" alt="tinhnaokhongnhutinhdau" class="d-block img-fluid">
                </a>
            </div>
            <div class="carousel-item">
                <a href="#">
                    <img src="../img/nhungkemongmo.jpg" alt="nhungkemongmo" class="d-block img-fluid">
                </a>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <?php
}

?>