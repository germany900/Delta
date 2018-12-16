<?php

namespace app\models;


use Yii;

/**
 * This is the model class for table "rancho_ganado".
 *
 * @property int $idRanchoGanado
 * @property int $ganado
 * @property int $rancho
 * @property int $potrero
 *
 * @property Ganado $ganado0
 * @property Rancho $rancho0
 */
class RanchoGanado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rancho_ganado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ganado_capacidad', 'rancho', 'potrero', 'capacidad'], 'required'],
            [['ganado_capacidad', 'rancho', 'potrero', 'capacidad'], 'integer'],
             [['ubicacion'], 'string', 'max' => 50],
             [['encargado'], 'string', 'max' => 50],
              [['ubicacion_original'], 'string', 'max' => 50],

            [['ganado_capacidad'], 'exist', 'skipOnError' => true, 'targetClass' => Ganado::className(), 'targetAttribute' => ['ganado_capacidad' => 'idGanado']],
            [['rancho'], 'exist', 'skipOnError' => true, 'targetClass' => Rancho::className(), 'targetAttribute' => ['rancho' => 'idRancho']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idRanchoGanado' => 'Id Rancho Ganado',
            'ganado_capacidad' => 'Ganado_Capacidad',
            'rancho' => 'Ubicacion del rancho/Estado',
            'potrero' => 'Potrero(s)',
             'ubicacion' => 'Nombre del Rancho',  
             'encargado' => 'Encargado',
             'capacidad' => 'Capacidad del rancho',
            'ubicacion_original' => 'ubicacion'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGanado0()
    {
        return $this->hasOne(Ganado::className(), ['idGanado' => 'ganado_capacidad']);
    }

    public function getGan()
    {
        return $this->ganado0->siniiga;
    }

    //MANDO A LLAMAR LA TABLA SEXO
    public function getSexo0()
    {
        return $this->hasOne(Sexo::className(), ['idSexo' => 'sexo']);
    }

    //CON ESTE METODO, DIGO QUE SE CAMBIE EL ID DE SEXO GANADO POR LA DESCRIPCION DESDE LA TABLA SEXO
    public function getGanSex()
    {
        return $this->ganado0->sexo0->descrip;
    }

    public function getEstatus0()
    {
        return $this->hasOne(Estatus::className(), ['idEstatus' => 'estatus']);
    }

    public function getGanEst()
    {
        return $this->ganado0->estatus0->descrip; 
    }

    public function getTipo0()
    {
        return $this->hasOne(Tipoganado::className(), ['idTipoGanado' => 'tipo']);
    }

    public function getGanTip()
    {
        return $this->ganado0->tipo0->descrip;
    }




    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRancho0()
    {
        return $this->hasOne(Rancho::className(), ['idRancho' => 'rancho']);
    }

    public function getRan()
    {
        return $this->rancho0->ubicacion;
    }

    /**
     * @inheritdoc
     * @return RanchoGanadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RanchoGanadoQuery(get_called_class());
    }
}
