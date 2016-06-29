<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zona".
 *
 * @property integer $codigo
 * @property string $Nombre
 * @property integer $CantMaxConsult
 * @property integer $Registrados
 * @property integer $Extension
 * @property integer $Distrito
 *
 * @property Interlocutorcomercial[] $interlocutorcomercials
 * @property Distrito $distrito
 */
class Zona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'CantMaxConsult', 'Extension', 'Distrito'], 'required'],
            [['CantMaxConsult', 'Registrados', 'Extension', 'Distrito'], 'integer'],
            [['Nombre'], 'string', 'max' => 45],
            [['Distrito'], 'exist', 'skipOnError' => true, 'targetClass' => Distrito::className(), 'targetAttribute' => ['Distrito' => 'codigo']],
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
            'CantMaxConsult' => 'Cant Max Consult',
            'Registrados' => 'Registrados',
            'Extension' => 'Extension (KM)',
            'Distrito' => 'Distrito',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterlocutorcomercials()
    {
        return $this->hasMany(Interlocutorcomercial::className(), ['Zona' => 'codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDistrito()
    {
        return $this->hasOne(Distrito::className(), ['codigo' => 'Distrito']);
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
