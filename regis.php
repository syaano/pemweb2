<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
$ar_skill = ["HTML"=>"HTML", "CSS"=>"CSS", "JavaScript"=>"JavaScript", "RWD Bootstrap"=>"RWD Bootstrap","PHP"=>"PHP", "Python"=>"Python"];
?>

<form method="POST" action="#" >
<container class="col-md d-flex justify-content-center">
    <fieldset class="col-md-10 border p-2">
      <legend>
        <h1>Form Registrasi IT CLUB Data Science</h1>
        </legend>    
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Bisnis Digital">Bisnis Digital</option>
        <option value="Teknologi Informatika">Teknologi Informatika</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web & Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skills[]" id="skills_0" type="checkbox" class="custom-control-input" value="skills"> 
        <?php
            foreach ($ar_skill as $k => $v){
              echo '<input type="checkbox" name="skills[]" value="'.$k.'">'.$k;
            }
            ?>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="Jakarta">Jakarta</option>
        <option value="Bogor">Bogor</option>
        <option value="Depok">Depok</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-gg-circle"></i>
          </div>
        </div> 
        <input id="email" name="email" type="email" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-gg-circle"></i>
          </div>
        </div> 
        <input id="nilai" name="nilai" type="nilai" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
$nim = $_POST['nim'];
$nama= $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
$nilai = $_POST['nilai'];

//Buat Perhitungan IF untuk mencari Grade
if ($nilai ==0){
  $predikat = "Tidak Memadai";
}
elseif ($nilai <=40){
  $predikat = "Kurang";
}
elseif ($nilai <=60){
  $predikat = "Cukup";
}
elseif ($nilai <=100){
  $predikat = "Baik";
}
elseif ($nilai <=150){
  $predikat = "Sangat Baik";
}

//cetak
echo "<h2>Informasi yang Anda Kirim:</h2>";
echo "NIM: $nim <br>";
echo "Nama Lengkap: $nama <br>";
echo "Jenis Kelamin: $jk <br>";
echo "Program Studi: $prodi <br>";
echo "Skill Web & Programming: ";
foreach ($skills as $value){
  echo "$value ";
}
echo "<br>";
echo "Dmisili: $domisili <br>";
echo "Email: $email <br>";
echo "Nilai: $nilai <br>";
echo "Predikat: $predikat";
?>