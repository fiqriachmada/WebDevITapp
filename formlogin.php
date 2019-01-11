<?php 
	include 'header.php';
?>

<p style="padding-top: 98px">
<h2 style="text-align: center;">Login</h2>
	<form method="POST" action="actionlogin.php" id="formLogin">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-6">
				  	<div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="nama" class="form-control" id="inputnama" name="username" aria-describedby="nama" placeholder="Masukkan username..">
					</div>
				</div>
			</div>
	  	</div>
	  	<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-6">
					<div class="form-group">
					 <label for="exampleInputEmail1">Password</label>
					 <input type="Password" class="form-control" id="password" name="password" aria-describedby="emailHelp" placeholder="Masukkan Password..">
					</div>
				</div>		 
		    </div>
		  </div>
		  <div class="container">	
		  	<div class="row justify-content-md-center">
		  		<div class="col-md-6">
		  		<?php 
		  			if(isset($_GET['msg'])){
		  				echo "
		  					<div class='alert alert-danger alert-dismissible fade show' role='alert'>
		  						<button type='button' class='close' data-dismiss='alert' aria-label='close'>
		  							<span aria-hidden='true'>&times;</span>
		  						</button>
		  						<strong>Username atau Password salah.</strong>
		  					</div>		
		  				";
		  			}	
		  		 ?>
		  		</div>
		  	</div>	
		  </div>
		   <div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md-6">
		  				<button type="submit" class="btn btn-primary">Login</button>
		  				
		  			</div>
				</div>
			</div>		
	</form>
	<br>	
			 <div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md-6">
						<p style="text-align: left;">if you dont have account <a href="register.php">Click Here!!</a></p>
					</div>
				</div>	
			</div>

<?php
	include 'footer.php'
?>