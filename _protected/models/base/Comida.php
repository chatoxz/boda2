<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "comida".
 *
 * @property integer $id
 * @property string $nombre
 */
class Comida extends \yii\db\ActiveRecord
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
            [['nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comida';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
        ];
    }


    /**
     * @inheritdoc
     * @return \app\models\ComidaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\ComidaQuery(get_called_class());
    }
}
