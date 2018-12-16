<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ranchoganado */

$this->title = 'Nuevo Registro';
/*$this->params['breadcrumbs'][] = ['label' => 'Ranchoganados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="page-title fondo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php  echo "<h1 class='title-01__subTitle'>Bienvenido "."<b style='color: #e19a1c; font-style: italic'>".Yii::$app->user->identity->username."</b>". "</h1>" ?>
                </div>
            </div>
        </div>
    </div><!-- End / page-title -->
<div class="ranchoganado-create" style="width: 70%; margin: 0 auto;">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
