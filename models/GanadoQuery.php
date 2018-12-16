<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Ganado]].
 *
 * @see Ganado
 */
class GanadoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Ganado[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Ganado|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
