<?php $this->layout('AdminTemplate') ?>

<!-- Big container -->
<div class="jumbotron">

  <!-- Login form -->
  <form class="form-inline" action="<?php echo SITE_ROOT; ?>/login-action" method="post" style="padding:100px;">
    <input type="hidden" name="type" value="login" />
    <div class="form-group">
      <label class="sr-only" for="inputUsername">Username</label>
      <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Username">
    </div>
    <div class="form-group">
      <label class="sr-only" for="inputPassword">Password</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>

  <p>&nbsp;</p>
</div>

<style>
  .navbar { display:none; }
</style>
