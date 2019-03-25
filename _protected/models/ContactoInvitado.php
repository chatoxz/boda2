<?php

namespace app\models;

use Yii;
use \app\models\base\ContactoInvitado as BaseContactoInvitado;

/**
 * This is the model class for table "contacto_invitado".
 */
class ContactoInvitado extends BaseContactoInvitado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id', 'id_boda', 'mensaje', 'nombre', 'email', 'titulo'], 'required'],
            [['id', 'id_boda'], 'integer'],
            [['mensaje'], 'string'],
            [['nombre', 'email', 'titulo'], 'string', 'max' => 255]
        ]);
    }
	
}
