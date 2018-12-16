<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\GanadoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

/*$this->title = 'Ganados';
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
<div class="ganado-index" style="width: 70%; margin: 0 auto;">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 
    <p>
        <?= Html::a('Alta de Ganado', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Regresar', Yii::$app->request->referrer, ['class' => 'btn btn-primary', 'style' => 'background-color: #21D72D; border-color: #11C548']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'idGanado',
            ['format'=>'raw','attribute'=>'Raz','label'=>'Raza',
            ],
            //'tipo',
            //'sexo',
            ['format'=>'raw','attribute'=>'Sex','label'=>'Sexo',
            ],
            'fechaNacimiento',
            ['format'=>'raw','attribute'=>'Est','label'=>'Estatus',
            ],
            //'estatus',
            'procedencia',
            'registro',
            'siniiga',
            //'raza',
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
