<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrasi Rumah Sakit</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">MEDISAVE</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                   
                    <li>
                        <a href="index.php"><i class="fa fa-home pointer mrten mlten"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a class="active-menu" href="datapasien.php"><i class="fa fa-wheelchair pointer mrten mlten"></i> Data Pasien</a>
                    </li>
                    <li>
                        <a href="datadokter.php"><i class="fa fa-user-md pointer mrten mlten"></i> Data Dokter</a>
                    </li>
                    <li>
                        <a href="dataperawat.php"><i class="fa fa-user pointer mrten mlten"></i> Data Perawat</a>
                    </li>
                    <li>
                        <a href="obat.php"><i class="fa fa-medkit pointer mrten mlten"></i> Obat</a>
                    </li>
                    <li>
                        <a href="kamar.php"><i class="fa fa-hospital-o pointer mrten mlten"></i> Data Kamar</a>
                    </li>
                    <li>
                        <a href="transaksi.php"><i class="fa fa-book pointer mrten mlten"></i> Transaksi</a>
                    </li>
                     <li>
                        <a href="laporan.php"><i class="fa fa-book pointer mrten mlten"></i> Laporan Transaksi</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Sistem Informasi Puskesmas
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
    <div class="panel panel-default">
    <div class="panel-heading">
    <h1 align="center">Data Pasien Rawat Inap</h1>
    </div> 
     <div class="panel-body">
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
   <form method="post" action="">
        <tr>
            <td>No Rekam Medis Inap</td>
            <td><input type="text" name="no_rekammedis_inap" /></td>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td><input type="text" name="nama_pasien" /></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenis_kelamin" /></td>
        </tr>
         <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" /></td>
        </tr>
         <tr>
            <td>Umur</td>
            <td><input type="text" name="umur" /></td>
        </tr>
         <tr>
            <td>Tanggal Masuk</td>
            <td><input type="text" name="tgl_masuk" /></td>
        </tr>
         <tr>
            <td>Penanggung Jawab</td>
            <td><input type="text" name="penanggung_jawab" /></td>
        </tr>
         <tr>
            <td>Telepon Penanggung Jawab</td>
            <td><input type="text" name="telepon_penanggungjawab" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" value="Simpan" /></td>
        </tr>
         <tr>
            <td><a href="datapasien.php" class="btn btn-outline-primary">Kembali ke Data Pasien</a></td>
        </tr>
      
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    //variabel dari elemen form
    $no_rekammedis_inap = mysqli_real_escape_string($koneksi, $_POST['no_rekammedis_inap']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama_pasien']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $umur = mysqli_real_escape_string($koneksi, $_POST['umur']);
    $tgl_masuk = mysqli_real_escape_string($koneksi, $_POST['tgl_masuk']);
    $penanggung_jawab = mysqli_real_escape_string($koneksi, $_POST['penanggung_jawab']);
    $telepon_penanggungjawab = mysqli_real_escape_string($koneksi, $_POST['telepon_penanggungjawab']);
    
    if($nama==''){
        echo "Form belum lengkap!!!";
    }else{
        //proses simpan data pasien
        $simpan = mysqli_query($koneksi, "INSERT INTO data_pasien(no_rekammedis_inap,nama_pasien,jenis_kelamin,alamat,umur,tgl_masuk,penanggung_jawab,telepon_penanggungjawab) VALUES ('$no_rekammedis_inap','$nama','$jenis_kelamin','$alamat','$umur','$tgl_masuk','$penanggung_jawab','$telepon_penanggungjawab')");
        
        if(!$simpan){
            echo "Simpan data gagal!!";
        }else{
            echo "Data Berhasil Disimpan";

            
        }
    }
}
?>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
</body>

</html>