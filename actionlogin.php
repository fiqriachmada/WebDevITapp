<?php  
	require_once("koneksi.php");

	if(isset($_POST['username']) and isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = mysqli_query($koneksi, "SELECT * FROM mhs WHERE username='$username' and password='$password'");
		 
		 if(mysqli_num_rows($query)){
		    header("Location:home.php",true, 301);
		    die();
		  }
		  else{
		    header("Location:formLogin.php?msg=Username atau Password salah");
		  }
		}else{
			header("Location:formLogin.php?msg=Username dan Password harus diisi");
		}
?>