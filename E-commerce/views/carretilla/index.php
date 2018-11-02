<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Carretilla';
?>
<h1>Mi carretilla de productos</h1>

<div class="body-content">
  <div class="row">
    <div class="collapse in">
      <?php
          foreach($Productos_comprados as $Productos_comprado){
      ?>
      <section id="producto<?php echo $Productos_comprado['nombre']; ?>" class="row">
        <div class="row no-gutter">
          <div class="list-group-item col-lg-1 btn">
            <?php echo $Productos_comprado['codigo']; ?>
          </div>
          <div class="list-group-item col-lg-3 btn">
            <?php echo $Productos_comprado['nombre']; ?>
          </div>
          <div class="list-group-item col-lg-5 ">
            <?php echo $Productos_comprado['descripcion']; ?>
          </div>
          <div class="list-group-item col-lg-1 btn">
            <?php echo $Productos_comprado['precio']; ?>
          </div>
          <div class="list-group-item col-lg-1 btn">
            <?php echo Html::a('Quitar de carrito', ['/carretilla/quitar-compra', 'codigo_producto' => $Productos_comprado['codigo']], ['class'=>'','name'=>$Productos_comprado['nombre']]); ?>
          </div>
        </div>
      </section>
      <?php } // foreach ?>
      <section id="Total" class="row">
        <div class="row no-gutter">
          <div class="list-group-item col-lg-1 btn">

          </div>
          <div class="list-group-item col-lg-3 btn">

          </div>
          <div class="list-group-item col-lg-5 ">
            Total a pagar:
          </div>
          <div class="list-group-item col-lg-1 btn">
            <?php echo $total_gastado; ?>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
