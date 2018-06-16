

<!-- MOBILE HEADER -->
<div id="mobile-header">
    <a id="responsive-menu-button" href="#sidr-main">Menu</a>
</div>
 
<div id="navigation">
    <nav class="nav">
        <ul>
            <li><a href="#download">Download</a></li>
            <li><a href="#getstarted">Get started</a></li>
            <li><a href="#usage">Demos &amp; Usage</a></li>
            <li><a href="#documentation">Documentation</a></li>
            <li><a href="#themes">Themes</a></li>
            <li><a href="#support">Support</a></li>
        </ul>
    </nav>
</div>
 
<script>
    $('#responsive-menu-button').sidr({
      name: 'sidr-main',
      source: '#navigation'
    });
</script>


<div class="container-fluid topo">
  <div class="container">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-4">
      <a href="index.php"><img src="img/logo.png" height="73" width="258" alt="Image"></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8 clearfix">

      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-5 pull-right nopd">
        <div class="googleSearch pull-right">
          <?php include_once('inc/googleSearch.php'); ?>
        </div>
      </div>


      <div class="hidden-xs hidden-sm col-md-12 col-lg-12 nopd">
        <div class="navbar navbar-custom">
          <ul class="nav navbar-nav pull-right">
            <li class="active">
              <a href="#">HOME</a>
            </li>
            <li>
              <a href="#">EMPRESA</a>
            </li>
            <li>
              <a href="#">PRODUTOS</a>
            </li>
            <li>
              <a href="#">SERVIÇOS</a>
            </li>
            <li>
              <a href="#">CONTATO</a>
            </li>
          </ul>
        </div>

      </div>

    </div>
  </div>
</div>


