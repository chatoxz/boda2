<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "red_social".
 *
 * @property integer $id
 * @property integer $id_persona
 * @property string $nombre
 * @property string $link
 * @property string $boton
 *
 * @property \app\models\Persona $persona
 */
class RedSocial extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'persona'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_persona'], 'required'],
            [['id', 'id_persona'], 'integer'],
            [['boton'], 'string'],
            [['nombre', 'link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'red_social';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_persona' => 'Id Persona',
            'nombre' => 'Nombre',
            'link' => 'Link',
            'boton' => 'Boton',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersona()
    {
        return $this->hasOne(\app\models\Persona::className(), ['id' => 'id_persona']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\RedSocialQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\RedSocialQuery(get_called_class());
    }
}
