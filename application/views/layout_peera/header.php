<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<title><?php echo $site_name . ' - ' . $site_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="author" content="tagbox">
<meta name="description" content="O TagBox é um Shopping de moda online. Aqui você encontra o que procura da forma mais rápida.">
<meta name="keywords" content="tagbox, shopping de moda, moda">
<meta Name="robots" content="follow">

<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="<?php echo base_url();?>assets/ico/apple-touch-icon-57-precomposed.png">
<meta property="og:image" content="<?php echo base_url();?>assets/ico/apple-touch-icon-57-precomposed.png">
<meta property="og:site_name" content="tagbox - O Shopping de Moda Online">
<meta property="og:title" content="tagbox">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo current_url() ?>">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@_tagbox">
<meta name="twitter:creator" content="@_tagbox">
<meta name="twitter:title" content="tagbox">
<meta name="twitter:description" content="<?php echo base_url();?>assets/ico/apple-touch-icon-57-precomposed.png">
<meta name="twitter:image" content="<?php echo base_url();?>assets/ico/apple-touch-icon-57-precomposed.png">

<!-- FAVICON FILES -->
<link href="<?php echo base_url();?>assets/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
<link href="<?php echo base_url();?>assets/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
<link href="<?php echo base_url();?>assets/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
<link href="<?php echo base_url();?>assets/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
<link href="<?php echo base_url();?>assets/ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<?php echo link_tag('assets/css/settings.css?rev=4.6.0&#038;ver=4.0', 'stylesheet', 'text/css', '', 'all'); ?>
<?php echo link_tag('assets/css/jquery-ui.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/jquery.fancybox.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/animate.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/ionicons.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/font-awesome.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/owl.carousel.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/bootstrap.min.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/style.css', 'stylesheet'); ?>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="loading">
  <div class="loader-content"> <?php echo img('assets/images/logo-loading.jpg', 'alt="loading"'); ?>
    <div class="loader"></div>
  </div>
  <!-- end loader-content --> 
</div>
<!-- end loading -->
<header>
  <?php $dropdown_arrow = '<i class="ion-chevron-down"></i>'; ?>
  <nav id="nav" class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <i class="ion-navicon"></i> </button>
            <a class="navbar-brand" href="/"> <?php echo img('assets/images/logo.jpg', 'alt="logo"'); ?> </a>
          </div>
          <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left no-padding" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" id="primary_menu">
              <li class="dropdown">
                <?php echo anchor('/', 'INÍCIO'); ?>
              </li>
              <li class="dropdown"> <a class="dropdown-toggle" href="<?php echo site_url('mulheres');?>">MULHERES <i class="ion-chevron-down"></i></a>
                <?php if(isset($menu['mulheres'])): ?>
                  <ul class="dropdown-menu" role="menu">
                    <?php foreach($menu['mulheres'] as $key => $value):?>
                      <li><?php echo anchor($key, $value); ?></li>
                  <?php endforeach; ?>
                  </ul>
              <?php endif; ?>
              <li class="dropdown"> <a class="dropdown-toggle" href="<?php echo site_url('homens');?>">HOMENS <i class="ion-chevron-down"></i></a>
                <?php if(isset($menu['homens'])): ?>
                  <ul class="dropdown-menu" role="menu">
                    <?php foreach($menu['homens'] as $key => $value):?>
                      <li><?php echo anchor($key, $value); ?></li>
                  <?php endforeach; ?>
                  </ul>
              <?php endif; ?>
              </li>
              <li class="dropdown"> <a class="dropdown-toggle" href="<?php echo site_url('calcados');?>">CALÇADOS <i class="ion-chevron-down"></i></a>
                <?php if(isset($menu['calcados'])): ?>
                  <ul class="dropdown-menu" role="menu">
                    <li><b>Feminino</b></li>
                    <?php foreach($menu['calcados']['feminino'] as $key => $value):?>
                      <li><?php echo anchor($key, $value); ?></li>
                    <?php endforeach; ?>
                  <li><b>Masculino</b></li>
                    <?php foreach($menu['calcados']['masculino'] as $key => $value):?>
                      <li><?php echo anchor($key, $value); ?></li>
                    <?php endforeach; ?>
                  </ul>
              <?php endif; ?>
              </li>
              <li class="dropdown"> <a class="dropdown-toggle" href="<?php echo site_url('acessorios');?>">ACESSÓRIOS <i class="ion-chevron-down"></i></a>
                <?php if(isset($menu['acessorios'])): ?>
                  <ul class="dropdown-menu" role="menu">
                    <?php foreach($menu['acessorios'] as $key => $value):?>
                      <li><?php echo anchor($key, $value); ?></li>
                  <?php endforeach; ?>
                  </ul>
              <?php endif; ?>
              </li>
              <li><?php echo anchor('lojas','LOJAS');?></li>
            </ul>
          </div>
          <!-- end navbar-collapse --> 
        </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </nav>
  <!-- end nav --> 
</header>
<!-- end header -->