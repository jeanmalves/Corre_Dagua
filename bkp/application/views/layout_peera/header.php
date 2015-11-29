<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
<title><?php echo $site_name . ' - ' . $site_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


<!-- FAVICON FILES -->
<!-- <link href="<?php echo base_url();?>assets/ico/favicon.png" rel="shortcut icon"> -->

<!-- CSS FILES -->
<?php echo link_tag('assets/css/bootstrap.min.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/style.css', 'stylesheet'); ?>

</head>
<body>
<header>
  <nav role="navigation" class="navbar navbar-default fixed-nav " id="nav">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xs-8 page-scroll">
          <a href="#" class="logo">
            
             <?php echo img('assets/images/logo-horizontal.png', 'alt="Corre Dágua"'); ?>
          </a>  
        </div>
        <button type="button" class="navbar-toggle toggle-menu menu-left push-body"
        data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <i class="icon-bar"></i>
          <i class="icon-bar"></i>
          <i class="icon-bar"></i>
        </button>
         <div class="col-md-8 col-xs-8">
                  <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left no-padding">
                <ul id="primary_menu" class="nav navbar-nav navbar-left/*nav nav-justified*/">
                    <li class="dropdown active">
                      <a href="#">Home</a>
                  </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle">
                        Alerte-me <i class="ion-chevron-down"></i>
                      </a>
                    </li>
                    <li class="dropdown"> 
                      <a href="#" class="dropdown-toggle">
                        Informações Úteis <i class="ion-chevron-down"></i>
                      </a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle">
                        Sobre o Projeto <i class="ion-chevron-down"></i>
                      </a>
                    </li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <!-- end navbar-collapse --> 
          </div>

      </div>
    </div>
    
  </nav>
  <!-- end nav -->
</header>
<!-- end header -->