<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$nohp=$_POST['nohp'];
$alamat=$_POST['alamat'];
$harga=$_POST['harga'];


$cek_data=mysqli_query($conn,"SELECT * FROM pesan WHERE id='$id'");
$cek=mysqli_num_rows($cek_data);

if($cek > 0){
	echo"Data Sudah Ada";
}else{
	$input=mysqli_query($conn,"INSERT INTO pesan(id,nama,nohp,alamat,harga)VALUES('$id','$nama','$nohp','$alamat','$harga')");
	if ($input){
		echo "Berhasil Memesan, Silahkan ditunggu";
	}
}
?>