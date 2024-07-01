<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dự án 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/view.css">
    <script src="../js/ajax.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="top-header">
            <marquee behavior="scroll" class="py-1" direction="left" style="color:#fff;">
                Chào mừng bạn đến với LapTopIA
            </marquee>
        </div>
        <div class="bottom-header mb-4 py-1 px-3">
            <div class="row">
                <div class="navbar-brand col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"><a href="index.php"><img src="../image/logo4.png"></a></div>
                <form class="col-sm-5 col-md-5 col-lg-5 col-xl-6 col-xxl-6 d-flex align-items-center" method="post" action="index.php?act=danhmucsp">
                    <input type="text" class="form-control me-2" name="keyword" placeholder="Nhập tên sản phẩm..." required>
                    <button type="submit" class="btn btn-outline-success">Search</button>
                </form>
                <div class="form-menu d-flex justify-content-end col-sm-4 col-md-4 col-lg-4 col-xl-3 col-xxl-3 align-items-center">
                    <div class="dn-header">
                        <?php if (isset($_SESSION['user'])) { ?>
                            <?php $first_letter = strtoupper(substr($_SESSION['user']['email'], 0, 1)) ?>
                            <?php if ($_SESSION['user']['img'] != "") : ?>
                                <li class="nav-item dropdown">
                                    <a class="acc nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <img class="avata-img" src="../upload/<?php echo $_SESSION['user']['img'] ?>" alt="">
                                        <p class="mt-3"><?php echo $_SESSION['user']['user'] ?></p>
                                    </a>
                                <?php else : ?>
                                <li class="nav-item dropdown">
                                    <a class="acc nav-link mt-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <p class="avatar-header"><?php echo $first_letter; ?></p>
                                        <p><?php echo $_SESSION['user']['user'] ?></p>
                                    </a>
                                <?php endif ?>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item"> <a href="index.php?act=taikhoan">Thông tin tài khoản </a></li>
                                    <?php if ($_SESSION['user']['role'] == 1) { ?>
                                        <li class="dropdown-item"> <a href="../admin/index.php">Đăng nhập vào ADMIN</a></li>
                                    <?php } ?>
                                    <li class="dropdown-item"> <a href="index.php?act=dangxuat">Đăng xuất</a></li>
                                </ul>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item"><a href="index.php?act=dangnhap"><i class="fa-solid fa-user fs-5" style="color: #000000;"></i> Đăng nhập</a></li>
                            <?php } ?>
                    </div>
                    <div class="giohang-icon ms-1">
                        <a href="index.php?act=addtocart"> <i class="fa-solid fa-cart-shopping fs-5" style="color: #000000;"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg" style="background-color: #eee;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh mục
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($listdm as $dm) : ?>
                                    <li><a class="dropdown-item" href="index.php?act=danhmucsp&iddm=<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hỏi đáp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Góp ý</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hỏi đáp</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>