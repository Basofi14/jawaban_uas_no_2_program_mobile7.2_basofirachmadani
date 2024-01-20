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
 <h1>TABEL DATA PENJUALAN</h1>
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
        <th>NO.HP</th>
        <th>Alamat</th>
        <th>Harga</th>
       
  
	</tr>
	<?php 
          //jika cari_jenis_barang sudah diset maka masukkan datanya ke dalam variabel $cari
          if(isset($_GET['id'])){
              $cari = $_GET['id'];

              //ambil data dari database, dimana pencarian sesuai dengan variabel cari
              $data = mysqli_query($conn, "select * from pesan where id like '%".$cari."%'");				
          }else{

              //tapi jika cari_jenis_barang belum diset, maka tampilkan semua isi tabel data barang
              $data = mysqli_query($conn, "select * from pesan");		
          }
          //set nomor tabel
          $no = 1;

          //melooping data menggunakan while
          while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		      <td><?php echo $no++; ?></td>
          <td><?php echo $d['id'];?></td>
	      	<td><?php echo $d['nama'];?></td>
          <td><?php echo $d['nohp'];?></td>
          <td><?php echo $d['alamat'];?></td>
          <td><?php echo $d['harga'];?></td>
          
          
	</tr>
	<?php } ?>
</table>