<main class="content px-3 py-4">
    <div class="container-fluid">
        <div class="mb-3">
            <h3 class="fw-bold fs-4 mb-3">Admin Dashboard</h3>
            <div class="row">
                <div class="col-12 col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Memebers Progress
                            </h5>
                            <p class="mb-2 fw-bold">
                                $72,540
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class=" fw-bold">
                                    Since Last Month
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="card  border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Memebers Progress
                            </h5>
                            <p class="mb-2 fw-bold">
                                $72,540
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class="fw-bold">
                                    Since Last Month
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body py-4">
                            <h5 class="mb-2 fw-bold">
                                Memebers Progress
                            </h5>
                            <p class="mb-2 fw-bold">
                                $72,540
                            </p>
                            <div class="mb-0">
                                <span class="badge text-success me-2">
                                    +9.0%
                                </span>
                                <span class="fw-bold">
                                    Since Last Month
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="fw-bold fs-4 mt-3">CẬP NHẬT KHÁCH HÀNG</h3>
            <div class="row">
                <div class="col-12">
                    <form action="index.php?act=edittk" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="" class="form-label">Hình ảnh</label>
                            <input type="file" class="form-control" name="img">
                            <?php $img = $image_path . $onetk['img'];
                            if (is_file($img)) : ?>
                                <img style="margin-top: 6px;" src="<?php echo $img ?>" alt="" width="70px" height="50px">
                            <?php else : ?>
                                <span style="color: red; font-size: 14px;">Không có ảnh!</span>
                            <?php endif ?>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">User</label>
                            <input type="text" class="form-control" name="user" placeholder="Nhập tên..." value="<?php echo $onetk['user'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="text" class="form-control" name="pass" placeholder="Nhập mật khẩu..." value="<?php echo $onetk['pass'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Nhập email..." value="<?php echo $onetk['email'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ..." value="<?php echo $onetk['address'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" name="tel" placeholder="Nhập số điện thoại..." value="<?php echo $onetk['tel'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Quyền hạn</label>
                            <select name="role" class="form-select">
                                <option value="0" <?php echo ($onetk['role'] == 0) ? 'selected' : ''; ?>>Khách hàng</option>
                                <option value="1" <?php echo ($onetk['role'] == 1) ? 'selected' : ''; ?>>Admin</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $onetk['id'] ?>">
                        <button class="btn btn-outline-primary my-2" type="submit" name="edittk">Cập nhật</button>
                        <input type="reset" value="Nhập lại" class="btn btn-outline-warning">
                        <a class="btn btn-outline-secondary" href="index.php?act=listtk">Danh sách</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>