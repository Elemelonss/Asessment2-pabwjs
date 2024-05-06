<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "username", "password", "alatsekolah");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

// Query untuk mengambil data dari tabel
$sql = "SELECT * FROM barang_sekolah";
$result = $koneksi->query($sql);

// Array untuk menyimpan hasil query
$data = array();

// Ambil data dan simpan ke dalam array
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Mengembalikan data dalam bentuk JSON
echo json_encode($data);

// Menutup koneksi
$koneksi->close();
?>
