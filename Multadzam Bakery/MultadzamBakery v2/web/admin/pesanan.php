<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description" content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Multadzam Bakery</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/mdb-favicon.ico">
    <!-- Custom CSS -->
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="pesanan.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/icon.png" alt="homepage" class="dark-logo" style="width: 40px;" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/icon.png" alt="homepage" class="light-logo" style="width: 40px;" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text mt-3">
                            <h2>Multadzam Bakery</h2>
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="../assets/images/users/1.jpg" alt="users" class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium">Steave Jobs <i class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email">varun@gmail.com</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pesanan.php" aria-expanded="false"><i class="mdi mdi-cart-plus"></i><span class="hide-menu">Pesanan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="riwayat.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Riwayat Pesanan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="contact.php" aria-expanded="false"><i class="mdi mdi-email-outline"></i><span class="hide-menu">Pesan</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="mitra.php" aria-expanded="false"><i class="mdi mdi-worker"></i><span class="mitra.php">Mitra</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="produk.php" aria-expanded="false"><i class="mdi mdi-tag-multiple"></i><span class="hide-menu">Produk</span></a></li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-6">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Nama Pemesan</th>
                                            <th class="border-top-0">No.Telepon</th>
                                            <th class="border-top-0">No. Whatsapp / Email</th>
                                            <th class="border-top-0">Tanggal Pesanan</th>
                                            <th class="border-top-0">ID Pesanan</th>
                                            <th class="border-top-0">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Elite Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>John Doe</td>
                                            <td>
                                                <label class="label label-danger">Angular</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Monster Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>Venessa Fern</td>
                                            <td>
                                                <label class="label label-info">Vue Js</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>John Doe</td>
                                            <td>
                                                <label class="label label-success">Bootstrap</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Ample Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>John Doe</td>
                                            <td>
                                                <label class="label label-purple">React</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Nama Pemesan</th>
                                            <th class="border-top-0">No.Telepon</th>
                                            <th class="border-top-0">No. Whatsapp / Email</th>
                                            <th class="border-top-0">Tanggal Pesanan</th>
                                            <th class="border-top-0">ID Pesanan</th>
                                            <th class="border-top-0">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Elite Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>John Doe</td>
                                            <td>
                                                <label class="label label-danger">Angular</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Monster Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>Venessa Fern</td>
                                            <td>
                                                <label class="label label-info">Vue Js</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Material Pro Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>John Doe</td>
                                            <td>
                                                <label class="label label-success">Bootstrap</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Ample Admin</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Single Use</td>
                                            <td>John Doe</td>
                                            <td>
                                                <label class="label label-purple">React</label>
                                            </td>
                                            <td>46</td>
                                            <td>356</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            © 2020 Copyright:
            <a class="text-dark" href="index.php">MultadzamBakery</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>