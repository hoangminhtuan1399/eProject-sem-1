<?php
session_start();
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";
include_once "../../backend/api/Album/AlbumView.class.php";
include_once "../../backend/api/Singer/SingerView.class.php";
include_once __DIR__ . "/../component/FeaturedSong/FeaturedSong.php";
include_once "../component/FeaturedAlbum/FeaturedAlbum.php";
include_once "../component/Header/HeaderComponent.php";
include_once "../component/Footer/FooterComponent.php";
include_once "../component/FeaturedCategory/FeaturedCategory.php";
include_once "../component/NextSongAlbum/NextSongAlbum.php";
include_once "../component/SongIcons/SongIcons.php";

$id = $_GET['id'];
$songId = $_GET['songId'] ?? 0;
$SongView = new SongView();
$AlbumView = new AlbumView();
$albumSortedByDate = $AlbumView->showAllAlbum('released_date', '', $limit = 8);
$currentAlbum = $AlbumView->showAlbumById($id)[0];

$limit = 8;
$page = $_GET['page'] ?? 1;
$offset = $limit * ($page - 1);
$songCount = $SongView->showSongCountByAlbumId($id);
$pageCount = ceil($songCount / $limit);
$songByIdAlbum = $SongView->showSongByAlbumId($id, $limit, $offset);
$FirstSong = $songId > 0 ? $SongView->showSongById($songId)[0] : $songByIdAlbum[0];

$SingerView = new SingerView();
$currentSinger = $SingerView->showSingerById($currentAlbum['singer_id'])[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/index.css">
    <title>
        <?php echo $currentAlbum['name'] ?>
    </title>
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
                <div class="d-flex column-gap-lg-4 column-gap-2 mb-3 mb-lg-5">
                    <div class="album-thumbnail-wrapper col-4 col-lg-3">
                        <img class="img-fluid" src="<?php echo $currentAlbum['image'] ?>" alt="">
                    </div>
                    <div class="col-8 col-lg-9">
                        <h4 class="fw-bold">
                            <?php echo $currentAlbum['name'] ?>
                        </h4>
                        <p class="mb-1">
                            Ca sĩ: <a class="text-reset text-decoration-none" href="singerpage.php?id=<?php echo $currentSinger['singer_id'] ?>"><?php echo $currentSinger['name'] ?></a>
                        </p>
                        <p>
                            Ngày phát hành: <?php echo date("d-m-Y", strtotime($currentAlbum['released_date'])); ?>
                        </p>
                    </div>
                </div>
                <h4 class="mb-3">
                    <strong>
                        <?php echo $FirstSong['name'] ?> -
                        <a class="text-reset text-capitalize text-decoration-none" href="singerpage.php?id=<?php echo $FirstSong['singer_id'] ?>">
                            <?php echo $FirstSong['singer_name'] ?>
                        </a>
                    </strong>
                </h4>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <audio class="col-md-10" controls controlslist="nodownload" autoplay src=" <?php echo $FirstSong['file_name'] ?>"></audio>
                    <?php
                    SongIcons($FirstSong);
                    ?>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class=" accordion-item">
                        <h5 accordion-header>
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <b> Lời Bài hát :
                                    <?php echo $FirstSong['name'] ?>
                                </b>
                            </button>
                        </h5>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body fs-7">
                                <?php echo $FirstSong['lyrics'] ?>
                            </div>
                        </div>
                        <p class="px-3">Lời đăng bởi :
                            <a href="https://www.facebook.com/master.giang.9"> Nguyễn Trường Giang</a>
                        </p>
                    </div>
                </div>
                <div class="mt-4">
                    <?php FeaturedAlbum($albumSortedByDate, 'Album khác') ?>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="ms-lg-4 ms-0" id="songs">
                    <h4 class="fw-bold">NGHE TIẾP</h4>
                    <?php
                    NextSongAlbum($songByIdAlbum, $id, $page);
                    ?>
                    <nav class="mt-4 d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item <?php echo($page <= 1 ? "disabled" : "") ?>">
                                <a class="page-link"
                                   href="album.php?id=<?php echo $id ?>&page=<?php echo $page - 1 ?>#songs"
                                   aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <?php
                            for ($i = 1; $i <= $pageCount; $i++) {
                                ?>
                                <li class="page-item <?php echo($i == $page ? "active" : "") ?>">
                                    <a class="page-link" href="album.php?id=<?php echo $id ?>&page=<?php echo $i ?>#songs">
                                        <?php echo $i ?>
                                    </a></li>
                                <?php
                            }
                            ?>
                            <li class="page-item  <?php echo($page >= $pageCount ? "disabled" : "") ?>">
                                <a class="page-link "
                                   href="album.php?id=<?php echo $id ?>&page=<?php echo $page + 1 ?>#songs"
                                   aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <div class="mt-lg-5 mt-3">
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