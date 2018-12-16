<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estatus".
 *
 * @property int $idEstatus
 * @property string $descrip
 *
 * @property Ganado[] $ganados
 */
class Nombrer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nombrer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNombreR' => 'Id Nombre R',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGanados()
    {
        return $this->hasMany(Ganado::className(), ['nombrer' => 'idNombreR']);
    }

    /**
     * @inheritdoc
     * @return EstatusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EstatusQuery(get_called_class());
    }
}
