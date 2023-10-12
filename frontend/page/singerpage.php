<?php
session_start();
include_once "../component/Header/HeaderComponent.php";
include_once "../component/Footer/FooterComponent.php";
include_once "../component/FeaturedCategory/FeaturedCategory.php";
include_once "../component/FeaturedSongSingers/FeaturedSongSingers.php";
include_once __DIR__ . "/../../backend/api/Album/AlbumView.class.php";
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";
include_once __DIR__ . "/../../backend/api/Singer/SingerView.class.php";
$SingerView = new SingerView();
$singerId = $_GET['id'];
$singerData = $SingerView->showSingerById($singerId);
$singers = $singerData[0];
$singerView = new SingerView();
$PictureSingers = $singerView->showAllSinger('', '', 8);
$SongView = new SongView();
$SongBySinger = $SongView->showSongBySingerId($singerId, 10);
$AlbumView = new AlbumView();
$AlbumViewSingerId = $AlbumView->showAlbumBySingerId($singerId);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9a6d25af5b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../asset/css/index.css">
    <title><?php echo $singers['name'] ?></title>
</head>

<body>
<header>
    <?php
    HeaderComponent();
    ?>
</header>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h4 class="fw-bold mb-4">Tiểu sử</h4>
            <div class="container">
                <div class="d-flex flex-column">
                    <div class="d-flex">
                        <div class="d-flex flex-column flex-shrink-0 align-items-center">
                            <img src="<?php echo $singers['image'] ?>" alt="<?php echo $singers['name'] ?>"
                                 class="rounded-circle img-fluid me-3 object-fit-cover"
                                 style="width: 150px; height: 150px; flex-shrink:0; object-position: center top">
                            <p class="mb-0 mt-1 fw-bold"><?php echo $singers['name'] ?></p>
                        </div>
                        <div>
                            <p class="fs-7 mb-0">Năm sinh: <?php echo $singers['birth_year'] ?></p>
                            <p class="fs-7 mb-0">Giới tính: <?php echo $singers['gender'] ?> </p>
                            <p class="fs-7 mb-0">Quốc gia: <?php echo $singers['nationality'] ?></p>
                            <p class="fs-7 mb-0"><?php echo $singers['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <h4 class="fw-bold mb-3">Album <?php echo $singers['name'] ?></h4>
                <div class="d-flex column-gap-2">
                    <?php
                    foreach ($AlbumViewSingerId as $album) {
                        ?>
                        <a class="text-reset text-decoration-none" href="album.php?id=<?php echo $album['album_id'] ?>">
                            <img class="album-item-wrapper flex-shrink-0 object-fit-cover" src="<?php echo $album['image'] ?>">
                            <p class="mb-0"><?php echo $album['name'] ?></p>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="mt-4">
                <h4 class="fw-bold mb-2">Bài hát</h4>
                <?php FeaturedSongSingers($SongBySinger); ?>
            </div>
        </div>
        <div class="col-4">
            <h4 class="fw-bold mb-4">Ca sĩ khác</h4>
            <div class="d-flex flex-wrap gap-3">
                <?php foreach ($PictureSingers as $PictureSinger) {
                    ?>
                    <div class="singerpage-img-container">
                        <a href="singerpage.php?id=<?php echo $PictureSinger['singer_id'] ?>"
                           class="text-decoration-none featured-song__singer-name">
                            <img title="<?php echo $PictureSinger['name'] ?>" class="img-fluid singerpage-img" src="<?php echo $PictureSinger['image'] ?>">
                        </a>
                    </div>
                    <?php
                } ?>
            </div>
            <div class="mt-5">
                <?php
                FearuredCategory();
                ?>
            </div>
        </div>
    </div>
</div>

<footer>
    <?php
    FooterComponent();
    ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/9a6d25af5b.js" crossorigin="anonymous"></script>

</body>

</html>