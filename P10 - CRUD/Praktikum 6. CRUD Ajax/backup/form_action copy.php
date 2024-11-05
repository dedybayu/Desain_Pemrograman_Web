<?php 
session_start();
include 'koneksi.php';
include 'csrf.php';

$nama = stripcslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripcslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripcslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripcslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

// Ambil ID jika ada (untuk update)
$id = isset($_POST['id']) ? intval($_POST['id']) : "";

if ($id == "") {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp);
    $sql->execute();
} else {
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id);
    $sql->execute();
}

echo json_encode(['success' => 'Sukses']); // Perbaikan penulisan
$db1->close();
?>

