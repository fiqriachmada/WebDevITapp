<section style="background-color : white; margin-top: 5%;">
<div class="jumbotron">	
	<div class="row">
		<div class="col-md-5 offset-md-1">
	      <form class="form-inline">
	    		<label for="inputHK"><h3>Contact Us</h3></label>
	    		<input type="email" style="width: 80%;" class="form-control" id="inputHK" aria-describedby="emailHelp" placeholder="Enter your email">
	    		<button type="submit" style="width: 20%;" class="btn btn-primary">Submit</button>
	    		<small id="emailHelp" class="form-text text-muted">If you have somthing to say about this website contact us Please</small>
	  	  </form>
    	</div>
	    <div class="col-md-4 offset-md-1">
	      <h3>Social Media</h3>
	      <h6>Following Us :</h6><br>
	      <a href="https://www.facebook.com/devitapp.itats"><img src="facebook.png"></a>
	      <a href="https://www.instagram.com/devitapp.official/"><img src="instagram.png"></a>
	      <a href="facebook.com"><img src="google-plus.png"></a>
	      <a href="facebook.com"><img src="youtube.png"></a>
	   	</div>
	</div>
    
</div>
</div>
</section>
   	<div class="col col-lg-4 offset-4">
   		<footer style="border-top:2px black;">
			<p class="text-center" style="color: dodgerblue">
			2018 
			<span style="color: black">©</span>	
			devITapp | Sistem Infromasi Akademik ITATS
			<a href="#" class="text-primary"> </a>
			</p>	
		</footer>
	</div>
</body>

	<!-- include -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script src="js/bootstrapValidator.min.js"></script>


	<script type="text/javascript">	
		$(document).ready(function(){
		  $('#InputNPM').mask('00.0000.0.00000');
		  
		});
	</script>
	<script type="text/javascript">	
		$(document).ready(function(){
		  $('#InputTLP').mask('0000-0000-0000');
		  
		});
	</script>


	<script type="text/javascript">	
		$(document).ready(function(){
		  $('#InputTanggal').mask('00-00-0000');
		  
		});

	$(document).ready(function() {
	    // Generate a simple captcha
	    function randomNumber(min, max) {
	        return Math.floor(Math.random() * (max - min + 1) + min);
	    };
	    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));


	    // FORM LOGIN
	    $('#formLogin').bootstrapValidator({
	//        live: 'disabled',
	        message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            username: {
	            	 validators: {
	                    notEmpty: {
	                        message: '<span style="color:red;">Username tidak boleh kosong</span>'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: '<span style="color:red;">Username harus lebih dari 6 dan kurang dari 30 karakter</span>'
	                    },
	                }
	            },
	            password: {
	            	 validators: {
	                    notEmpty: {
	                        message: '<span style="color:red;">Password wajib diisi dan tidak boleh kosong</span>'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: '<span style="color:red;">Nama pengguna harus lebih dari 6 dan kurang dari 30 karakter</span>'
	                    },
	                }
	            }
	        }
	    });


	    // FORM REGISTER
	     $('#formRegis').bootstrapValidator({
	//        live: 'disabled',
	        message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            nama: {
	            	 validators: {
	                    notEmpty: {
                        	message: '<span style="color:red;">Nama wajib diisi dan tidak boleh kosong</span>'
	                    },
	                    stringLength: {
	                        min: 3,
	                        message: '<span style="color:red;">Minimal nama harus terdiri dari 3 karakter<br></span>'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z,.!? ]*$/,
	                        message: '<span style="color:red;">Nama hanya terdiri dari karakter alfabet dan spasi saja</span>'
	                    },
	                }
	            },
	            npm: {
	            	 validators: {
	                    notEmpty: {
	                        message: '<span style="color:red;">NPM wajib diisi dan tidak boleh kosong</span>'
	                    },
	                    stringLength: {
	                        min: 12,
	                        message: '<span style="color:red;">NPM Harus 12 digit angka</span>'
	                    },
	                }
	            },
	            username: {
	            	 validators: {
	                    notEmpty: {
	                        message: '<span style="color:red;">Username wajib diisi dan tidak boleh kosong</span>'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: '<span style="color:red;">Minimal username harus terdiri dari 6 karakter</span>'
	                    },
	                }
	            },
	            email: {
	            	validators: {
	                    notEmpty: {
	                        message: '<span style="color:red;">Email wajib diisi dan tidak boleh kosong</span>'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
	                        message: '<span style="color:red;">Email tidak valid</span>'
	                    },
	                }
	            },
	            no_tlp: {
	            	 validators: {
	                    notEmpty: {
	                        message: '<span style="color:red;">No tlpn wajib diisi dan tidak boleh kosong</span>'
	                    },
	                    stringLength: {
	                        min: 13,
	                        max: 15,
	                        message: '<span style="color:red;">Minimal No Tlpn harus terdiri dari 11 digit</span>'
	                    },
	                }
	            },
	            alamat: {
	            	 validators: {
	                    notEmpty: {
	                        message: '<span style="color:red;">Alamat wajib diisi dan tidak boleh kosong</span>'
	                    },
	                    stringLength: {
	                        min: 12,
	                        message: '<span style="color:red;">Minimal alamat harus terdiri dari 12 karakter</span>'
	                    },
	                }
	            },
	            password: {
	            	 validators: {
	            	 	identical: {
	                        field: 'confirmPassword',
	                    },
	                    notEmpty: {
	                        message: '<span style="color:red;">Password wajib diisi dan tidak boleh kosong</span>'
	                    },
	                    stringLength: {
	                        min: 8,
	                        message: '<span style="color:red;">Minimal password terdiri dari 8 karakter</span>'
	                    },
	                }
	            },
	            retypePassword: {
	                validators: {
	                    identical: {
	                        field: 'password',
	                        message: '<span style="color:red;">Tidak Sama</span>'
	                    }
	                }
            	},
	            tanggalLahir: {
	            	 validators: {
	                    notEmpty: {
	                        message: '<span style="color:red;">Tanggal Lahir wajib diisi dan tidak boleh kosong</span>'
	                    },
	                    stringLength: {
	                        min: 10,
	                        message: '<span style="color:red;">Tanggal Lahir tidak valid</span>'
	                    },
	                 }
	            },
	            
	        }
	    });

	});
</script>

<!-- </body> -->
</html>
