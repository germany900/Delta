<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[RanchoGanado]].
 *
 * @see RanchoGanado
 */
class RanchoGanadoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return RanchoGanado[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return RanchoGanado|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
