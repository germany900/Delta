<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;



/* @var $this yii\web\View */
/* @var $model app\models\HistorialclinicoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="union1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'idHistorial') ?>

    <?= $form->field($model, 'ganado') ?>

    <?= $form->field($model, 'observacion') ?>

    <?= $form->field($model, 'ultimaRevision') ?>

    <?= $form->field($model, 'veterinario') ?>

    <?= $form->field($model, 'peso') ?>

  

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
