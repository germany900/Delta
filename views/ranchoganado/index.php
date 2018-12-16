<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\RanchoganadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ranchos'
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
<div class="ranchoganado-index" style="width: 50%; margin: 0 auto; position: relative; left: -100px; top: 0px;">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ingrese Nuevo Rancho', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idRanchoGanado',
            'ganado_capacidad',
            ['format'=>'raw','attribute'=>'GanTip','label'=>'Tipo',
            ],
            // ['format'=>'raw','attribute'=>'Gan','label'=>'Siniiga',
            // ],
            ['format'=>'raw','attribute'=>'GanSex','label'=>'Sexo',
            ],
            ['format'=>'raw','attribute'=>'GanEst','label'=>'Estatus',
            ],
            ['format'=>'raw','attribute'=>'Ran','label'=>'Rancho',
            ],
            // 'rancho',
            'potrero',
            'encargado',
            'capacidad',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
