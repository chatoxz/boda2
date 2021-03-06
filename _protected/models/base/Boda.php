<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "boda".
 *
 * @property integer $id
 * @property integer $id_novio
 * @property integer $id_novia
 *
 * @property \app\models\Persona $novio
 * @property \app\models\Persona $novia
 * @property \app\models\Foto[] $fotos
 * @property \app\models\Invitado[] $invitados
 * @property \app\models\Mesa[] $mesas
 * @property \app\models\Regalo[] $regalos
 * @property \app\models\Trafic[] $trafics
 */
class Boda extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;


    /**
    * This function helps \mootensai\relation\RelationTrait runs faster
    * @return array relation names of this model
    */
    public function relationNames()
    {
        return [
            'novio',
            'novia',
            'fotos',
            'invitados',
            'mesas',
            'regalos',
            'trafics'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_novio', 'id_novia'], 'required'],
            [['id_novio', 'id_novia'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'boda';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_novio' => 'Id Novio',
            'id_novia' => 'Id Novia',
        ];
    }
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNovio()
    {
        return $this->hasOne(\app\models\Persona::className(), ['id' => 'id_novio']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNovia()
    {
        return $this->hasOne(\app\models\Persona::className(), ['id' => 'id_novia']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFotos()
    {
        return $this->hasMany(\app\models\Foto::className(), ['id_boda' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInvitados()
    {
        return $this->hasMany(\app\models\Invitado::className(), ['id_boda' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMesas()
    {
        return $this->hasMany(\app\models\Mesa::className(), ['id_boda' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegalos()
    {
        return $this->hasMany(\app\models\Regalo::className(), ['id_boda' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrafics()
    {
        return $this->hasMany(\app\models\Trafic::className(), ['id_boda' => 'id']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\BodaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\BodaQuery(get_called_class());
    }
}
