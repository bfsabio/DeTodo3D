<!DOCTYPE html>
<html lang="en">
<head>
    <title>DeTodo3D</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo asset('css/navbar.css')?>" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/"> <img src="https://1.bp.blogspot.com/-PJY1pxWjQrc/XdV3848u4bI/AAAAAAAAd8k/ziA-rafAqjgbTKVPxQtF7coDM0PiIpf2ACNcBGAsYHQ/s1600/logo.png" alt="logo" width="150px"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link @if(Request::is('login'))disabled @endif" href="login">Ingresar <span class="sr-only">(current)</span></a></li>
            <li class="nav-item"><a class="nav-link @if(Request::is('register'))disabled @endif" href="register">Registrarse</a></li>
            <li class="nav-item"><a class="nav-link @if(Request::is('faq'))disabled @endif" href="faq">Faq</a></li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </body>
  </html>
