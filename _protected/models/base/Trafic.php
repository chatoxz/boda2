<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "trafic".
 *
 * @property integer $id_trafic
 * @property integer $id_boda
 * @property string $id_invitado
 * @property string $telefono
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
            ''
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_boda', 'id_invitado', 'telefono'], 'required'],
            [['id_boda'], 'integer'],
            [['id_invitado', 'telefono'], 'string', 'max' => 45]
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
            'id_trafic' => Yii::t('app', 'Id Trafic'),
            'id_boda' => Yii::t('app', 'Id Boda'),
            'id_invitado' => Yii::t('app', 'Id Invitado'),
            'telefono' => Yii::t('app', 'Telefono'),
        ];
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
