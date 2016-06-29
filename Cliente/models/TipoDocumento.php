<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipodocumento".
 *
 * @property integer $codigo
 * @property string $nombre
 *
 * @property Interlocutorcomercial[] $interlocutorcomercials
 */
class TipoDocumento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipodocumento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterlocutorcomercials()
    {
        return $this->hasMany(Interlocutorcomercial::className(), ['TipoDocumento_codigo' => 'codigo']);
    }

    public static function dropdown(){
        
        static $dropdown;
        if($dropdown == null) {
            
            $models = static::find()->all();
            $count = count($models);
            if($count > 0){
            foreach ($models as $model){
                $dropdown[$model->codigo] = $model->nombre;
            }
        }
        }
        return $dropdown;
        
    }
}
