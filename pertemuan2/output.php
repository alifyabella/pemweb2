<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'] ?? '';
    $nama = $_POST['nama'] ?? '';
    $jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
    $prodi = $_POST['prodi'] ?? '';
    $domisili = $_POST['domisili'] ?? '';
    $skills = $_POST['skill'] ?? [];
    
    $ar_skill = ["HTML" => 10, "CSS" => 20, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
    $total_skor = 0;
    
    foreach ($skills as $skill) {
        $total_skor += $ar_skill[$skill] ?? 0;
    }

    function kategoriSkill($skor) {
        if ($skor == 0) return "Tidak memiliki skill";
        if ($skor <= 40) return "Pemula";
        if ($skor <= 70) return "Menengah";
        return "Mahir";
    }

    $kategori = kategoriSkill($total_skor);
} else {
    header("Location: form_registrasi.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Hasil Registrasi</h2>
        <table class="table table-bordered">
            <tr><th>NIM</th><td><?= htmlspecialchars($nim) ?></td></tr>
            <tr><th>Nama</th><td><?= htmlspecialchars($nama) ?></td></tr>
            <tr><th>Jenis Kelamin</th><td><?= htmlspecialchars($jenis_kelamin) ?></td></tr>
            <tr><th>Program Studi</th><td><?= htmlspecialchars($prodi) ?></td></tr>
            <tr><th>Domisili</th><td><?= htmlspecialchars($domisili) ?></td></tr>
            <tr><th>Skill</th><td><?= !empty($skills) ? implode(", ", array_map('htmlspecialchars', $skills)) : "Tidak ada" ?></td></tr>
            <tr><th>Total Skor</th><td><?= $total_skor ?></td></tr>
            
        </table>
        <div class="text-center">
            <a href="tugas1.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>