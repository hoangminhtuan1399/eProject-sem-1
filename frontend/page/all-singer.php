<?php
session_start();
include_once "../../backend/api/Singer/SingerView.class.php";
include_once "../component/Header/HeaderComponent.php";
include_once "../component/Footer/FooterComponent.php";
include_once "../component/FeaturedSong/FeaturedSong.php";
include_once __DIR__ . "/../component/FeaturedSinger/FeaturedSinger.php";
include_once "../../backend/api/Song/SongView.class.php";
$mode = $_GET['mode'];
$singerView = new singerView();
$singer = $singerView->showLocalOrInternationalSinger($mode);
// print_r($singer);

$SongView = new SongView();
$songSortedByView = $SongView->showAllSong('views', 'desc', 10);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/index.css">
    <title>Document</title>

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
            <div class="col-8 flex-gap ">
                <div class="img">
                    <?php
                    FeaturedSinger($singer, 'Nghệ Sĩ ' . ($mode === 'local' ? 'Việt Nam' : 'Quốc Tế'));
                    ?>
                </div>
            </div>
            <div class="col-4">
                <?php
                FeaturedSong($songSortedByView);
                ?>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php
    FooterComponent();
    ?>
</footer>

</body>

</html>