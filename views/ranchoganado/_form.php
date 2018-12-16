<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ranchoganado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ranchoganado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ubicacion')->textInput() ?> 

   <!--   <?= $form->field($model, 'rancho')->textInput() ?> -->

   <?= $form->field($model, 'ubicacion_original')->textInput() ?>

     <?= $form->field($model, 'rancho')->hiddenInput(['value'=>'1'])->label(false)?>

    <?= $form->field($model, 'capacidad')->textInput() ?>
<!-- 
   <?= $form->field($model, 'ganado_capacidad')->textInput() ?>  -->

	 <?= $form->field($model, 'ganado_capacidad')->hiddenInput(['value'=>'10'])->label(false)?>

   <?= $form->field($model, 'encargado')->textInput() ?> 

   <?= $form->field($model, 'potrero')->textInput() ?>

    <div class="form-group">
           <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
