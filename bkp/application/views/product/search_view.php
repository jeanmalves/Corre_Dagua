<?php if (!isAjax()) : ?>
<section class="product-list wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 title-box">

        <h2><?php echo $site_title; ?></h2>
        <h5>Mostrando <?php echo $totals; ?> resultados</h5>
      </div>
      <!-- end col-12 -->
      <div class="col-md-3 left-sidebar" id="tagbox-search">
      	<?php echo form_open('buscar', array('id' => 'tagbox-form') ); ?>
	        <div class="keywords">
	          <h4 class="title">O QUE PROCURA?</h4>
	          <ul>
            	<li><?php echo form_input('q', $filters['q'], 'id="q"' ); ?></li>
	          </ul>
	        </div>
	        <!-- end keywords -->
	      	<?php if( isset($menu_filters['categories']) ):?>
	        <div class="categories">
	          <h4 class="title">CATEGORIAS</h4>
	          <ul>
	          	<?php foreach($menu_filters['categories'] as $c): ?>
	            	<li><a href="#"><?php echo $c->name;?></a></li>
	        	<?php endforeach; ?>
	          </ul>
	        </div>
	    	<?php endif; ?>
	        <!-- end categories -->
	        <div class="price-range">
	          <h4 class="title">FILTRO POR PREÇO</h4>
	          <input type="hidden" id="minPrice" name="minPrice" value="<?php echo $filters['minPrice']; ?>" />
	          <input type="hidden" id="maxPrice" name="maxPrice" value="<?php echo $filters['maxPrice']; ?>" />
	          <input type="text" id="amount" name="price" readonly>
	          <div id="slider-range"></div>
	        </div>
	        <button type="submit" id="tagbox-form-clean" class="site-button-dark"><span>Limpar</span></button>
	        <!-- end price-range -->
	      	<?php if( isset($menu_filters['colors']) ):?>
	        <div class="colors" id="colors">
	          <h4 class="title">CORES</h4>
	          <input type="hidden" id="color" name="color" value="<?php echo $filters['color']; ?>" />
	          <ul class="color-list">
	          	<?php foreach($menu_filters['colors'] as $k => $c): ?>
	            	<li data="<?php echo $k; ?>" id="color<?php echo $k; ?>"><span class="color<?php echo $k; ?>"></span></li>
	        	<?php endforeach; ?>
	          </ul>
	        </div>
	    	<?php endif; ?>
	        <!-- end colors -->
	      	<?php if( isset($menu_filters['sizes']) ):?>
	        <div class="sizes">
	          <h4 class="title">TAMANHOS</h4>
	          <ul>
	            <li>
	              <input type="checkbox">
	              <a href="#">S</a><span>(32)</span></li>
	            <li>
	              <input type="checkbox" checked>
	              <a href="#">M</a><span>(45)</span></li>
	            <li>
	              <input type="checkbox">
	              <a href="#">L</a> <span>(22)</span></li>
	            <li>
	              <input type="checkbox">
	              <a href="#">XL</a><span>(11)</span></li>
	            <li>
	              <input type="checkbox">
	              <a href="#">SM</a><span>(55)</span></li>
	            <li>
	              <input type="checkbox">
	              <a href="#">XXL</a><span>(67)</span></li>
	          </ul>
	        </div>
	        <!-- end sizes -->
	    	<?php endif; ?>
	      	<?php if( $menu_filters['brands'] ):?>
	        <div class="brands">
	          <h4 class="title">MARCAS</h4>
	          <div class="scroll">
		          <ul>
		          	<?php foreach($menu_filters['brands'] as $key => $b): ?>
		            <li>
		            	<?php $status = false; if( isset($filters['brands']) ): ?>
							<?php $status = in_array(url_title($b), $filters['brands']); ?>
						<?php endif; ?>
						<?php echo form_checkbox('brands[]', url_title($b), $status); ?>
		              	<?php echo anchor('marcas/'.url_title($b), $b);?></li>
		            <li>
		        	<?php endforeach; ?>
		          </ul>
	        	</div>
	        </div>
	        <!-- end brands --> 
	    	<?php endif; ?>
	    	<div class="brands">
	          	<h4 class="title">LOJAS</h4>
	          	<div class="scroll">
		          <ul>
		          	<?php
		          		foreach($menu_filters['lojas'] as $key => $b): ?>
		            <li>
		            	<?php $status = false;
		            	if( isset($filters['programId']) ): ?>
							<?php $status = in_array(url_title($b->id), $filters['programId']); ?>
						<?php endif; ?>
						<?php $b->_ = trim( substr($b->_, 0, -2) ); ?>
						<?php echo form_checkbox('programId[]', url_title($b->id), $status); ?>
		              	<?php echo $b->_;?>
		            </li>
		            <li>
		        	<?php endforeach; ?>
		          </ul>
	        	</div>
	        </div>
	    	<?php //echo form_hidden('programId', $filters['programId'], array('id' => 'programId') ); ?>
	        <input type="hidden" id="page" name="page" value="<?php echo $filters['page']; ?>" />
	        <button type="submit" id="tagbox-form-submit" class="site-button-dark"><span>Buscar</span></button>
    	<?php echo form_close(); ?>
      </div>
      <!-- end col-3 -->
      <div class="col-md-9">
        <div class="row spacing-row" id="tagbox-products-content">

<?php endif; ?>
        	<?php if( ! $products ): ?>
        		<div class="alert alert-warning clear" role="alert"><i class="fa fa-exclamation"></i> <b>Ops!</b> Nenhum resultado for encontrado com a busca "<?php echo $filters['q']; ?>" =(</div>
        	<?php else: ?>
	        	<?php foreach( $products as $p ): ?>
	        	<?php $p->merchantCategory = ( isset($p->merchantCategory) ) ? $p->merchantCategory : '' ; ?>
	          <div class="product-item col-md-4 col-sm-6 spacing">
	            <div class="product-box"> <span class="left-corner"></span> <span class="right-corner"></span>
	              <div class="product-image"><?php echo anchor('eu-quero/' . $p->id, img($p->image, FALSE, array('class' => 'product-thumb') ), array('target' => '_blank', 'class' => 'eu-quero-link')  ); ?>
	              </div>
	              <h4 class="product-name"><?php echo anchor('eu-quero/' . $p->id, $p->name, array('target' => '_blank') ); ?></h4>
	              <?php /*echo $p->merchantCategory;*/ ?>
	              <span class="product-category"><?php echo (isset($p->program) ) ? $p->program : ''; ?></span> <span class="product-price"><?php echo $p->price; //format_price($p->price); ?></span> <?php echo anchor('eu-quero/' . $p->id, '<span>Eu Quero!</span>', array('class' => 'eu-quero-link site-button-dark', 'target' => '_blank') ); ?> </div>
	          </div>
	          <!-- end col-4 -->
	        	<?php endforeach; ?>
	        <?php endif; ?>
<?php if (!isAjax()) : ?>

        </div>
        <!-- end row --> 
      </div>
    </div>
    <!-- end row --> 
  </div>
 <?php if( $products ): ?>
	 <div id="pagination">
	 	<?php echo anchor('buscar/' . $next_page, 'próxima', 'class="next"'); ?>
	</div>
 <?php endif; ?>
  <!-- end container --> 
</section>
<?php endif; ?>