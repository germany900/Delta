<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ganado */

   $this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Ganados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idGanado, 'url' => ['view', 'id' => $model->idGanado]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ganado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
