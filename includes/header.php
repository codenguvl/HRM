<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- MetisMenu CSS -->
    <link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true): ?>
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">QUAN LI NHAN SU</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>

                            <?php
                            $role = $_SESSION['user_role'];
                            if ($role == 'GiangVien' || $role == 'QuanTriVien'): ?>
                                <li <?php echo (CURRENT_PAGE == "noi_dung_dao_tao.php" || CURRENT_PAGE == "them_noi_dung_dao_tao.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-file-text fa-fw"></i> Noi dung dao tao<span
                                            class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="noi_dung_dao_tao.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                        <li>
                                            <a href="them_noi_dung_dao_tao.php"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                        </li>
                                    </ul>
                                </li>

                                <li <?php echo (CURRENT_PAGE == "lich_trinh_dao_tao.php" || CURRENT_PAGE == "them_lich_trinh_dao_tao.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-calendar fa-fw"></i> Lich trinh dao tao<span
                                            class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="lich_trinh_dao_tao.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                        <li>
                                            <a href="them_lich_trinh_dao_tao.php"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <?php if ($role == 'NhanVien' || $role == 'QuanTriVien'): ?>
                                <li <?php echo (CURRENT_PAGE == "chuong_trinh_dao_tao.php" || CURRENT_PAGE == "them_chuong_trinh_dao_tao.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-book fa-fw"></i> Chuong trinh dao tao<span
                                            class="fa arrow"></span></a>

                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="chuong_trinh_dao_tao.php"><i class="fa fa-list fa-fw"></i> List all</a>
                                        </li>
                                        <?php if ($role == 'NhanVien'): ?>
                                            <li>
                                                <a href="chuong_trinh_da_dang_ky.php"><i class="fa fa-check-circle fa-fw"></i> Đã
                                                    đăng ký</a>
                                            </li>

                                        <?php endif; ?>
                                        <?php if ($role == 'QuanTriVien'): ?>
                                            <li>
                                                <a href="them_chuong_trinh_dao_tao.php"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>

                                </li>

                                <li <?php echo (CURRENT_PAGE == "danh_gia_dao_tao.php" || CURRENT_PAGE == "them_danh_gia_dao_tao.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-star fa-fw"></i> Danh gia dao tao<span
                                            class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="danh_gia_dao_tao.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                        <li>
                                            <a href="them_danh_gia_dao_tao.php"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>

                            <?php if ($role == 'QuanTriVien'): ?>
                                <li <?php echo (CURRENT_PAGE == "nhan_vien.php" || CURRENT_PAGE == "them_nhan_vien.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-user-circle fa-fw"></i> Nhan vien<span
                                            class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="nhan_vien.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                        <li>
                                            <a href="them_nhan_vien.php"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                        </li>
                                    </ul>
                                </li>

                                <li <?php echo (CURRENT_PAGE == "nhu_cau_dao_tao.php" || CURRENT_PAGE == "them_nhu_cau_dao_tao.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-graduation-cap fa-fw"></i> Nhu cau dao tao<span
                                            class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="nhu_cau_dao_tao.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                        <li>
                                            <a href="them_nhu_cau_dao_tao.php"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                        </li>
                                    </ul>
                                </li>

                                <li <?php echo (CURRENT_PAGE == "giang_vien.php" || CURRENT_PAGE == "them_giang_vien.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-chalkboard-teacher fa-fw"></i> Giảng viên<span
                                            class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="giang_vien.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                        <li>
                                            <a href="them_giang_vien.php"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                        </li>
                                    </ul>
                                </li>

                                <li <?php echo (CURRENT_PAGE == "phan_cong_giang_vien.php" || CURRENT_PAGE == "them_phan_cong_giang_vien.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-user fa-fw"></i> Phân công giảng viên<span
                                            class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="phan_cong_giang_vien.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                        <li>
                                            <a href="them_phan_cong_giang_vien.php"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                        </li>
                                    </ul>
                                </li>

                                <li <?php echo (CURRENT_PAGE == "dang_ky_dao_tao.php" || CURRENT_PAGE == "them_dang_ky_dao_tao.php") ? 'class="active"' : ''; ?>>
                                    <a href="#"><i class="fa fa-clipboard fa-fw"></i> Đăng ký đào tạo<span
                                            class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="dang_ky_dao_tao.php"><i class="fa fa-list fa-fw"></i>List all</a>
                                        </li>
                                        <!-- <li>
                                        <a href="them_dang_ky_dao_tao.php"><i class="fa fa-plus fa-fw"></i>Add New</a>
                                    </li> -->
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
        <?php endif; ?>
        <!-- The End of the Header -->