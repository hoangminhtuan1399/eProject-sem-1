<?php
function FeaturedSongSingers($songs)
{
?>
    <link rel="stylesheet" href="../component/FeauturedSongSingers/FeauturedSongSingers.css" />
    <?php

    foreach ($songs as $song) {
    ?>
        <div class="container">
            <div class="d-flex align-items-center py-2 border-bottom ">
                <div class="d-flex flex-column w-100 m-2">
                    <div class="col feauturedsongsingers__item-wrapper">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="text-decoration-none feauturedsongsingers__item__singer-name">
                                <img class="object-fit-cover feauturedsongsingers-img" src="<?php echo $song['image'] ?>">
                            </a>
                            <div class="flex-wrap m-2 colum ">
                                <a href="singerpage.php?id=<?php echo $song['singer_id'] ?>" class="text-decoration-none feauturedsongsingers__song__singer-name">
                                    <a href="#" style="text-decoration: none; color: black; font-size: 1.1 rem"><?php echo $song['name'] ?></a>
                                </a>
                                <a href="singerpage.php?id=<?php echo $song['singer_id'] ?>" class="text-decoration-none">
                                <div style="color: #acacac; font-size: 1rem">
                                <?php echo $song['singer_name'] ?>
                                </div>
    </a>
                            </div>
                            <div class="d-flex icon-wrap">
                                <a href="#" style="text-decoration: none; color: black;"><i class="fa-solid fa-play p-1"></i></a>
                                <a href="#" style="text-decoration: none; color: black;"><i class="fa-solid fa-download p-1"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
<?php
}
