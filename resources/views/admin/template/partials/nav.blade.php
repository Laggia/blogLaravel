<div class="container">
<nav class="navbar navbar-default" style="padding-bottom: 15px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-xs" href="/"><img src="{{asset ('images/logo.png')}}" alt="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    @if (Auth::user())    
      <ul class="nav navbar-nav">
        <li><a href="{{ route('admin.index')}}">Inicio</a></li>
        @if(Auth::user()->admin())
        <li><a href="{{ route('users.index') }}">Usuarios</a></li>
        @endif
        <li><a href="{{ route('categories.index') }}">Categorias</a></li>
        <li><a href="{{ route('articles.index') }}">Artículos</a></li>
        <li><a href="{{ route('images.index') }}">Imágenes</a></li>
        <li><a href="{{ route('tags.index') }}">Tags</a></li>
      </ul> 
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('front.index') }}">Página principal</a></li>
        <li><a href="{{ route('admin.index') }}">Página administrador</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Salir
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
      </ul>
      @else
        <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('front.index') }}">Página principal</a></li>
          <li>
            <a href="{{ route('login') }}">login</a>
          </li>
      </ul>
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>