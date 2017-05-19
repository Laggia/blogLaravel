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
      <a class="navbar-brand hidden-xs" href="/"><img src="<?php echo e(asset ('images/logo.png')); ?>" alt="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <?php if(Auth::user()): ?>    
      <ul class="nav navbar-nav">
        <li><a href="<?php echo e(route('admin.index')); ?>">Inicio</a></li>
        <?php if(Auth::user()->admin()): ?>
        <li><a href="<?php echo e(route('users.index')); ?>">Usuarios</a></li>
        <?php endif; ?>
        <li><a href="<?php echo e(route('categories.index')); ?>">Categorias</a></li>
        <li><a href="<?php echo e(route('articles.index')); ?>">Artículos</a></li>
        <li><a href="<?php echo e(route('images.index')); ?>">Imágenes</a></li>
        <li><a href="<?php echo e(route('tags.index')); ?>">Tags</a></li>
      </ul> 
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo e(route('front.index')); ?>">Página principal</a></li>
        <li><a href="<?php echo e(route('admin.index')); ?>">Página administrador</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo e(Auth::user()->name); ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Salir
              </a>
              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

              </form>
            </li>
          </ul>
        </li>
      </ul>
      <?php else: ?>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo e(route('front.index')); ?>">Página principal</a></li>
          <li>
            <a href="<?php echo e(route('login')); ?>">login</a>
          </li>
      </ul>
      <?php endif; ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>