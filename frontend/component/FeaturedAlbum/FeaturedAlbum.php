<?php
function FeaturedAlbum($albums, $title)
{
    ?>
    <link rel="stylesheet" href="../component/FeaturedAlbum/FeaturedAlbum.css" />
    <h4 class="text-uppercase fs-4 mb-3 featured-album__title fw-semibold pb-1"><?php echo $title ?></h4>
    <div class="row d-flex mb-4">
        <?php
        foreach ($albums as $album) {
            ?>
            <div class="col featured-album__item-wrapper">
                <a href="album.php?id=<?php echo $album['album_id'] ?>"
                   class="d-flex flex-column text-decoration-none text-reset row-gap-1">
                    <div class="position-relative">
                        <div class="position-relative featured-album__image">
                            <img src="<?php echo $album['image'] ?>" class="object-fit-cover" alt="">
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="fa-regular fa-circle-play fa-beat fa-2xl"></i>
                        </div>
                    </div>
                    <p style="font-size: 0.9rem"><?php echo $album['name'] ?></p>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}