<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relacion".
 *
 * @property integer $Interlocutor1
 * @property integer $Interlocutor2
 * @property integer $TipoRelacion
 *
 * @property Interlocutorcomercial $interlocutor1
 * @property Interlocutorcomercial $interlocutor2
 * @property Tiporelacion $tipoRelacion
 */
class Relacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'relacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Interlocutor1', 'Interlocutor2', 'TipoRelacion'], 'required'],
            [['Interlocutor1', 'Interlocutor2', 'TipoRelacion'], 'integer'],
            [['Interlocutor1'], 'exist', 'skipOnError' => true, 'targetClass' => Interlocutorcomercial::className(), 'targetAttribute' => ['Interlocutor1' => 'codigo']],
            [['Interlocutor2'], 'exist', 'skipOnError' => true, 'targetClass' => Interlocutorcomercial::className(), 'targetAttribute' => ['Interlocutor2' => 'codigo']],
            [['TipoRelacion'], 'exist', 'skipOnError' => true, 'targetClass' => Tiporelacion::className(), 'targetAttribute' => ['TipoRelacion' => 'codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Interlocutor1' => 'Interlocutor1',
            'Interlocutor2' => 'Interlocutor2',
            'TipoRelacion' => 'Tipo Relacion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterlocutor1()
    {
        return $this->hasOne(Interlocutorcomercial::className(), ['codigo' => 'Interlocutor1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterlocutor2()
    {
        return $this->hasOne(Interlocutorcomercial::className(), ['codigo' => 'Interlocutor2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoRelacion()
    {
        return $this->hasOne(Tiporelacion::className(), ['codigo' => 'TipoRelacion']);
    }
}
