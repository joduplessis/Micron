<?php $this->layout('AdminTemplate') ?>

<!-- Breadcrumb -->
<ol class="breadcrumb">
  <li><a href="javascript:window.history.back()">Go back</a></li>
</ol>

<!-- Panel -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Edit user</h3>
  </div>
  <div class="panel-body">

    <!-- Form -->
    <form action="<?php echo SITE_ROOT; ?>/user/<?=$this->e($user['id'])?>/update" method="POST" name="update-user-form">
      <div class="form-group">
        <label for="inputUsername">Username</label>
        <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" value="<?=$this->e($user['username'])?>">
      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" value="<?=$this->e($user['password'])?>">
      </div>
      <button type="submit" class="btn btn-primary" id="update-user-button">Update</button>
    </form>

  </div>
</div>
