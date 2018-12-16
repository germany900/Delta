<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
    

/* @var $this yii\web\View */
/* @var $model app\models\Ganado */

/*$this->title = $model->idGanado;
$this->params['breadcrumbs'][] = ['label' => 'Ganados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="ganado-view">
    
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idGanado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idGanado], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro que desea eliminar este dato?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idGanado',
            'tipo',
            'sexo',
            'fechaNacimiento',
            'estatus',
            'procedencia',
            'registro',
            // 'siniiga',
            'raza',
            // 'ganado',
            'rancho',
            'potrero',
            // 'ubicacion',
            
        ],
    ]) ?>

</div>
