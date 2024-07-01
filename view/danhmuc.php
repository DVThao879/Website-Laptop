<div class="container mt-5">
<div class="row">
    <?php foreach ($dssp as $key => $sp) : $hinh = $image_path . $sp['img']; ?>
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