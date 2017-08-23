<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8" />
    <meta description="" />
    <meta keywords="" />
    <meta author="" />
    <meta name="viewport" content="width=device-width, intial-scale=1" />

    <title>Micron</title>

    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" type="text/css" href="<?php echo APP_ROOT; ?>/bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo APP_ROOT; ?>/bower_components/summernote/dist/summernote.css">
    <link rel="stylesheet" type="text/css" href="<?php echo APP_ROOT; ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet/less" type="text/css" href="<?php echo SITE_ROOT; ?>/css/styles.less">

    <script src="<?php echo APP_ROOT; ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo APP_ROOT; ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo APP_ROOT; ?>/bower_components/less/dist/less.min.js"></script>
    <script src="<?php echo APP_ROOT; ?>/bower_components/summernote/dist/summernote.min.js"></script>
    <script src="<?php echo SITE_ROOT; ?>/js/custom.js"></script>

  </head>

  <body>

    <div style="padding:20px;">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo SITE_ROOT; ?>/">Micron</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-default navbar-right">
              <li><a href="<?php echo SITE_ROOT; ?>/page/index">Pages</a></li>
              <li><a href="<?php echo SITE_ROOT; ?>/user/index">Users</a></li>
              <li><a href="<?php echo SITE_ROOT; ?>/logout">Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <?=$this->section('content')?>
    </div>

</body>
</html>
