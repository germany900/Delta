<?php

use yii\helpers\Html;



/* @var $this yii\web\View */
/* @var $model app\models\Ganado */

$this->title = 'Alta de Ganado';
//$this->params['breadcrumbs'][] = ['label' => 'Ganados', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ganado-create">

   <!--  <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
