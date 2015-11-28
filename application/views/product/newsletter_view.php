<section class="about-us wow fadeInUp">
	<div class="container">
    	<div class="row">
        	<div class="col-xs-12 title-box">
            	<h2>Newsletter</h2>
            </div>
            <!-- end col-12 -->
            <div class="col-md-12 right-side">
                <?php if( ! $erro ):?>
                    <div class="alert alert-success" role="alert"><i class="fa fa-check"></i> <b>Parabens!</b> Seu e-mail foi cadastrado com sucesso, mas você ainda precisa confirmar a inscrição pelo seu email.</div>
                <?php else: ?>
                    <div class="alert alert-danger" role="alert"><i class="fa fa-ban"></i> <b>Ops!</b> Ocorreu um erro ao registrar seu e-mail.</div>
                <?php endif;?>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end about-us -->