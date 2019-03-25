<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "foto".
 *
 * @property integer $id
 * @property integer $id_boda
 * @property integer $id_seccion
 * @property string $nombre
 * @property string $carpeta
 *
 * @property \app\models\Boda $boda
 * @property \app\models\Foto $seccion
 * @property \app\models\Foto[] $fotos
 */
class Foto extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'boda',
            'seccion',
            'fotos'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_boda'], 'required'],
            [['id', 'id_boda', 'id_seccion'], 'integer'],
            [['nombre', 'carpeta'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foto';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_boda' => 'Id Boda',
            'id_seccion' => 'Id Seccion',
            'nombre' => 'Nombre',
            'carpeta' => 'Carpeta',
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
     * @return \yii\db\ActiveQuery
     */
    public function getSeccion()
    {
        return $this->hasOne(\app\models\Foto::className(), ['id' => 'id_seccion']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFotos()
    {
        return $this->hasMany(\app\models\Foto::className(), ['id_seccion' => 'id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\FotoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\FotoQuery(get_called_class());
    }
}
