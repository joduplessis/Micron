<?php $this->layout('AdminTemplate') ?>

<!-- Container -->
<div class="panel panel-default">
  <div class="panel-heading">
    <a href="<?php echo SITE_ROOT; ?>/page/add" class="pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add new page</a>
    <h3 class="panel-title">Pages</h3>
  </div>
  <div class="panel-body">
    <!-- List of pages -->
    <ul class="media-list">
      <?php foreach($pages as $page): ?>
      <li class="media">
        <div class="media-left">
          <a href="#">
            <img  class="img-rectangle media-object" data-src="holder.js/64x64" alt="64x64" src="<?php echo SITE_ROOT; ?>/assets/<?=$this->e($page['image'])?>" data-holder-rendered="true" style="height: 64px;">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?=$this->e($page['title'])?> </h4>
          <a href="<?php echo SITE_ROOT; ?>/page/<?=$this->e($page['id'])?>/delete" class="btn btn-danger pull-right" type="button" style="margin-right: 4px; " onClick="return confirm('Are you sure you want to delete?')">Delete</a>
          <a href="<?php echo SITE_ROOT; ?>/page/<?=$this->e($page['id'])?>/detail" class="btn btn-primary pull-right" type="button" style="margin-right: 4px; ">Edit</a>
          <p><?= htmlspecialchars_decode($this->e($page['content'])) ?> ...</p>
        </div>
      </li>
      <?php endforeach ?>
    </ul>
</div>
</div>
