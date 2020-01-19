<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Admin Dashboard - PhoneStore.com</title>
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
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">PhoneStore Admin Dashboard </h2><hr/>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <h5 class="text-muted">Brand Tersedia</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php
                                                include 'includes/element/connection.php';
                                                $countTotalBrand = mysqli_query($connect,"select count(*) as totalBrand from data_brand");
                                                $getData = mysqli_fetch_array($countTotalBrand);
                                                    echo $getData["totalBrand"];
                                            ?> Brand
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Brand Terbanyak</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php
                                                $getMostPonsel = mysqli_query($connect,"select nama_brand, count(dp.id_brand) as jumlah from data_ponsel db left join data_brand dp on dp.id_brand=db.id_brand group by dp.id_brand order by jumlah desc limit 1");
                                                while($row = mysqli_fetch_assoc($getMostPonsel)){
                                                    echo $row["nama_brand"];
                                                }
                                            ?>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Tipe Ponsel Tersedia</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php
                                                $countTotalPonsel = mysqli_query($connect,"select count(*) as totalPonsel from data_ponsel");
                                                $getData = mysqli_fetch_array($countTotalPonsel);
                                                    echo $getData["totalPonsel"];
                                            ?> Ponsel
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Outlet Tersedia</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">
                                            <?php
                                                $countTotalOutlet = mysqli_query($connect,"select count(*) as totalOutlet from data_outlet");
                                                $getData = mysqli_fetch_array($countTotalOutlet);
                                                    echo $getData["totalOutlet"];
                                            ?> Outlet
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Terakhir ditambahkan</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">No</th>
                                                        <th class="border-0">Nama Ponsel</th>
                                                        <th class="border-0">Brand</th>
                                                        <th class="border-0">Harga</th>
                                                        <th class="border-0">Stok</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    include 'includes/element/connection.php';
                                                    $no = 1;
                                                    $data = mysqli_query($connect,"select * from data_ponsel order by id_ponsel desc limit 6");
                                                    while($dataPonsel = mysqli_fetch_array($data)){   
                                                ?>
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
                                                    <td>Rp<?php echo $dataPonsel['harga_ponsel']; ?>,-</td>
                                                    <td><?php echo $dataPonsel['stok_ponsel']; ?></td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>

                                                <tr>
                                                    <td colspan="9"><a href="data-ponsel.php" class="btn btn-outline-light float-right">View Details</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- customer acquistion  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Top Brand</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Nama Brand</th>
                                                        <th class="border-0">Jumlah Tipe</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    $no = 1;
                                                    $data = mysqli_query($connect,"select nama_brand, count(dp.id_brand) as jumlah from data_ponsel db left join data_brand dp on dp.id_brand=db.id_brand group by dp.id_brand order by jumlah desc limit 7;");
                                                    while($dataBrand = mysqli_fetch_array($data)){
                                                ?>
                                                    <td><?php echo $dataBrand['nama_brand']; ?></td>
                                                    <td><?php echo $dataBrand['jumlah']; ?></td>
                                                </tr>
                                                <?php
                                                    }
                                                ?>

                                                <tr>
                                                    <td colspan="9"><a href="data-brand.php" class="btn btn-outline-light float-right">View Details</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end customer acquistion  -->
                            <!-- ============================================================== -->
                        </div>
                        
                </div>
            </div>
<?php
    include 'includes/element/footer.php';
?>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>