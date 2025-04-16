<?php 
require_once ('dbkoneksi.php');
// 4) Query Data Prodi
$sql = "SELECT * FROM prodi";
// 5) Eksekusi Query
$rs = $dbh->query($sql);
// 6) Ambil Data Hasil Query
foreach ($rs as $row) {
    echo '<br>'.$row->nim. ' - ' . $row->nama;
}
?>
<table border="1" width="100%">
    <tr><th>NO</th><th>Kode</th><th>Nama Prodi</th>
    <th>Kepalan Prodi</th><th>Aksi</th></tr>
    <?php 
    $nomor = 1;
    foreach ($rs as $row) { ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?<?php echo $row ->Kode; ?></td>
        <td><?<?php echo $row ->Nama; ?></td>
        <td><?<?php echo $row ->Kepala_Prodi; ?></td>
        <td>
            <a href="form_prodi.php?Kode=<?=$row->Kode?>">Edit</a>
            |