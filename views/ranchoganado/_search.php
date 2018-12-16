<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RanchoganadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ranchoganado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idRanchoGanado') ?>

    <?= $form->field($model, 'ganado_capacidad') ?>

    <?= $form->field($model, 'rancho') ?>

    <?= $form->field($model, 'potrero') ?>

     <?= $form->field($model, 'encargado') ?> 

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
