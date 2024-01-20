<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "uas";

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id=$_POST['id'];
    $Nama = $_POST["Nama"];
    $Alamat = $_POST["Alamat"];
    $Nohp = $_POST["Nohp"];
    $Jumlahgalon = $_POST["Jumlahgalon"];;
	$Tglpemesanan=filter_var($_POST['Tglpemesanan'],FILTER_SANITIZE_STRING);

    $query = "INSERT INTO pemesananair (id,Nama,Alamat,Nohp,Jumlahgalon,Tglpemesanan)VALUES ('$id','$Nama','$Alamat','$Nohp','$Jumlahgalon','$Tglpemesanan')";

    if ($conn->query($query) === TRUE) {
        echo "Pesanan berhasil disimpan.";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>
