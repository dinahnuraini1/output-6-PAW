<?php 

$koneksi=mysqli_connect("localhost","root","","db_mhs");

$sql="SELECT * FROM tbl_mhs";
$hasil=mysqli_query($koneksi,$sql);

while ($baris =mysqli_fetch_assoc($hasil)) {
	echo "<br>Nama Mahasiswa: ".$baris['nama_mhs']." | Alamat: " .$baris['alamat_mhs'];
}
?>