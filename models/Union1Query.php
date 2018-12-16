<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Historialclinico]].
 *
 * @see Union1
 */
class Union1Query extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Union1[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Union1|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }

       /**
     * @inheritdoc
     * @return Union1[]|array
     */
    // public function all($db = null)
    // {
    //     return parent::all($db);
    // }

    // /**
    //  * @inheritdoc
    //  * @return Union1|array|null
    //  */
    // public function one($db = null)
    // {
    //     return parent::one($db);
    // }

    //  *
    //  * @inheritdoc
    //  * @return Union1[]|array
     
    // public function all($db = null)
    // {
    //     return parent::all($db);
    // }

    // /**
    //  * @inheritdoc
    //  * @return Union1|array|null
    //  */
    // public function one($db = null)
    // {
    //     return parent::one($db);
    // }
}