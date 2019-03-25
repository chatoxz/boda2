<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TipoPadrino]].
 *
 * @see TipoPadrino
 */
class TipoPadrinoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return TipoPadrino[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TipoPadrino|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
