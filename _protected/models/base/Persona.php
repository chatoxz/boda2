<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "persona".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property integer $celular
 * @property string $email
 * @property string $pagina
 *
 * @property \app\models\Boda[] $bodas
 * @property \app\models\Padrino[] $padrinos
 */
class Persona extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'bodas',
            'padrinos'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['celular'], 'integer'],
            [['nombre', 'apellido', 'email', 'pagina'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'apellido' => Yii::t('app', 'Apellido'),
            'celular' => Yii::t('app', 'Celular'),
            'email' => Yii::t('app', 'Email'),
            'pagina' => Yii::t('app', 'Pagina'),
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBodas()
    {
        return $this->hasMany(\app\models\Boda::className(), ['id_novia' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPadrinos()
    {
        return $this->hasMany(\app\models\Padrino::className(), ['id_persona' => 'id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\PersonaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\PersonaQuery(get_called_class());
    }
}
