<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">LaptopPIA</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="index.php?act=listdm" class="sidebar-link">
                        <i class="lni lni-tab"></i>
                        <span>Danh mục</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?act=listsp" class="sidebar-link">
                        <i class="lni lni-producthunt"></i>
                        <span>Sản phẩm</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Biến thể</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="index.php?act=listbt" class="sidebar-link">Sản phẩm biến thể</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index.php?act=listram" class="sidebar-link">Ram</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="index.php?act=listmau" class="sidebar-link">Màu</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?act=listtk" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Khách hàng</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?act=listbl" class="sidebar-link">
                        <i class="lni lni-popup"></i>
                        <span>Bình luận</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?act=listdh" class="sidebar-link">
                        <i class="lni lni-layout"></i>
                        <span>Đơn hàng</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?act=thongke" class="sidebar-link">
                        <i class="lni lni-bar-chart"></i>
                        <span>Thống kê</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-cog"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="../view/index.php" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control border-0 rounded-0" placeholder="Search...">
                        <button class="btn border-0 rounded-0" type="button">Search</button>
                    </div>
                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="../image/account.png" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-timer"></i>
                                    <span>Analytics</span>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-cog"></i>
                                    <span>Setting</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item">
                                    <i class="lni lni-question-circle"></i>
                                    <span>Analytics</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>