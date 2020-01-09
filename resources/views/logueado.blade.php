<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/home"> <img src="https://1.bp.blogspot.com/-PJY1pxWjQrc/XdV3848u4bI/AAAAAAAAd8k/ziA-rafAqjgbTKVPxQtF7coDM0PiIpf2ACNcBGAsYHQ/s1600/logo.png" alt="logo" width="150px"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      @if(Auth::user()->name == 'admin')
      <div class="card-body ">
        <li><a class="adminadmins" href="admin/pagina1">Cuenta Administrador</a></li>
      </div>
      @else
      <div class="card-body" style="color: #d1d1d4;">
          @if (session('status'))
            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
          @endif
          Bienvenido {{ Auth::user()->name }} <span class="caret"></span>
      </div>
      @endif




        <li class="nav-item dropdown" style="right: 66px;padding: 20px;">
        <a id="navbarDropdown" tyle="" class="nav-link dropdown-toggle"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}<span class="caret"></span></a>
        <div class="dropdown-menu " style=" right: 20px;"  aria-labelledby="navbarDropdown">
          <ul class="menu" style="padding-left: 10px;"   type="none">
            <li><a href="/user/edit">mi perfil</a></li>
            <li><a href="faq">faq</a></li>
            <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" >@csrf</form>
          </ul>
        </div>
        </li>
    </ul>
  </div>
</nav>
