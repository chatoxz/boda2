<?php

namespace app\models;

use Yii;
use \app\models\base\Trafic as BaseTrafic;

/**
 * This is the model class for table "trafic".
 */
class Trafic extends BaseTrafic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_boda', 'id_invitado', 'telefono'], 'required'],
            [['id_boda'], 'integer'],
            [['id_invitado', 'telefono'], 'string', 'max' => 45]
        ]);
    }
	
}
