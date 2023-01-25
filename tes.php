
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Halaman Awal | Fakultas Kesehatan Masyarakat UNMUL</title>
    <link rel="apple-touch-icon" href="../../assets/logo/unmul.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/logo/unmul.png">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet"> -->

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/fonts/fonts.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/tour/tour.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/animasi.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->
</head><style>
    #BtnTop {
        position: fixed;
        float: right;
        bottom: 10px;
        right: 5%;
        border-radius: 4px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
    }

    #BtnTop>a {
        color: white;
        text-decoration: none;
        display: inline-block;
        padding: 2px 10px 2px 10px;
    }

    #BtnTop:hover {
        background-color: white;
        border: 1px solid white;
    }
</style>


<style type="text/css">
    .scroll {
        width: 100%;
        background: white;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 5px;
        overflow: scroll;
        height: 300px;

        /*script tambahan khusus untuk IE */
        scrollbar-face-color: #CE7E00;
        scrollbar-shadow-color: #FFFFFF;
        scrollbar-highlight-color: #6F4709;
        scrollbar-3dlight-color: #111111;
        scrollbar-darkshadow-color: #6F4709;
        scrollbar-track-color: #FFE8C1;
        scrollbar-arrow-color: #6F4709;
    }

    .judul {
        font-style: italic;
        color: purple;
    }

    .label {
        font-size: 15px;
        font-weight: bold;
        margin-bottom: 12px;
    }

    .nilai {
        font-weight: bold;
        font-size: xx-large;
        color: red;
    }

    #status {
        padding: 10px;
        background: #88C4FF;
        color: #000;
        font-weight: bold;
        font-size: 12px;
        margin-bottom: 10px;
        display: none;
        width: 90%;
    }
</style>

<body class="vertical-layout vertical-menu-modern content-left-sidebar todo-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>

                        <!-- DAFTAR SKRIPSI -->

                                                      <li class="dropdown dropdown-notification nav-item" hidden>
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-check-square "></i>
                                <span class="">
                                                                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"></h3>
                                                                                <span class="notification-title">0 Daftar Ujian Skripsi</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="../skripsi/daftar-skripsi-operator.php?title=Ujian Skripsi">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-body" id="skl_isi">
                                                                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="../skripsi/daftar-skripsi-operator.php?title=Ujian Skripsi">Read all notifications</a></li>
                            </ul>
                        </li>

                        <!-- DAFTAR PROPOSAL -->
                                                <li class="dropdown dropdown-notification nav-item" hidden>
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-check-square "></i>
                                <span class="">
                                                                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"></h3>
                                                                                <span class="notification-title">0 Daftar Proposal</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="../proposal/daftar-proposal-operator.php?title=Proposal">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-body" id="skl_isi">
                                                                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="../proposal/daftar-proposal-operator.php?title=Proposal">Read all notifications</a></li>
                            </ul>
                        </li>

                        <!-- SKL -->

                                                <li class="dropdown dropdown-notification nav-item" hidden>
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-check-square "></i>
                                <span class="">
                                                                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"></h3>
                                                                                <span class="notification-title">0 Pengajuan SKL</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="../skl/skl.php?title=Data SKL">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-body" id="skl_isi">
                                                                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="../skl/skl.php?title=Data SKL">Read all notifications</a></li>
                            </ul>
                        </li>

                        <!-- SURAT DATA KULIAH -->

                                                <li class="dropdown dropdown-notification nav-item" hidden>
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-check-square "></i>
                                <span class="">
                                                                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"></h3>
                                                                                <span class="notification-title">0 Surat Pengambilan Data Kuliah</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="../surat/hasil-data-kuliah.php?title=Data Kuliah">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-body" id="skl_isi">
                                                                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="../surat/hasil-data-kuliah.php?title=Data Kuliah">Read all notifications</a></li>
                            </ul>
                        </li>

                        <!-- SURAT DATA SKRIPSI -->

                                                <li class="dropdown dropdown-notification nav-item" hidden>
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-check-square "></i>
                                <span class="">
                                                                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"></h3>
                                                                                <span class="notification-title">0 Surat Pengambilan Data Skripsi</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="../surat/hasil-data-skripsi.php?title=Data Skripsi">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-body" id="skl_isi">
                                                                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="../surat/hasil-data-skripsi.php?title=Data Skripsi">Read all notifications</a></li>
                            </ul>
                        </li>

                        <!-- IZIN PENELITIAN -->

                                                <li class="dropdown dropdown-notification nav-item" >
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-check-square "></i>
                                <span class="badge badge-pill badge-primary badge-up">
                                    1                                </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"></h3>
                                                                                <span class="notification-title">1 Surat Izin Penelitian</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="../surat/hasil-izin-penelitian.php?title=Izin Penelitian">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-body" id="skl_isi">
                                                                                                    <h6 class="danger media-heading yellow darken-3">DESY MINANDRI                                                    </h6><small class="notification-text"> 1711015104 </small><br><br>
                                                    </h6><small class="notification-text mb-2"> Jl. Raja Alam II</small>
                                                    <hr>
                                                                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="../surat/hasil-izin-penelitian.php?title=Izin Penelitian">Read all notifications</a></li>
                            </ul>
                        </li>

                        <!-- SURAT DKK -->

                                                <li class="dropdown dropdown-notification nav-item" hidden>
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-check-square "></i>
                                <span class="">
                                                                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"></h3>
                                                                                <span class="notification-title">0 Surat Pengantar DKK</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="../surat/hasil-pengantar-dkk.php?title=Pengantar DKK">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-body" id="skl_isi">
                                                                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="../surat/hasil-pengantar-dkk.php?title=Pengantar DKK">Read all notifications</a></li>
                            </ul>
                        </li>

                        <!-- SURAT PINJAM ALAT -->

                                                <li class="dropdown dropdown-notification nav-item" hidden>
                            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
                                <i class="ficon feather icon-check-square "></i>
                                <span class="">
                                                                    </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"></h3>
                                                                                <span class="notification-title">0 Surat Peminjaman Alat</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="../surat/hasil-data-peminjaman-alat.php?title=Peminjaman Alat">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-body" id="skl_isi">
                                                                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="../surat/hasil-data-peminjaman-alat.php?title=Peminjaman Alat">Read all notifications</a></li>
                            </ul>
                        </li>

                        <!-- LOGOUT -->

                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">Selamat Datang</span><span class="user-status">Enny Isnaniah, S.Sos</span></div><span><img class="round" src="../../assets/akun/wanita.jpeg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="../../pages/akun/changepassword.php"> <i class="feather icon-user"></i> Change Password</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="../../pages/akun/logout.php"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header--><!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../halaman_awal/indexoperator2.php">
                    <img src="../../assets/logo/unmul.png" width="18%" alt="">
                    <h2 class="brand-text mb-0">AkademikFKM</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li ><a href="../halaman_awal/indexoperator2.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Halaman Awal</span></a>
            </li>
            <li class=" navigation-header"><span>Tugas Akhir</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="User">Pendaftaran</span></a>
                <ul class="menu-content">
                    <li ><a href="../jadwal/jadwal-ujian.php?title=Jadwal Ujian"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Jadwal Ujian</span></a>
                    </li>
                    <li ><a href="../proposal/daftar-proposal-operator.php?title=Proposal"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Proposal</span></a>
                    </li>
                    <li ><a href="../skripsi/daftar-skripsi-operator.php?title=Ujian Skripsi"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Ujian Skripsi</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="User">Data Ujian</span></a>
                <ul class="menu-content">
                    <li ><a href="../proposal/view-proposal.php?title=Data Proposal"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Data Proposal</span></a>
                    </li>
                    <li ><a href="../skripsi/skripsi.php?title=Data Ujian Skripsi"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Data Ujian Skripsi</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="User">Rekapitulasi</span></a>
                <ul class="menu-content">
                    <li ><a href="../proposal/rekap-proposal.php?title=Rekap Proposal"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Rekap Proposal</span></a>
                    </li>
                    <li ><a href="../skripsi/rekap-skripsi.php?title=Rekap Ujian Skripsi"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Rekap Ujian Skripsi</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="User">SKL</span></a>
                <ul class="menu-content">
                    <li ><a href="../skl/skl.php?title=Data SKL"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Data SKL</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="User">Penilaian Ujian</span></a>
                <ul class="menu-content">
                    <li ><a href="../proposal/nilai-proposal-rekap-operator.php?title=Nilai Proposal"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Nilai Proposal</span></a>
                    </li>
                    <li ><a href="../skripsi/nilai-skripsi-rekap-operator.php?title=Nilai Skripsi"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Nilai Skripsi</span></a>
                    </li>
                    <li ><a href="../operator/input-nilai-manual.php?title=Input Nilai Manual"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Input Nilai Manual</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="User">Bimbingan Skripsi</span></a>
                <ul class="menu-content">
                    <li ><a href="../skripsi/bimbingan-skripsi-operator-data.php?title=Data Bimbingan"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Data Bimbingan</span></a>
                    </li>
                    <!-- <li> <a href="progress-bimbingan-mahasiswa.php?title=Ujian"><i class="feather icon-circle"></i><span class="menu-item">Progress Mahasiswa</span></a>
                        </li> -->
                </ul>
            </li>
            <li class=" navigation-header"><span>Administrasi</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="User">Surat</span></a>
                <ul class="menu-content">
                    <li ><a href="../surat/data-kuliah.php?title=Data Kuliah"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Data Kuliah</span></a>
                    </li>
                    <li ><a href="../surat/data-skripsi.php?title=Data Skripsi"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Data Skripsi</span></a>
                    </li>
                    <li ><a href="../surat/peminjaman-alat.php?title=Peminjaman Alat"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Peminjaman Alat</span></a>
                    </li>
                    <li ><a href="../surat/izin-penelitian.php?title=Izin Penelitian"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Izin Penelitian</span></a>
                    </li>
                    <li ><a href="../surat/pengantar-dkk.php?title=Pengantar DKK"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Pengantar DKK</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span>Perkuliahan dan SK</span>
            </li>
            <li class=" nav-item"><a href="#"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="User">Jadwal Perkuliahan</span></a>
                <ul class="menu-content">
                    <li ><a href="../jadwal/jadwal-kuliah-view-awal-operator2.php?title=Jadwal Kuliah"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">Jadwal Kuliah</span></a>
                    </li>
                    <li ><a href="../sk/sk-mengajar.php?title=SK Mengajar"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">SK Mengajar</span></a>
                    </li>
                    <li ><a href="../sk/sk-uas.php?title=SK UAS"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Edit">SK UAS</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section id="dashboard-analytics">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 ">
                        <div class="card" style="height: 95%">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <img src="../../assets/akun/wanita.jpeg" style="height: 100%; width: 100%" class="rounded">
                                <div class=" bg-rgba-primary">

                                    <div class="avatar-content">
                                        <i class="feather ext-primary font-medium-5"></i>

                                    </div>
                                </div>

                                <h2 class="text-bold-700 mt-1 mb-25 d-flex justify-content-between"></h2>
                                <p class="mb-0"></p>
                            </div>
                            <div class="card-content">
                                <div id="subscribe-gain-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="card" style="height: 95%">
                            <div class="card-header d-flex flex-column align-items-start pb-0">
                                <h2>Hadist Of The Day</h2><br>
                                                                <h2 class="text-bold-700 mt-1 mb-25">بِسْمِ اللَّهِ الَّذِى لاَ يَضُرُّ مَعَ اسْمِهِ شَىْءٌ فِى الأَرْضِ وَلاَ فِى السَّمَاءِ وَهُوَ السَّمِيعُ الْعَلِيمُ </h2>
                                <p class="mb-0"> “Dengan nama Allah yang bila disebut, segala sesuatu di bumi dan langit tidak akan berbahaya, Dia-lah Yang Maha Mendengar lagi Maha Mengetahui.”</p>
                                <p class="mb-0">  HR. Abu Daud no. 5088, 5089, Tirmidzi no. 3388, dan Ibnu Majah no. 3869. Al Hafizh Abu Thohir mengatakan bahwa sanad hadits ini hasan.</p>
                            </div>
                            <div class="card-content">
                                <div id="orders-received-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card bg-analytics text-white" style="height: 95%">
                            <div class="card-content">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-xl bg-primary shadow mt-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-award white font-large-1"></i>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="mb-2 text-white">السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</h1>
                                        <h1 class="mb-2 text-white">Enny Isnaniah, S.Sos</h1>

                                        <p class="m-auto w-75">Selamat Datang Pada <br>Sistem Administrasi Akademik <br><strong>Fakultas Kesehatan Masyarakat</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                                                <h4 class="card-title">Rekap Pertemuan Mata Kuliah per Tanggal 29 April 2021</h4>
                                <p class="highcharts-description">
                                    (69 Mata Kuliah)
                                </p>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <figure class="highcharts-figure">
                                        <div id="container1"></div>
                                        <button id="plain" class="btn btn-primary">Plain</button>
                                        <button id="inverted" class="btn btn-warning">Inverted</button>
                                        <button id="polar" class="btn btn-success">Polar</button>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                                                <h4 class="card-title">Rekap Pertemuan Mata Kuliah per Tanggal 29 April 2021</h4>
                                <p class="highcharts-description">
                                    (78 Kelas)
                                </p>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <figure class="highcharts-figure">
                                        <div id="data-monitoring"></div>
                                        <p class="highcharts-description">
                                        </p>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Kegiatan terbaru</h4>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive mt-1">
                                    <table class="table table-hover-animation mb-0">
                                        <thead>
                                            <tr>
                                                <th>KEGIATAN</th>
                                                <th>PELAKSANA</th>
                                                <th style="text-align: center;">TANGGAL MULAI</th>
                                                <th style="text-align: center;">TANGGAL BERAKHIR</th>
                                                <th style="text-align: center;">AKSI</th>
                                            </tr>
                                        </thead>
                                                                                                                                <tbody>
                                                <tr>
                                                    <td>Pemindahan Tempat Pelayanan Akademik dan Kemahasiswaan ke Gedung Baru</td>
                                                    <td>
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">TIm Akademik</ul>
                                                    </td>
                                                    <td style="text-align: center;">01 Maret 2021</td>
                                                    <td style="text-align: center;">01 Maret 2021</td>
                                                    <td width="10%" align="center"><a href="edit-kegiatan-terbaru.php?id=12" class="btn btn-primary feather icon-edit "></a> <a href="proses-hapus-kegiatan-terbaru.php?id=12" class="del"><button class="btn btn-danger feather icon-trash"></button></a></td>
                                                </tr>
                                                                                                                                    <tbody>
                                                <tr>
                                                    <td>Perkuliahan Semester Genap 2020/2021</td>
                                                    <td>
                                                        <ul class="list-unstyled users-list m-0  d-flex align-items-center">Tim Akademik</ul>
                                                    </td>
                                                    <td style="text-align: center;">01 Februari 2021</td>
                                                    <td style="text-align: center;">21 Mei 2021</td>
                                                    <td width="10%" align="center"><a href="edit-kegiatan-terbaru.php?id=8" class="btn btn-primary feather icon-edit "></a> <a href="proses-hapus-kegiatan-terbaru.php?id=8" class="del"><button class="btn btn-danger feather icon-trash"></button></a></td>
                                                </tr>
                                                                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Timeline Akademik</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <ul class="activity-timeline timeline-left list-unstyled">
                                                                                                                            <li>
                                    <div class="timeline-icon bg-danger">
                                        <i class="feather icon-plus-circle   font-medium-2 align-middle"></i>
                                    </div>
                                    <div class="timeline-info">
                                        <p class="font-weight-bold mb-0">Yudisium Gelombang I FKM UNMUL</p>
                                        <span class="font-small-3">Pelaksanaan Yudisium Dilakukan Secara Kombinasi Melalui Daring dan Luring</span>
                                    </div>
                                    <small class="text-muted">25 Maret 2021 - 25 Maret 2021 </small>
                                    <small class="text-muted">__ <a href="edit-kegiatan-timeline.php?id=16" class=" feather icon-edit "></a> | <a href="proses-hapus-kegiatan-timeline.php?id=16" class="del"><span class=" feather icon-trash"> </span></a>__</small>

                                </li>
                                                                                                                            <li>
                                    <div class="timeline-icon bg-danger">
                                        <i class="feather icon-plus-circle   font-medium-2 align-middle"></i>
                                    </div>
                                    <div class="timeline-info">
                                        <p class="font-weight-bold mb-0">Kuliah Semester Genap 2020/2021</p>
                                        <span class="font-small-3">Perkuliahan Semester Genap dilakukan pada kampus Fakultas Kesehatan Masyarakat Universitas Mulawarman</span>
                                    </div>
                                    <small class="text-muted">01 Februari 2021 - 21 Mei 2021 </small>
                                    <small class="text-muted">__ <a href="edit-kegiatan-timeline.php?id=13" class=" feather icon-edit "></a> | <a href="proses-hapus-kegiatan-timeline.php?id=13" class="del"><span class=" feather icon-trash"> </span></a>__</small>

                                </li>
                                                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->

<!-- <div id="BtnTop">
    <span class="badge badge-pill badge-primary badge-up" id="pesan"></span>
    <button data-toggle="modal" data-target="#add_data_Modal" class="btn btn-primary">Pesan</button>
</div> -->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://www.instagram.com/riezfian_/" target="_blank">Riezfian Raditya S, SKM</a>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->

        <div class="flash-data" data-flashdata=1></div>
    
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<script src="../../../app-assets/js/scripts/components.js"></script>
<script src="../../../app-assets/js/scripts/pages/app-todo.js"></script>
<script src="../../../app-assets/js/scripts/sweetalert2.all.min.js"></script>
<script>
    $('.del').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href')
        Swal.fire({
            title: 'Anda Yakin?',
            text: "Data Akan Dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        })
    })

    const flashdata = $('.flash-data').data('flashdata')
    const flashdata2 = $('.flash-data2').data('flashdata')
    const flashdata3 = $('.flash-data3').data('flashdata')
    const flashdata4 = $('.flash-data4').data('flashdata')

    if (flashdata) {
        Swal.fire({
            title: 'Selamat Datang ',
            text: 'Sistem Administrasi Akademik Fakultas Kesehatan Masyarakat',
            icon: 'success',
            showClass: {
                popup: 'animated fadeInDown medium'
            },
            hideClass: {
                popup: 'animated fadeOutUp faster'
            }
        })
    } else if (flashdata2) {
        Swal.fire({

            title: 'Berhasil',
            text: 'Data Berhasil Ditambahkan!',
            icon: 'success'
        })
    } else if (flashdata3) {
        Swal.fire({

            title: 'Berhasil',
            text: 'Data Berhasil Dihapus!',
            icon: 'success'
        })
    } else if (flashdata4) {
        Swal.fire({

            title: 'Berhasil',
            text: 'Data Berhasil Divalidasi!',
            icon: 'success'
        })
    }
</script>
<script src="../../../app-assets/vendors/highchart/highchart.js"></script>
<script src="../../../app-assets/vendors/highchart/label.js"></script>
<script src="../../../app-assets/vendors/highchart/exporting.js"></script>
<script src="../../../app-assets/vendors/highchart/export-data.js"></script>
<!-- <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script> -->

<script type="text/javascript">
    // Data retrieved from http://vikjavev.no/ver/index.php?spenn=2d&sluttid=16.06.2015.
    // Data generated from http://www.bikeforums.net/professional-cycling-fans/1113087-2017-tour-de-france-gpx-tcx-files.html
    Highcharts.chart('data-monitoring', {
        chart: {
            type: 'spline'
        },
        title: {
            text: 'Semester Genap 2020/2021'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['2018 AKK - Analisis Kebijakan Kesehatan','2018 AKK - Asuransi Kesehatan','2018 AKK - Kepemimpinan dan Budaya Organisasi','2018 AKK - Manajemen Logistik Obat, Alat dan Faskes','2018 AKK - Manajemen RS dan Puskesmas','2018 AKK - Pemasaran Jasa Pelayanan Bidang Kesehatan','2018 AKK - Pembiayaan Kesehatan','2018 Biostat - Manajemen dan Analisis Data 2','2018 Biostat - Rancangan penelitian kesehatan','2018 Biostat - Statistik non parametrik','2018 BIOSTAT - Teknik Demografi Kesehatan','2018 Biostat - Teknik Statistik Multivariabel','2018 Biostat - Validitas dan Reliabilitas Alat Ukur','2018 epid - Analisis Pemetaan Pola Penyakit dan Risiko','2018 epid - Epidemiologi K3','2018 epid - Epidemiologi kesehatan darurat','2018 EPID - Epidemiologi Penyakit Tropis','2018 EPID - Epidemiologi perencanaan dan pelayanan kesehatan','2018 Epid - Praktikum surveilans','2018 epid - Rapid Survei','2018 Gizi - Dietetik Masyarakat','2018 GIZI - Gizi Daur Hidup','2018 GIZI - Manajemen makanan layanan institusi','2018 GIZI - Pengolahan dan Pengawet Makanan','2018 GIZI - Perencanaan, implementasi dan evaluasi Program Gizi','2018 GIZI - Praktikum Gizi','2018 GIZI - Teknologi Pangan Fungsional Hutan Hujan Tropis','2018 K3 - Ergonomi dan Faal Kerja II','2018 K3 - Higiene Industri II','2018 K3 - Manajemen K3','2018 K3 - Praktikum K3','2018 K3 - Program K3','2018 K3 - Psikologi Industri dan Hubungan Industrial','2018 K3 - Toksikologi Industri II','2018 kesling - Aspek kesling dalam penanganan bencana','2018 KESLING - Ekologi Wilayah Hutan Tropis','2018 KESLING - Instrumentasi dan observasi lapangan','2018 KESLING - Pengelolaan air','2018 Kesling - Pengelolaan Sampah','2018 Kesling - Sanitasi Makanan dan minuman','2018 kesling - Sanitasi Rumah Sakit','2018 KESLING - Toksikologi Lingkungan','2018 KESPRO - Fertilitas,Kontrasepsi dan Infertilitas','2018 Kespro - Infeksi Saluran Reproduksi dan HIV AIDS','2018 PROMKES - Indikator dan pengukuran promosi kesehatan','2018 promkes - Komunikasi Pemasaran Sosial Bid.Kesh','2018 promkes - Pemberdayaan Masy. di Bidang Kesehatan 2','2018 promkes - Pengembangan Media Promkes','2018 promkes - Program Promosi Kesehatan','2018 promkes - Promosi Kesehatan Institusi (Praktikum)','2018 promkes - Psikologi Kesehatan','2019 A - Kepemimpinan dan Berfikir Sistem Kesh masy','2019 A - Manajemen Bencana','2019 A - Manajemen Data','2019 A - Metodologi Penelitian','2019 A - Pembiayaan dan Penganggaran Kesh','2019 A - Perencanaan dan Evaluasi Kesehatan (Integrasi)','2019 A - Promosi dan Pendidikan Kesehatan','2019 A - SIK/SIM/Teknologi Informasi Kesh','2019 A - Surveilans Kesh Masy','2020 A - Administrasi dan Kebijakan Kesehatan','2020 A - Biomedik 2 (Pathologi, Parasitologi dan Biokimia)','2020 A - Dasar Epidemiologi','2020 A - Dasar Ilmu Gizi Kesh Masy','2020 A - Dasar Kesehatan Lingkungan','2020 A - Dasar Promosi Kesehatan','2020 A - Ekonomi Kesehatan','2020 A - Kesehatan Reproduksi Masyarakat','2020 A - Komunikasi Kesehatan','2020 B - Administrasi dan Kebijakan Kesehatan','2020 B - Biomedik 2 (Pathologi, Parasitologi dan Biokimia)','2020 B - Dasar Epidemiologi','2020 B - Dasar Ilmu Gizi Kesh Masy','2020 B - Dasar Kesehatan Lingkungan','2020 B - Dasar Promosi Kesehatan','2020 B - Ekonomi Kesehatan','2020 B - Kesehatan Reproduksi Masyarakat','2020 B - Komunikasi Kesehatan',]
        },
        yAxis: {
            title: {
                text: 'Pertemuan'
            },
            labels: {
                formatter: function() {
                    return this.value + '';
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 2
                }
            }
        },
        series: [{
            name: 'Jumlah Pertemuan',
            marker: {
                symbol: 'ovale'
            },
            data: [11,12,15,12,12,12,10,13,12,13,12,12,13,11,12,9,9,10,9,10,13,13,13,12,12,12,13,13,13,11,13,12,12,13,10,12,11,12,10,11,9,9,11,13,13,11,13,13,11,11,13,13,11,13,12,11,8,12,12,11,12,13,13,13,11,13,10,13,13,12,13,13,13,11,13,10,13,13,]

        }]
    });
</script>


<script src="../../../app-assets/vendors/highchart/jquery.js"></script>
<script src="../../../app-assets/vendors/highchart/highchart-more.js"></script>
<script src="../../../app-assets/vendors/highchart/accessibility.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script> -->
<script type="text/javascript">
    var chart = Highcharts.chart('container1', {

        title: {
            text: ''
        },

        subtitle: {
            text: ''
        },

        xAxis: {

            categories: ['Administrasi dan Kebijakan Kesehatan','Analisis Kebijakan Kesehatan','Analisis Pemetaan Pola Penyakit dan Risiko','Aspek kesling dalam penanganan bencana','Asuransi Kesehatan','Biomedik 2 (Pathologi, Parasitologi dan Biokimia)','Dasar Epidemiologi','Dasar Ilmu Gizi Kesh Masy','Dasar Kesehatan Lingkungan','Dasar Promosi Kesehatan','Dietetik Masyarakat','Ekologi Wilayah Hutan Tropis','Ekonomi Kesehatan','Epidemiologi K3','Epidemiologi kesehatan darurat','Epidemiologi Penyakit Tropis','Epidemiologi perencanaan dan pelayanan kesehatan','Ergonomi dan Faal Kerja II','Fertilitas,Kontrasepsi dan Infertilitas','Gizi Daur Hidup','Higiene Industri II','Indikator dan pengukuran promosi kesehatan','Infeksi Saluran Reproduksi dan HIV AIDS','Instrumentasi dan observasi lapangan','Kepemimpinan dan Berfikir Sistem Kesh masy','Kepemimpinan dan Budaya Organisasi','Kesehatan Reproduksi Masyarakat','Komunikasi Kesehatan','Komunikasi Pemasaran Sosial Bid.Kesh','Manajemen Bencana','Manajemen dan Analisis Data 2','Manajemen Data','Manajemen K3','Manajemen Logistik Obat, Alat dan Faskes','Manajemen makanan layanan institusi','Manajemen RS dan Puskesmas','Metodologi Penelitian','Pemasaran Jasa Pelayanan Bidang Kesehatan','Pemberdayaan Masy. di Bidang Kesehatan 2','Pembiayaan dan Penganggaran Kesh','Pembiayaan Kesehatan','Pengelolaan air','Pengelolaan Sampah','Pengembangan Media Promkes','Pengolahan dan Pengawet Makanan','Perencanaan dan Evaluasi Kesehatan (Integrasi)','Perencanaan, implementasi dan evaluasi Program Gizi','Praktikum Gizi','Praktikum K3','Praktikum surveilans','Program K3','Program Promosi Kesehatan','Promosi dan Pendidikan Kesehatan','Promosi Kesehatan Institusi (Praktikum)','Psikologi Industri dan Hubungan Industrial','Psikologi Kesehatan','Rancangan penelitian kesehatan','Rapid Survei','Sanitasi Makanan dan minuman','Sanitasi Rumah Sakit','SIK/SIM/Teknologi Informasi Kesh','Statistik non parametrik','Surveilans Kesh Masy','Teknik Demografi Kesehatan','Teknik Statistik Multivariabel','Teknologi Pangan Fungsional Hutan Hujan Tropis','Toksikologi Industri II','Toksikologi Lingkungan','Validitas dan Reliabilitas Alat Ukur',]
        },
        yAxis: {

            title: '',
        },

        series: [{
            name: 'Pertemuan',
            type: 'column',
            colorByPoint: true,
            data: [24,11,11,10,12,26,26,26,22,26,13,12,20,12,9,9,10,13,11,13,13,13,13,11,13,15,26,26,11,11,13,13,11,12,13,12,12,12,13,11,10,12,10,13,12,8,12,12,13,9,12,11,12,11,12,13,12,10,11,9,12,13,11,12,12,13,13,9,13,],
            showInLegend: false
        }]

    });

    $('#inverted').click(function() {
        chart.update({
            chart: {
                inverted: true,
                polar: false
            },
            subtitle: {
                text: 'Inverted'
            }
        });
    });

    $('#plain').click(function() {
        chart.update({
            chart: {
                inverted: false,
                polar: false
            },
            subtitle: {
                text: 'Plain'
            }
        });
    });


    $('#polar').click(function() {
        chart.update({
            chart: {
                inverted: false,
                polar: true
            },
            subtitle: {
                text: 'Polar'
            }
        });
    });
</script>

<!-- fungsi ajax -->

<script>
    // PESAN/ CHAT

    // $(function() {
    //     setInterval(pesan, 200);
    // });

    // function pesan() {
    //     $.ajax({
    //         url: '../../ajax/ajax-pesan-baru2.php',
    //         success: function(data) {
    //             $('#pesan').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(pesan2, 200);
    // });

    // function pesan2() {
    //     $.ajax({
    //         url: '../../ajax/ajax-pesan-baru.php',
    //         success: function(data) {
    //             $('#pesan2').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(pesan_isi, 1000);
    // });

    // function pesan_isi() {
    //     $.ajax({
    //         url: '../../ajax/ajax-pesan-isi2.php',
    //         success: function(data) {
    //             $('#pesan_isi').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(pesan_isi_jumlah, 200);
    // });

    // function pesan_isi_jumlah() {
    //     $.ajax({
    //         url: '../../ajax/ajax-pesan-isi-jumlah.php',
    //         success: function(data) {
    //             $('#pesan_isi_jumlah').html(data);
    //         },
    //     });
    // }

    // SURAT KETERANGAN LULUS

    // $(function() {
    //     setInterval(skl_class, 200);
    // });

    // function skl_class() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-skl-class.php',
    //         success: function(data) {
    //             $('.skl_class').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(skl_jumlah, 200);
    // });

    // function skl_jumlah() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-skl.php',
    //         success: function(data) {
    //             $('#skl_jumlah').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(skl_isi, 200);
    // });

    // function skl_isi() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-skl-isi.php',
    //         success: function(data) {
    //             $('#skl_isi').html(data);
    //         },
    //     });
    // }

    // // AKHIR SURAT KETERANGAN LULUS

    // // DAFTAR UJIAN PROPOSAL

    // $(function() {
    //     setInterval(prop_jumlah, 200);
    // });

    // function prop_jumlah() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-prop.php',
    //         success: function(data) {
    //             $('#prop_jumlah').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(prop_class, 200);
    // });

    // function prop_class() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-prop-class.php',
    //         success: function(data) {
    //             $('.prop_class').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(prop_isi, 200);
    // });

    // function prop_isi() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-prop-isi.php',
    //         success: function(data) {
    //             $('#prop_isi').html(data);
    //         },
    //     });
    // }

    // // AKHIR DAFTAR UJIAN PROPOSAL

    // // DAFTAR UJIAN SKRIPSI

    // $(function() {
    //     setInterval(skrip_jumlah, 200);
    // });

    // function skrip_jumlah() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-skrip.php',
    //         success: function(data) {
    //             $('#skrip_jumlah').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(skrip_class, 200);
    // });

    // function skrip_class() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-skrip-class.php',
    //         success: function(data) {
    //             $('.skrip_class').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(skrip_isi, 200);
    // });

    // function skrip_isi() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-skrip-isi.php',
    //         success: function(data) {
    //             $('#skrip_isi').html(data);
    //         },
    //     });
    // }

    // // AKHIR DAFTAR UJIAN SKRIPSI

    // // SURAT DATA KULIAH

    // $(function() {
    //     setInterval(datkul_jumlah, 200);
    // });

    // function datkul_jumlah() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-data-kuliah.php',
    //         success: function(data) {
    //             $('#datkul_jumlah').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(datkul_class, 200);
    // });

    // function datkul_class() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-data-kuliah-class.php',
    //         success: function(data) {
    //             $('.datkul_class').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(datkul_isi, 200);
    // });

    // function datkul_isi() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-data-kuliah-isi.php',
    //         success: function(data) {
    //             $('#datkul_isi').html(data);
    //         },
    //     });
    // }

    // // AKHIR SURAT DATA KULIAH

    // // SURAT DATA SKRIPSI

    // $(function() {
    //     setInterval(datskrip_jumlah, 200);
    // });

    // function datskrip_jumlah() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-data-skripsi.php',
    //         success: function(data) {
    //             $('#datskrip_jumlah').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(datskrip_class, 200);
    // });

    // function datskrip_class() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-data-skripsi-class.php',
    //         success: function(data) {
    //             $('.datskrip_class').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(datskrip_isi, 200);
    // });

    // function datskrip_isi() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-data-skripsi-isi.php',
    //         success: function(data) {
    //             $('#datskrip_isi').html(data);
    //         },
    //     });
    // }

    // // AKHIR SURAT DATA SKRIPSI

    // // SURAT IZIN PENELITIAN

    // $(function() {
    //     setInterval(sulit_jumlah, 200);
    // });

    // function sulit_jumlah() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-izin-penelitian.php',
    //         success: function(data) {
    //             $('#sulit_jumlah').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(sulit_class, 200);
    // });

    // function sulit_class() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-izin-penelitian-class.php',
    //         success: function(data) {
    //             $('.sulit_class').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(sulit_isi, 200);
    // });

    // function sulit_isi() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-izin-penelitian-isi.php',
    //         success: function(data) {
    //             $('#sulit_isi').html(data);
    //         },
    //     });
    // }

    // // AKHIR SURAT IZIN PENELITIAN

    // // SURAT PENGANTAR DKK

    // $(function() {
    //     setInterval(dkk_jumlah, 200);
    // });

    // function dkk_jumlah() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-pengantar-dkk.php',
    //         success: function(data) {
    //             $('#dkk_jumlah').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(dkk_class, 200);
    // });

    // function dkk_class() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-pengantar-dkk-class.php',
    //         success: function(data) {
    //             $('.dkk_class').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(dkk_isi, 200);
    // });

    // function dkk_isi() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-pengantar-dkk-isi.php',
    //         success: function(data) {
    //             $('#dkk_isi').html(data);
    //         },
    //     });
    // }

    // // AKHIR SURAT PENGANTAR DKK

    // // SURAT PEMINJAMAN ALAT

    // $(function() {
    //     setInterval(alat_jumlah, 200);
    // });

    // function alat_jumlah() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-pinjam-alat.php',
    //         success: function(data) {
    //             $('#alat_jumlah').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(alat_class, 200);
    // });

    // function alat_class() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-pinjam-alat-class.php',
    //         success: function(data) {
    //             $('.alat_class').html(data);
    //         },
    //     });
    // }

    // $(function() {
    //     setInterval(alat_isi, 200);
    // });

    // function alat_isi() {
    //     $.ajax({
    //         url: '../../ajax/ajax-notif-surat-pinjam-alat-isi.php',
    //         success: function(data) {
    //             $('#alat_isi').html(data);
    //         },
    //     });
    // }

    // AKHIR SURAT PEMINJAMAN ALAT

    // NILAI PROPOSAL DAN SKRIPSI //



    // NILAI PROPOSAL DAN SKRIPSI //
</script>

<!-- END: AJAX-->

</body>

</html>

<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6A5ACD">

                <h4 class="modal-title" style="color: white">Chatting</h4>
                <a href=""><button type="button" class="close">&times;</button></a>
            </div>
            <div class="modal-body">

                <div class="scroll">
                    <div class="card border-primary mb-3 " style="max-width: 100%;" class="scroll">
                        <div class="card-body ">
                            <h4 align="center" id="pesan2">Pesan Baru</h4>
                            <table class="table" width="100%">
                                <tr>
                                    <td>
                                        <div id="pesan_isi"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
                <table>
                    <tr>
                        <td>
                            <a href="../chat/kotak-masuk-operator.php" class="btn btn-warning">Kotak Masuk</a>
                        </td>
                        <td>
                            <a href="../chat/chat-baru-operator.php" class="btn btn-primary">Pesan Baru</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
