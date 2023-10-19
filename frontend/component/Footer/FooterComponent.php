<?php
function FooterComponent()
{
    ?>
    <link rel="stylesheet" href="../component/Footer/FooterComponent.css" />
    <div class="footer__cooperator mt-5">
        <div class="py-4 container">
            <div class="title">
                <h5 class="fw-bold">Liên kết và hợp tác</h5>
            </div>
            <div class="d-flex justify-content-between">
                <div class="footer__cooperator-image-wrapper">
                    <img class="img-fluid" src="../asset/img/universal.png" alt="">
                </div>
                <div class="footer__cooperator-image-wrapper">
                    <img class="img-fluid" src="../asset/img/sonymusic.png" alt="">
                </div>
                <div class="footer__cooperator-image-wrapper">
                    <img class="img-fluid" src="../asset/img/warner.png" alt="">
                </div>
                <div class="footer__cooperator-image-wrapper">
                    <img class="img-fluid" src="../asset/img/yg.png" alt="">
                </div>
                <div class="footer__cooperator-image-wrapper">
                    <img class="img-fluid" src="../asset/img/jyp.png" alt="">
                </div>
                <div class="footer__cooperator-image-wrapper">
                    <img class="img-fluid" src="../asset/img/belive.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="footer__connect">
        <div class="container py-4">
            <div class="d-flex flex-wrap row-gap-2">
                <div class="d-flex align-items-center flex-grow-1 w-100">
                    <h5 class="fw-bold">Kết nối với chúng tôi</h5>
                </div>
                <div class="d-flex align-items-center column-gap-2">
                    <a class="ms-2 text-reset hover-animate"
                       href="https://www.facebook.com/NhacCuaTuiOfficial/?locale=vi_VN " target="_blank">
                        <i class="fa-brands fa-square-facebook fa-2xl" style="color: #000;"></i>
                    </a>
                    <a class="ms-2 text-reset hover-animate" href="https://www.tiktok.com/@nct_nhaccuatui" alt=""
                       target="_blank">
                        <i class="fa-brands fa-tiktok fa-2xl" style="color: #000;"></i>
                    </a>
                    <a class="ms-2 text-reset hover-animate" href="https://www.instagram.com/" target="blank">
                        <i class="fa-brands fa-square-instagram fa-2xl" style="color: #000;"></i>
                    </a>
                </div>
                <div class="logo ms-sm-5 ms-0 d-flex column-gap-2">
                    <a class="text-reset hover-animate" href="">
                        <img src="../asset/img/google.png" alt="">
                    </a>
                    <a class="text-reset hover-animate" href="">
                        <img src="../asset/img/app.jpg" alt="">
                    </a>
                    <a class="text-reset hover-animate" href="">
                        <img src="../asset/img/exp.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__info">
        <div class="container py-4">
            <div class="d-flex align-items-center justify-content-between column-gap-4 row-gap-4 flex-wrap">
                <div class="d-flex flex-column">
                    <div class="">
                        <h3 class="mb-0 fw-bold header__logo-text fs-1">NTC</h3>
                    </div>
                    <div class="">
                        <p class="mb-0 fw-bold" style="font-size: 0.7rem">CORPORATION</p>
                    </div>
                </div>
                <div style="max-width: 60%">
                    <div class="fs-4"><h6 class="fw-bolder">CÔNG TY CỔ PHẦN NTC</h6></div>
                    <ul class="mb-0 ps-4" style="font-size: 0.8rem">
                        <li>Giấy phép MXH số 499/GP-BTTTT do Bộ Thông Tin và Truyền thông cấp ngày 28/09/2015.</li>
                        <li>Giấy Chứng nhận Đăng ký Kinh doanh số 0305535715 do Sở kế hoạch và Đầu tư thành phố Hồ
                            Chí
                            Minh cấp ngày 01/03/2008.
                        </li>
                    </ul>
                </div>
                <div class="footer__license d-flex align-items-center column-gap-2">
                    <img src="../asset/img/bct.png" alt="" class="img-fluid">
                    <img src="../asset/img/ca.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    <?php

}