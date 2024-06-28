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
            <h3 class="fw-bold fs-4 mt-3">CẬP NHẬT MÀU</h3>
            <div class="row">
                <div class="col-12">
                    <form action="index.php?act=editmau" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">Tên màu</label>
                            <input type="text" class="form-control" name="mausp" value="<?php echo $onemau['mau_sp'] ?>" placeholder="Nhập tên màu..." required>
                        </div>
                        <input type="hidden" name="idmau" value="<?php echo $onemau['id'] ?>">
                        <button class="btn btn-outline-primary my-2" type="submit" name="editmau">Cập nhật</button>
                        <input type="reset" value="Nhập lại" class="btn btn-outline-warning">
                        <a class="btn btn-outline-secondary" href="index.php?act=listmau">Danh sách</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>