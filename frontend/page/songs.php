<?php
session_start();
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";
include_once __DIR__ . "/../component/FeaturedAlbum/FeaturedAlbum.php";
include_once __DIR__ . "/../../backend/api/Album/AlbumView.class.php";
include_once "../component/Header/HeaderComponent.php";
include_once "../component/Footer/FooterComponent.php";
include_once "../component/FeaturedCategory/FeaturedCategory.php";
include_once "../component/NextSong/NextSong.php";
$id = $_GET['id'];
$SongView = new SongView();
$SongById = $SongView->showSongById($id);
$song = $SongById[0];
$songsByCategory = $SongView->showSongByCategoryId($song['category_id']);
$AlbumView = new AlbumView();
$albumBySingerId = $AlbumView->showAlbumBySingerId($song['singer_id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/index.css">
    <title><?php echo $song['name'] ?></title>
    </style>
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
                <h4 class="mb-lg-4 mb-3"><strong>
                        <?php echo $song['name'] ?> - <a class="text-reset text-capitalize text-decoration-none" href="singerpage.php?id=<?php echo $song['singer_id'] ?>">
                            <?php echo $song['singer_name'] ?>
                        </a>
                    </strong></h4>
                <div>
                    <audio class="col-md-10 mb-2" controls controlslist="nodownload" autoplay
                           src=" <?php echo $song['file_name'] ?>"></audio>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class=" accordion-item">
                        <h5 accordion-header>
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b> Lời Bài hát :
                                    <?php echo $song['name'] ?>
                                </b>
                            </button>
                        </h5>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-7">
                                <?php echo $song['lyrics'] ?>
                            </div>
                        </div>
                        <p class="px-3">Lời đăng bởi :
                            <a href="https://www.facebook.com/master.giang.9"> NguyễnTrường Giang</a>
                        </p>
                    </div>
                </div>
                <div class="mt-4">
                    <h3><strong>ALBUM KHÁC</strong></h3>
                    <div>
                        <?php FeaturedAlbum($albumBySingerId, '') ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="ms-lg-4 ms-0">
                    <h4 class="fw-bold">NGHE TIẾP</h4>
                    <?php
                    NextSong($songsByCategory);
                    ?>
                </div>
                <div class="mt-lg-5 mt-4">
                    <?php
                    FearuredCategory();
                    ?>
                </div>
            </div>
        </div>
</main>
<?php
?>

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