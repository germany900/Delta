<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Historialclinico */

$this->title = 'Nuevo Historial clinico';
$this->params['breadcrumbs'][] = ['label' => 'Historialclinicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="union1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
