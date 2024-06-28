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
            <h3 class="fw-bold fs-4 mt-3">DANH SÁCH KHÁCH HÀNG</h3>
            <a class="btn btn-outline-primary my-2" href="index.php?act=addtk">Thêm</a>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Mã tài khoản</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">User</th>
                                <th scope="col">Pass</th>
                                <th scope="col">Email</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Quyền hạn</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listtk as $key => $tk) : ?>
                                <tr>
                                    <td scope="row"><?php echo $key + 1 ?></td>
                                    <td>TK-<?php echo $tk['id'] ?></td>
                                    <td>
                                        <?php $img = $image_path . $tk['img'];
                                        if (is_file($img)) : ?>
                                            <!-- Nếu đường dẫn ảnh đúng thì in ra if -->
                                            <img src="<?php echo $img ?>" alt="" width="70px" height="50px">
                                        <?php else : ?>
                                            <!-- Còn else là đường dẫn sai -->
                                            <span style="color: red; font-size: 14px;">No file img!</span>
                                        <?php endif ?>
                                    </td>
                                    <td><?php echo $tk['user'] ?></td>
                                    <td><?php echo $tk['pass'] ?></td>
                                    <td><?php echo $tk['email'] ?></td>
                                    <td><?php echo $tk['address'] ?></td>
                                    <td><?php echo $tk['tel'] ?></td>
                                    <td>
                                        <?php if ($tk['role'] == 0) : ?>
                                            Khách hàng
                                        <?php else : ?>
                                            Admin
                                        <?php endif ?>
                                    </td>
                                    <td>
                                        <?php if ($tk['role'] != 1) : ?>
                                            <a class="btn btn-outline-success" href="?act=edittk&idtk=<?php echo $tk['id'] ?>">Sửa</a>
                                            <a class="btn btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="?act=deletetk&idtk=<?php echo $tk['id'] ?>">Xóa</a>
                                        <?php endif ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>