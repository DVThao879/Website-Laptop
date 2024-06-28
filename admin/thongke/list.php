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
            <h3 class="fw-bold fs-4 mt-3">Thống kê sản phẩm</h3>
            <a class="btn btn-outline-primary my-2" href="index.php?act=bieudo">Xem biểu đồ</a>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Mã danh mục</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Số lượng sản phẩm</th>
                                <th scope="col">Giá thấp nhất</th>
                                <th scope="col">Giá cao nhất</th>
                                <th scope="col">Giá trung bình</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($thongke as $key => $tk) : ?>
                                <tr>
                                    <td scope="row"><?php echo $key + 1 ?></td>
                                    <td>DM-<?php echo $tk['id'] ?></td>
                                    <td><?php echo $tk['name'] ?></td>
                                    <td><?php echo $tk['soluong'] ?> sản phẩm</td>
                                    <td><?php echo number_format($tk['gia_min'], 0, ",", ".") ?> VND</td>
                                    <td><?php echo number_format($tk['gia_max'], 0, ",", ".") ?> VND</td>
                                    <td><?php echo number_format($tk['gia_avg'], 0, ",", ".") ?> VND</td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <h3 class="fw-bold fs-4 mt-3">THỐNG KÊ DOANH THU THEO THÁNG(4 THÁNG GẦN)</h3>
            <a class="btn btn-outline-primary my-2" href="index.php?act=bieudo1">Xem biểu đồ</a>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Tháng và năm</th>
                                <th scope="col">Tổng doanh thu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($thongke1 as $key => $tk) : ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td><?php echo date("m/Y", strtotime($tk['thangvanam'])) ?></td>
                                    <td><?php echo number_format($tk['doanhthu'], 0, ",", ".") ?> VND</td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>