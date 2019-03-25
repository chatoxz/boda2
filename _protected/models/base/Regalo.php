<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "regalo".
 *
 * @property integer $id
 * @property integer $id_boda
 * @property string $link
 * @property string $title
 * @property string $descripcion
 * @property string $boton
 *
 * @property \app\models\Boda $boda
 */
class Regalo extends \yii\db\ActiveRecord
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
            [['id', 'id_boda'], 'required'],
            [['id', 'id_boda'], 'integer'],
            [['link', 'title', 'descripcion', 'boton'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regalo';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_boda' => 'Id Boda',
            'link' => 'Link',
            'title' => 'Title',
            'descripcion' => 'Descripcion',
            'boton' => 'Boton',
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
     * @return \app\models\RegaloQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\RegaloQuery(get_called_class());
    }
}
