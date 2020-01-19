<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Ponsel - PhoneStore.Com</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
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
                            <h2 class="pageheader-title">Edit Ponsel </h2>
                            <div class="text-right">
                                <a href="data-ponsel.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary"><i class="fas fa-times  text-white"></i>  Batalkan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class="row">
                        
                        <!-- ============================================================== -->
                        <!-- horizontal form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit Data Ponsel</h5>
                                <div class="card-body">
                                    <?php
                                        include 'includes/element/connection.php';
                                        $id_ponsel= $_GET['id'];
                                        $data = mysqli_query($connect,"select * from data_ponsel where id_ponsel='$id_ponsel'");
                                        while($data_ponsel = mysqli_fetch_array($data)){
                                            $selectedIdBrand = $data_ponsel['id_brand']; 
                                            // $selectedNamaBrand = mysqli_query($connect,"SELECT data_brand.nama_brand FROM data_brand WHERE id_brand='$selectedIdBrand' ");
                                    ?>
                                    <form id="form" method="post" action="includes/action/conn-edit-ponsel.php">
                                        <div class="form-group row">
                                            <label class="col-3 col-lg-2 col-form-label text-right">Nama Ponsel</label>
                                            <div class="col-9 col-lg-8">
                                                <input type="hidden" name="id_ponsel" value="<?php echo $data_ponsel['id_ponsel']; ?>">
                                                <input type="text" required="" name="nama_ponsel" value="<?php echo $data_ponsel['nama_ponsel']; ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-lg-2 col-form-label text-right">Pilih Brand</label>
                                            <div class="col-9 col-lg-5">
                                                <div class="form-group">
                                                    <select class="form-control" id="input-select" name="id_brand" required="">
                                                        <!-- <option value="<?php echo $selectedIdBrand; ?>">Xiaomi</option> -->
                                                        <?php 
                                                            $getBrand = mysqli_query($connect,"SELECT * from data_brand ORDER BY nama_brand ASC");
                                                            $getNamaBrand = mysqli_query($connect,"SELECT nama_brand FROM data_brand WHERE id_brand='$selectedIdBrand' ");
                                                            while($dataNameBrand = mysqli_fetch_array($getNamaBrand)){
                                                        ?>
                                                        <option value="<?php echo $selectedIdBrand; ?>"><?php echo $dataNameBrand['nama_brand']; ?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                        <?php
                                                            while($dataBrand = mysqli_fetch_array($getBrand)){
                                                                $namaBrand = $dataBrand['nama_brand']; 
                                                                $idBrand = $dataBrand['id_brand']; 
                                                        ?>
                                                        <option value="<?php echo $idBrand++; ?>"><?php echo $namaBrand++; ?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-lg-2 col-form-label text-right">RAM Ponsel</label>
                                            <div class="col-9 col-lg-4">
                                                <div class="input-group mb-3">
                                                    <input type="number" required="" name="ram_ponsel" value="<?php echo $data_ponsel['ram_ponsel']; ?>" class="form-control">
                                                    <div class="input-group-append"><span class="input-group-text">GB</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-lg-2 col-form-label text-right">Internal Ponsel</label>
                                            <div class="col-9 col-lg-4">
                                                <div class="input-group  mb-3">
                                                    <input type="number" required="" name="internal_ponsel" value="<?php echo $data_ponsel['internal_ponsel']; ?>"  class="form-control">
                                                    <div class="input-group-append"><span class="input-group-text">GB</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-lg-2 col-form-label text-right">Harga Ponsel</label>
                                            <div class="col-9 col-lg-5">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                    <input type="text" required="" name="harga_ponsel" value="<?php echo $data_ponsel['harga_ponsel']; ?>" class="form-control">
                                                    <div class="input-group-append"><span class="input-group-text">,-</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row pt-2 ">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                    <?php 
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end horizontal form -->
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
    <script src="../assets/vendor/parsley/parsley.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
</body>
 
</html>