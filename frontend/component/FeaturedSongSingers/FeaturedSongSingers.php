<?php
include_once __DIR__ . "/../SongIcons/SongIcons.php";
function FeaturedSongSingers($songs)
{
    ?>
    <link rel="stylesheet" href="../component/FeaturedSongSingers/FeaturedSongSingers.css" />
    <?php

    foreach ($songs as $song) {
        ?>
        <div class="d-flex align-items-center py-2 border-bottom ">
            <div class="d-flex flex-column w-100">
                <div class="col feauturedsongsingers__item-wrapper">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="songs.php?id=<?php echo $song['song_id'] ?>" class="text-decoration-none feauturedsongsingers__item__singer-name">
                            <img class="object-fit-cover feauturedsongsingers-img"
                                 src="<?php echo $song['image'] ?>">
                        </a>
                        <div class="flex-wrap m-2 colum ">
                            <a class="text-decoration-none text-reset"
                               href="songs.php?id=<?php echo $song['song_id'] ?>"><?php echo $song['name'] ?></a>
                            <a href="singerpage.php?id=<?php echo $song['singer_id'] ?>"
                               class="text-decoration-none d-block feauturedsongsingers__song__singer-name">
                                    <?php echo $song['singer_name'] ?>
                            </a>
                        </div>
                        <?php
                        SongIcons($song);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <?php
}
