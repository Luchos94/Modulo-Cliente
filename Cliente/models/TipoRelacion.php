<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tiporelacion".
 *
 * @property integer $codigo
 * @property string $Nombre
 *
 * @property Relacion[] $relacions
 */
class TipoRelacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tiporelacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required'],
            [['Nombre'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'Nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelacions()
    {
        return $this->hasMany(Relacion::className(), ['TipoRelacion' => 'codigo']);
    }
}
