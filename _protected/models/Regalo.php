<?php

namespace app\models;

use Yii;
use \app\models\base\Regalo as BaseRegalo;

/**
 * This is the model class for table "regalo".
 */
class Regalo extends BaseRegalo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id', 'id_boda'], 'required'],
            [['id', 'id_boda'], 'integer'],
            [['link', 'title', 'descripcion', 'boton'], 'string', 'max' => 255]
        ]);
    }
	
}
