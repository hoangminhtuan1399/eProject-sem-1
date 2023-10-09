<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include_once "../component/FeaturedAlbum/FeaturedAlbum.php";
include_once "../component/FeaturedSong/FeaturedSong.php";
include_once "../component/Header/HeaderComponent.php";
include_once "../component/Slider/SliderComponent.php";
include_once "../component/Footer/FooterComponent.php";
include_once "../component/FeaturedCategory/FeaturedCategory.php";
include_once "../../backend/api/Album/AlbumView.class.php";
include_once "../../backend/api/Song/SongView.class.php";
include_once "../../backend/api/Singer/SingerView.class.php";
$limit = 10;
$offset = 0;
$SingerView = new SingerView();

$AlbumView = new AlbumView();
$albumSortedByDate = $AlbumView -> showAllAlbum('released_date', '', 4);
$albumSortedByView = $AlbumView -> showAllAlbum('views', '', 4);

$SongView = new SongView();
$songSortedByView = $SongView -> showAllSong('views', 'desc', 10);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="row mt-5">
        <div class="col-8 mt-3">
            <?php
            FeaturedAlbum($albumSortedByDate, 'Tâm trạng hôm nay');
            FeaturedAlbum($albumSortedByView, 'Nổi bật');
            FeaturedAlbum($albumSortedByDate, 'Mới phát hành');
            ?>
        </div>
        <div class="col-4 mt-3">
            <?php
            FeaturedSong($songSortedByView);
            FearuredCategory();
            ?>
        </div>
    </div>
</main>
<footer>
    <?php
        FooterComponent();
    ?>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/9a6d25af5b.js" crossorigin="anonymous"></script>

</html>