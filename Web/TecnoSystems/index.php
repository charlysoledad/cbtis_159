  <!-- Header -->
  <?php include_once('includes/templates/header.php'); ?>
  <!-- Contenido -->
  <?php #include_once('includes/templates/construct.php'); ?>

  <!-- Banner -->
  <?php include_once('includes/templates/slideshow.php'); ?>
  
  <?php require_once('includes/functions/XMLData.php'); 
        $i = 0;
  ?>

  <!-- Productos box -->
  <div class="productos-show">
    <div class="contenedor clearfix">
    <div id="box">
            <div id="box-heading">
               Destacados
            </div>
            <div id="box-content">
              <?php foreach($xmlDoc as $articulo) { 
                if($i < 4){
               ?>
                <div id="box-product">
                  <div>
                    <div class="image">
                      <a href="detalle.php?sku_product=<?php echo $xmlDoc->producto[$i]->sku; ?>">
                        <img src="<?php echo $xmlDoc->producto[$i]->imagen; ?>" alt="Producto">
                      </a>
                    </div>
                    <div class="name">
                    <a href="detalle.php?sku_product=<?php echo $xmlDoc->producto[$i]->sku; ?>">
                      <?php echo $xmlDoc->producto[$i]->nombre; ?>
                      </a>
                    </div>
                    <div class="sku">
                      <p>Sku: <?php echo $xmlDoc->producto[$i]->sku; ?></p>
                    </div>
                    <!--
                    <div class="description">
                      <p><?php #echo $xmlDoc->producto[$i]->descripcion; ?></p>
                    </div>
                    -->
                    <div class="price">
                      <!--<span class="price-old">$1,900&nbsp;mxn</span>-->
                      <span class="price"><?php echo $xmlDoc->producto[$i]->precio; ?></span>
                    </div>
                    <div class="boton">
                      <a href="#" class="button"><i class="fas fa-cart-plus"></i>&nbsp;Agregar al carrito</a>
                    </div>
                  </div>
                </div>
                <?php } $i++; } ?>
            </div>
        </div>
    </div>
  </div>
  <!-- .productos-show -->

  <!-- Nosotros-Info -->
  <div class="nosotros-box parallax">
    <div class="contenedor">
      <div class="contenido clearfix">
        <div class="nosotros-info">
            <h2>Nosotros</h2>
            <p class="text-content">
              En <b>Tecno Systems R.A.S</b> nos dedicamos a ofrecerle los mejores productos y servicios de calidad, 
              como lo son equipos de c&oacute;mputo pre-ensamblados, equipos personalizados, venta de hardware, mantenimiento
              y reparaci&oacute;n del equipo de c&oacute;mputo.
            </p>
            <a href="nosotros.php" class="button transparente">Más Información</a>
        </div>
        <!-- .nosotros-info -->
        <div class="nosotros-img">
            <img src="img/logo2.png" alt="logotipo">
        </div>
        <!-- .nosotros-img -->
      </div>
      <!-- .contenido -->
    </div>
    <!-- .contenedor -->
  </div>
  <!-- .nosotros-box -->

  <!--  -->
  <div class="servicios">
    <div class="contenedor clearfix">
      <h2>Servicios</h2>
      <div class="pc-personalizadas">
        <h2>Pc's Personalizadas</h2>
        <i class="fas fa-apple-alt"></i>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
          Veniam corrupti autem consequatur cum vero, debitis ipsum. Nemo ducimus incidunt impedit. 
          Velit natus ipsa vero adipisci provident impedit! Consectetur, veritatis asperiores!
        </p>
      </div>
      <div class="servicio-domicilio">
        <h2>Servicio a Domicilio</h2>
        <i class="fas fa-cart-plus"></i>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Sint sed fugiat minima nihil aliquam impedit culpa, ab repellendus explicabo nulla 
          nisi eum possimus provident omnis fuga a. Asperiores, dolor cumque?
        </p>
      </div>
      <div class="mejores-productos">
        <h2>Productos de calidad</h2>
        <i class="fas fa-address-book"></i>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Repellendus esse eligendi accusantium sunt sit porro debitis natus tempore dignissimos, 
          earum est incidunt, tempora voluptatem! Pariatur quia cum magnam unde saepe?
        </p>
      </div>
    </div>
  </div>
  <!--  -->
  
  <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Registrate al newsletter:</p>
        <h3>Tecno Systems R.A.S</h3>
        <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a>
      </div>
      <!--.contenido-->
  </div>
  <!--.newsletter-->
    
  <div class="separador-contacto"></div>
  <!-- Contacto-->
  <?php include_once('includes/templates/contact.php'); ?>
  <!-- Footer -->
  <?php include_once('includes/templates/footer.php'); ?>