<?php 
	$koneksi = mysqli_connect("localhost","root","","sidevitapp");
	if($koneksi){
		return true;
	}else{
		return false;
	}
?>