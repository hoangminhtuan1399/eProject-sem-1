<?php
function FearuredCategory()
{
    ?>
    <link rel="stylesheet" href="../component/FeaturedCategory/FeaturedCategory.css">
    <h4 class="text-uppercase fs-4 mb-0 featured-album__title fw-semibold pb-1" id="test">Chủ đề hot</h4>
    <div class="row g-2 row-gap-2 flex-lg-column flex-row align-items-stretch mt-lg-2 mt-0">
        <a class="col-6 col-lg-12" href="category.php?id=1">
            <img src="../asset/img/categories/ballad.png" alt=""
                 class="img-fluid object-fit-cover featured-category__img">
        </a>
        <a class="col-6 col-lg-12" href="category.php?id=2">
            <img src="../asset/img/categories/pop.png" alt=""
                 class="img-fluid object-fit-cover featured-category__img">
        </a>
        <a class="col-6 col-lg-12" href="category.php?id=5">
            <img src="../asset/img/categories/rap.png" alt=""
                 class="img-fluid object-fit-cover featured-category__img">
        </a>
    </div>
    <?php
}