<?php

namespace app\models;

use Yii;
use \app\models\base\Foto as BaseFoto;

/**
 * This is the model class for table "foto".
 */
class Foto extends BaseFoto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id', 'id_boda'], 'required'],
            [['id', 'id_boda', 'id_seccion'], 'integer'],
            [['nombre', 'carpeta'], 'string', 'max' => 255]
        ]);
    }
	
}
