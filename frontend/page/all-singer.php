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

$SongView = new SongView();
$songSortedByView = $SongView->showAllSong('views', 'desc', 10);
$limit = 8;
$page = $_GET['page'] ?? 1;
$offset = $limit * ($page - 1);
$singerCount = $singerView->showLocalOrInternationalSingerCount($mode);
$pageCount = ceil($singerCount / $limit);
$singer = $singerView->showLocalOrInternationalSinger($mode, $limit, $offset);
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
                <div class="col-8 flex-gap " id ="songs">
                    <div class="img">
                        <?php
                        FeaturedSinger($singer, 'Nghệ Sĩ ' . ($mode === 'local' ? 'Việt Nam' : 'Quốc Tế'));
                        ?>
                        <nav class="mt-4 d-flex justify-content-center">
                            <ul class="pagination">
                                <li class="page-item <?php echo ($page <= 1 ? "disabled" : "") ?>">
                                    <a class="page-link"
                                        href="all-singer.php?mode=<?php echo $mode ?>&page=<?php echo $page - 1 ?>#songs"
                                        aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <?php 
                                for ($i = 1 ; $i <= $pageCount ; $i++){           
                                    ?>
                                    <li class="page-item <?php echo ($i == $page ? "active" : "") ?>"> <a class="page-link"
                                            href="all-singer.php?mode=<?php echo $mode ?>&page=<?php echo $i ?>#songs">
                                            <?php echo $i ?>
                                        </a></li>
                                <?php
                                }
                                ?>

                                <li class="page-item <?php echo ($page >= $pageCount ? "disabled" : "") ?>">
                                    <a class="page-link" href="all-singer.php?mode=<?php echo $mode ?>&page=<?php echo $page + 1 ?>#songs" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
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