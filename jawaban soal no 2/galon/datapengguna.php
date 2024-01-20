<?php
  
  //sesuaikan dengan database, username, dan password kalian masing-masing
  $servername     = "localhost";
  $database       = "dhani"; 
  $username       = "root";
  $password       = "";

  // membuat koneksi
  $conn = mysqli_connect("localhost","root","","dhani");

?>
 <br></br>
 <h1>TABEL DATA PENGGUNA</h1>
 <br>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<hr>
 
<table border="1">
	<tr>
	      <th>No</th>
        <th>ID</th>
	      <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Level</th>
  
	</tr>
	<?php 
          //jika cari_jenis_barang sudah diset maka masukkan datanya ke dalam variabel $cari
          if(isset($_GET['id'])){
              $cari = $_GET['id'];

              //ambil data dari database, dimana pencarian sesuai dengan variabel cari
              $data = mysqli_query($conn, "select * from login where id like '%".$cari."%'");				
          }else{

              //tapi jika cari_jenis_barang belum diset, maka tampilkan semua isi tabel data barang
              $data = mysqli_query($conn, "select * from login");		
          }
          //set nomor tabel
          $no = 1;

          //melooping data menggunakan while
          while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		      <td><?php echo $no++; ?></td>
          <td><?php echo $d['id'];?></td>
	      	<td><?php echo $d['Nama'];?></td>
          <td><?php echo $d['Jeniskelamin'];?></td>
          <td><?php echo $d['Alamat'];?></td>
          <td><?php echo $d['Email'];?></td>
          <td><?php echo $d['Level'];?></td>
          
          
	</tr>
	<?php } ?>
</table>