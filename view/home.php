<div class="container-fluid">
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../image/anh1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="../image/anh2.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="../image/anh3.jpg" class="d-block w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container text-center border my-5 py-3">
    <div class="row icon-top">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border-end">
            <i class="fa-solid fa-truck-fast fs-4"></i>
            <p class="fw-bold mt-2">Giao Hàng Miễn Phí</p>
            <p>Trên Toàn Quốc</p>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border-end">
            <i class="fa-solid fa-medal fs-4"></i>
            <p class="fw-bold mt-2">Bảo Hành Chính Hãng</p>
            <p>Từ Laptopia Việt Nam</p>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 border-end">
            <i class="fa-solid fa-calendar-days fs-4"></i>
            <p class="fw-bold mt-2">100% Bảo Mật</p>
            <p>Thông Tin Luôn An Toàn</p>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
            <i class="fa-regular fa-thumbs-up fs-4"></i>
            <p class="fw-bold mt-2">Thanh Toán Trực Tuyến</p>
            <p>Credit/Debit/MoMo</p>
        </div>
    </div>
</div>
<div class="container">
    <div>
        <h4>SẢN PHẨM NỔI BẬT</h4>
        <hr>
    </div>
    <div class="row">
        <?php foreach ($dm1 as $key => $sp) : $hinh = $image_path . $sp['img']; ?>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                <div class="boxsp py-2 px-2 mb-5">
                    <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id'] ?>"><img src="../upload/<?php echo $sp['img'] ?>" alt="" class="img-fluid"></a>
                    <div class="card-body">
                        <div class="box-title">
                            <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id'] ?>"><?php echo $sp['name'] ?></a>
                        </div>
                        <div class="boxsp-content mt-3">
                            <p>CPU <?php echo $sp['cpu'] ?></p>
                            <p>RAM <?php echo $sp['ram'] ?></p>
                            <p>Ổ cứng <?php echo $sp['ocung'] ?></p>
                            <p>Card <?php echo $sp['card_do_hoa'] ?></p>
                            <p>M.Hình <?php echo $sp['man_hinh'] ?></p>
                        </div>
                        <div class="money">
                            <del><?php echo number_format($sp['price'], 0, ",", ".") ?> VND</del>
                            <span class="py-1 px-1">-<?php echo $sp['giamgia'] ?>%</span>
                            <p class="m-3 p-1"><?php echo number_format($sp['price'] - $sp['price'] * ($sp['giamgia'] / 100), 0, ",", ".") ?> Đ</p>
                        </div>
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="<?php echo $sp['id'] ?>">
                            <input type="hidden" name="name" value="<?php echo $sp['name'] ?>">
                            <input type="hidden" name="hinh" value="<?php echo $hinh ?>">
                            <input type="hidden" name="price" value="<?php echo $sp['price'] - $sp['price'] * ($sp['giamgia'] / 100) ?>">
                            <div class="mb-3">
                                <a href="" class="btn-shop"><input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="btn-shop-text">
                                    <i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<!-- Danh mục 2 -->
<div class="container">
    <div>
        <h4>SẢN PHẨM MỚI</h4>
        <hr>
    </div>
    <div class="row">
        <?php foreach ($dm2 as $key => $sp) : $hinh = $image_path . $sp['img']; ?>
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                <div class="boxsp py-2 px-2 mb-5">
                    <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id'] ?>"><img src="../upload/<?php echo $sp['img'] ?>" alt=""></a>
                    <div class="card-body">
                        <div class="box-title">
                            <a href="index.php?act=sanphamct&idsp=<?php echo $sp['id'] ?>"><?php echo $sp['name'] ?></a>
                        </div>
                        <div class="boxsp-content mt-3">
                            <p>CPU <?php echo $sp['cpu'] ?></p>
                            <p>RAM <?php echo $sp['ram'] ?></p>
                            <p>Ổ cứng <?php echo $sp['ocung'] ?></p>
                            <p>Card <?php echo $sp['card_do_hoa'] ?></p>
                            <p>M.Hình <?php echo $sp['man_hinh'] ?></p>
                        </div>
                        <div class="money">
                            <del><?php echo number_format($sp['price'], 0, ",", ".") ?> VND</del>
                            <span class="py-1 px-1">-<?php echo $sp['giamgia'] ?>%</span>
                            <p class="m-3 p-1"><?php echo number_format($sp['price'] - $sp['price'] * ($sp['giamgia'] / 100), 0, ",", ".") ?> Đ</p>
                        </div>
                        <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="<?php echo $sp['id'] ?>">
                            <input type="hidden" name="name" value="<?php echo $sp['name'] ?>">
                            <input type="hidden" name="hinh" value="<?php echo $hinh ?>">
                            <input type="hidden" name="price" value="<?php echo $sp['price'] - $sp['price'] * ($sp['giamgia'] / 100) ?>">
                            <div class="mb-3">
                                <a href="" class="btn-shop"><input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="btn-shop-text">
                                    <i class="fa-solid fa-cart-shopping"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>