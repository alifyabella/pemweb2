<?php 
require_once ('dbkoneksi.php');
// 4) tangkap request form
$_kode = $_POST['kode'];//1
$_nama = $_POST['nama'];//2
$_kaprodi = $_POST['kaprodi'];//3
$_proses = $_POST['proses'];

// simpan dalam array data
$ar_data = [$_kode, $_nama, $_kaprodi];

// 5) definisikan query SQL
if($_proses == "Simpan"){
    $sql = "INSERT INTO prodi (kode, nama, kaprodi) VALUES (?,?,?)";
}else if($_proses == "Update"){
    $sql = "UPDATE prodi SET nama=?, kaprodi=?, kode=? WHERE kode=?";
    $id_edit = $_POST['id_edit'];
    $ar_data[] = $id_edit;//4
}else if($_proses == "Hapus"){
    $sql = "DELETE FROM prodi WHERE id=?";
    unset ($ar_data);//hapuy array
    $id_delete = $_POST['id_delete'];
    $ar_data = [$id_delete];//1
    
}
// 6) buat statement query
$stmt = $dbh->prepare($sql);
// 7) eksekusi query
$stmt->execute($ar_data);
// 8) redirect ke halaman list_prodi.php
header('location:list_prodi.php');

?>