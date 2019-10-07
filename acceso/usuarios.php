<?php
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
          header("location:felicitaciones.php");
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
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <title>inicio</title>
     <meta charset="utf-8">
     <link rel="stylesheet" href="../css/usuarios.css">
     <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


     <title>login</title>
   </head>
   <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
       </nav>

     <form class="col-xl-4 container box" action="" method="post">
       <label for="">nombre de usuario</label><br>
       <input type="text" name="username" value="<?php $username ?>" required>
       <!-- doy una alerta de que el usuario no existe y lo muestra -->
         <?php if ($usuarioNoExiste): ?>
            <span>el usuario no existe</span>
         <?php endif; ?><br>
       <label for="">contraseña</label><br>
       <input type="password" name="password" value="" required>
       <!-- doy una alerta de que la clave no existe -->
         <?php if ($contraseñaIncorrectaError): ?>
            <span>la contraseña es incorrecta</span>
         <?php endif; ?><br>
       <input type="checkbox" name="recordarme" value="recordame">Recordar<br>
       <button type="submit" name="submit" value="ingresar">ingresar</button>
     </form>
   </body>
 </html>
