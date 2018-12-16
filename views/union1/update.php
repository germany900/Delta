<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Historialclinico */

$this->title = 'Update Historialclinico: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Historialclinicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idHistorial, 'url' => ['view', 'id' => $model->idHistorial]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="union1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
