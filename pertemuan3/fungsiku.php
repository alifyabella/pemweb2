<<?php 
/**
 * Fungsi untuk menghitung nilai akhir mahasiswa
 * @param $nilai_uts Nilai UTS (0-100)
 * @param $nilai_uas Nilai UAS (0-100)
 * @param $nilai_tugas Nilai Tugas/Praktikum (0-100)
 * @return Nilai Akhir Mahasiswa
 */
function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas) {
    define("NILAI_UTS", 0.25);
    define("NILAI_UAS", 0.30);
    define("NILAI_TUGAS", 0.45);
    $nilai_akhir = (NILAI_UTS * $nilai_uts ) + (NILAI_UAS * $nilai_uas) + (NILAI_TUGAS * $nilai_tugas);
    return $nilai_akhir;
}

    /**
     * Fungsi untuk menentukan kelulusan mahasiswa
     * @param $nilai Nilai akhir mahasiswa
     * @return Lulus jika nilai >=60, TIDAK LULUS jika nilai < 60 
     */
function kelulusan($nilai) {
    define("NILAI_LULUS", 60);
    if ($nilai >= NILAI_LULUS) {
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}
?>