<?php $this->layout('AdminTemplate') ?>

<!-- Container -->
<div class="panel panel-default">
  <div class="panel-heading">
    <a href="<?php echo SITE_ROOT; ?>/user/add" class="pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add new user</a>
    <h3 class="panel-title">Users</h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
    <?php foreach($users as $user): ?>
      <li class="list-group-item">
        <?=$this->e($user['username'])?>
        <a href="<?php echo SITE_ROOT; ?>/user/<?=$this->e($user['id'])?>/delete" class="pull-right" type="button" style="margin-left: 10px; " onClick="return confirm('Are you sure you want to delete?')">Delete</a>
        <a href="<?php echo SITE_ROOT; ?>/user/<?=$this->e($user['id'])?>/detail" class="pull-right" type="button">Edit</a>
      </li>
    <?php endforeach ?>
    </ul>
  </div>
  </div>
