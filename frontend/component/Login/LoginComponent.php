<?php
function LoginComponent()
{
    ?>
    <div class="container">
        <div class="modal fade" id="UpWindow">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Đăng nhập</h3>
                    </div>
                    <div class="modal-header">
                        <form role="form">
                            <div class="form-group">
                                <label for="email">Tên đăng nhập</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" required/>
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" required />
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="rememberPassword">
                                        <label class="form-check-label" for="rememberPassword">Nhớ mật khẩu</label>
                                    </div>
                                    <p><a href="#">Quên mật khẩu?</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-block">Đăng nhập</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
