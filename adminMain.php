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
                            <h1 class="m-0">ALL ROUTE</h1>
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
                                    <table class="table">
                                        <caption>Show Result of
                                            <?php
                                            $sql = "SELECT * FROM route_minibus";
                                            $result = $conn->query($sql);
                                            $num_row = $result->num_rows;
                                            echo $num_row;
                                            ?>
                                        </caption>
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Source</th>
                                                <th scope="col">Destination</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Detail</th>
                                                <th scope="col">Option</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $sql = "SELECT * FROM route_minibus";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) { ?>
                                                    <tr>
                                                        <td id="test-alert">
                                                            <?= $row['route_id'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $row['route_start'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $row['route_des'] ?>
                                                        </td>
                                                        <td>
                                                            <?= $row['route_price'] ?> บาท
                                                        </td>
                                                        <td>
                                                            <?= $row['route_detail'] ?>
                                                        </td>
                                                        <td class="d-flex flex-column px-3">
                                                            <form action="system/deleteRoute.php" id="delete-form-<?= $row['route_id']?>"
                                                                method="POST">
                                                                <input type="hidden" name="route_id"
                                                                    value="<?= $row['route_id']; ?>">
                                                                <button type="button" class="bg-dark" style="border: none;"
                                                                    onclick="deleteSweet(event, 'delete-form-<?= $row['route_id']?>')"><i
                                                                        class="fa-solid fa-trash my-2 text-danger"></i></button>
                                                            </form>
                                                            <div
                                                                onclick="edit([<?= $row['route_id'] ?>, '<?= $row['route_start'] ?>', '<?= $row['route_des'] ?>', '<?= $row['route_price'] ?>', '<?= $row['route_detail'] ?>'] ,true)">
                                                                <button class="bg-dark" style="border: none;"><i
                                                                        class="fa-solid fa-pen my-2"></i></button>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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
    <!-- ตรวจสอบการเชื่อมโยงถูกต้อง -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Your scripts -->
    <script src="js/alertEdit.js"></script>
    <script src="js/edit.js"></script>


</body>

</html>