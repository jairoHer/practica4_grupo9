<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Agregar';
?>
<h1>Agregar Categoria</h1>

<div class="body-content">
  <div class="row">
    <div class="collapse in">
      <section class="row">
        <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'nombre') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
      </section>
    </div>
  </div>
</div>
