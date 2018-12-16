<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use  yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

use app\models\ganado;
use app\models\veterinario;
use app\models\pesaje;
use app\models\empadre;

/* @var $this yii\web\View */
/* @var $model app\models\Historialclinico */
/* @var $form yii\widgets\ActiveForm */
?>



    <?php $form = ActiveForm::begin(); ?>
    
    <div class="union1-form" style="width: 15%; margin: 0 auto; position: relative; left: -800px; top: 0px;>
    <?= $form->field($model, 'ganado')->textInput()->dropDownList(ArrayHelper::map(ganado::find()->all(), 'idGanado','idGanado'),['prompt'=>'Selecciona una opción']); ?>

</div>

        <div class="union1-form" style="width: 15%; margin: 0 auto; position: relative; left: -800px; top: 0px;>
    
    <?= $form->field($model, 'ultimaRevision')->widget(DatePicker::classname(),[
        'options' => ['placeholder' => 'Ingrese la fecha...'],
        'pluginOptions' => [
            'language' => 'es',
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
            'todayHighlight' => true
        ]
        ]); ?>
</div>
<div class="union1-form" style="width: 15%; margin: 0 auto; position: relative; left: -800px; top: 0px;>
    <?= $form->field($model, 'veterinario')->dropDownList(ArrayHelper::map(veterinario::find()->all(), 'idVeterinario','user'),['prompt'=>'Selecciona una opción']); ?>
</div>
<div class="union1-form" style="width: 15%; margin: 0 auto; position: relative; left: -800px; top: 0px;>
    <?= $form->field($model, 'peso')->textInput() ?>
</div>

 
<div class="union1-form" style="width: 30%; margin: 0 auto; position: relative; left: -650px; top: 0px;>
    <?= $form->field($model, 'observacion')->textarea(['rows' => 6]) ?>
</div>

  
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


