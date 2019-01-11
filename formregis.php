<?php 
	include 'header.php';
?>

<p style="padding-top: 98px">
<h2 style="text-align: center;">Registrasi</h2>

	<form>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-6">
				  	<div class="form-group">
					    <label for="exampleInputEmail1">Nama</label>
					    <input type="nama" class="form-control" id="inputnama" aria-describedby="nama" placeholder="Masukkan nama lengkap..">
					</div>
				</div>
			</div>
	  	</div>
	  	<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-6">
					<div class="form-group">
					 <label for="exampleInputEmail1">Email</label>
					 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email..">
					</div>
				</div>		 
		    </div>
		  </div>
		  <div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md-6">
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan kata sandi..">
					</div>
				</div>
			</div>	    
		  </div>
		  <div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md-6">
		  				<button type="submit" class="btn btn-primary">Daftar</button>
		  			</div>
				</div>
			</div>
		</form>
<p>
	<br><br><br>
	

<?php
	include 'footer.php'
?>