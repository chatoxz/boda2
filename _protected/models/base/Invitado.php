<?php

namespace app\models\base;

use Yii;

/**
 * This is the base model class for table "invitado".
 *
 * @property integer $id
 * @property integer $id_boda
 * @property string $nombre
 * @property integer $id_confirmacion
 * @property string $mensaje
 * @property integer $despues_doce
 * @property integer $id_comida
 * @property integer $comida_comentario
 *
 * @property \app\models\Boda $boda
 * @property \app\models\Confirmacion $confirmacion
 * @property \app\models\MesaInvitado $mesaInvitado
 * @property \app\models\Trafic[] $trafics
 */
class Invitado extends \yii\db\ActiveRecord
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
            'confirmacion',
            'mesaInvitado',
            'trafics'
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_boda', 'nombre'], 'required'],
            [['id_boda', 'id_confirmacion', 'despues_doce','id_comida'], 'integer'],
            [['mensaje','comida_comentario'], 'string'],
            [['nombre'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'invitado';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_boda' => 'Id Boda',
            'nombre' => 'Nombre',
            'id_confirmacion' => 'Id Confirmacion',
            'mensaje' => 'Mensaje',
            'despues_doce' => 'Despues Doce',
            'id_comida' => 'Comida',
            'comida_comentario' => 'Detalle de la comida',
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
    public function getConfirmacion()
    {
        return $this->hasOne(\app\models\Confirmacion::className(), ['id' => 'id_confirmacion']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMesaInvitado()
    {
        return $this->hasOne(\app\models\MesaInvitado::className(), ['id_invitado' => 'id']);
    }
        
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrafics()
    {
        return $this->hasMany(\app\models\Trafic::className(), ['id_invitado' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComida()
    {
        return $this->hasOne(\app\models\Comida::className(), ['id' => 'id_comida']);
    }


    /**
     * @inheritdoc
     * @return \app\models\InvitadoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\InvitadoQuery(get_called_class());
    }
}
