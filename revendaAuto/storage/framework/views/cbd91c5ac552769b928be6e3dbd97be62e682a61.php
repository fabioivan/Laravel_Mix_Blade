<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
      <h2 class="center">Entrar no Sistema</h2>
      <?php if(session('status')): ?>
          <div class="card">
              <?php echo e(session('status')); ?>

          </div>
      <?php endif; ?>
        <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="input-field col s12">
              <input type="text" name="email" value="<?php echo e(old('email')); ?>" class="validate" autofocus>
              <label>E-mail</label>
              <?php if($errors->has('email')): ?>
                  <span>
                      <strong><?php echo e($errors->first('email')); ?></strong>
                  </span>
              <?php endif; ?>
            </div>
            <div class="input-field col s12">
              <input type="password"  name="password" value="<?php echo e(old('password')); ?>" class="validate">
              <label>Senha</label>
              <?php if($errors->has('password')): ?>
                  <span>
                      <strong><?php echo e($errors->first('password')); ?></strong>
                  </span>
              <?php endif; ?>
            </div>

            <div class="col s12">
              <p>
                <input type="checkbox" id="lembrarSenha" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> />
                <label for="lembrarSenha">Lembrar senha?</label>
              </p>
            </div>
            <div class="col s12">
              <br/>
              <button class="btn green">Entrar</button>
              <a href="<?php echo e(url('/password/reset')); ?>"  class="btn orange">Recuperar senha</a>
            </div>
          </form>
      </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>