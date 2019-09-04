<?php

namespace app\models;

use Yii;
use \app\models\base\Comida as BaseComida;

/**
 * This is the model class for table "comida".
 */
class Comida extends BaseComida
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['nombre'], 'string', 'max' => 45]
        ]);
    }
	
}
