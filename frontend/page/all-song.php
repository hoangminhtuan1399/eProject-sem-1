<?php
session_start();
include_once "../component/Header/HeaderComponent.php";
include_once "../component/Footer/FooterComponent.php";
include_once "../component/FeaturedCategory/FeaturedCategory.php";
include_once "../component/FeaturedSongsPage/FeaturedSongsPage.php";
include_once "../component/FeaturedSongSingers/FeaturedSongSingers.php";
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";
include_once __DIR__ . "/../../backend/api/Album/AlbumView.class.php";
include_once __DIR__ . "/../../backend/api/Singer/SingerView.class.php";
$mode = $_GET['mode'];
$SongView = new SongView();
$AllSongSingers = $SongView->showLocalOrInternationalSong($mode, 'views', 'desc', 15);
$singerView = new SingerView();
$PictureSingers = $singerView->showAllSinger();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9a6d25af5b.js" crossorigin="anonymous"></script>
    <title><?php echo 'BXH ' . ($mode === 'local' ? 'nhạc Việt' : 'quốc tế') ?></title>
    <link rel="stylesheet" href="../asset/css/index.css">
</head>

<body>
<header>
    <?php
    HeaderComponent();
    ?>
</header>
<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <?php FeaturedSongsPage($AllSongSingers, 'BXH ' . ($mode === 'local' ? 'nhạc Việt' : 'quốc tế')) ?>
            </div>
            <div class="col-lg-4 col-12 mt-lg-0 mt-4">
                <h4 class="fw-bold mb-lg-4 mb-3">Ca sĩ khác</h4>
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
</main>
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