<?php
function NextSong($songs)
{
    ?>
    <link rel="stylesheet" href="../component/NextSong/NextSong.css" />
    <?php
    foreach ($songs as $song) {
        ?>
        <div class="d-flex align-items-center py-2 border-bottom">
            <div class="d-flex flex-column">
                <a href="songs.php?id=<?php echo $song['song_id'] ?>"
                   class="text-decoration-none link-body-emphasis next-song__song-name">
                    <?php echo $song['name'] ?>
                </a>
                <a href="singerpage.php?id=<?php echo $song['singer_id'] ?>" class="text-decoration-none emphasis next-song__singer-name">
                    <?php echo $song['singer_name'] ?>
                </a>
            </div>
        </div>
        <?php
    }
}