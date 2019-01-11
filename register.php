<?php
include ("header.php");
// include("bootstrap.php");
require_once("koneksi.php");


?>
<main role="main">
<br>
<form method="post" action="userDB.php" id="formRegis">
<div class="row">
    <div class="col-md-4 offset-4">
  		<div class="form-group">
			<h1>Register</h1>
    		<label for="InputNama">Nama</label>
   			<input type="text" class="form-control" id="InputNama" placeholder="Masukkan Nama Lengkap Anda" name="nama">
    		<small id="InputNama" class="form-text text-muted">Pastikan Nama Anda benar</small>
  		</div>
  		<div class="form-group">
    		<label for="InputNPM">NPM</label>
   			<input type="text" class="form-control" id="InputNPM" placeholder="Masukkan NPM Anda" name="npm">
    		<small id="InputNPM" class="form-text text-muted">Pastikan NPM Anda benar</small>
  		</div>
      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" class="form-control" id="InputUsername" placeholder="Masukkan Username Anda" name="username">
      </div>
  		<div class="form-group">
    		<label for="PilihGender">Jenis Kelamin</label>
    		<select class="form-control" name="jenis_kelamin">
      		<option value="L">Laki-laki</option>
      		<option value="P">Perempuan</option>
    		</select>
  		</div>
  		<div class="form-group">
    		<label for="PilihJurusan">Jurusan</label>
    		<select class="form-control" name="jurusan">
      		<option value="teknik Informatika">Teknik Informatika</option>
      		<option value="Sistem Informasi">Sistem Informasi</option>
      		<option value="Sistem Komputer">Sistem Komputer</option>
    		</select>
  		</div>
  		<div class="form-group">
    		<label for="InputEmail">Email address</label>
    		<input type="text" class="form-control" id="InputEmail" placeholder="name@example.com" name="email">
  		</div>
  		<div class="form-group">
    		<label for="InputTLP">Nomor Telepon</label>
    		<input type="text" class="form-control" id="InputTLP" name="no_tlp" placeholder="XXXX-XXXX-XXXX">
  		</div>
  		<div class="form-group">
    		<label for="Inputalamat">Alamat</label>
    		<input type="text" class="form-control" id="Inputalamat" name="alamat" placeholder="Masukkan Alamat Anda">
 		 <div class="form-group">
    		<label for="exampleInputPassword1">Password</label>
    		<input type="password" class="form-control" placeholder="Masukkan Password Anda" id="InputPassword" name="password">
 		</div>
    <div class="form-group">
        <label for="InputTanggal">Tanggal Lahir</label>
        <input type="tanggalLahir" class="form-control" placeholder="XX/XX/XXXX" id="InputTanggal" name="tanggalLahir" >
    </div>
 		</div>
  			<button type="submit" class="btn btn-success my-2" name="register">Register Now</button>
    </div>
	</div>
</form>
</main>
<?php
include 'footer.php';
?>