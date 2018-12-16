<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ranchoganado */

/*$this->title = 'Update Ranchoganado: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Ranchoganados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idRanchoGanado, 'url' => ['view', 'id' => $model->idRanchoGanado]];
$this->params['breadcrumbs'][] = 'Update';*/
?>
<div class="ranchoganado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
