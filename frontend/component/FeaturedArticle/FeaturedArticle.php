<?php
function FeaturedArticle($articles)
{
    if (count($articles) > 0) {
        ?>
        <link rel="stylesheet" href="../component/FeaturedArticle/FeaturedArticle.css" />
        <h4 class="fw-bold mb-3">Tin tức gần đây</h4>
        <div class="d-flex flex-column row-gap-3">
            <?php
            foreach ($articles as $article) {
                ?>
                <a href="<?php echo $article['url'] ?>" target="_blank"
                   class="d-flex flex-lg-row flex-column row-gap-2 align-items-start column-gap-3 text-reset text-decoration-none">
                    <div class="featured-article__image-wrapper">
                        <img src="<?php echo $article['thumbnail'] ?>" alt="">
                    </div>
                    <div class="d-flex flex-column row-gap-0 row-gap-lg-2">
                        <h5 class="fw-bold">
                            <?php echo $article['title'] ?>
                        </h5>
                        <p class="fs-7 text-secondary mb-lg-1 mb-0">
                            <?php echo $article['description'] ?>
                        </p>
                    </div>
                </a>
                <?php
            }
            ?>
        </div>
        <?php
    }
}
