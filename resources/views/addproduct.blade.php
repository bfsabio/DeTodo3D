
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DeTodo3D</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/logueado.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/addproduct.css') }}" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    @include('logueado')
  </header>
  <div class="container">
  <form action="/producto" enctype="multipart/form-data" method="post">
  @csrf
    <div class="row">
        <div class="col">
            <div class="row fond2">
                <h1>Agregar Producto</h1>
            </div>
            <div class="row titulosadd">
                <div>
                    <div class="">
                        <h2>Nombre</h2>
                        <input name="name" type="text">
                    </div>
                    <div class="">
                        <h2>Descripcion</h2>
                        <input name="desc" type="text">    
                    </div>
                    <div class="">
                        <h2>Precio</h2>
                        <input name="precio" type="number">    
                    </div>
                </div>    
                <div>
                    <div class="">
                        <h2>Imagen</h2>
                        <input name="img" type="file">
                    </div>
                    <div class="">
                        <h2>Categoria</h2>
                        <select  name="categoria" type="">
                         <option value="">elige una categoria</option>
                         @foreach ($categorias as $categoria)
                             <option value="{{$categoria->name}}">{{$categoria->name}}</option>
                         @endforeach
                        </select>    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="boton2" >
                            <button type="sumbit">agregar</button>
                        </div>
                        <div class="boton2" >
                            <button type="reset">Reset</button>
                        </div>
                        <div class="boton" >
                            <li type="none"><a class="set2"  href="../ ">Volver</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
  </div>
</div>
</body>
</html>