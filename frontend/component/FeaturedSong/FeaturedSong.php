<?php
function FeaturedSong($songs)
{
    ?>
    <link rel="stylesheet" href="../component/FeaturedSong/FeaturedSong.css" />
    <h4 class="text-uppercase fs-4 mb-0 featured-album__title fw-semibold pb-1">Bxh Bài hát</h4>
    <?php
        $index = 1;
        foreach ($songs as $song) {
            ?>
            <div class="d-flex align-items-center py-2 border-bottom">
                <div class="d-flex align-items-center justify-content-center">
                    <span class="fs-5 py-0 px-3 featured-song__rank featured-song__rank-<?php echo $index ?>">
                        <?php echo $index ?>
                    </span>
                </div>
                <div class="d-flex flex-column">
                    <a href="songs.php?id=<?php echo $song['song_id'] ?>" class="text-decoration-none featured-song__song-name featured-song__song-name-rank-<?php echo $index ?>">
                        <?php echo $song['name'] ?>
                    </a>
                    <a href="singerpage.php?id=<?php echo $song['singer_id']?>"class="text-decoration-none featured-song__singer-name">
                        <?php echo $song['singer_name'] ?>
                    </a>
                </div>
            </div>
            <?php
            $index ++;
        }
    ?>
    <?php
}