<?php
session_start();
include_once "../component/Header/HeaderComponent.php";
include_once "../component/Footer/FooterComponent.php";
include_once "../component/FeaturedCategory/FeaturedCategory.php";
include_once "../component/FeaturedSongsPage/FeaturedSongsPage.php";

include_once __DIR__ . "/../../backend/api/Category/CategoryView.class.php";
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";
include_once __DIR__ . "/../../backend/api/Singer/SingerView.class.php";

$categoryId = $_GET['id'];
$limit = 10;
$page = $_GET['page'] ?? 1;
$offset = $limit * ($page - 1);

$CategoryView = new CategoryView();
$category = $CategoryView->showCategoryById($categoryId)[0];

$SongView = new SongView();
$songs = $SongView->showSongByCategoryId($categoryId, 'views', 'desc', $limit, $offset);
$songCount = $SongView->showSongCountByCategoryId($categoryId);
$pageCount = ceil($songCount / $limit);

$SingerView = new SingerView();
$PictureSingers = $SingerView->showAllSinger('', '', 8);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/index.css">
    <title>Thể loại <?php echo $category['name'] ?></title>
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
            <?php
            FeaturedSongsPage($songs, "Thể loại: ". $category['name']);
            ?>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                    for ($i = 1; $i <= $pageCount; $i++) {
                        ?>
                        <li class="page-item <?php echo ($i == $page ? "active" : "") ?>"><a class="page-link" href="category.php?id=<?php echo $categoryId ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                        <?php
                        }
                    ?>
                </ul>
            </nav>
        </div>
        <div class="col-4 mt-3">
            <h4 class="fw-bold text-uppercase mb-4">Ca sĩ khác</h4>
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
