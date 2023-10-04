<?php
function FeaturedAlbum($albums, $title)
{
    $dummyArrays = [
        0 => [
            'album_id' => 1,
            'name' => 'Album 1',
            'image' => 'https://avatar-ex-swe.nixcdn.com/playlist/2023/09/08/c/0/2/5/1694169874757_300.jpg'
        ],
        1 => [
            'album_id' => 2,
            'name' => 'Album 2',
            'image' => 'https://avatar-ex-swe.nixcdn.com/playlist/2023/09/08/c/0/2/5/1694169874757_300.jpg'
        ],
        2 => [
            'album_id' => 3,
            'name' => 'Album 3',
            'image' => 'https://avatar-ex-swe.nixcdn.com/playlist/2023/09/08/c/0/2/5/1694169874757_300.jpg'
        ],
        3 => [
            'album_id' => 4,
            'name' => 'Album 4',
            'image' => 'https://avatar-ex-swe.nixcdn.com/playlist/2023/09/08/c/0/2/5/1694169874757_300.jpg'
        ],
        4 => [
            'album_id' => 5,
            'name' => 'Album 5',
            'image' => 'https://avatar-ex-swe.nixcdn.com/playlist/2023/09/08/c/0/2/5/1694169874757_300.jpg'
        ]

    ];
    ?>
    <link rel="stylesheet" href="../component/FeaturedAlbum/FeaturedAlbum.css" />
    <h2 class="text-uppercase fs-3 mt-4"><?php echo $title ?></h2>
    <div class="row d-flex">
        <?php
        foreach ($dummyArrays as $album) {
            ?>
            <div class="col featured-album__item-wrapper">
                <a href="#" class="d-flex flex-column text-decoration-none text-reset">
                    <div class="position-relative">
                        <div class="position-relative featured-album__image">
                            <img src="<?php echo $album['image'] ?>" class="img-fluid" alt="">
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="fa-regular fa-circle-play fa-beat fa-2xl"></i>
                        </div>
                    </div>
                    <p><?php echo $album['name'] ?></p>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}