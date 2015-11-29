<div class="container">
    <div class="row">

      <div class="col-md-12">
      	<h4>Informe seus dados caso esteja interessado em receber alertas </h4>
      	<?php echo form_open('pessoa/alertar'); ?>
      		<div class="form-group col-md-8">
		   	 <label for="bairro">Bairro:</label>
		  	  <input type="input" class="form-control" id="bairro" placeholder="insira o bairro">
		  	</div>
		  	<div class="form-group col-md-8">
		   	 <label for="telefone">Telefone:</label>
		  	  <input type="input" class="form-control" id="telefone" placeholder="insira o telefone">
		  	</div>
		  	<div class="form-group col-md-8">
		   	 <label for="email">Email:</label>
		  	  <input type="email" class="form-control" id="email" placeholder="insira o email">
		  	</div>
		  	<div class="form-group col-md-8">
		  	  	<button type="button" class="btn btn-primary" style="">Consultar</button>
		  	</div>

		</form>  	
      </div>
    </div>
</div>