  <!-- Header -->
  <?php include_once('includes/templates/header.php'); ?>
  <!-- Contenido -->

  <?php require_once('includes/functions/XMLData.php'); 
        $i = 0;
  ?>

  <div class="catalogo">
    <div class="contenedor clearfix">
      <h2>Cat&aacute;logo</h2>
    <div class="filtros">
        <label for="categorias">Categoria</label>
          <select name="categorias" id="categorias">
            <option value="todo">Todo</option>
            <option value="Pantallas">Pantallas</option>
            <option value="Gabinetes">Gabinetes</option>
            <option value="TarjetasGraficas">Tarjetas Gráficas</option>
            <option value="TarjetasMadre">Tarjetas Madre</option>
            <option value="DiscosDuros">Discos Duros</option>
          </select>
          <label for="size">Cantidad</label>
          <select name="size" id="size">
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
          </select>
          <button type="button" name="filtrar" id="btn_filtrar" class="filtrar">Filtrar</button>
      </div>
    <div id="box">
            <div id="box-heading">
               Todo
            </div>
            <div id="box-content">
              <?php foreach($xmlDoc as $articulo) { 
               ?>
                <div id="box-product">
                  <div>
                  <form action="includes/functions/carrito_fun.php" method="POST" name="agregar-carrito" id="agregar-carrito">
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
                    <div class="price">
                      <!--<span class="price-old">$1,900&nbsp;mxn</span>-->
                      <span class="price">$<?php echo $xmlDoc->producto[$i]->precio; ?>&nbsp;mxn</span>
                    </div>
                    <div class="boton">
                        <input type="hidden" name="sku_product" value="<?php echo $xmlDoc->producto[$i]->sku ?>">
                        <input type="hidden" name="carrito_type" value="add">
                        <button type="submit" name="btnAnadir" id="btnAnadir" class="button"><i class="fas fa-cart-plus"></i>&nbsp;Agregar al carrito</button>
                    </div>
                  </form>
                  </div>
                </div>
                <!-- .box-product -->
              <?php $i++; } ?>
            </div>
            <!-- .box-content -->
      </div>
    </div>
  </div>
  
  <!--
  <div class="separador-contacto"></div>
-->
  <!-- Contacto-->
  <?php #include_once('includes/templates/contact.php'); ?>
  <!-- Footer -->
  <?php include_once('includes/templates/footer.php'); ?>