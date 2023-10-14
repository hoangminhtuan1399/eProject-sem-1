<?php
session_start();
include_once "../component/Header/HeaderComponent.php";
include_once "../component/Footer/FooterComponent.php";
include_once "../component/FeaturedCategory/FeaturedCategory.php";
include_once "../component/FeaturedSongsPage/FeaturedSongsPage.php";
include_once "../component/FeaturedSong/FeaturedSong.php";
include_once "../component/FeaturedSinger/FeaturedSinger.php";
include_once "../component/FeaturedAlbum/FeaturedAlbum.php";

include_once __DIR__ . "/../../backend/api/Album/AlbumView.class.php";
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";
include_once __DIR__ . "/../../backend/api/Singer/SingerView.class.php";

$searchQuery = ($_GET['search'] ?? '');
$searchType = ($_GET['type'] ?? 'song');
$limit = 10;
$offset = 0;

$SongView = new SongView();
$songSortedByView = $SongView->showAllSong('views', 'desc', 10);

function getActiveIndex($searchType)
{
    switch ($searchType) {
        case 'song':
            return 1;
        case 'singer':
            return 2;
        case 'album':
            return 3;
    }
}

function generateSearchResult($searchQuery, $searchType): void
{
    switch ($searchType) {
        case 'song':
            generateSongResult($searchQuery);
            break;
        case 'singer':
            generateSingerResult($searchQuery);
            break;
        case 'album':
            generateAlbumResult($searchQuery);
            break;
    }
}

function generateSongResult($searchQuery): void
{
    $SongView = new SongView();
    $songs = $SongView->showSongBySearchQuery($searchQuery);
    if (count($songs) > 0) {
        FeaturedSongsPage($songs, '');
    } else {
        ?>
        <p class="mt-4 text-secondary">Không có kết quả</p>
        <?php
    }
}

function generateSingerResult($searchQuery): void
{
    $SingerView = new SingerView();
    $singers = $SingerView->showSingerBySearchQuery($searchQuery);
    if (count($singers) > 0) {
        FeaturedSinger($singers, '');
    } else {
        ?>
        <p class="mt-4 text-secondary">Không có kết quả</p>
        <?php
    }
}

function generateAlbumResult($searchQuery): void
{
    $AlbumView = new AlbumView();
    $albums = $AlbumView->showAlbumBySearchQuery($searchQuery);
    if (count($albums) > 0) {
        FeaturedAlbum($albums, '');
    } else {
        ?>
        <p class="mt-4 text-secondary">Không có kết quả</p>
        <?php
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/index.css">
    <title>Kết quả tìm kiếm cho: <?php echo $searchQuery ?></title>
</head>
<body>
<header>
    <?php
    HeaderComponent();
    ?>
</header>
<main class="container">
    <div class="row">
        <div class="col-8 mt-3">
            <h4 class="fw-bold text-uppercase">Hiển thị kết quả theo</h4>
            <ul class="nav nav-underline column-gap-4">
                <li class="nav-item">
                    <a class="nav-link pb-1 <?php echo getActiveIndex($searchType) === 1 ? "active" : "" ?>"
                       href="search.php?type=song&search=<?php echo $searchQuery ?>">
                        Bài hát
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-1 <?php echo getActiveIndex($searchType) === 2 ? "active" : "" ?>"
                       href="search.php?type=singer&search=<?php echo $searchQuery ?>">
                        Ca sĩ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pb-1 <?php echo getActiveIndex($searchType) === 3 ? "active" : "" ?>"
                       href="search.php?type=album&search=<?php echo $searchQuery ?>">
                        Album
                    </a>
                </li>
            </ul>
            <div>
                <?php
                generateSearchResult($searchQuery, $searchType);
                ?>
            </div>
        </div>
        <div class="col-4 mt-3">
            <?php
            FeaturedSong($songSortedByView);
            ?>
            <div class="mt-5">
                <?php
                FearuredCategory();
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/9a6d25af5b.js" crossorigin="anonymous"></script>
</html>
