<?php
  include "header.php";
  include "koneksi.php";
  if(isset($_GET['user_id'])){
    $query = mysqli_query($koneksi,"SELECT * from mhs WHERE id=".$_GET['user_id']);
    $edit = mysqli_fetch_array($query);
  }
 ?>
<form method="post" action="userDB.php">
  <input type="hidden" name="user_id" value="<?php echo $_GET ['user_id'];?>">
<div class="row">
    <div class="col-md-4 offset-4">
      <div class="form-group">
      <h1>edit</h1>
        <label for="InputNama">Nama</label>
        <input type="text" class="form-control" id="InputNama" placeholder="Enter Your Full Name" name="nama" value="<?php echo $edit['nama']; ?>" required>
        <small id="InputNama" class="form-text text-muted">Please make sure your Name is correct</small>
      </div>
      <div class="form-group">
        <label for="InputNPM">NPM</label>
        <input type="text" class="form-control" id="InputNPM" placeholder="Enter Your NPM" name="npm" value="<?php echo $edit['npm']; ?>" required>
        <small id="InputNPM" class="form-text text-muted">Please make sure your NPM is correct</small>
      </div>
      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" class="form-control" id="Username" placeholder="Enter Your Username" name="username" value="<?php echo $edit ['username']; ?>" required>
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
        <input type="email" class="form-control" placeholder="name@example.com" name="email" value="<?php echo $edit ['email']; ?>" required>
      </div>
      <div class="form-group">
        <label for="InputTLP">Nomor Telepon</label>
        <input type="text" class="form-control" name="no_tlp" placeholder="XXXX-XXXX-XXXX" value="<?php echo $edit ['no_telp']; ?>"required>
      </div>
      <div class="form-group">
        <label for="Inputalamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?php echo $edit ['alamat']; ?>"required>
     <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control"placeholder="Password" name="password">
    </div>
    </div>
        <button type="submit" class="btn btn-success my-2" name="edit">update</button>
    </div>
  </div> 
</form>
<?php 
include "footer.php";
 ?>