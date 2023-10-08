<?php
include_once "../component/Header/HeaderComponent.php";
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";
include_once __DIR__ . "/../../backend/api/Singer/SingerView.class.php";
$SingerView = new SingerView();
$singerId = $_GET['id'];
$singerData = $SingerView->showSingerById($singerId);
$singers = $singerData[0];
$singerView = new SingerView();
$PictureSingers = $singerView->showAllSinger('', '', 8);
$SongView = new SongView();
$SongBySinger = $SongView->showSongBySingerId($singerId, 6);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <div class="d-flex">
                    <img src="<?php echo $singers['image'] ?>" alt="<?php echo $singers['name'] ?>" class="rounded-circle img-fluid me-3 " style="width: 150px; height: 150px; flex-shrink:0;">
                    <p style="max-width:400px"><?php echo $singers['description'] ?></p>
                </div>
                <div class="mt-3">
                    <div class="container">
                        <h2><?php echo $singers['name'] ?></h2>
                        <h3 style="color: #2daaed">Album <?php echo $singers['name'] ?> ></h3>
                        <div class="d-flex flex-wrap gap-2">
                            <?php
                            foreach ($SongBySinger as $songSortedByViews) {
                            ?>
                                <div class="col-3 ">
                                    <div class="col SongBySinger__item-wrapper">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="#?id=<?php echo $songSortedByViews['singer_id'] ?>" class="text-decoration-none featured-song__singer-name">
                                                <img class="object-fit-cover SongBySinger-img" src="<?php echo $songSortedByViews['image'] ?>">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <h3 style="color: #2daaed">Ca Sĩ | Nghệ Sĩ></h3>
                <div class="d-flex flex-wrap">
                    <?php foreach ($PictureSingers as $PictureSinger) {
                    ?><div class="w-50">
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