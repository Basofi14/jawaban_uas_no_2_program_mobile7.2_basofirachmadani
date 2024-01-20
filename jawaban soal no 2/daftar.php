<?php
include "koneksi.php";
$id=$_POST['id'];
$Nama=$_POST['Nama'];
$Jeniskelamin=$_POST['Jeniskelamin'];
$Alamat=$_POST['Alamat'];
$Email=$_POST['Email'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$Level=$_POST['Level'];

$cek_data=mysqli_query($conn,"SELECT * FROM login WHERE Username='$Username'");
$cek=mysqli_num_rows($cek_data);

if($cek > 0){
	echo"Data Sudah Ada";
}else{
	$input=mysqli_query($conn,"INSERT INTO login(id,Nama,Jeniskelamin,Alamat,Email,Username,Password,Level)VALUES('$id','$Nama','$Jeniskelamin','$Alamat','$Email','$Username','$Password','$Level')");
	if ($input){
		echo "Selamat Anda Telah Terdaftar";
	}
}
?>