<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$db = "dhani";

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk melakukan login
function login($Username, $Password) {
    global $conn;
    $query = "SELECT * FROM login WHERE Username = '$Username' AND Password = '$Password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['Level'];
    } else {
        return false;
    }
}

// Ambil data dari POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST["Username"];
    $Password = $_POST["Password"];

    // Melakukan login
    $level = login($Username, $Password);

    if ($level !== false) {
        // Login berhasil, kirim level pengguna ke App Inventor
        echo $level;
    } else {
        // Login gagal
        echo "Maaf Kamu Belum Terdaftar, Silahkan Daftar Terlebih Dahulu.!!";
    }
}

$conn->close();
?>
