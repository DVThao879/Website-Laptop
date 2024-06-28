<div class="mb10">
    <h3>CẬP NHẬT DANH MỤC</h3>
</div>
<div class="formcontent">
    <form action="index.php?act=editdm" method="post">
        <div>
            <label>Tên danh mục</label><br>
            <input type="text" name="tendm" value="<?php echo $onedm['name'] ?>" required>
        </div><br>
        <input type="hidden" name="iddm" value="<?php echo $onedm['id'] ?>">
        <input name="editdm" type="submit" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a><br>
    </form>
</div>

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
            <h3 class="fw-bold fs-4 mt-3">CẬP NHẬT SPBT</h3>
            <div class="row">
                <div class="col-12">
                    <form action="index.php?act=editbt" method="post">
                        <div class="mb-3">
                            <label class="form-label">Tên sản phẩm cha</label><br>
                            <select name="idsp" class="form-select">
                                <?php foreach ($listsp as $key => $sp) : ?>
                                    <option value="<?php echo $sp['id'] ?>" <?php echo ($onespbt['idsp'] == $sp['id']) ? 'selected' : ''; ?>><?php echo $sp['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dung lượng ram</label><br>
                            <select name="idram" class="form-select">
                                <?php foreach ($listram as $key => $ram) : ?>
                                    <option value="<?php echo $ram['id'] ?>" <?php echo ($onespbt['idram'] == $ram['id']) ? 'selected' : ''; ?>><?php echo $ram['ram_sp'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Màu sắc</label><br>
                            <select name="idmau" class="form-select">
                                <?php foreach ($listmau as $key => $mau) : ?>
                                    <option value="<?php echo $mau['id'] ?>" <?php echo ($onespbt['idmau'] == $mau['id']) ? 'selected' : ''; ?>><?php echo $mau['mau_sp'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Số lượng tồn kho</label>
                            <input type="text" class="form-control" name="soluong" value="<?php echo $onespbt['soluong'] ?>" placeholder="Nhập số lượng..." required>
                        </div>
                        <input type="hidden" name="idbt" value="<?php echo $onespbt['id'] ?>">
                        <button class="btn btn-outline-primary my-2" type="submit" name="editbt">Cập nhật</button>
                        <input type="reset" value="Nhập lại" class="btn btn-outline-warning">
                        <a class="btn btn-outline-secondary" href="index.php?act=listbt">Danh sách</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>