<?php $this->layout('AdminTemplate') ?>

<!-- Breadcrumb -->
<ol class="breadcrumb">
  <li><a href="javascript:window.history.back()">Go back</a></li>
</ol>

<!-- Panel -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add user</h3>
  </div>
  <div class="panel-body">

    <!-- Form -->
    <form action="<?php echo SITE_ROOT; ?>/user/add-action/" method="POST" name="update-user-form">
      <div class="form-group">
        <label for="inputUsername">Username</label>
        <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" value="Username">
      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" value="Password">
      </div>
      <button type="submit" class="btn btn-primary" id="update-user-button">Add</button>
    </form>

  </div>
</div>
