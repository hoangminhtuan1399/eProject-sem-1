<?php
$id = $_GET['id'];
include_once "../../backend/api/Album/AlbumView.class.php";
include_once "../component/Header/HeaderComponent.php";
$AlbumSong = new AlbumView();
$ListSong = $AlbumSong->showAllAlbum($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/index.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php
        HeaderComponent();
        ?>
    </header>
    <div class="container">
        <h3 style="color: #2daaed">Tiểu sử ></h3>
        <img src="../asset/img/singer/trungquanidol.jpg" alt="Ca sĩ" class="rounded-circle img-fluid" style="width: 150px; height: 150px;">

    </div>
</body>

</html>