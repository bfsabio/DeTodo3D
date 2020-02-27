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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    @include('logueado')
  </header>
  <div class="container">
    @if(Auth::user()->name == 'admin')
    <div>
      <ul class="d-flex justify-content-around bcontain  row" type="none">
        <div id="admin" class="banner col-6 col-sm-2 col-md-2">
          <a href="admin/" class="item-link" title="admin">
          <figure style="width: 150px;"> <img src="https://1.bp.blogspot.com/-7eqqDxB9bL8/Xdsuda25LjI/AAAAAAAAeJ4/0QQB0jQytskTMlm7VzLvn9vdFwgpLvgCQCNcBGAsYHQ/s1600/ico_5.png"
          width="150" height="150" alt=""></figure>
          </a>
          <div class="textbanner">admin</div>
      </div>
              <div id="diseño" class="banner col-6 col-sm-2 col-md-2">
                  <a href="diseño" class="item-link" title="diseño">
                   <figure style="width: 150px;"> <img src="https://1.bp.blogspot.com/-6-_UBDoxTbA/XdsuNQUNPNI/AAAAAAAAeJg/1zxawe4fAgQIrsS1Az0zR4vj8xnVm_ucQCNcBGAsYHQ/s1600/ico_1.png"
                  width="150" height="150" alt="diseño"></figure>
                </a>
                <div class="textbanner">Diseño</div>
              </div>
              <div id="impresion" class="banner col-6 col-sm-2 col-md-2">
                  <a href="impresion" class="item-link" title="impresion">
                   <figure style="width: 150px;"><img src="https://1.bp.blogspot.com/-aOAT6uw7GCE/XdsuNxwKDEI/AAAAAAAAeJk/c50ixaTjouAIGnMDF2A4gVj2dP97JQrLQCNcBGAsYHQ/s1600/ico_2.png"
                  width="150" height="150" alt=""></figure>
                  </a>
                  <div class="textbanner">Impresion</div>
              </div>
              <div id="reparacion" class="banner col-6 col-sm-2 col-md-2">
                  <a href="reparacion" class="item-link" title="reparacion">
                  <figure style="width: 150px;"> <img src="https://1.bp.blogspot.com/-TcA6m60FkDU/Xdsux-84AOI/AAAAAAAAeKI/oR8xguq_EtI3k8QVEsbI3k4h_5CML6gTACNcBGAsYHQ/s1600/ico_4.png"
                  width="150" height="150" alt=""></figure>
                  </a>
                  <div class="textbanner">Reparacion</div>
              </div>
              <div id="insumos" class="banner col-6 col-sm-2 col-md-2">
                  <a href="insumos" class="item-link" title="insumos">
                  <figure style="width: 150px;"> <img src="https://1.bp.blogspot.com/-8XEnoKIBiFY/XdsuOdVprqI/AAAAAAAAeJo/eMxNkd6KK_YoakwShm7sQDimtJ1YYpw6QCNcBGAsYHQ/s1600/ico_3.png"
                  width="150" height="150" alt=""></figure>
                  </a>
                  <div class="textbanner">Insumos</div>
              </div>
              <div id="otros" class="banner col-6 col-sm-2 col-md-2">
                  <a href="otros" class="item-link" title="otros">
                  <figure style="width: 150px;"> <img src="https://1.bp.blogspot.com/-7eqqDxB9bL8/Xdsuda25LjI/AAAAAAAAeJ4/0QQB0jQytskTMlm7VzLvn9vdFwgpLvgCQCNcBGAsYHQ/s1600/ico_5.png"
                  width="150" height="150" alt=""></figure>
                  </a>
                  <div class="textbanner">otros</div>
              </div>
      </ul>
    </div>
      @else
      <div>
        <ul class="d-flex justify-content-around bcontain  row" type="none">
                <div id="diseño" class="banner col-6 col-sm-2 col-md-2">
                    <a href="diseño" class="item-link" title="diseño">
                     <figure style="width: 150px;"> <img src="https://1.bp.blogspot.com/-6-_UBDoxTbA/XdsuNQUNPNI/AAAAAAAAeJg/1zxawe4fAgQIrsS1Az0zR4vj8xnVm_ucQCNcBGAsYHQ/s1600/ico_1.png"
                    width="150" height="150" alt="diseño"></figure>
                  </a>
                  <div class="textbanner">Diseño</div>
                </div>
                <div id="impresion" class="banner col-6 col-sm-2 col-md-2">
                    <a href="impresion" class="item-link" title="impresion">
                     <figure style="width: 150px;"><img src="https://1.bp.blogspot.com/-aOAT6uw7GCE/XdsuNxwKDEI/AAAAAAAAeJk/c50ixaTjouAIGnMDF2A4gVj2dP97JQrLQCNcBGAsYHQ/s1600/ico_2.png"
                    width="150" height="150" alt=""></figure>
                    </a>
                    <div class="textbanner">Impresion</div>
                </div>
                <div id="reparacion" class="banner col-6 col-sm-2 col-md-2">
                    <a href="reparacion" class="item-link" title="reparacion">
                    <figure style="width: 150px;"> <img src="https://1.bp.blogspot.com/-TcA6m60FkDU/Xdsux-84AOI/AAAAAAAAeKI/oR8xguq_EtI3k8QVEsbI3k4h_5CML6gTACNcBGAsYHQ/s1600/ico_4.png"
                    width="150" height="150" alt=""></figure>
                    </a>
                    <div class="textbanner">Reparacion</div>
                </div>
                <div id="insumos" class="banner col-6 col-sm-2 col-md-2">
                    <a href="insumos" class="item-link" title="insumos">
                    <figure style="width: 150px;"> <img src="https://1.bp.blogspot.com/-8XEnoKIBiFY/XdsuOdVprqI/AAAAAAAAeJo/eMxNkd6KK_YoakwShm7sQDimtJ1YYpw6QCNcBGAsYHQ/s1600/ico_3.png"
                    width="150" height="150" alt=""></figure>
                    </a>
                    <div class="textbanner">Insumos</div>
                </div>
                <div id="otros" class="banner col-6 col-sm-2 col-md-2">
                    <a href="otros" class="item-link" title="otros">
                    <figure style="width: 150px;"> <img src="https://1.bp.blogspot.com/-7eqqDxB9bL8/Xdsuda25LjI/AAAAAAAAeJ4/0QQB0jQytskTMlm7VzLvn9vdFwgpLvgCQCNcBGAsYHQ/s1600/ico_5.png"
                    width="150" height="150" alt=""></figure>
                    </a>
                    <div class="textbanner">otros</div>
                </div>
        </ul>
      </div>
      @endif
  </div>
</body>
</html>
