<?php include_once('includes/templates/header.php') ?>

<?php include_once('includes/functions/XMLData.php');
      $i = 0; $c = 0;?>

<div class="carrito-contenedor">
    <div class="contenedor clearfix">
        <div class="carrito-contenido">
            <h2>Carrito de compras</h2>
            <div class="producto-carrito">
                <?php  
                $iva = 0;
                $total = 0;
                $subtotal = 0;#echo "<pre>"; #var_dump($carrito); #echo "</pre>";
                if(sizeof($carrito) > 0){ 
                    echo "<table class=\"productos-list\">";
                }else{
                    echo "<table class=\"productos-list hidden\">";
                }
                ?>
                    <thead>
                        <tr>
                            <th>Borrar</th>
                            <th>Artículo</th>
                            <th>Precio Uni.</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($xmlDoc as $articulo) { 
                            $sku = $xmlDoc->producto[$i]->sku;

                            $price_txt = $xmlDoc->producto[$i]->precio;
                            $price = str_replace("$ ","",$price_txt);
                            if(in_array($sku, $carrito)){
                                $occurences = array_count_values($carrito);
                                #print_r($occurences);
                        ?>
                        <tr id="<?php echo $c ?>" >
                            <td>
                                <form action="includes/functions/carrito_fun.php" method="POST" name="borrar-carrito" id="borrar-carrito">
                                    <input type="hidden" name="id_key" value="<?php echo $sku ?>">
                                    <input type="hidden" name="index" value="<?php echo $c ?>">
                                    <input type="hidden" name="carrito_type" value="borrar">
                                    <!--<p><?php #echo $c; ?></p>-->
                                    <button type="submit" class="delete_button"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            <td>
                                <div class="image">
                                    <a href="detalle.php?sku_product=<?php echo $sku ?>">
                                        <img src="<?php echo $xmlDoc->producto[$i]->imagen ?> " alt="Producto">
                                    </a>
                                </div>
                                <div class="desc">
                                    <div class="name">
                                        <a href="detalle.php?sku_product=<?php echo $sku ?>">
                                            <?php echo $xmlDoc->producto[$i]->nombre ?> 
                                        </a>
                                    </div>
                                    <div class="sku">
                                        <p>Sku: <?php echo $xmlDoc->producto[$i]->sku ?> </p>
                                    </div>
                                </div>
                            </td>
                            <td> $ <?php echo (floatval($price)) ?>  </td>
                            <td><input type="number" value="<?php echo $occurences[''.$sku.'']; ?>" min="1"></td>
                            <td>$ <?php echo ((float)($price * $occurences[''.$sku.''])); ?></td>
                            <?php 
                                $subtotal = $subtotal + ($price * $occurences[''.$sku.'']); 
                                $iva = $iva + (($price * 0.16) * $occurences[''.$sku.'']) ;
                            ?>
                        </tr>
                            <?php $c++; }?>
                          <?php $i++; ?>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Productos: <?php echo count($carrito); ?></td>
                            <td>Subtotal: $<?php echo $subtotal; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Iva: $<?php echo ($iva); ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total: $
                            <?php $total = $subtotal + $iva; 
                            echo $total; ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href="#" class="button">Pagar</a></td>
                        </tr>
                    </tfoot>
                </table>
                <?php  if(sizeof($carrito) == 0){
                    echo "<div class=\"no-productos visible\">";
                    } else{
                        echo "<div class=\"no-productos hidden\">"; 
                    }?>
                        <h3>A&uacute;n no tienes productos en tu carrito</h3>
                        <p>Que esperas, ve a <a href="catalogo.php">Cat&aacute;logo</a> para comprar productos!</p>
                    </div>
                <?php  ?>
            </div>
        </div>
    </div>
</div>


<div class="separador-contacto"></div>
<?php include_once('includes/templates/contact.php') ?>
<?php include_once('includes/templates/footer.php') ?>