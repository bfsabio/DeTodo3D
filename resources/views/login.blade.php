 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <title>inicio</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <title>login</title>
   </head>
   <body>
    <header>
      @include('navbar');
    </header>
     <div class="body">
     	<div class="col-xl-4 container box">
     		<form method="POST" action="login.php" enctype="multipart/form-data">
     			<div class="form-group">
     				<label for="email">Email</label>
     				<input class="form-control" type="text" name="email" id="email" value="">
     			</div>
     			<div class="form-group">
     				<label for="password">Password</label>
     				<input id="password" class="form-control" type="password" name="password">
     			</div>
     			<div class="form-group">
     				<label for="recordame">Recordame</label>
     				<input type="Checkbox" name="recordame">
     			</div>
     			<div class="form-group">
     				<input class="btn btn-success" type="submit">
     			</div>
     		</form>
     	</div>
     </div>
   </body>
 </html>
