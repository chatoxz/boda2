<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "tipo_padrino".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 *
 * @property \app\models\Padrino[] $padrinos
 */
class TipoPadrino extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'padrinos'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['descripcion'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_padrino';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPadrinos()
    {
        return $this->hasMany(\app\models\Padrino::className(), ['id_tipo' => 'id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\TipoPadrinoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\TipoPadrinoQuery(get_called_class());
    }
}
