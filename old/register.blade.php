<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo asset('css/register.css')?>" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
  <header>
    @include('navbar');
  </header>
<div class="container box">
  <div class="row">
  	<div class="col-4 offset-4">
  		<form method="POST" action="register.php" enctype="multipart/form-data">
  			<div class="form-group">
  				<label for="email">Email</label>
  				<input class="form-control" type="text" name="email" id="email" value="@php$emailDefault@endphp">
  			</div>
  			<div class="form-group">
  				<label for="username">Username</label>
  				<input class="form-control" type="text" name="username" id="username" value="@php$usernameDefault@endphp">
  			</div>
  			<div class="form-group">
  				<label for="edad">Edad</label>
  				<input class="form-control" type="text" name="edad" id="edad" value="@php$edadDefault@endphp">
  			</div>
  			<div class="form-group">
  				<label for="pais">Pais:</label>
  				<select id="pais" class="form-control" name="pais">

  				</select>
  			</div>
  			<div class="form-group">
  				<label for="password">Password</label>
  				<input id="password" class="form-control" type="password" name="password">
  			</div>
  			<div class="form-group">
  				<label for="cpassword">Confirmar Password</label>
  				<input id="cpassword" class="form-control" type="password" name="cpassword">
  			</div>
  			<div class="form-group">
  				<label for="avatar">Foto de perfil:</label>
  				<input id="avatar" class="form-control" type="file" name="avatar">
  			</div>
  			<div class="form-group">
  				<input class="btn btn-success" type="submit">
  			</div>
  		</form>
  	</div>
  </div>
</div>
</body>
</html>
