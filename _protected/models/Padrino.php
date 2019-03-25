<?php

namespace app\models;

use Yii;
use \app\models\base\Padrino as BasePadrino;

/**
 * This is the model class for table "padrino".
 */
class Padrino extends BasePadrino
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id'], 'required'],
            [['id', 'id_persona', 'id_tipo'], 'integer'],
            [['descripcion'], 'string'],
            [['titulo'], 'string', 'max' => 65]
        ]);
    }
	
}
