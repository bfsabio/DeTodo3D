<?PHP
  $categoriasJson = file_get_contents('categoria.json');
  $categorias = json_decode($categoriasJson, true);
  $name = "";
  $username ="";
  $email = "";
  // $edad ="";
  $intereses = [];
  // $genre="";
  $password="";
  $usuarios = [];
  $id="";
//inicializo los errores en falso para evitar problemas futuros
  $emptyNameError = false;
  $emptyUsernameError = false;
  $invalidEmailError = false;
  // $notNumericAgeError = false;
  $emptyInterestError = false;
  // $emptyGenreError = false;
  // $emptyCountryError = false;
  $notSetPasswordError = false;
  $confirmPasswordError = false;
  $extArchivoError=false;

if (isset($_POST["Submit"])) {
// validaciones
  if (!isset($_POST["name"]) || strlen($_POST["name"]) >= 15 || strlen($_POST["name"])==0){
    $emptyNameError = true;
  } else {
    $name=$_POST["name"];
  }
  if (!isset($_POST["username"]) || strlen($_POST["username"]) >= 15){
    $emptyUsernameError = true;
  } else {
    $username=$_POST["username"];
  }
  if (!isset($_POST["email"]) || !filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    $invalidEmailError = true;
  }else {
    $email = $_POST["email"];
  }
  // if (!isset($_POST["edad"]) || !is_numeric($_POST["edad"])){
  //   $notNumericAgeError = true;
  // } else {
  //   $edad=$_POST["edad"];
  // }
  if (!isset($_POST["intereses"])){
    $emptyInterestError = true;
  }else{
    $intereses=$_POST["intereses"];
  }
  // if (!isset($_POST["gen"])){
  //   $emptyGenreError = true;
  // }else{
  //   $genre=$_POST["gen"];
  // }
  // if (!isset($_POST["country"])||$_POST["country"]==""){
  //   $emptyCountryError = true;
  // }else{
  //   $pais_enviado=$_POST["country"];
  // }
  if (!isset($_POST["password"])) {
    $notSetPasswordError = true;
  } elseif (!isset($_POST["confirm_password"]) || $_POST["password"]!= $_POST["confirm_password"] ) {
    $confirmPasswordError = true;
  } else {
    $password = $_POST["password"];
  }
  //
  // if (file_exists('usuarios.json')) {
  //   $usuariosReg = file_get_contents("usuarios.json");
  //   $usuariosDec=json_decode($usuarios,true);
  //   $posUltUser=cont($usuario["usuarios"]);
  //   if(is_null($posUltUser)|| $posUltUser==0){
  //     $usuarios["id"]=0;
  //   } else {
  //     $ultId=$usuarios["usuarios"][$posUltUser-1]["id"];
  //     $usuarios["id"]=$ultId+1;
  //   }
  //   foreach ($usuarios["usuarios"] as $us){
  //     if ($us["username"] == $username){
  //       $registeredUsernameError = true;
  //       break;
  //     }
  //   }
  // }else{
  //   $usuarios["id"]=0;
  // }
  // $id=$usuarios["id"];
  //
  // if ($_FILES["imagen"]["error"] == UPLOAD_ERR_OK) {
  //   $nombre=$_FILES["imagen"]["name"];
  //   $archivoTmp=$_FILES["imagen"]["tmp_name"];
  //   $ext=pathinfo($nombre,PATHINFO_EXTENSION);
  //   $tipoImg=["jpg","png","bmp","JPG","gif"];
  //   if(in_array($ext,$tipoImg)){
  //     $miArchivo=dirname($_FILES). "archivos_subidos/$id." . $ext; // revisar esta linea error __files__ "/"
  //   }else{
  //     $extArchivoError=true;
  //   }
  // }
// guardamos los datos en el json quitado  && !$extArchivoError
  if (!$emptyNameError && !$invalidEmailError  && !$emptyInterestError  && !$notSetPasswordError && !$confirmPasswordError  && !$extArchivoError) {
    /*
    Guardaremos los usuarios en el archivo usuarios.json. Si el archivo existe,
    leemos el contenido del archivo, lo decodificamos y lo cargamos en el array usuarios.
    Si el archivo no existe, creamos un array vacio con el mismo nombre.
    con este elemento no pisa el contenido y crea una base de datos de usarios
    */
    if (file_exists("usuarios.json")) {
      $usuariosJson=file_get_contents('usuarios.json');
      $usuarios=json_decode($usuariosJson,true);
      foreach ($usuarios["usuarios"] as $us) {
        if ($us["username"] == $username) {
          $registeredUsernameError = true;
          echo "El nombre de usuario ya existe";
          break;
        }
      }
    }
    // if (empty($usuariosDec)) {
    //   $usuariosDec["usuarios"][]=$usuario;
    //   $usuariosJson = json_encode($usuariosDec,JSON_PRETTY_PRINT);
    //   file_put_contents('usuarios.json',$usuariosJson);
    //   header("Location:felicitaciones.php");
    //   exit;
    //
    // }else {
    //   foreach ($usuariosDec as $key => $value) {
    //     if ($username==$key["username"]) {
    //       echo "El usuario ya existe";
    //     }
    //     else{
    //       $usuariosDec[]=$usuario;
    //       $usuariosJson = json_encode($usuariosDec,JSON_PRETTY_PRINT);
    //       file_put_contents('usuarios.json',$usuariosJson);
    //       header("Location:acceso/felicitaciones.php");
    //       exit;
    //     }
    //   }
    // }
    //
    // if (file_exists('usuarios.json')) {
    //   $usuariosReg = file_get_contents("usuarios.json");
    //   $usuariosDec=json_decode($usuarios,true);
    // } else {
    //   $usuariosDec=[];
    // }
    //encripta la contraseña confirmada y guarda todos los datos en el array usuario
    $md5Pass = md5($password);
    // move_uploaded_file($archivoTmp,$miArchivo);
    // echo "el archivo se subio con exito";
    $usuario =  [ "name"=>$name,
                  "email"=>$email,
                  "username" => $username,
                  "intereses"=>$intereses,
                  "password"=>$md5Pass,
                  "ext_foto"=>$ext
                ];
    $usuarios["usuarios"][]=$usuario;
    $usuariosJson = json_encode($usuarios,JSON_PRETTY_PRINT);
    file_put_contents('usuarios.json',$usuariosJson);
    // move_uploaded_file($archivo,$miArchivo);
    header("Location:felicitaciones.php");
    exit;
    //si el archivo usuarios.json existe ,traecla informacion que contenga a usuarioReg( como texto), luego convirte
    //ese tecto en array en usuariosDec
    //SINO crea usuariosDec como array vacio
    //si el array usuariosDec esta vacio ,agregara al final de este el usuario que se quiere registrar ,
    //se codificara con .json en $usuariosJson
    //creara y guardara en un archivo .json  $usuariosJson  y saldra del programa
    //SINO verificara que el usuario que se quiere registar no exista previamente ,comparando los userame.

}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/register.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
          <li class="nav-item"><a class="nav-link" href="usuarios.php">Ingresar<span class="sr-only">(current)</span></a></li>
          <li class="nav-item"><a class="nav-link disabled" href="#">Registrarse</a></li>
          <li class="nav-item"><a class="nav-link" href="faqs.html">Faq</a></li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

<div class="container box" >
      <div class="row">
        <form id='register'  class='col-4 offset-4'  action='' method='post' enctype="multipart/form-data">
                <h1>Registro</h1>
                <div class='short_explanation'>* campos requeridos</div>
                <div class='form-group'>
                    <label for='name' >Nombre completo: </label>
                    <?php if ($emptyNameError): ?>
                      <span>El campo de nombre debe tener mas de 0 y menos de 15 caracteres</span>
                    <?php endif; ?>
                    <br/>
                    <input class="" type='text' name='name' id='name' value='<?= $name ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class=''>
                    <label for='email' >Email:</label>
                    <?php if ($invalidEmailError): ?>
                      <span>El email no cumple el formato;</span>
                    <?php endif; ?>
                    <br/>
                    <input type='text' name='email' id='email' value='<?= $email?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='' style='height:120px'>
                    <label for='username' >Nombre de usuario*:</label>
                    <?php if ($emptyUsernameError): ?>
                      <span>El campo de usuario debe tener mas de 0 y menos de 15 caracteres</span>
                    <?php endif; ?>
                    <br/>
                    <input type='text' name='username' id='username' value='<?= $username?>' maxlength="60" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>

                <div class="custom-file mb-3 "style="overflow:hidden">
                  <!-- esta linea es para la carga de imagenes -->
                    <input type="file" class="custom-file-input "  id="customFile" name="imagen">
                    <label class="custom-file-label" for="customFile">subir imagen</label>
                </div>
                <script>
                    // Add the following code if you want the name of the file appear on select
                    $(".custom-file-input").on("change", function() {
                    var image = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(image);
                    });
                </script>

                <div class="" >
                  <!-- a partir de aca se crea el boton con opciones desplegables, esta opcion se ocultara porque mas adelante se opta por tenerlo en el inicio del usuario -->
                  <button type="button" class="btn btn-light" data-toggle="collapse" data-target="#demo">¿ofrece algun servicio?</button>
                  <div id="demo" class="collapse">
                    <div class=" bg-secondary text-white">
                      <label for="intereses[]">¿que tipo de servicio que ofrece?</label><br>
                      <?php foreach ($categorias['categorias'] as $valor => $categoria): ?>
                      <input type="checkbox" name="intereses[]" value="<?= $categoria['id']?>" <?= in_array($categoria['id'],$intereses) ? "checked": "" ?>><?= $categoria['nombre'] ?><br>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>

                <div class='' style='height:120px;'>
                    <label for='password' >Contaseña*:</label>
                    <?php if ($notSetPasswordError): ?>
                    <span>Debe indicar una contraseña;</span>
                    <?php endif; ?><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv'></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <div class='' style='height:100px;'>
                    <?php if (!isset($_GET['version_corta'])): ?>
                    <label for='password' >Confirmar contaseña*:</label>
                    <?php if ($confirmPasswordError): ?>
                    <span>La contraseña debe coincidir con la elegida en el campo de arriba;</span>
                    <?php endif; ?><br/>
                    <div class='pwdwidgetdiv' id='theconfirmpwddiv' ></div>
                    <input type='password' name='confirm_password' id='confirm_password' maxlength="50" />
                    <div id='confirm_password_errorloc' class='error' style='clear:both'></div>
                    <?php endif; ?><br/>
                </div>
                <div class='' style='height:60px;'>
                    <button type='submit' class="btn btn-light" name='Submit' value='Enviar'>Enviar</button>
                </div>
        </form>
        </div>
        </div>
    </body>
</html>
