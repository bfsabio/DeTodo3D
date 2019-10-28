<?php
include_once("soporte.php");

if ($auth->estaLogueado()) {
  header("Location:../index/inicio.php");exit;
}
// $username="";

$usuarioVacioError=false;
$contraseñaVaciaError=false;
$usuarioNoExiste=false;
$contraseñaIncorrectaError=false;


//inicio seguido de apretar submit
if (isset($_POST['submit']) && !empty($_POST['submit'])) {
  //valido alertas de error
  if (empty($_POST['username'])) {
    $usuarioVacioError=true;
  }else {
    $username=$_POST['username'];
  }
  if (empty($_POST["password"])) {
    $contraseñaVaciaError=true;
  }else {
    $contraseña=$_POST['password'];
  }
  //comienza revision en json
  $archivo='usuarios.json';
  if (file_exists($archivo)){
    $usuariosjson=file_get_contents($archivo);
    $usuarios = json_decode($usuariosjson,true);
    $usuarioExiste=false;
    foreach($usuarios['usuarios'] as $usuario) {
      if ($usuario["username"] == $_POST['username']) {
        $username==$_POST['username'];
        $usuarioExiste = true;
        $contraseñaEncriptada = md5($contraseña);
        if ($usuario['password'] == $contraseñaEncriptada) {
          header("location:../index/inicio.php");
          exit;
        } else {
          $contraseñaIncorrectaError=true;
          break;
        }
      }
    }
  }
  //alertas de usuario no existe
  if (!$usuarioExiste) {
    $usuarioNoExiste = true;
  }
}
$errores = [];
if ($_POST) {
  $errores = $validator->validarLogin($_POST,$db);
  if (count($errores) == 0) {
    // LOGUEAR
        $auth->loguear($_POST["email"]);
    if (isset($_POST["recordame"])) {
      //Quiere que lo recuerde
      $auth->recordame($_POST["email"]);
    }
        header("Location:../index/inicio.php");
  }
}

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <title>inicio</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="../css/login.css">
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <title>login</title>
   </head>
   <body>
     <?php
       $a=1;
       include '../include/navbar.php';
     ?>


     <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand" href="../index.html"> <img src="../fuentes/logo.png" alt="logo" width="150px"> </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse"
                 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                 aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item"><a class="nav-link disabled" href="#">Ingresar<span class="sr-only">(current)</span></a></li>
             <li class="nav-item"><a class="nav-link" href="register.php">Registrarse</a></li>
             <li class="nav-item"><a class="nav-link" href="faqs.html">Faq</a></li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
         </div>
       </nav> -->

     <!-- <form class="col-xl-4 container box" action="" method="post"> -->
       <!-- <label for="">nombre de usuario</label><br> -->
       <!-- <input type="text" name="username" value="<?php $username ?>" required> -->
       <!-- doy una alerta de que el usuario no existe y lo muestra -->
         <!-- <?php if ($usuarioNoExiste): ?> -->
            <!-- <span>el usuario no existe</span> -->
         <!-- <?php endif; ?><br> -->
       <!-- <label for="">contraseña</label><br> -->
       <!-- <input type="password" name="password" value="" required> -->
       <!-- doy una alerta de que la clave no existe -->
         <!-- <?php if ($contraseñaIncorrectaError): ?> -->
            <!-- <span>la contraseña es incorrecta</span> -->
         <!-- <?php endif; ?><br> -->
         <!-- <div class=""> -->
           <!-- <input type="checkbox" name="recordarme" value="recordame"> Recordar -->
         <!-- </div> -->
       <!-- <button type="submit" name="submit" value="ingresar">ingresar</button> -->
     <!-- </form> -->

     <div class="body">
     	<div class="col-xl-4 container box">
     		<ul class="errores">
     		<?php foreach ($errores as $error) : ?>
     			<li>
     				<?=$error?>
     			</li>
     		<?php endforeach; ?>
     		</ul>
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
