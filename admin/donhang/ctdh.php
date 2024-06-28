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
            <form action="index.php?act=listdh" method="post" class="d-flex" role="search">
                <input class="form-control me-2" type="text" placeholder="Nhập mã đơn hàng cần tìm..." aria-label="Search" name="keyw">
                <button class="btn btn-outline-success" type="submit" name="TimKiem">Search</button>
            </form>
            <h3 class="fw-bold fs-4 mt-3">CHI TIẾT ĐƠN HÀNG</h3>
            <a class="btn btn-outline-primary my-2" href="index.php?act=listdh">Danh sách</a>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Ảnh</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Ram</th>
                                <th scope="col">Màu</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $allmau = loadall_mau();
                            $allram = loadall_ram();
                            foreach ($ctdh as $key => $sp) {
                                $img = $image_path . $sp['img']; ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><img src="<?php echo $img ?>" alt="" width="70px" height="50px"></td>
                                    <td><?php echo $sp['name'] ?></td>
                                    <td><?php foreach ($allram as $ram) : ?>
                                            <?php if ($ram['id'] == $sp['ram']) : ?>
                                                <span><?php echo $ram['ram_sp'] ?></span>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </td>
                                    <td><?php foreach ($allmau as $mau) : ?>
                                            <?php if ($mau['id'] == $sp['mau']) : ?>
                                                <span><?php echo $mau['mau_sp'] ?></span>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </td>
                                    <td><?php echo number_format($sp['price'], 0, ",", ".") ?> VNĐ</td>
                                    <td><?php echo $sp['soluong'] ?></td>
                                    <td><?php echo number_format($sp['thanhtien'], 0, ",", ".") ?> VNĐ</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>