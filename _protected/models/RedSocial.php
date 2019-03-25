<?php

namespace app\models;

use Yii;
use \app\models\base\RedSocial as BaseRedSocial;

/**
 * This is the model class for table "red_social".
 */
class RedSocial extends BaseRedSocial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id', 'id_persona'], 'required'],
            [['id', 'id_persona'], 'integer'],
            [['boton'], 'string'],
            [['nombre', 'link'], 'string', 'max' => 255]
        ]);
    }
	
}
