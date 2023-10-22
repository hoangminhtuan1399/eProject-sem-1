<?php
function SongIcons($song)
{
    $userSignedIn = isset($_SESSION['username']) && strlen(trim($_SESSION['username'])) > 0;
    ?>
    <link rel="stylesheet" href="../component/SongIcons/SongIcons.css" />
    <div class="d-flex icon-wrap column-gap-2 align-items-center">
        <?php
        if ($userSignedIn) {
            ?>
            <a href="<?php echo $song['file_name'] ?>" style="text-decoration: none; color: black;" download>
                <i class="fa-solid fa-download p-1"></i>
            </a>
            <?php
        } else {
            ?>
            <a href="#" style="text-decoration: none; color: black;" type="button" data-bs-toggle="modal" data-bs-target="#modal-download-required">
                <i class="fa-solid fa-download p-1"></i>
            </a>
            <div class="modal fade" id="modal-download-required" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body pt-4">
                            <h6 class="text-center">Vui lòng đăng nhập để có thể tải bài hát</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalFormLogin">
                                Đăng nhập
                            </button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Đóng
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <a href="#" style="text-decoration: none; color: black;">
            <i class="fa-regular fa-heart"></i>
        </a>
    </div>
    <?php
}