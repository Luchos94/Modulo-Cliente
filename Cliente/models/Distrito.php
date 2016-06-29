<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "distrito".
 *
 * @property integer $codigo
 * @property string $Nombre
 * @property integer $CantMaxZonas
 * @property integer $NumZonas
 * @property integer $Extension
 *
 * @property Zona[] $zonas
 */
class Distrito extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'distrito';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'CantMaxZonas', 'Extension'], 'required'],
            [['CantMaxZonas', 'NumZonas', 'Extension'], 'integer'],
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
            'CantMaxZonas' => 'Cantidad de Zonas Maxima',
            'NumZonas' => 'Numero de Zonas',
            'Extension' => 'Extension',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZonas()
    {
        return $this->hasMany(Zona::className(), ['Distrito' => 'codigo']);
    }

    public static function dropdown(){
        
        static $dropdown;
        if($dropdown == null) {
            
            $models = static::find()->all();
            $count = count($models);
            
            if($count > 0){

            foreach ($models as $model){
                $dropdown[$model->codigo] = $model->Nombre;
            }

            }
        }
        
        return $dropdown;
        
    }
}
