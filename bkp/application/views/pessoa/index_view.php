<div class="container">
    <div class="row">
      <div class="col-md-12">
        <p id="">
          Qual o risco de alagamento você está correndo em Curitiba?
        </p>  
        <p id="">Busque o seu bairro e descubra</p>        
      </div>
    </div>
    <div class="row">
    	<div class="col-md-8">
        
        <?php echo form_open('consultar'); ?>
          <div class="col-xs-8">
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
          <div class="col-xs-2">
            <input type="submit" id="buscar" value="Buscar">
          </div>  
        </form>  
      </div>
    </div>
  </div>