<?php
$id = $_GET['id'];
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";
include_once "../component/FeaturedAlbum/FeaturedAlbum.php";
$SongView = new SongView();
$SongByAlbumId = $SongView ->showSongByAlbumId($id);
$FirstSong = $SongByAlbumId[0];



include_once "../../backend/api/Album/AlbumView.class.php";
$AlbumView = new AlbumView();
$albumSortedByDate = $AlbumView -> showAllAlbum('released_date', '', 4);

include_once "../component/Header/HeaderComponent.php";
include_once "../component/Footer/FooterComponent.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/index.css">
    <title>Document</title>
        </style>
</head>
<body>
<header>
    <?php
    HeaderComponent();
    ?>
    </header>
    <main>
     <div class= "container-fluid">
        <div class= "row">
            <div class ="col-8 ">
                    <h4 class=""><?php echo $FirstSong['name'] ?> - <?php echo $FirstSong['singer_name'] ?></h4> 
                    <div> <audio class="col-md-10 mb-5"controls src=" <?php echo $FirstSong['file_name'] ?>"></audio> </div>
                <div class= "container-fluid">
                <div class= "row">
                    <h5><b> Lời Bài hát : <?php echo $FirstSong['name'] ?></b></h5>
                    <p>Lời đăng bởi : <a href=""> Nguyễn Trường Giang</a></p>

                    <div class ="col-md-8 col-sm-8 ">
                    <div id="test">
                    <?php echo $FirstSong['lyrics'] ?>  
                     
                    </div>
                    </div>

                </div>
            </div>  
        </div>
        
     
<div>
   <div> <?php FeaturedAlbum($albumSortedByDate, 'ALBUM') ?></div>
</div>
   
    </div>
    </main>
    <?php 
    ?>

    <footer>
    <?php
        FooterComponent();
    ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/9a6d25af5b.js" crossorigin="anonymous"></script>

</body>
</html>