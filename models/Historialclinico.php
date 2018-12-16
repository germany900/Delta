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
class Historialclinico extends \yii\db\ActiveRecord
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
            [['ganado', 'ultimaRevision', 'veterinario'], 'required'],
            [['ganado', 'veterinario'], 'integer'],
            [['observacion'], 'string'],
            [['ultimaRevision'], 'safe'],
            [['hembra', 'macho', 'fecha', 'veterinario'], 'required'],
            [['hembra', 'macho', 'veterinario'], 'integer'],
            [['fecha'], 'safe'],
            [['descrip'], 'required'],
            [['descrip'], 'string', 'max' => 30],
            [['ganado'], 'exist', 'skipOnError' => true, 'targetClass' => Ganado::className(), 'targetAttribute' => ['ganado' => 'idGanado']],
            [['veterinario'], 'exist', 'skipOnError' => true, 'targetClass' => Veterinario::className(), 'targetAttribute' => ['veterinario' => 'idVeterinario']],
             [['hembra'], 'exist', 'skipOnError' => true, 'targetClass' => Ganado::className(), 'targetAttribute' => ['hembra' => 'idGanado']],
            [['macho'], 'exist', 'skipOnError' => true, 'targetClass' => Ganado::className(), 'targetAttribute' => ['macho' => 'idGanado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
             'idHistorial' => 'Id Historial',
            'idEstatus' => 'Id Estatus',
            'idEmpadre' => 'Id Empadre',
            'ganado' => 'Ganado',
            'observacion' => 'Observacion',
            'ultimaRevision' => 'Ultima Revision',
            'veterinario' => 'Veterinario',
            'descrip' => 'Descrip',
            'hembra' => 'Hembra',
            'macho' => 'Macho',
            'fecha' => 'Fecha',
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
     /**
     * @return \yii\db\ActiveQuery
     */
     public function getHembra0()
    {
        return $this->hasOne(Ganado::className(), ['idGanado' => 'hembra']);
    }

     public function getMacho0()
    {
        return $this->hasOne(Ganado::className(), ['idGanado' => 'macho']);
    }

    /**
     * @inheritdoc
     * @return HistorialclinicoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HistorialclinicoQuery(get_called_class());
    }
}
