<?php $this->layout('AdminTemplate') ?>

<!-- Breadcrumb -->
<ol class="breadcrumb ">
  <li><a href="javascript:window.history.back()">Go back</a></li>
</ol>

<!-- Panel -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Edit content</h3>
  </div>
  <div class="panel-body">
    <!-- Form -->
    <form action="<?php echo SITE_ROOT; ?>/page/add-action" method="POST" enctype="multipart/form-data" name="update-detail-form">
      <div class="form-group">
        <label for="inputTitle">Title</label>
        <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title" value="">
      </div>
      <div class="form-group">
        <label for="inputDescription">Content</label>
        <div id="summernote"></div>
        <textarea style="display:none;" class="form-control" name="content" id="update-detail-content"></textarea>
      </div>
      <div class="form-group">
        <label for="inputPrimaryImage">Primary image</label>
        <input type="file" id="inputPrimaryImage" name="image">
      </div>
      <button type="submit" class="btn btn-primary" id="update-detail-button">Add</button>
    </form>
  </div>
</div>
