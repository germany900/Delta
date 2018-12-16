<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Historialclinico */

$this->title = $model->idHistorial;
$this->params['breadcrumbs'][] = ['label' => 'Historialclinicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="union1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idHistorial], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idHistorial], [
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
            'idHistorial',
            'ganado',
            'observacion:ntext',
            'ultimaRevision',
            'veterinario',
            'peso',
          
            
        ],
    ]) ?>

</div>
