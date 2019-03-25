<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "padrino".
 *
 * @property integer $id
 * @property integer $id_persona
 * @property integer $id_tipo
 * @property string $titulo
 * @property string $descripcion
 *
 * @property \app\models\Persona $persona
 * @property \app\models\TipoPadrino $tipo
 */
class Padrino extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'persona',
            'tipo'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'id_persona', 'id_tipo'], 'integer'],
            [['descripcion'], 'string'],
            [['titulo'], 'string', 'max' => 65]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'padrino';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_persona' => 'Id Persona',
            'id_tipo' => 'Id Tipo',
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
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
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(\app\models\TipoPadrino::className(), ['id' => 'id_tipo']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PadrinoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PadrinoQuery(get_called_class());
    }
}
