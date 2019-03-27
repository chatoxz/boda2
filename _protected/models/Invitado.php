<?php

namespace app\models;

use Yii;
use \app\models\base\Invitado as BaseInvitado;

/**
 * This is the model class for table "invitado".
 */
class Invitado extends BaseInvitado
{
    public $mesa_nombre;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_boda', 'nombre'], 'required'],
            [['id_boda', 'id_confirmacion', 'despues_doce'], 'integer'],
            [['mensaje','mesa_nombre'], 'string'],
            [['nombre'], 'string', 'max' => 255]
        ]);
    }
	
}
