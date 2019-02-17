<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "trafic".
 *
 * @property integer $id
 * @property integer $id_boda
 * @property integer $id_invitado
 * @property string $telefono
 *
 * @property \app\models\Boda $boda
 * @property \app\models\Invitado $invitado
 */
class Trafic extends \yii\db\ActiveRecord
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
            'invitado'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_boda', 'id_invitado', 'telefono'], 'required'],
            [['id_boda', 'id_invitado'], 'integer'],
            [['telefono'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trafic';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_boda' => Yii::t('app', 'Id Boda'),
            'id_invitado' => Yii::t('app', 'Id Invitado'),
            'telefono' => Yii::t('app', 'Telefono'),
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
    public function getInvitado()
    {
        return $this->hasOne(\app\models\Invitado::className(), ['id' => 'id_invitado']);
    }
    

    /**
     * @inheritdoc
     * @return \app\models\TraficQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\TraficQuery(get_called_class());
    }
}
