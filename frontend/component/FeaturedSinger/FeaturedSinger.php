<?php
function FeaturedSinger($singers, $title)
{
    ?>
    <link rel="stylesheet" href="../component/FeaturedAlbum/FeaturedAlbum.css" />
    <h4 class="text-uppercase fs-4 mb-3 featured-album__title fw-semibold pb-1"><?php echo $title ?></h4>
    <div class="row d-flex mb-4">
        <?php
        foreach ($singers as $singer) {
            ?>
            <div class="col-3 featured-album__item-wrapper">
                <a href="singerpage.php?id=<?php echo $singer['singer_id'] ?>"
                   class="d-flex flex-column text-decoration-none text-reset row-gap-1">
                    <div class="position-relative ">
                        <div class="position-relative flex-wrap featured-album__image">
                            <img src="<?php echo $singer['image'] ?>" class="object-fit-cover" alt="">
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="fa-regular fa-circle-play fa-beat fa-2xl"></i>
                        </div>
                    </div>
                    <p class="fw-bold" style="font-size: 1rem"><?php echo $singer['name'] ?></p>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}