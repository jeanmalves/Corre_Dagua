<?php echo link_tag('assets/css/custom.css', 'stylesheet'); ?>
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 wow fadeInLeft">
        <?php echo form_open('pre-buscar', array('id' => 'home-form') ); ?>
          <input type="text" class="input-search col-md-11 col-sm-11 col-xs-10" name="q" id="q" placeholder="O que você procura?" autofocus="autofocus">
          <button type="submit" class="btn-search"><i class="ion-ios-search-strong icon-search"></i></button>
        </form>
      </div>  
    </div>
  </div>  
</section>

<section class="chamada-1">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 wow fadeInLeft"><h2 class="text2">Olha o que separamos <span>para você!</span></h3></div>
    </div>
  </div>
</section>      

<section class="category-sub-banners">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 wow fadeInLeft">
        <div class="banner-box"><img src="assets/images/black.png" alt="Mulher com roupa preta e branca segurando uma bolsa" title="Mulher com roupa preta e branca segurando uma bolsa" />
          <div class="overlay">
            <div class="table">
              <div>
                <h3><span>Black &</span> White</h3>
                <p>Para arrasar, MESMO!</p>
                <div class="clearfix"></div>
                <a href="mulheres/roupa-preta-e-branca" class="site-button-light"><span>COMPRE AGORA!</span></a> </div>
            </div>
            <!-- end table --> 
          </div>
          <!-- end overlay --> 
        </div>
        <!-- end banner-box --> 
      </div>
      <!-- end col-6 -->
      <div class="col-md-3 col-sm-6 wow fadeInUp">
        <div class="banner-box spacing"> <img src="assets/images/bolsa.png" alt="Bolsa">
          <div class="overlay">
            <div class="table">
              <div>
                <h3>Bolsas</h3>
                <a href="mulheres/bolsas" class="site-button-light"><span>COMPRE AGORA!</span></a> </div>
            </div>
            <!-- end table --> 
          </div>
          <!-- end overlay --> 
        </div>
        <!-- end banner-box -->
        <div class="banner-box"> <img src="assets/images/sapato.jpg" alt="Sapato">
          <div class="overlay">
            <div class="table">
              <div>
                <h3>Shoes</h3>
                <a href="mulheres/sapato-feminino" class="site-button-light"><span>COMPRE AGORA!</span></a> </div>
            </div>
            <!-- end table --> 
          </div>
          <!-- end overlay --> 
        </div>
        <!-- end banner-box --> 
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 wow fadeInRight">
        <div class="banner-box spacing"> <img src="assets/images/camisa.png" alt="Homem vestindo camisa e calça">
          <div class="overlay">
            <div class="table">
              <div>
                <h3>Camisas Masculinas</h3>
                <a href="homens/camisas-masculinas" class="site-button-light"><span>COMPRE AGORA!</span></a> </div>
            </div>
            <!-- end table --> 
          </div>
          <!-- end overlay --> 
        </div>
        <!-- end banner-box -->
        <div class="banner-box"> <img src="assets/images/camisa-fem.jpg" alt="Mulher vestindo camisa e calça">
          <div class="overlay">
            <div class="table">
              <div>
                <h3>Camisas Femininas</h3>
                <a href="mulheres/camisas-femininas" class="site-button-light"><span>COMPRE AGORA!</span></a> </div>
            </div>
            <!-- end table --> 
          </div>
          <!-- end overlay --> 
        </div>
        <!-- end banner-box --> 
      </div>
      <!-- end col-3 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end category-banners -->
<section class="chamada-1">
  <div class="container">
    <div class="row"></div>
      <div class="col-xs-12">
        <h2 class="text2">Ficou fácil encontrar <br><span>a roupa que você deseja!</span>
        </h2>
      </div>
  </div>
</section>
<!-- end chamada-1 -->
<section class="wow fadeInUp">
  <div class="container cols-wrapper cols-4" style="text-align: center;">
    <div class="row">
      <div class="col-md-4">
        <div class="milestone-container">
          <span class="milestone">+ </span>
          <span class="timer1 milestone"></span>
          <h3>Mil Produtos</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="milestone-container">
          <span class="timer2 milestone"></span>
          <h3>Marcas</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="milestone-container">
          <span class="timer3 milestone"></span>
          <h3>Lojas</h3>
        </div>
      </div>
    </div>  
  </div>
</section>

<section class="logos wow fadeInUp">
  <div class="container">
    <div class="row">
      <h2 class="text-center">LOGOS</h2>
      <?php foreach( $logos as $logo ): ?>
        <div class="col-md-2 col-sm-4 col-xs-6"> <?php echo img($logo);?> </div>
      <?php endforeach; ?>
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end logos -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
  (function($) {
  $.fn.countTo = function(options) {
    // merge the default plugin settings with the custom options
    options = $.extend({}, $.fn.countTo.defaults, options || {});
    // how many times to update the value, and how much to increment the value on each update
    var loops = Math.ceil(options.speed / options.refreshInterval),
    increment = (options.to - options.from) / loops;

    return $(this).each(function() {
      var _this = this,
      loopCount = 0,
      value = options.from,
      interval = setInterval(updateTimer, options.refreshInterval);

      function updateTimer() {
        value += increment;
        loopCount++;
        $(_this).html(value.toFixed(options.decimals));

        if (typeof(options.onUpdate) == 'function') {
          options.onUpdate.call(_this, value);
        }

        if (loopCount >= loops) {
          clearInterval(interval);
          value = options.to;

          if (typeof(options.onComplete) == 'function') {
            options.onComplete.call(_this, value);
          }
        }
      }
    });
  };

  $.fn.countTo.defaults = {
    from: 0,        // the number the element should start at
    to: 100,        // the number the element should end at
    speed: 1000,      // how long it should take to count between the target numbers
    refreshInterval: 100, // how often the element should be updated
    decimals: 0,      // the number of decimal places to show
    onUpdate: null,     // callback method for every time the element is updated,
    onComplete: null,   // callback method for when the element finishes updating
  };
  
})(jQuery);


function isViewed(selector) {

  var viewport = $(window),
  item = $(selector);

  var viewTop = viewport.scrollTop(),
    viewBtm = viewport.scrollTop() + viewport.height(),
    itemTop = item.offset().top,
    itemBtm = item.offset().top + item.height();

  return ((itemTop < viewBtm) && (itemTop > viewTop));
  };

  var counter = setInterval(function() {countdown()}, 500);

var countdown = function() {
  var random1 = 400;//Math.floor(Math.random()*(343-14+1)) + 14;
  var random2 = 650;//Math.floor(Math.random()*(5891-5627+1)) + 5627;
  var random3 = 40;//Math.floor(Math.random()*(686-28+1)) + 28;
  //var random4 = Math.floor(Math.random()*(5627-4872+1)) + 4872;
  if(isViewed('.milestone')) {
    clearInterval(counter);
    $('.timer1').countTo({
      from: 0,
      to: random1,
      speed: 1000,
      refreshInterval: 20,
    });
    $('.timer2').countTo({
      from: 0,
      to: random2,
      speed: 1000,
      refreshInterval: 20,
    });
    $('.timer3').countTo({
      from: 0,
      to: random3,
      speed: 1000,
      refreshInterval: 20,
    });
    // $('.timer4').countTo({
    //   from: 0,
    //   to: random4,
    //   speed: 1000,
    //   refreshInterval: 20,
    // });
  };
} 
</script>
