<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Categorias Disponibles';
?>
<h1>Listado de Categorias</h1>

<div class="body-content">
  <div class="row">
    <div class="collapse in">
      <?php
          foreach($Productos_disponibles as $Productos_disponible){
      ?>
      <section id="producto<?php echo $Productos_disponible['nombre']; ?>" class="row">
        <div class="row no-gutter">
          <div class="list-group-item col-lg-1 btn">
            <?php echo $Productos_disponible['codigo']; ?>
          </div>
          <div class="list-group-item col-lg-3 btn">
            <?php echo $Productos_disponible['nombre']; ?>
          </div>
          <div class="list-group-item col-lg-1 btn">
            <?php echo Html::a('Eliminar', ['/categorias/eliminar-categoria', 'codigo_categoria' => $Productos_disponible['codigo']], ['class'=>'']); ?>
          </div>
        </div>
      </section>
      <?php } // foreach ?>
    </div>
  </div>
</div>
