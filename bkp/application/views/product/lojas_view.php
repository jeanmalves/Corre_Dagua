<section class="services wow fadeInUp">

	<div class="container">

		<div class="row">

	    	<div class="col-xs-12 title-box">

	        	<h2>Lojas</h2>

	            <h5></h5>	            

	        </div>

	        <!-- end col-12 -->

	        <p>&nbsp;</p>
	        <!-- end col-7 -->

	        <?php if (isset($data['lojas'])) { ?>

				<?php	foreach ($data['lojas'] as $key => $value) { ?>

						

						<div class="col-md-4 service loja">
							<?php $value->_ = trim( substr($value->_, 0, -2) ); ?>
							<h4><?php echo anchor('lojas/'.$value->id . '/' . url_title($value->_), $value->_); ?></h4>

						</div>



				<?php	} ?>

			<?php } ?>

	    </div>

	    <!-- end row -->

	</div>

</section>

<!-- end logos -->