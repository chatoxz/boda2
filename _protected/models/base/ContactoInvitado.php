<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "contacto_invitado".
 *
 * @property integer $id
 * @property integer $id_boda
 * @property string $mensaje
 * @property string $nombre
 * @property string $email
 * @property string $titulo
 *
 * @property \app\models\Boda $boda
 */
class ContactoInvitado extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'boda'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_boda', 'mensaje', 'nombre', 'email', 'titulo'], 'required'],
            [['id', 'id_boda'], 'integer'],
            [['mensaje'], 'string'],
            [['nombre', 'email', 'titulo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacto_invitado';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_boda' => 'Id Boda',
            'mensaje' => 'Mensaje',
            'nombre' => 'Nombre',
            'email' => 'Email',
            'titulo' => 'Titulo',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBoda()
    {
        return $this->hasOne(\app\models\Boda::className(), ['id' => 'id_boda']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\ContactoInvitadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\ContactoInvitadoQuery(get_called_class());
    }
}
