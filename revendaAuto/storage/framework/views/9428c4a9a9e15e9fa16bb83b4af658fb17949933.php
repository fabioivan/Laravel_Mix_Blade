<nav class="blue">
  <div class="nav-wrapper container">
    <a href="/" class="brand-logo">LogoSite</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php if(Auth::guest()): ?>
          <li><a href="<?php echo e(url('/login')); ?>">Entrar</a></li>
          <li><a href="<?php echo e(url('/register')); ?>">Cadastro</a></li>
      <?php else: ?>
        <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li></li>
        <li>
            <a href="<?php echo e(url('/logout')); ?>"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Sair
            </a>

            <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
        </li>

      <?php endif; ?>
    </ul>
  </div>
</nav>
