<?php
function FeaturedSongsPage($songs)
{
?>
    <link rel="stylesheet" href="../component/FeaturedSongsPage/FeaturedSongsPage.css" />
    <div class="container">
        <div class="row col-8">
            <div class="fw-bold mb-3 ps-5">
                <h4 class="text-uppercase fs-4 mb-0 featured-album__title fw-semibold pb-2">BXH BÀI HÁT TRENDING MUSIC </h4>
            </div>
            <?php
            $index = 1;
            foreach ($songs as $song) {
            ?>
                <div class="container py-1">
                    <div class="d-flex align-items-center py-1   border-bottom">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="fs-5 py-0 px-3 featured-songs-page__rank featured-songs-page__rank-<?php echo $index ?>">
                                <?php echo $index ?>
                            </span>
                            <a href="songs.php?id=<?php echo $song['song_id'] ?>" class="text-decoration-none feauturedsongsingers__item__singer-name">
                                <img class="object-fit-cover img-songpage" src="<?php echo $song['image'] ?>">
                            </a>
                        </div>
                        <div class="d-flex flex-column">
                            <a href="songs.php?id=<?php echo $song['song_id'] ?>" class="text-decoration-none featured-songs-page__song-name featured-songs-page__song-name-rank-<?php echo $index ?>">
                                <?php echo $song['name'] ?>
                            </a>
                            <a href="singerpage.php?id=<?php echo $song['singer_id'] ?>" class="text-decoration-none featured-songs-page__singer-name">
                                <?php echo $song['singer_name'] ?>
                            </a>
                        </div>
                        <div class="d-flex icon-wrap">
                            <a href="songs.php?id=<?php echo $song['song_id'] ?>" style="text-decoration: none; color: black;"><i class="fa-solid fa-play p-1"></i></a>
                            <a href="#" style="text-decoration: none; color: black;"><i class="fa-solid fa-download p-1"></i> </a>
                        </div>
                    </div>
                </div>
            <?php
                $index++;
            }
            ?>
        </div>
    </div>
<?php
}
