<?php 
require_once 'class_NilaiMahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Alifya Bella";
$mhs1->matakuliah = "Pemrograman Web";
$mhs1->nilai_uts = 80;
$mhs1->nilai_uas = 85;
$mhs1->nilai_tugas = 90;

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "Ulfa Hadid";
$mhs2->matakuliah = "Dasar-dasar Pemrograman";
$mhs2->nilai_uts = 85;
$mhs2->nilai_uas = 89;
$mhs2->nilai_tugas = 90;

$mhs3 = new NilaiMahasiswa();
$mhs3->nama = "Jamal";
$mhs3->matakuliah = "Tugas Akhir";
$mhs3->nilai_uts = 60;
$mhs3->nilai_uas = 75;
$mhs3->nilai_tugas = 60;

$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];


?>
<h2> style="text-align:center">Daftar Nilai Mahasiswa </h2>
<table border="1" cellpadding="2" cellspacing="2" width="100%">
    <tbody>
        <<?php 
        $nomor = 1;
        foreach($ar_mahasiswa as $obj){
        ?>

<tr> 
                <td><?= $nomor ?></td><td><?=$obj->nama?></td>
                <td><?=$obj->matakuliah?></td><td><?=$obj->nilai_uts?></td>
                <td><?=$obj->nilai_uas?></td><td><?=$obj->nilai_tugas?></td>
                <td><?=$obj->getNilaiAkhir()?></td><td><?=$obj->kelulusan()?></td>
</tr>
         <?php
          $nomor++; 
        }
         ?>
    </tbody>
</table>