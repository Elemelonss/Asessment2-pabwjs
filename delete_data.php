<?php
$koneksi = new mysqli("localhost", "root", "alatsekolah");

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM barang_sekolah WHERE id = $id";
    
    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "Parameter id tidak ditemukan";
}

$koneksi->close();
?>
