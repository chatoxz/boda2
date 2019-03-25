<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Boda]].
 *
 * @see Boda
 */
class BodaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Boda[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Boda|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
