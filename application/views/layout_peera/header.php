<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<title><?php echo $site_name . ' - ' . $site_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<!-- FAVICON FILES -->
<link href="<?php echo base_url();?>assets/ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<?php echo link_tag('assets/css/jquery-ui.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/bootstrap.min.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/style.css', 'stylesheet'); ?>

<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />
<?php echo link_tag('assets/css/skins/default.css', 'stylesheet'); ?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
  <div class="navbar navbar-default navbar-static-top">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/"> <?php echo img('assets/images/logo.jpg', 'alt="logo"'); ?> </a>
             
          </div>
          <div class="navbar-collapse collapse ">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="index.html">Home</a></li>
                  <li><a href="typography.html">Sobre</a></li>
                  <li><a href="typography.html">Serviços</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="pricingbox.html">Clientes</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="contact.html">Contato</a></li>
              </ul>
          </div>
      </div>
  </div>
</header>
<!-- end header -->