<?php $this->layout('AdminTemplate') ?>

<!-- Breadcrumb -->
<ol class="breadcrumb ">
  <li><a href="javascript:window.history.back()">Go back</a></li>
  <li class="active"><?=$this->e($page['title'])?></li>
</ol>

<!-- Panel -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Edit content</h3>
  </div>
  <div class="panel-body">

    <!-- Form -->
    <form action="<?php echo SITE_ROOT; ?>/page/<?=$this->e($page['id'])?>/update" method="POST" enctype="multipart/form-data" name="update-detail-form">
      <div class="form-group">
        <label for="inputTitle">Title</label>
        <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title" value="<?=$this->e($page['title'])?>">
      </div>
      <div class="form-group">
        <label for="inputDescription">Content</label>
        <div id="summernote"><?= htmlspecialchars_decode($this->e($page['content'])) ?></div>
        <textarea style="display:none;" class="form-control" name="content" id="update-detail-content"><?=$this->e($page['content'])?></textarea>
      </div>
      <div class="form-group">
        <img  class="img-rectangle media-object" data-src="holder.js/64x64" alt="64x64" src="<?php echo SITE_ROOT; ?>/assets/<?=$this->e($page['image'])?>" data-holder-rendered="true" style="height: 64px;">
        <label for="inputPrimaryImage">Image</label>
        <input type="file" id="inputPrimaryImage" name="image">
      </div>
      <button type="submit" class="btn btn-primary" id="update-detail-button">Update</button>
    </form>

  </div>
</div>
