<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Ponsel - PhoneStore.com</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
    <?php
        include 'includes/element/navbar.php';
        include 'includes/element/sidebar.php';
    ?>
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Data Ponsel</h2><hr/>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        Data Ponsel Tersedia di PhoneStore.com
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <a href="tambah-ponsel.php" class="d-none d-sm-inline-block btn btn-sm btn-primary"><i class="fas fa-plus  text-white"></i>  Tambahkan Ponsel</a>
                                    </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>    
                                                <th>No</th>
                                                <th>Nama Ponsel</th>
                                                <th>Brand</th>
                                                <th>RAM</th>
                                                <th>Internal</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Menu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                include 'includes/element/connection.php';
                                                $no = 1;
                                                $data = mysqli_query($connect,"select * from data_ponsel");
                                                while($dataPonsel = mysqli_fetch_array($data)){
                                                    
                                            ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $dataPonsel['nama_ponsel']; ?></td>
                                                <td>
                                                    <?php 
                                                        $id_brand = $dataPonsel['id_brand'];
                                                        $getBrand = mysqli_query($connect,"select * from data_brand where id_brand='$id_brand'");
                                                        while($dataBrand = mysqli_fetch_array($getBrand)){
                                                            echo $dataBrand['nama_brand']; 
                                                        }
                                                    ?>
                                                </td>
                                                <td><?php echo $dataPonsel['ram_ponsel']; ?> GB</td>
                                                <td><?php echo $dataPonsel['internal_ponsel']; ?> GB</td>
                                                <td>Rp<?php echo $dataPonsel['harga_ponsel']; ?>,-</td>
                                                <td><?php echo $dataPonsel['stok_ponsel']; ?></td>
                                                <td>
                                                    <a href="edit-ponsel.php?id=<?php echo $dataPonsel['id_ponsel']; ?>"><i class="fas fa-edit"></i> Edit |</a>
                                                    <a href="includes/action/conn-del-ponsel.php?id=<?php echo $dataPonsel['id_ponsel']; ?>"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                            <?php 
                                                }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>  
                                                <th>No</th>
                                                <th>Nama Ponsel</th>
                                                <th>Brand</th>
                                                <th>RAM</th>
                                                <th>Internal</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Menu</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>
            </div>
    <?php
        include 'includes/element/footer.php';
    ?>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html>