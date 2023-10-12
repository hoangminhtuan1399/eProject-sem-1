<?php
function FeaturedSongsPage($songs, $title)
{
    ?>
    <link rel="stylesheet" href="../component/FeaturedSongsPage/FeaturedSongsPage.css" />
    <h4 class="text-uppercase mb-4 featured-album__title fw-bold"><?php echo $title ?></h4>
    <?php
    $index = 1;
    foreach ($songs as $song) {
        ?>
        <div class="py-2 border-bottom">
            <div class="d-flex align-items-center column-gap-4">
                <div class="d-flex align-items-center justify-content-center">
                    <span style="width: 50px" class="d-inline-flex justify-content-center align-items-center fs-5 py-0 featured-songs-page__rank featured-songs-page__rank-<?php echo $index ?>">
                        <?php echo $index ?>
                    </span>
                    <a href="songs.php?id=<?php echo $song['song_id'] ?>"
                       class="text-decoration-none feauturedsongsingers__item__singer-name">
                        <img class="object-fit-cover img-songpage" src="<?php echo $song['image'] ?>">
                    </a>
                </div>
                <div class="d-flex flex-column">
                    <a href="songs.php?id=<?php echo $song['song_id'] ?>"
                       class="text-decoration-none featured-songs-page__song-name featured-songs-page__song-name-rank-<?php echo $index ?>">
                        <?php echo $song['name'] ?>
                    </a>
                    <a href="singerpage.php?id=<?php echo $song['singer_id'] ?>"
                       class="text-decoration-none featured-songs-page__singer-name">
                        <?php echo $song['singer_name'] ?>
                    </a>
                </div>
                <div class="d-flex icon-wrap">
                    <a href="songs.php?id=<?php echo $song['song_id'] ?>"
                       style="text-decoration: none; color: black;"><i class="fa-solid fa-play p-1"></i></a>
                    <a href="#" style="text-decoration: none; color: black;"><i
                                class="fa-solid fa-download p-1"></i> </a>
                </div>
            </div>
        </div>
        <?php
        $index++;
    }
    ?>
    <?php
}
