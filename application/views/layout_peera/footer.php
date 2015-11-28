<footer>
  <div class="container wow fadeIn">
    <div class="row">
      <div class="col-md-2 col-sm-4">
        <h4>SHOP PARA ELAS</h4>
        <nav class="footer-menu">
          <ul>
            <li><?php echo anchor('mulheres/'.urlencode('vestido-preto'), 'VESTIDO PRETO'); ?></li>
            <li><?php echo anchor('mulheres/'.urlencode('calça-flare'), 'CALÇA FLARE'); ?></li>
            <li><?php echo anchor('mulheres/'.urlencode('saia'), 'SAIA'); ?></li>
            <li><?php echo anchor('mulheres/'.urlencode('blusa-lanca-perfume'), 'BLUSA LANÇA PERFUME'); ?></li>
          </ul>
        </nav>
      </div>
      <!-- end col-2 -->
      <div class="col-md-3 col-sm-4">
        <h4>SHOP PARA ELES</h4>
        <nav class="footer-menu">
          <ul>
            <li><?php echo anchor('homens/'.urlencode('camisa-polo'), 'CAMISA POLO'); ?></li>
            <li><?php echo anchor('homens/'.urlencode('calça-jeans-masculina'), 'CALÇA JEANS'); ?></li>
            <li><?php echo anchor('homens/'.urlencode('boné-nike'), 'BONÉ NIKE'); ?></li>
            <li><?php echo anchor('homens/'.urlencode('camiseta-calvin-klein'), 'CAMISETA CALVIN KLEIN'); ?></li>
          </ul>
        </nav>
      </div>
      <!-- end col-2 -->
      <div class="col-md-4 col-sm-10 col-xs-12">
        <h4>SOBRE O TAG</h4>
        <p class="about-intro">O Tagbox é um Shopping de moda online. Aqui você encontrar o que procura da forma mais rápida...</p>
        <?php echo anchor('pagina/sobre-nos', 'Leia Mais'); ?>
        <ul class="social-media">
          <li><a href="http://fb.com/TagBox" target="blank"><i class="ion-social-facebook"></i></a></li>
          <li><a href="https://twitter.com/_tagbox" target="blank"><i class="ion-social-twitter"></i></a></li>
          <li><a href="https://plus.google.com/+TagboxBrapp" target="blank"><i class="ion-social-googleplus"></i></a></li>
        </ul>
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <h4>MAIS MODA PARA VOCÊ</h4>
        <p>Receba informações sobre moda, produtos e promoções.
        <div class="email_newsletter">  
          <?php echo form_open('newsletter', 'id="newsletterForm" class="newsletter"') ?>
            <input type="text" placeholder="Digite seu e-mail" name="email_newsletter" id="email_newsletter" value="<?php echo (empty($q)) ? '' : $q ?>" /></div>
            <button class="site-button-dark" type="submit"><span>Inscrever</span></button>
          </form>
        </div>  
      </div>
      <!-- end col-3 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-6"> <span class="notice">* O tagbox não é uma loja virtual, qualquer dúvida em relação aos produtos, entre em contato com a loja responsável para obter maiores informações.</span> </div>
        <div class="col-md-12 col-sm-6"> <span class="notice"> &nbsp</div>
        <div class="col-md-6 col-sm-3">
          <span class="copyright">
            Copyright ©  - TagBox Todos os direitos reservados.
          </span>
        </div>
        <div class="col-md-6 col-sm-9">
          <nav>
            <ul>
              <li><?php echo anchor('pagina/politica-de-privacidade', 'Política de Privacidade'); ?></li>
              <li><?php echo anchor('pagina/termos-de-uso', 'Termos de Uso'); ?></li>
              <li><?php echo anchor('pagina/sobre-nos', 'Sobre o TagBox'); ?></li>
            </ul>
          </nav>
          <!-- end col-3 -->
        </div>
        <!-- end row --> 
      </div>
      <!-- end container -->
    </div>
  </div>    
</footer>
    <!-- end footer --> 
    <!-- JQUERY FILES --> 
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script> 
    <script type="text/javascript">
      (function($) {
      	$(window).load(function(){
      		$(".loading").addClass("loading-dissapear");
      	});
        ci_uriaction = '<?php echo $uriaction; ?>';
        ci_action = '<?php echo $action; ?>';
      })(jQuery)
    </script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js"></script> 
    <script src='<?php echo base_url(); ?>assets/js/jquery.themepunch.tools.min.js' type='text/javascript' ></script> 
    <script src='<?php echo base_url(); ?>assets/js/jquery.themepunch.revolution.js' type='text/javascript' ></script> 
    <script src='<?php echo base_url(); ?>assets/js/settings.js' type='text/javascript' ></script> 
    <script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/masonry.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.stellar.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/wow.js"></script> 
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62261619-1', 'auto');
  ga('send', 'pageview');

</script>

  </body>
</html>