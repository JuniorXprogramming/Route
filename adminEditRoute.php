<?php
include("component/headerAdmin.php");
include("system/dbconnect.php");
?>

<body class="hold-transition sidebar-mini dark-mode">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="adminMain.php" class="brand-link">
                <span class="brand-text font-weight-light">ROUTE MINIBUS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="adminMain.php" class="nav-link active">
                                <i class="nav-icon fa-solid fa-route"></i>
                                <p>
                                    ALL ROUTE
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="adminAddRoute.php" class="nav-link">
                                <i class="nav-icon fa-solid fa-plus"></i>
                                <p>
                                    ADD ROUTE
                                </p>
                            </a>
                        </li>
                        <li class="nav-item" onclick="logout()">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                                <p>
                                    LOGOUT
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">EDIT ROUTE</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="system/updataRoute.php" method="POST">
                                        <fieldset>
                                            <div class="row my-4">
                                                <input type="hidden" name="route_id" value="" id="route_id_edit">
                                                <div class="col-5 col-sm-5 col-lg-5 col-xl-5 col-xxl-5">
                                                    <input type="text" name="routeStart" id="route-start-edit"
                                                        placeholder="ต้นทาง"
                                                        class="bg-dark w-100 py-2 border border-light rounded-pill px-3">
                                                </div>
                                                <div class="col-5 col-sm-5 col-lg-5 col-xl-5 col-xxl-5">
                                                    <input type="text" name="routeDes" id="route-des-edit"
                                                        placeholder="ปลายทาง"
                                                        class="bg-dark w-100 py-2 border border-light rounded-pill px-3">
                                                </div>
                                                <div class="col-2 col-sm-2 col-lg-2 col-xl-2 col-xxl-2">
                                                    <input type="text" name="routePrice" id="route-price-edit"
                                                        oninput="validateInput(this)" placeholder="ค่าบริการ"
                                                        class="bg-dark w-100 py-2 border border-light rounded-pill px-3">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">รายละเอียดเส้นทาง</label>
                                                <textarea class="form-control" id="route-detail-edit"
                                                    rows="3" name="routeDetail"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <script src="js/fillForm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validateInput(input) {
            // ใช้ regular expression เพื่อตรวจสอบว่าข้อมูลที่ป้อนเข้ามาเป็นตัวเลขหรือไม่
            var regex = /^[0-9]*$/;

            if (!regex.test(input.value)) {
                // ถ้าข้อมูลไม่ใช่ตัวเลข ให้ลบตัวอักษรที่ไม่ใช่ตัวเลขออก
                input.value = input.value.replace(/[^0-9]/g, '');
            }
        }
    </script>
</body>

</html>