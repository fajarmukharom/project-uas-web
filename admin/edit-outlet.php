<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Outlet - PhoneStore.Com</title>
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
                            <h2 class="pageheader-title">Edit Outlet </h2>
                            <div class="text-right">
                                <a href="data-outlet.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary"><i class="fas fa-times  text-white"></i>  Batalkan</a>
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
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit Data Outlet</h5>
                                <div class="card-body">
                                    <form method="post" action="includes/action/conn-edit-outlet.php">
                                    <?php
                                        include 'includes/element/connection.php';
                                        $id_outlet= $_GET['id'];
                                        $data = mysqli_query($connect,"select * from data_outlet where id_outlet='$id_outlet'");
                                        while($data_outlet = mysqli_fetch_array($data)){
                                            $selectedIdLevel = $data_outlet['id_level']; 
                                    ?>
                                        <div class="form-group row">
                                            <label class="col-3 col-lg-3 col-form-label text-right">Nama Outlet</label>
                                            <div class="col-9 col-lg-8">
                                                <input type="hidden" name="id_outlet" value="<?php echo $data_outlet['id_outlet']; ?>">
                                                <input type="text" required="" name="nama_outlet" class="form-control" value="<?php echo $data_outlet['nama_outlet']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-lg-3 col-form-label text-right">Regional</label>
                                            <div class="col-9 col-lg-8">
                                                <input type="text" required="" name="regional_outlet" class="form-control" value="<?php echo $data_outlet['regional_outlet']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-lg-3 col-form-label text-right">Alamat Outlet</label>
                                            <div class="col-9 col-lg-8">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required="" name="alamat_outlet"><?php echo $data_outlet['alamat_outlet']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-lg-3 col-form-label text-right">Level Outlet</label>
                                            <div class="col-9 col-lg-5">
                                                <div class="form-group">
                                                    <select class="form-control" id="input-select" name="id_level" required="">
                                                        <?php 
                                                            $getLevel = mysqli_query($connect,"select * from data_level_outlet ORDER BY diskon_level ASC");
                                                            $getNamaLevel = mysqli_query($connect,"SELECT nama_level FROM data_level_outlet WHERE id_level='$selectedIdLevel' ");
                                                            while($dataNameLevel = mysqli_fetch_array($getNamaLevel)){
                                                        ?>
                                                        <option value="<?php echo $selectedIdLevel; ?>"><?php echo $dataNameLevel['nama_level']; ?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                        <?php 
                                                            while($dataLevel = mysqli_fetch_array($getLevel)){
                                                                $namaLevel = $dataLevel['nama_level']; 
                                                                $idLevel = $dataLevel['id_level']; 
                                                        ?>
                                                        <option value="<?php echo $idLevel++; ?>"><?php echo $namaLevel++; ?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3 col-lg-3 col-form-label text-right">Manager Outlet</label>
                                            <div class="col-9 col-lg-8">
                                                <input type="text" required="" name="manager_outlet" class="form-control" value="<?php echo $data_outlet['manager_outlet']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Data Login Outlet</h5>
                                <div class="card-body">
                                    <div class="form-group row">
                                            <label for="inputEmail2" class="col-3 col-lg-3 col-form-label text-right">Email</label>
                                            <div class="col-9 col-lg-8">
                                                <input id="inputEmail2" type="email" required="" data-parsley-type="email" name="email_outlet" class="form-control" value="<?php echo $data_outlet['email_outlet']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword2" class="col-3 col-lg-3 col-form-label text-right">Password</label>
                                            <div class="col-9 col-lg-8">
                                                <input id="inputPassword2" type="password" required="" placeholder="Masukkan Password.." name="password_outlet" class="form-control">
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
                                    </div>
                                </div>
                                    </form>
                                    <?php 
                                        }
                                    ?>
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