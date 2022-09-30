<?php 
include "koneksi.php";

$id_prodi = $_POST['id_prodi'];
$nama = $_POST['nama_mhs'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES(null,'$id_prodi','$nama','$alamat')";
$hasil = mysqli_query($koneksi,$sql);
if (!$hasil) {
	echo "Eksekusi tambah data mahasiswa gagal";
} else {
	echo "<br> Eksekusi tambah data mahasiswa berhasil <br>";
	echo "<a href ='pertemuan6.php'>Show Data</a>";
}

 ?>