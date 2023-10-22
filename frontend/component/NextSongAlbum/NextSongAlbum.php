<?php
include_once __DIR__ . "/../SongIcons/SongIcons.php";
function NextSongAlbum($songs, $albumId, $page)
{
    ?>
    <link rel="stylesheet" href="../component/NextSong/NextSong.css" />
    <?php
    foreach ($songs as $song) {
        ?>
        <div class="d-flex justify-content-between py-2 border-bottom">
            <div class="d-flex flex-column">
                <a href="album.php?id=<?php echo $albumId ?>&songId=<?php echo $song['song_id'] ?>&page=<?php echo $page ?>"
                    class="text-decoration-none link-body-emphasis next-song__song-name">
                    <?php echo $song['name'] ?>
                </a>
                <a href="singerpage.php?id=<?php echo $song['singer_id'] ?>"
                    class="text-decoration-none emphasis next-song__singer-name">
                    <?php echo $song['singer_name'] ?>
                </a>
            </div>
            <?php
            SongIcons($song);
            ?>
        </div>
        <?php
    }
}