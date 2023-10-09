<?php
$id = $_GET['id'];
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";
include_once "../component/FeaturedAlbum/FeaturedAlbum.php";
$SongView = new SongView();
$SongByAlbumId = $SongView->showSongByAlbumId($id);

$FirstSong = $SongByAlbumId[0];

$songByIdAlbum = $SongView->showSongByAlbumId($id, $limit = 10, $offset = 0);

include_once __DIR__ . "/../component/FeaturedSong/FeaturedSong.php";

include_once "../../backend/api/Album/AlbumView.class.php";
$AlbumView = new AlbumView();
$albumSortedByDate = $AlbumView->showAllAlbum('released_date', '', 5);


include_once "../component/Header/HeaderComponent.php";
include_once "../component/Footer/FooterComponent.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/index.css">
    <title>Document</title>
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
                <div class="col-8 ">
                    <h4 class="">
                        <strong>
                            <?php echo $FirstSong['name'] ?> -
                            <?php echo $FirstSong['singer_name'] ?>
                        </strong>
                    </h4>
                    <div> <audio class="col-md-10 mb-5" controls src=" <?php echo $FirstSong['file_name'] ?>"></audio>
                    </div>
                    <div class="container-fluid accordion " id="accordionExample">
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
                                <div class="accordion-body">
                                    <?php echo $FirstSong['lyrics'] ?>
                                </div>
                            </div>
                            <p class="px-3">Lời đăng bởi : <a href="https://www.facebook.com/master.giang.9"> Nguyễn Trường Giang</a>
                            </p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h3><strong>ALBUM</strong></h3>
                        <?php FeaturedAlbum($albumSortedByDate, '') ?>
                    </div>
                </div>
                <div class="col-4">
                    <h3 class=" px-4 "> NGHE TIẾP</h3>
                    <?php
                    $index = 1;
                    foreach ($songByIdAlbum as $song) {
                        ?>
                        <div class="d-flex align-items-center py-2 border-bottom">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="fs-5 py-0 px-3 featured-song__rank featured-song__rank-<?php echo $index ?>">
                                    <?php $index ?>
                                </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="songs.php?id=<?php echo $song['song_id'] ?>"
                                    class="text-decoration-none link-body-emphasis">
                                    <?php echo $song['name'] ?>
                                </a>
                                <a href="#" class="text-decoration-none emphasis  ">
                                    <?php echo $song['singer_name'] ?>
                                </a>
                            </div>
                        </div>
                        <?php
                        $index++;
                    }
                    ?>
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