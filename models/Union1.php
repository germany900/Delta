<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historialclinico".
 *
 * @property int $idHistorial
 * @property int $ganado
 * @property string $observacion
 * @property string $ultimaRevision
 * @property int $veterinario
 *
 * @property Ganado $ganado0
 * @property Veterinario $veterinario0
 */
class Union1 extends \yii\db\ActiveRecord   
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historialclinico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ganado', 'ultimaRevision', 'veterinario', 'peso'], 'required'],
            [['ganado',  'veterinario'], 'integer'],
            [['observacion'], 'string'],
            [['ultimaRevision'], 'safe'],
            [['ganado'], 'exist', 'skipOnError' => true, 'targetClass' => Ganado::className(), 'targetAttribute' => ['ganado' => 'idGanado']],
        
            [['veterinario'], 'exist', 'skipOnError' => true, 'targetClass' => Veterinario::className(), 'targetAttribute' => ['veterinario' => 'idVeterinario']],
           
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idHistorial' => 'Id Historial',
            'ganado' => 'Ganado',
            'observacion' => 'Observacion',
            'ultimaRevision' => 'Ultima Revision',
            'veterinario' => 'Veterinario',
            'peso' => 'Peso',
           
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGanado0()
    {
        return $this->hasOne(Ganado::className(), ['idGanado' => 'ganado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVeterinario0()
    {
        return $this->hasOne(Veterinario::className(), ['idVeterinario' => 'veterinario']);
    }
    
    
 
      
  

    //  $model = model::Union1()->findByPk($model);

    // // $model2 = ModelB::model()->findByPk($model2_id);

    // $this->render('union2',array('model'=>$model));  

    /**
     * @inheritdoc
     * @return HistorialclinicoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new Union1Query(get_called_class());
    }


   
}
