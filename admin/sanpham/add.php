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
            <h3 class="fw-bold fs-4 mt-3">THÊM MỚI SẢN PHẨM</h3>
            <div class="row">
                <div class="col-12">
                    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Danh mục</label>
                            <select name="iddm" class="form-select">
                                <?php foreach ($listdm as $dm) : ?>
                                    <option value="<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Img</label>
                            <input type="file" class="form-control" name="img" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm..." required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Giá</label>
                            <input type="text" class="form-control" name="price" placeholder="Nhập giá..." required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">CPU</label>
                            <input type="text" class="form-control" name="cpu" placeholder="Nhập cpu..." required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Ram</label>
                            <input type="text" class="form-control" name="ram" placeholder="Nhập ram..." required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Ổ cứng</label>
                            <input type="text" class="form-control" name="ocung" placeholder="Nhập ổ cứng..." required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Card đồ họa</label>
                            <input type="text" class="form-control" name="carddohoa" placeholder="Nhập card đồ họa..." required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Màn hình</label>
                            <input type="text" class="form-control" name="manhinh" placeholder="Nhập màn hình..." required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Giảm gái</label>
                            <input type="text" class="form-control" name="giamgia" placeholder="Nhập % giảm giá..." required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mô tả</label>
                            <textarea class="form-control" name="mota" cols="30" rows="10" required></textarea>
                        </div>
                        <button class="btn btn-outline-primary my-2" type="submit" name="themsp">Thêm mới</button>
                        <input type="reset" value="Nhập lại" class="btn btn-outline-warning">
                        <a class="btn btn-outline-secondary" href="index.php?act=listsp">Danh sách</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>