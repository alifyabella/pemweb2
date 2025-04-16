<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>
<body>


<div class="container px-5 my-5">
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
        <div class="row mb-3">
            <div class="col-md-6">
            <label class="form-label" for="nim">NIM</label>
            <textarea class="form-control" id="nim" type="text" placeholder="NIM" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="nim:required">NIM is required.</div>
        </div>
        <div class="mb-3">
            <div class="col-md-6">
            <label class="form-label" for="nama">Nama</label>
            <textarea class="form-control" id="nama" type="text" placeholder="Nama" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jenis Kelamin</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="lakiLaki" type="radio" name="jenisKelamin" data-sb-validations="required" />
                <label class="form-check-label" for="lakiLaki">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="perempuan" type="radio" name="jenisKelamin" data-sb-validations="required" />
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
            <div class="invalid-feedback" data-sb-feedback="jenisKelamin:required">One option is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="programStudi">Program Studi</label>
            <select class="form-select" id="programStudi" aria-label="Program Studi">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Bisnis Digital">Bisnis Digital</option>
            </select>
        </div>
        <?php 

        $ar_skill = ["HTML" => 10, "CSS" => 20, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => "50"];

        ?>

        <div class="mb-3">
            <label class="form-label d-block">Skill</label><br>
            <div class="row">
                <div class="col-md-6">
            <?php 
            
            foreach($ar_skill as $k => $v) 
            echo "<input type='checkbox' name='skill[]' value='$k' /> $k ";

            ?>

        </div>
        <div class="col-md-6">
            <label class="form-label" for="domisili">Domisili</label>
            <select class="form-select" id="domisili" aria-label="Domisili">
                <option value="Jakarta">Jakarta</option>
                <option value="Depok">Depok</option>
                <option value="Bogor">Bogor</option>
                <option value="Tangerang">Tangerang</option>
                <option value="Bekasi">Bekasi</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>