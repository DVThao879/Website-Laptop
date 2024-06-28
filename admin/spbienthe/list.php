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
            <h3 class="fw-bold fs-4 mt-3">DANH SÁCH SPBT</h3>
            <a class="btn btn-outline-primary my-2" href="index.php?act=addbt">Thêm</a>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Mã biến thể</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Màu sắc</th>
                                <th scope="col">Dung lượng ram</th>
                                <th scope="col">Số lượng tồn kho</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listspbt as $key => $spbt) : ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td>BT<?php echo $spbt['id'] ?></td>
                                    <td><?php echo $spbt['name'] ?></td>
                                    <td><?php echo $spbt['mau_sp'] ?></td>
                                    <td><?php echo $spbt['ram_sp'] ?></td>
                                    <td><?php echo $spbt['soluong'] ?></td>
                                    <td>
                                        <a class="btn btn-outline-success" href="?act=editbt&idbt=<?php echo $spbt['id'] ?>">Sửa</a>
                                        <a class="btn btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="?act=deletebt&idbt=<?php echo $spbt['id'] ?>">Xóa</a>
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