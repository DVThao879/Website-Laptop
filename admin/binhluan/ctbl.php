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
            <h3 class="fw-bold fs-4 mt-3">CHI TIẾT BÌNH LUẬN</h3>
            <a class="btn btn-outline-primary my-2" href="index.php?act=listbl">Danh sách</a>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Tên tài khoản</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Ngày bình luận</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ctbl as $key => $bl) : ?>
                                <tr>
                                    <td scope="row"><?php echo $key + 1 ?></td>
                                    <td><?php echo $bl['user'] ?></td>
                                    <td><?php echo $bl['name'] ?></td>
                                    <td><?php echo $bl['noidung'] ?></td>
                                    <td><?php echo date("d/m/Y", strtotime($bl['ngaybl'])) ?></td>
                                    <td>
                                        <a class="btn btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="?act=deletebl&idbl=<?php echo $bl['id'] ?>">Xóa</a>
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