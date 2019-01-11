<?php
include("header.php");
require_once("koneksi.php");


?>
<main role="main">
<br>
<form method="post" action="userDB.php">
<div class="row">
    <div class="col-md-4 offset-4">
  		<div class="form-group">
			<h1>add user</h1>
    		<label for="InputNama">Nama</label>
   			<input type="text" class="form-control" id="InputNama" placeholder="Enter Your Full Name" name="nama">
    		<small id="InputNama" class="form-text text-muted">Please make sure your Name is correct</small>
  		</div>
  		<div class="form-group">
    		<label for="InputNPM">NPM</label>
   			<input type="text" class="form-control" id="InputNPM" placeholder="Enter Your NPM" name="npm">
    		<small id="InputNPM" class="form-text text-muted">Please make sure your NPM is correct</small>
  		</div>
      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" class="form-control" id="Username" placeholder="Enter Your Username" name="username">
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
    		<input type="email" class="form-control" placeholder="name@example.com" name="email">
  		</div>
  		<div class="form-group">
    		<label for="InputTLP">Nomor Telepon</label>
    		<input type="text" class="form-control" name="no_tlp" placeholder="XXXX-XXXX-XXXX">
  		</div>
  		<div class="form-group">
    		<label for="Inputalamat">Alamat</label>
    		<input type="text" class="form-control" name="alamat" placeholder="alamat">
 		 <div class="form-group">
    		<label for="exampleInputPassword1">Password</label>
    		<input type="password" class="form-control"placeholder="Password" name="password">
 		</div>
 		</div>
  			<button type="submit" class="btn btn-success my-2" name="register">submit</button>
 		</div>
	</div>
</form>
</main>
<?php
include ("footer.php");
?>