<?php require_once('includes/templates/header.php'); ?>

<?php $sku_product = $_GET['sku_product']; ?>

<?php require_once('includes/functions/XMLData.php'); 
        $i = 0;
?>

<div class="producto">
    <div class="contenedor clearfix">
    <?php foreach($xmlDoc as $articulo) {  

        if($xmlDoc->producto[$i]->sku == $sku_product){
            #echo "Articulo en la lisa";
            ?>
        <div class="producto-content">
            <div class="producto-imagen">
                <img src="<?php echo $xmlDoc->producto[$i]->imagen; ?>" alt="">
            </div>
            <div class="producto-mas">
                <div class="producto-nombre">
                    <p><?php echo $xmlDoc->producto[$i]->nombre; ?></p>
                </div>
                <div class="producto-precio">
                    
                <?php if($xmlDoc->producto[$i]->dcto == "no"){
                     echo '<span class="precio">'.$xmlDoc->producto[$i]->precio.'</span>';
                }
                else
                {
                    echo '<span class="precio-old">'.$xmlDoc->producto[$i]->precio.'</span>';
                    echo '<br>';
                    echo '<span class="precio-new">$ 3,464.25</span>';
                    echo '<span class="descuento">&nbsp;25% OFF</span>';
                } ?>
                </div>
                <div class="producto-datos">
                    <div class="pago">
                        <p>
                            <i class="far fa-credit-card"></i>&nbsp;12 meses de $ 288<sup>69</sup><br>
                            <img src="img/pagos.png" alt="métodos de pago">
                        </p>
                    </div>
                    <div class="envio">
                        <p>
                            <i class="fas fa-truck"></i>&nbsp;Envío gratis a todo el pa&iacute;s
                            <br>
                            <span>Conoce los tiempos y las formas de env&iacute;o</span>
                        </p>
                    </div>
                    <br>
                    <div class="cantidad">
                        <label for="cantidad_producto">Cantidad:</label>
                        <input type="number" name="cantidad_producto" id="cantidad_producto" max="15" min="1" value="1">
                        <span>(16 disponibles)</span>
                    </div>
                    <br>
                    <div class="botones">
                        <button type="submit" class="button" >Comprar ahora</button>
                        <button type="submit" class="button transparente">Agregar al carrito</button>
                    </div>
                </div>
            </div>
            <div class="producto-informacion">
                <nav>
                    <a href="#descripcion">Descripci&oacute;n</a>
                    <a href="#caracteristicas">Caracter&iacute;sticas</a>
                </nav>
                <div class="informacion clearfix">
                    <div class="" id="descripcion">
                        <p><?php echo $xmlDoc->producto[$i]->descripcion; ?></p>
                    </div>
                    <div class="" id="caracteristicas">
                    <p><?php echo $xmlDoc->producto[$i]->caracteristicas; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php
        }
        $i++;
    } ?>
    </div>
</div>

<?php require_once('includes/templates/footer.php'); ?>