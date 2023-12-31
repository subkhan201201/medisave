<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <?php include "koneksi.php" ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-white">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post" action="">
                    <form>
                    <a >
              <center> <h2> <img src="./assets/img/medisave.png" height="60" width="80"> SISTEM ADMINISTRASI PUSKESMAS </center></h2> </a>
             
                    <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="col-lg">
                    <div class="p-5">
                        <center>
                        <b><h4> REGISTER </b></h4> </center>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="namalengkap">
                        </div>
                       
                        <center><button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</center></button>
                         <div class="register-link m-t-15 text-center">
                            <p>Kembali Ke From Login <a href="login.php"> From Login</a></p>
                        </div>
                       <?php
                        if($_SERVER['REQUEST_METHOD']=='POST'){
                            //variabel dari elemen form
                            $id = mysqli_real_escape_string($koneksi, $_POST['id_admin']);
                            $username = mysqli_real_escape_string($koneksi, $_POST['username']);
                            $password = mysqli_real_escape_string($koneksi, $_POST['password']);

                            
                            if($username==''){
                                echo "Form belum lengkap!!!";
                            }else{
                                //proses simpan data
                                $simpan = mysqli_query($koneksi, "INSERT INTO admin(id_admin,username,password) VALUES ('$id','$username','$password')");
                                
                                if(!$simpan){
                                    echo "Simpan data gagal!!";
                                }else{
                                    echo "Data Berhasil Disimpan. Siilahkan Kembali Ke From Login" ;
            
        }
    }
}
?>

</tr>
</tbody>
</thead></table>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="login.php"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
