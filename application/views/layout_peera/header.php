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
<?php echo link_tag('assets/css/jquery-ui.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/bootstrap.min.css', 'stylesheet'); ?>
<?php echo link_tag('assets/css/style.css', 'stylesheet'); ?>
<?php //echo link_tag('assets/css/custom.css', 'stylesheet'); ?>

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
      <div class="">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                
                  MENU
                  <!--   <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span> -->
              </button>
             <!--  <a class="navbar-brand" href="/">  <?php //echo img('assets/images/logo.jpg', 'alt="Corre Dágua"'); ?></a> -->
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
          <div class="container">
            <div class="row">
              <div id="logo" style="">
                <?php echo img('assets/images/logo.jpg', 'alt="Corre Dágua"'); ?>
              </div>  
            </div>
          </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p id="texto-home">
          Qual o risco de alagamento você está correndo em Curitiba?
        </p>  
        <p id="texto-busca">Busque o seu bairro e descubra</p>        
      </div>
      <div class="col-xs-12 select-home">
        <form action="">
          <div class="col-xs-12">
            <select class="form-control input-sm ">
              <option value="" selected>SELECIONE</option>
              <option value="AHU">AGUA VERDE</option>
              <option value="AHU">AHU</option>
              <option value="BACACHERI">BACACHERI</option>
              <option value="BATEL">BATEL</option>
              <option value="BOA VISTA">BOA VISTA</option>
              <option value="BOQUEIRAO">BOQUEIRAO</option>
              <option value="CAJURU">CAJURU</option>
              <option value="CAMPO COMPRIDO">CAMPO COMPRIDO</option>
              <option value="CAMPO DE SANTANA">CAMPO DE SANTANA</option>
              <option value="CAPAO DA IMBUIA">CAPAO DA IMBUIA</option>
              <option value="CIDADE INDUSTRIAL">CIDADE INDUSTRIAL</option>
              <option value="CRISTO REI">CRISTO REI</option>
              <option value="FANNY">FANNY</option>
              <option value="FAZENDINHA">FAZENDINHA</option>
            </select>
          </div>  
          <div class="col-xs-12">
            <input type="submit" id="buscar" value="Buscar">
          </div>  
        </form>  
      </div>
    </div>
  </div>  
</header>
<!-- end header -->