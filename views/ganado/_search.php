<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GanadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ganado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idGanado') ?>

    <?= $form->field($model, 'tipo') ?>

    <?= $form->field($model, 'sexo') ?>

    <?= $form->field($model, 'fechaNacimiento') ?>

    <?= $form->field($model, 'estatus') ?>

    <?php  echo $form->field($model, 'procedencia') ?>

    <?php  echo $form->field($model, 'registro') ?>

   

    <?php  echo $form->field($model, 'raza') ?>

    

    <?= $form->field($model, 'rancho') ?>

    <?= $form->field($model, 'potrero') ?>

     <?= $form->field($model, 'ubicacion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
