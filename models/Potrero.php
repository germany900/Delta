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
class Potrero extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'potrero';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pote'], 'required'],
            [['pote'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idNumeroPotrero' => 'Id Numero Potrero',
            'pote' => 'Pote',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGanados()
    {
        return $this->hasMany(Ganado::className(), ['potrero' => 'idNumeroPotrero']);
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
