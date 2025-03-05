<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<h2>Form Nilai Mahasiswa</h2>
<fieldset style="border:1px solid black">
    <legend>Silahkan isi form di bawah ini:</legend>
<<?php 
    $data_matkul = [
        'WEB1' => 'Pemrograman Web 1',
        'WEB2' => 'Pemrograman Web 2',
        'BASDAT' => 'Basis Data',
        'UI/UX' => 'User Interface/User ',
        'JARKOM' => 'Jaringan Komputer'
    ];
?>

<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <<?php 
             foreach ($data_matkul as $key => $value) {
                echo "<option value='$key'>$value</option>";
             }
         ?>
        <option value="Pemrograman Web 1">WEB1</option>
        <option value="Pemrograman Web 2">WEB2</option>
        <option value="Basis Data">BASDAT</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</fieldset>
    
<?php 

$_nama = isset($_GET['nama']) ? $_GET['nama'] : '';
$_matkul = isset($_GET['matkul']) ? $_GET['matkul'] : '';
$_nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
$_nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
$_nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';
?>
<h2>Hasil Perhitungan Nilai Mahasiswa</h2>
Nama Mahasiswa : <?=$_nama; ?><br>
Mata Kuliah : <?=$_matkul; ?><br>
Nilai UTS : <?=$_nilai_uts; ?><br>
Nilai UAS : <?=$_nilai_uas; ?><br>
Nilai Tugas : <?=$_nilai_tugas; ?><br>


</body>
</html>