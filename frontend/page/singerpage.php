<?php
include_once "../component/Header/HeaderComponent.php";
include_once "../component/FeauturedSongSingers/FeauturedSongSingers.php";
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
$AlbumViewSingers = $AlbumViewSingerId[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9a6d25af5b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="singerpage.css">
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
                <h3 style="color: #2daaed">Tiểu sử ></h3>
                <div class="container">
                    <div class="d-flex flex-column">
                        <div class="d-flex">
                            <div class="d-flex flex-column align-items-center">
                                <img src="<?php echo $singers['image'] ?>" alt="<?php echo $singers['name'] ?>" class="rounded-circle img-fluid me-3 " style="width: 150px; height: 150px; flex-shrink:0;">
                                <h4><?php echo $singers['name'] ?></h4>
                                <span>Sinh Nhật: <?php echo $singers['birth_year'] ?></span>
                                <span>Giới tính: <?php echo $singers['gender'] ?> </span>
                                <span>Quốc Gia: <?php echo $singers['nationality'] ?></span>
                            </div>
                            <p style="max-width:400px"><?php echo $singers['description'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="container">
                        <h3 style="color: #2daaed">Album <?php echo $singers['name'] ?> ></h3>
                        <img class="album-item-wrapper m-1" src="<?php echo $AlbumViewSingers['image'] ?>" style="width: 150px; height: 150px; flex-shrink:0;">
                        <h5><?php echo $AlbumViewSingers['name'] ?></h5>
                        <div class="mt-3">
                        <h3 style="color: #2daaed">Bài Hát <?php echo $singers['name'] ?></h3>
                        </div>
                    </div>
                    <?php FeaturedSongSingers($SongBySinger); ?>
                </div>

            </div>
            <div class="col-4">
                <h3 style="color: #2daaed">Ca Sĩ | Nghệ Sĩ></h3>
                <div class="d-flex flex-wrap gap-2">
                    <?php foreach ($PictureSingers as $PictureSinger) {
                    ?><div class="singerpage-img-container">
                            <a href="singerpage.php?id=<?php echo $PictureSinger['singer_id'] ?>" class="text-decoration-none featured-song__singer-name">
                                <img class="img-fluid singerpage-img" src="<?php echo $PictureSinger['image'] ?>">
                            </a>
                        </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>