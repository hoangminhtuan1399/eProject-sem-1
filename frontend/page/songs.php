<?php
$id = $_GET['id'];
include_once __DIR__ . "/../../backend/api/Song/SongView.class.php";

$SongView = new SongView();
$SongById =$SongView ->showSongById($id);
// print_r ($SongById);
$song = $SongById[0];
$songSortedByView = $SongView -> showAllSong('views', 'desc', 10);
// print_r ($songSortedByView);
include_once __DIR__ . "/../component/FeaturedAlbum/FeaturedAlbum.php";
include_once __DIR__ . "/../../backend/api/Album/AlbumView.class.php";
$AlbumView = new AlbumView();
$albumSortedByDate = $AlbumView -> showAllAlbum('released_date', '', 5);
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
                    <h4 class=""><?php echo $song['name'] ?> - <?php echo $song['singer_name'] ?></h4> 
                    <div> <audio class="col-md-10 mb-5"controls src=" <?php echo $song['file_name'] ?>"></audio> </div>
                <div class= "container-fluid">
                <div class= "row">
                    <h5><b> Lời Bài hát : <?php echo $song['name'] ?></b></h5>
                    <p>Lời đăng bởi : <a href=""> Nguyễn Trường Giang</a></p>

                    <div class ="col-md-8 col-sm-8 ">
                    <div id="test">
                    <?php echo $song['lyrics'] ?>  
                     
                    </div>
                    </div>

                </div>
            </div>  
        </div>
        
        <div class ="col-4 ">
    <h3 class=" px-5 cl-blue"> NGHE TIẾP</h3>
    <?php 
    $song = $SongById[0];
    $songSortedByView = $SongView -> showAllSong('views', 'desc', 10);

         $index = 1;
         foreach ($songSortedByView as $song) {
             ?>
             <div class="d-flex align-items-center py-2 border-bottom">
                 <div class="d-flex align-items-center justify-content-center">
                     <span class="fs-5 py-0 px-3 featured-song__rank featured-song__rank-<?php echo $index  ?>">
                         <?php $index ?>
                     </span>
                 </div>
                 <div class="d-flex flex-column">
                     <a href="songs.php?id=<?php echo $song['song_id'] ?>" class="text-decoration-none featured-song__song-name featured-song__song-name-rank-<?php echo $index ?>">
                         <?php echo $song['name'] ?>
                     </a>
                     <a href="#" class="text-decoration-none featured-song__singer-name">
                         <?php echo $song['singer_name'] ?>
                     </a>
                 </div>
             </div>
             <?php
             $index ++;
         }
        ?>
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