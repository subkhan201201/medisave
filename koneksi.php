
<?php
$koneksi = mysqli_connect("localhost","root","","medisave");

if (mysqli_connect_error()) {
	echo "koneksi database gagal :". mysqli_connect_error();
}
?>