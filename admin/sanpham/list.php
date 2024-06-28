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
            <h3 class="fw-bold fs-4 mt-3">DANH SÁCH SẢN PHẨM</h3>
            <form action="index.php?act=listsp" method="post" class="d-flex" role="search">
                <input class="form-control me-2" type="text" name="keyw" placeholder="Nhập sản phẩm cần tìm..." aria-label="Search" name="keyw">
                <select name="iddm" class="form-select me-2">
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listdm as $dm) : ?>
                        <option value="<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></option>
                    <?php endforeach ?>
                </select>
                <button class="btn btn-outline-success" type="submit" name="clickOK">Search</button>
            </form>
            <a class="btn btn-outline-primary my-2" href="index.php?act=addsp">Thêm</a>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="highlight">
                                <th scope="col">#</th>
                                <th scope="col">Mã sp</th>
                                <th scope="col">Img</th>
                                <th scope="col">Tên sp</th>
                                <th scope="col">Price</th>
                                <th scope="col">Sale</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Lượt xem</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listsp as $key => $sp) : ?>
                                <tr>
                                    <td><?php echo $key + 1 ?></td>
                                    <td>SP<?php echo $sp['id'] ?></td>
                                    <td>
                                        <?php $img = $image_path . $sp['img'];
                                        if (is_file($img)) : ?>
                                            <!-- Nếu đường dẫn ảnh đúng thì in ra if -->
                                            <img src="<?php echo $img ?>" alt="" width="70px" height="50px">
                                        <?php else : ?>
                                            <!-- Còn else là đường dẫn sai -->
                                            <span style="color: red; font-size: 14px;">No file img!</span>
                                        <?php endif ?>
                                    </td>
                                    <td><?php echo $sp['name'] ?></td>
                                    <td><?php echo number_format($sp['price'], 0, ",", ".") ?></td>
                                    <td><?php echo $sp['giamgia'] ?>%</td>
                                    <td class="mota"><?php echo $sp['mota'] ?></td>
                                    <td><?php echo $sp['luotxem'] ?></td>
                                    <td>
                                        <a class="btn btn-outline-success mb-2" href="?act=editsp&idsp=<?php echo $sp['id'] ?>">Sửa</a>
                                        <a class="btn btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="?act=deletesp&idsp=<?php echo $sp['id'] ?>">Xóa</a>
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