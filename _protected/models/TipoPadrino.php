<?php

namespace app\models;

use Yii;
use \app\models\base\TipoPadrino as BaseTipoPadrino;

/**
 * This is the model class for table "tipo_padrino".
 */
class TipoPadrino extends BaseTipoPadrino
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['descripcion'], 'string', 'max' => 255]
        ]);
    }
	
}
