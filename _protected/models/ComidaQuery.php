<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Comida]].
 *
 * @see Comida
 */
class ComidaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Comida[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Comida|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
