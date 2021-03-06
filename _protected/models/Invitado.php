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
    public $id_mesa;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['id_boda', 'nombre'], 'required'],
            [['id_boda', 'id_confirmacion', 'despues_doce','id_comida'], 'integer'],
            [['mensaje','mesa_nombre','comida_comentario'], 'string'],
            [['nombre'], 'string', 'max' => 255],
            [['id_mesa'], 'safe']
        ]);
    }
	
}
