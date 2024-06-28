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
            <h3 class="fw-bold fs-4 mt-3">CẬP NHẬT TT ĐƠN HÀNG</h3>
            <div class="row">
                <div class="col-12">
                    <form action="index.php?act=editdh" method="post">
                        <div class="mb-3">
                            <label class="form-label">Tình trạng</label>
                            <?php if ($onebill['bill_status'] == 1) : ?>
                                <select name="bill_status" class="form-select">
                                    <option value="1" <?php echo ($onebill['bill_status'] == 1) ? 'selected' : ''; ?>>Đơn hàng mới</option>
                                    <option value="2" <?php echo ($onebill['bill_status'] == 2) ? 'selected' : ''; ?>>Đang xử lý</option>
                                    <option value="3" <?php echo ($onebill['bill_status'] == 3) ? 'selected' : ''; ?>>Đang giao hàng</option>
                                    <option value="4" <?php echo ($onebill['bill_status'] == 4) ? 'selected' : ''; ?>>Đã giao hàng</option>
                                    <option value="5" <?php echo ($onebill['bill_status'] == 5) ? 'selected' : ''; ?>>Đơn hàng bị hủy</option>
                                </select>
                            <?php elseif ($onebill['bill_status'] == 2) : ?>
                                <select name="bill_status" class="form-select">
                                    <option value="2" <?php echo ($onebill['bill_status'] == 2) ? 'selected' : ''; ?>>Đang xử lý</option>
                                    <option value="3" <?php echo ($onebill['bill_status'] == 3) ? 'selected' : ''; ?>>Đang giao hàng</option>
                                    <option value="4" <?php echo ($onebill['bill_status'] == 4) ? 'selected' : ''; ?>>Đã giao hàng</option>
                                    <option value="5" <?php echo ($onebill['bill_status'] == 5) ? 'selected' : ''; ?>>Đơn hàng bị hủy</option>
                                </select>
                            <?php elseif ($onebill['bill_status'] == 3) : ?>
                                <select name="bill_status" class="form-select">
                                    <option value="3" <?php echo ($onebill['bill_status'] == 3) ? 'selected' : ''; ?>>Đang giao hàng</option>
                                    <option value="4" <?php echo ($onebill['bill_status'] == 4) ? 'selected' : ''; ?>>Đã giao hàng</option>
                                    <option value="5" <?php echo ($onebill['bill_status'] == 5) ? 'selected' : ''; ?>>Đơn hàng bị hủy</option>
                                </select>
                            <?php else : ?>
                                <select name="bill_status" class="form-select">
                                    <option value="5" <?php echo ($onebill['bill_status'] == 5) ? 'selected' : ''; ?>>Đơn hàng bị hủy</option>
                                </select>
                            <?php endif ?>
                        </div>
                        <input type="hidden" name="iddh" value="<?php echo $onebill['id'] ?>">
                        <button class="btn btn-outline-primary my-2" type="submit" name="editdh">Cập nhật</button>
                        <input type="reset" value="Nhập lại" class="btn btn-outline-warning">
                        <a class="btn btn-outline-secondary" href="index.php?act=listdh">Danh sách</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>