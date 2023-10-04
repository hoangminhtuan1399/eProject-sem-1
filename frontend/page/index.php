<?php
include "../../backend/api/User/UserView.class.php";
include "../component/Header/HeaderComponent.php";
include "../component/Slider/SliderComponent.php";
include_once "../component/FeaturedAlbum/FeaturedAlbum.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/index.css">
    <title>Homepage</title>
</head>

<body>
<header>
    <?php
    HeaderComponent();
    ?>
</header>
<main class="container">
    <div class="row">
        <?php
        SliderComponent();
        ?>
    </div>
    <div class="row">
        <div class="col-8">
            <?php
            FeaturedAlbum([], 'Vũ trụ nhạc Việt');
            FeaturedAlbum([], 'Quốc tế nổi bật');
            FeaturedAlbum([], 'Mới phát hành');
            ?>
        </div>
        <div class="col-4"></div>
    </div>
</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/9a6d25af5b.js" crossorigin="anonymous"></script>

</html>