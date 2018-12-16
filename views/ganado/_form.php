<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;


use app\models\raza;
use app\models\sexo;
use app\models\estatus;
use app\models\tipoganado;
use app\models\ganado;
use app\models\rancho;
use app\models\potrero;
use app\models\nombrer;
// print_r('<pre>');

// print_r($model); 
// print_r('<pre>');die();


/* @var $this yii\web\View */
/* @var $model app\models\Ganado */
/* @var $form yii\widgets\ActiveForm */
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



    <?php $form = ActiveForm::begin(); ?>


    <div class="ganado-form" style="width: 30%; margin: 0 auto; position: relative; left: -600px; top: 0px;">
    <?= $form->field($model, 'registro')->textInput() ?>
    </div>

    <div class="ganado-form" style="width: 15%; margin: 0 auto; position: relative; left: -740px; top: 5px;">
    <?= $form->field($model, 'procedencia')->textInput(['maxlength' => true]) ?>
    </div>

     <div class="ganado-form" style="width: 15%; margin: 0 auto; position: relative; left: -740px;">
    <?= $form->field($model, 'estatus')->textInput()->dropDownList(ArrayHelper::map(Estatus::find()->all(), 'idEstatus','descrip'),['prompt'=>'Selecciona una opción']); ?>
    </div>

     <div class="ganado-form" style="width: 15%; margin: 0 auto; position: relative; left: -740px; top: 70px;">
    <?= $form->field($model, 'rancho')->textInput()->dropDownList(ArrayHelper::map(Nombrer::find()->all(), 'idNombreR','nombre'),['prompt'=>'Selecciona una opción']); ?>
    </div>
     <div class="ganado-form" style="width: 15%; margin: 0 auto; position: relative; left: -740px; top: -10px;">
    <?= $form->field($model, 'siniiga')->hiddenInput(['value'=>'0'])->label(false)?>
    </div>

    <!--   <div class="ganado-form" style="width: 30%; margin: 0 auto; position: relative; left:-600px; top: 65px;">
    <?= $form->field($model, 'ubicacion')->textInput(['maxlength' => true]) ?>
    </div> -->

    <div class="ganado-form" style="width: 15%; margin: 0 auto; position: relative; left:-740px; top: -110px;">
    <?= $form->field($model, 'raza')->textInput()->dropDownList(ArrayHelper::map(Raza::find()->all(), 'idRaza','descrip'),['prompt'=>'Selecciona una opción']); ?>
    </div>

 <div class="ganado-form" style="width: 30%; margin: 0 auto; position: relative; left: -260px; top: -440px;">
        <?= $form->field($model, 'tipo')->textInput()->dropDownList(ArrayHelper::map(Tipoganado::find()->all(), 'idTipoGanado','descrip'),['prompt'=>'Selecciona una opción']); ?>
    </div>

    <div class="ganado-form" style="width: 15%; margin: 0 auto;">
    <?= $form->field($model,'tipo')->hiddenInput(['value'=>'1'])->label(false); ?>
    </div>

    <div class="ganado-form" style="width: 15%; margin: 0 auto; position: relative; left: -400px; top: -384px;">
    <?= $form->field($model, 'sexo')->textInput()->dropDownList(ArrayHelper::map(Sexo::find()->all(), 'idSexo','descrip'),['prompt'=>'Selecciona una opción']); ?>
    </div>

    <div class="ganado-form" style="width: 15%; margin: 0 auto; position: relative; left: -400px; top: -545px;">
        <?= $form->field($model, 'fechaNacimiento')->widget(DatePicker::classname(),[
        'options' => ['placeholder' => 'Ingrese la fecha...'],
        'pluginOptions' => [
            'language' => 'es',
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
            'todayHighlight' => true
        ]
        ]); ?>
   
    </div>

     <!-- <?= $form->field($model, 'siniiga')->textInput() ?> 
 -->
    



   

    <div class="ganado-form" style="width: 15%; margin: 0 auto; position: relative; left: -400px; top: -470px;">
    <?= $form->field($model, 'potrero')->textInput()->dropDownList(ArrayHelper::map(Potrero::find()->all(), 'idNumeroPotrero','pote'),['prompt'=>'Selecciona una opción']);?>
    </div>

  

    <div class="form-group" style="position: relative; left:55px; top: -280px;;">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


     <?php ActiveForm::end(); ?> 

   

    


</div>
