<!DOCTYPE html>

<html>
		<head>
		    <title>sistema de login</title>
		    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


<!--

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
--> 


<link rel="stylesheet" href="<?php echo constant('URL');?>bootstrap-4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="<?php echo constant('URL');?>bootstrap-4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
						'use strict';
						window.addEventListener('load', function() 
						{
							// Fetch all the forms we want to apply custom Bootstrap validation styles to
							var forms = document.getElementsByClassName('needs-validation');
							// Loop over them and prevent submission
							var validation = Array.prototype.filter.call(forms, function(form)
							{
									form.addEventListener(

								   
								   'submit', function(event) 
									{
										if (form.checkValidity() === false)
											{
												event.preventDefault();
												event.stopPropagation();
											}								
									    form.classList.add('was-validated');
									},     			
													
													 false);
							});
						}, 					false);
					
					})();
	</script>

	<style >
		


		#login{
			 	 text-align:center;
                 width: 100%; 
                 height: 39%; 
                 border: 3px solid #555;
                 background: #428bca;
				}
					#idlogin{width: 20%;}
					 		
						
					#idlogin{width: 20%;}
	</style>
		</head>
		<body>


			
			<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="<?php echo constant('URL');?>login/render">Home</a>
  </li>
  <li class="nav-item">
 

  <li class="nav-item">
    <a class="nav-link" href="<?php echo constant('URL');?>login/registroLogin">Registro</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="<?php echo constant('URL');?>login/nosotrosLogin">Contactenos</a>
  </li>
  
</ul>

			<div id="login">
					<center><form action="<?php echo constant('URL');?>login/logearUsuario" method="POST">
					
					<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input id="idlogin" type="email" name="correoLogin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input id="idlogin" type="password" name="passLogin" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
				
					<button type="submit" class="btn btn-primary">entrar</button>
					
					</form></center>
		
			</div>










</body>
 
</html>