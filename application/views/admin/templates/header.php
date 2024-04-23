<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PUSKESMAS</title>
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/login/') ?>img/logo.png" />
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="<?= base_url('assets/admin/') ?>vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/admin/') ?>css/style.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="<?= base_url('assets/admin/') ?>vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?= base_url('assets/login/') ?>img/logo.png" alt="">
                <img class="logo-compact" src="<?= base_url('assets/login/') ?>img/logo.png" alt="">
                <!-- <img class="brand-title" src="<?= base_url('assets/login/') ?>img/logo.png" alt=""> -->
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <!-- <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div> -->
                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a> -->
                                    <a href="<?= base_url(); ?>auth/logout" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>