 <?php
 include "koneksi.php";
  if(isset($_POST['register'])){
 //$_post digunakan untuk mengumpulkan data dari bentuk dikirim dengan metode post
  // fungsi isset() akan menghasilkan nilai true jika sebuah variabel telah didefinisi 
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $npm = $_POST['npm'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  $no_tlp = $_POST['no_tlp'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin =$_POST['jenis_kelamin'];
  $tanggal = $_POST['tanggal'];

  // INsert to database
  $query = mysqli_query($koneksi,"INSERT INTO mhs(nama ,npm,username, password ,alamat,jenis_kelamin,email,no_telp)
                      VALUES('$nama','$npm','$username','$password','$alamat','$jenis_kelamin','$email','$no_tlp')");
  if($query){
    header("Location:tabel.php",true, 301);
    die();
  }
  else{
    echo "gagal". mysqli_error($koneksi); 
  }

}
 if(isset($_POST['edit'])){

  $userid=$_POST['user_id'];
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $npm = $_POST['npm'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  $no_tlp = $_POST['no_tlp'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin =$_POST['jenis_kelamin'];

  //INsert to database
  $query = mysqli_query($koneksi,"update mhs set
  nama='$nama',
  npm='$npm',
  username='$username', 
  password='$password', 
  alamat='$alamat',
  jenis_kelamin='$jenis_kelamin',
  email='$email',
  no_telp='$no_tlp' 
  where id=" . $userid);

                      
  if($query){
    header("Location:tabel.php",true, 301);
    die();
  }
  else{
    echo "gagal". mysqli_error($koneksi); 
  }

}
  if(isset($_GET['user_id'])){
    $query = mysqli_query($koneksi, "DELETE from mhs where id=" . $_GET['user_id']);
    header("Location:tabel.php",true, 301);
    die();
    session_destroy();
  }
?>