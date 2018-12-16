<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ranchoganado */

$this->title = $model->idRanchoGanado;
$this->params['breadcrumbs'][] = ['label' => 'Ranchoganados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ranchoganado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idRanchoGanado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idRanchoGanado], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idRanchoGanado',
            'ubicacion_original',
            // 'ganado_capacidad',
            // 'rancho',
            'potrero',
            'encargado',
            'capacidad',

        ],
    ]) ?>

</div>
