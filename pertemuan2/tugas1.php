<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Form Registrasi</h2>
        <form action="output.php" method="POST">
            
            <!-- NAMA & NIM -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nim" class="form-label">NIM:</label>
                    <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                </div>
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                </div>
            </div>

            <!-- JENIS KELAMIN -->
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>

            <!-- PROGRAM STUDI -->
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi:</label>
                <select id="prodi" name="prodi" class="form-select" required>
                    <option value="" disabled selected>Pilih program studi</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="TI">Teknik Informatika</option>
                    <option value="BD">Bisnis Digital</option>
                </select>
            </div>

            <!-- SKILL WEB PROGRAMMING -->
            <?php 
            $ar_skill = ["HTML" => 10, "CSS" => 20, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
            ?>
            <div class="mb-3">
                <label class="form-label">Skill Web Programming:</label>
                <div class="row">
                    <div class="col-md-6">
                        <?php foreach ($ar_skill as $k => $v) { ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="skill[]" value="<?= $k ?>">
                                <label class="form-check-label"><?= $k ?> (<?= $v ?>)</label>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- DOMISILI -->
            <div class="mb-3">
                <label for="domisili" class="form-label">Domisili:</label>
                <select id="domisili" name="domisili" class="form-select" required>
                    <option value="" disabled selected>Pilih domisili</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Depok">Depok</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <!-- BUTTON SUBMIT -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-50">Submit</button>
            </div>

        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
