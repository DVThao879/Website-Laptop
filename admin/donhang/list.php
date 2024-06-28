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
            <h3 class="fw-bold fs-4 mt-3">DANH SÁCH ĐƠN HÀNG</h3>
            <a class="btn btn-outline-primary my-2" href="index.php?act=adddm">Thêm</a>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Mã đơn hàng</th>
                                <th scope="col">Khách hàng</th>
                                <th scope="col">Số lượng sản phẩm</th>
                                <th scope="col">Tổng giá tiền</th>
                                <th scope="col">Ngày đặt</th>
                                <th scope="col">Thanh toán</th>
                                <th scope="col">Tình trạng</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listbill as $key => $bill) {
                                $countsp = loadall_cart_count($bill['id']);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $pttt = get_pttt($bill['bill_pttt']);
                            ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td>DH-<?php echo $bill['id'] ?></td>
                                    <td>
                                        <?php echo $bill['bill_name'] ?><br>
                                        <?php echo $bill['bill_email'] ?><br>
                                        <?php echo $bill['bill_address'] ?><br>
                                        <?php echo $bill['bill_tel'] ?>
                                    </td>
                                    <td><?php echo $countsp ?></td>
                                    <td><?php echo number_format($bill['total'], 0, ",", ".") ?> VND</td>
                                    <td><?php echo date("d/m/Y", strtotime($bill['ngaydh'])) ?></td>
                                    <td><?php echo $pttt ?></td>
                                    <td><?php echo $ttdh ?></td>
                                    <td>
                                        <?php if ($bill['bill_status'] != 4 && $bill['bill_status'] != 5) : ?>
                                            <a class="btn btn-outline-success" href="index.php?act=editdh&iddh=<?php echo $bill['id'] ?>">Cập nhật</a>
                                        <?php endif ?>
                                        <a class="btn btn-outline-success" href="index.php?act=ctdh&iddh=<?php echo $bill['id'] ?>">Chi tiết</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>