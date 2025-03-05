<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Tugas</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Total</th>
      <th scope="col">Predikat</th>
    </tr>
  </thead>
  <?php 
    $nilai1 = ["NIM" => 0110224143, "Nama" => "Bella", "Tugas" => 95, "UTS" => 88, "UAS" => 85];
    $nilai2 = ["NIM" => 0110224144, "Nama" => "Joy", "Tugas" => 90, "UTS" => 88, "UAS" => 83];
    $nilai3 = ["NIM" => 0110224145, "Nama" => "Selgi", "Tugas" => 95, "UTS" => 88, "UAS" => 85];
    $mhs = [$nilai1, $nilai2, $nilai3];
  ?>
  <tbody>
    <?php foreach ($mhs as $item) { ?>
        <tr>
            <td scope="col">No</td>
            <td scope="col"><?= $item["NIM"]?></td>
            <td scope="col"><?= $item["Nama"]?></td>
            <td scope="col"><?= $item["Tugas"]?></td>
            <td scope="col"><?= $item["UTS"]?></td>
            <td scope="col"><?= $item["UAS"]?></td>
            <td scope="col">Total</td>
            <td scope="col">Predikat</td>
    </tr>
    <?php } ?>  
    
  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>