<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ganado".
 *
 * @property int $idGanado
 * @property int $tipo
 * @property int $sexo
 * @property string $fechaNacimiento
 * @property int $estatus
 * @property string $procedencia
 * @property int $registro
 * @property int $siniiga
 * @property int $raza
 *
 * @property Empadre[] $empadres
 * @property Empadre[] $empadres0
 * @property Estatus $estatus0
 * @property Raza $raza0
 * @property Sexo $sexo0
 * @property Tipoganado $tipo0
 * @property Gestacioncomp[] $gestacioncomps
 * @property Historialclinico[] $historialclinicos
 * @property Pesaje[] $pesajes
 * @property RanchoGanado[] $ranchoGanados
 * @property Vacuna[] $vacunas
 * @property Vitamina[] $vitaminas
 */
class Ganado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ganado';
    }

    /**
     * @inheritdoc OYYEEEEEE
     ASDFGHJKL
     OYEEEEEEXSXDXDXDXDXDXDXDXDXDXDXDXDXDXD
     Vas a hacer ésto, los campos que tienes en RanchoGanado y los ocupas en Ganado, cópialos y pégalos acá,
     en el lugar que deberían ir
     ése error es porque no están todas las propiedades de todo eso. por eso sale el error, si pones todas las propiedades ya te va a salir xddxdxd pero tienes que hacerlas una por una.
     */
    public function rules()
    {
        return [
            [['tipo', 'sexo', 'fechaNacimiento', 'estatus', 'registro', 'siniiga', 'raza', 'ganado', 'rancho', 'potrero' ], 'required'],
            [['tipo', 'sexo', 'estatus', 'registro', 'siniiga', 'raza', 'ganado', 'rancho', 'potrero' ], 'integer'],
            [['fechaNacimiento'], 'safe'],
            [['procedencia'], 'string', 'max' => 50],
            [['ubicacion'], 'string', 'max' => 50],

           
            [['estatus'], 'exist', 'skipOnError' => true, 'targetClass' => Estatus::className(), 'targetAttribute' => ['estatus' => 'idEstatus']],
            [['raza'], 'exist', 'skipOnError' => true, 'targetClass' => Raza::className(), 'targetAttribute' => ['raza' => 'idRaza']],
            [['sexo'], 'exist', 'skipOnError' => true, 'targetClass' => Sexo::className(), 'targetAttribute' => ['sexo' => 'idSexo']],
            [['tipo'], 'exist', 'skipOnError' => true, 'targetClass' => Tipoganado::className(), 'targetAttribute' => ['tipo' => 'idTipoGanado']],
            [['potrero'], 'exist', 'skipOnError' => true, 'targetClass' => Potrero::className(), 'targetAttribute' => ['potrero' => 'idNumeroPotrero']],

            [['ganado'], 'exist', 'skipOnError' => true, 'targetClass' => Ganado::className(), 'targetAttribute' => ['ganado' => 'idGanado']],
            [['rancho'], 'exist', 'skipOnError' => true, 'targetClass' => Rancho::className(), 'targetAttribute' => ['rancho' => 'idRancho']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idGanado' => 'IdGanado',
            'tipo' => 'Tipo',
            'sexo' => 'Sexo',
            'fechaNacimiento' => 'FechaNacimiento',
            'estatus' => 'Estatus',
            'procedencia' => 'Procedencia',
            'registro' => 'Registro',
            'siniiga' => 'Siniiga',
            'raza' => 'Raza',
            'ganado' => 'Ganado',
            'rancho' => 'Nombre del Rancho',
            'potrero' => 'Potrero',
            'sexo' => 'Sexo',
            'ubicacion' => 'Ubicacion',
        
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpadres()
    {
        return $this->hasMany(Empadre::className(), ['hembra' => 'idGanado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpadres0()
    {
        return $this->hasMany(Empadre::className(), ['macho' => 'idGanado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstatus0()
    {
        return $this->hasOne(Estatus::className(), ['idEstatus' => 'estatus']);
    }

    public function getEst()
    {
        return $this->estatus0->descrip; 
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRaza0()
    {
        return $this->hasOne(Raza::className(), ['idRaza' => 'raza']);
    }

    public function getRaz()
    {
        return $this->raza0->descrip; 
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSexo0()
    {
        return $this->hasOne(Sexo::className(), ['idSexo' => 'sexo']);
    }

    public function getSex()
    {
        return $this->sexo0->descrip;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipo0()
    {
        return $this->hasOne(Tipoganado::className(), ['idTipoGanado' => 'tipo']);
    }

    public function getTip()
    {
        return $this->tipo0->descrip;
    }

     public function getPotrero0()
     {
         return $this->hasOne(Potrero::className(), ['idNumeroPotrero' => 'potrero']);
     }

     public function getPot()
     {
         return $this->potrero0->pote; 
    }

     public function getNombrer0()
    {
        return $this->hasOne(Nombrer::className(), ['idNombreR' => 'rancho']);
    }

    public function getNomb()
    {
        return $this->nombrer0->nombre; 
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGestacioncomps()
    {
        return $this->hasMany(Gestacioncomp::className(), ['ganado' => 'idGanado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialclinicos()
    {
        return $this->hasMany(Historialclinico::className(), ['ganado' => 'idGanado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesajes()
    {
        return $this->hasMany(Pesaje::className(), ['ganado' => 'idGanado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRanchoGanados()
    {
        return $this->hasMany(RanchoGanado::className(), ['ganado' => 'idGanado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacunas()
    {
        return $this->hasMany(Vacuna::className(), ['ganado' => 'idGanado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVitaminas()
    {
        return $this->hasMany(Vitamina::className(), ['ganado' => 'idGanado']);
    }

  
     public function getGanado0()
    {
        return $this->hasOne(Ganado::className(), ['ganado' => 'idGando']);
    }
   
    public function getGan()
    {
        return $this->ganado0->descrip;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRancho0()
    {
        return $this->hasOne(Rancho::className(), ['rancho' => 'idRancho']);
    }

    public function getRan()
    {
        return $this->rancho0->descrip;

    }

     /**
     * @inheritdoc
     * @return GanadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GanadoQuery(get_called_class());
    }
  
  

}
