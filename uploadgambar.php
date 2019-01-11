<form action="uploadgambar.php" method="post" enctype="multipart/form-data">
	<input type="file" name="gambar" accept="image/*">
	<input type="submit" name="submit">
</form>

<?php 
	require_once("koneksi.php");
	if (isset($_POST['submit'])){
		//mindah file ke server folder project
		move_uploaded_file($_FILES['gambar']['tmp_name'],'image/'.$_FILES['gambar']['name']);
		//insert path file ke database
		mysqli_query($koneksi, "INSERT INTO galeri (path_gambar) VALUES ('". 'image/'.$_FILES['gambar']['name'] ."')");
	}

	//nampil gambar
	$query = mysqli_query($koneksi, "SELECT * FROM galeri");
	if(mysqli_num_rows($query)>0){
		while ($data = mysqli_fetch_array($query)) {
			echo "<img src='".$data['path_gambar']."' alt='gambar'/>";
		}
	}

 ?>