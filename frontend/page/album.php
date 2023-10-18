<?php
session_start();
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";
include_once "../component/FeaturedAlbum/FeaturedAlbum.php";
include_once __DIR__ . "/../component/FeaturedSong/FeaturedSong.php";
include_once "../../backend/api/Album/AlbumView.class.php";
include_once "../component/Header/HeaderComponent.php";
include_once "../component/Footer/FooterComponent.php";
include_once "../component/FeaturedCategory/FeaturedCategory.php";
include_once "../component/NextSong/NextSong.php";
$id = $_GET['id'];
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
$FirstSong = $songByIdAlbum[0];
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
                <div class="col-8 ">
                    <h4 class="mb-4">
                        <strong>
                            <?php echo $FirstSong['name'] ?> -
                            <?php echo $FirstSong['singer_name'] ?>
                        </strong>
                    </h4>
                    <div>
                        <audio class="col-md-10 mb-2" controls controlslist="nodownload" autoplay
                            src=" <?php echo $FirstSong['file_name'] ?>"></audio>
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
                <div class="col-4" >
                    <div class="ms-4" id="songs" >
                        <h4 class="fw-bold">NGHE TIẾP</h4>
                        <?php
                        NextSong($songByIdAlbum);
                        ?>
                        <nav class="mt-4 d-flex justify-content-center"  >
                            <ul class="pagination">
                                <li class="page-item <?php echo ($page <= 1 ? "disabled" : "") ?>">
                                    <a class="page-link"
                                        href="album.php?id=<?php echo $id ?>&page=<?php echo $page - 1 ?>#songs"
                                        aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <?php
                                for ($i = 1; $i <= $pageCount; $i++) {
                                    ?>
                                    <li class="page-item <?php echo ($i == $page ? "active" : "") ?>"> <a class="page-link"
                                            href="album.php?id=<?php echo $id ?>&page=<?php echo $i ?>#songs">
                                            <?php echo $i ?>
                                        </a></li>
                                    <?php
                                }
                                ?>
                                <li class="page-item  <?php echo ($page >= $pageCount ? "disabled" : "") ?>">
                                    <a class="page-link "
                                        href="album.php?id=<?php echo $id ?>&page=<?php echo $page + 1 ?>#songs"
                                        aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="mt-5">
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