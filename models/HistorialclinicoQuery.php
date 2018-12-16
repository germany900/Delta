<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Historialclinico]].
 *
 * @see Historialclinico
 */
class HistorialclinicoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Historialclinico[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Historialclinico|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
