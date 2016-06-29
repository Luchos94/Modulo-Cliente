<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "interlocutorcomercial".
 *
 * @property integer $codigo
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Direccion
 * @property string $Ciudad
 * @property string $Distrito
 * @property string $Correo
 * @property string $Estado
 * @property integer $Celular
 * @property string $Sexo
 * @property string $EstadoCivil
 * @property string $Ocupacion
 * @property integer $Telefono
 * @property string $FecNacimiento
 * @property string $FecContratacion
 * @property integer $ReportsTo
 * @property integer $NumeroDoc
 * @property double $Descuento
 * @property string $CodPostal
 * @property integer $Fax
 * @property string $PaginaWeb
 * @property integer $Zona
 * @property integer $Rol
 * @property integer $TipoDocumento_codigo
 *
 * @property Rol $rol
 * @property Tipodocumento $tipoDocumentoCodigo
 * @property Zona $zona
 * @property Relacion[] $relacions
 * @property Relacion[] $relacions0
 * @property Interlocutorcomercial[] $interlocutor2s
 * @property Interlocutorcomercial[] $interlocutor1s
 */
class Interlocutorcomercial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'interlocutorcomercial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombres', 'Direccion', 'Ciudad', 'Distrito', 'Correo', 'Estado', 'Celular', 'NumeroDoc', 'Zona', 'Rol', 'TipoDocumento_codigo'], 'required'],
            [['Celular', 'Telefono', 'ReportsTo', 'NumeroDoc', 'Fax', 'Zona', 'Rol', 'TipoDocumento_codigo'], 'integer'],
            [['Descuento'], 'number'],
            [['Nombres', 'Apellidos', 'Direccion', 'Ciudad', 'Distrito', 'Correo', 'FecNacimiento', 'FecContratacion', 'PaginaWeb'], 'string', 'max' => 45],
            [['Estado', 'EstadoCivil'], 'string', 'max' => 12],
            [['NumeroDoc'], 'number', 'min' => 8],
            ['Correo', 'email'],
            [['FecNacimiento','FecContratacion'], 'date','format' => 'yyyy-M-d'],
            [['Sexo'], 'string', 'max' => 10],
            [['Ocupacion'], 'string', 'max' => 20],
            [['CodPostal'], 'string', 'max' => 30],
            [['Rol'], 'exist', 'skipOnError' => true, 'targetClass' => Rol::className(), 'targetAttribute' => ['Rol' => 'codigo']],
            [['TipoDocumento_codigo'], 'exist', 'skipOnError' => true, 'targetClass' => Tipodocumento::className(), 'targetAttribute' => ['TipoDocumento_codigo' => 'codigo']],
            [['Zona'], 'exist', 'skipOnError' => true, 'targetClass' => Zona::className(), 'targetAttribute' => ['Zona' => 'codigo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'Nombres' => 'Nombre *',
            'Apellidos' => 'Apellidos',
            'Direccion' => 'Direccion *',
            'Ciudad' => 'Ciudad *',
            'Distrito' => 'Distrito *',
            'Correo' => 'Correo *',
            'Estado' => 'Estado de Deudas *',
            'Celular' => 'Celular *',
            'Sexo' => 'Sexo',
            'EstadoCivil' => 'Estado Civil',
            'Ocupacion' => 'Ocupacion',
            'Telefono' => 'Telefono',
            'FecNacimiento' => 'Fecha de Nacimiento (yyyy-mm-dd)',
            'FecContratacion' => 'Fecha de Contratacion (yyyy-mm-dd)',
            'ReportsTo' => 'Lider',
            'NumeroDoc' => 'Numero de Documento*',
            'Descuento' => 'Descuento',
            'CodPostal' => 'Codigo Postal',
            'Fax' => 'Fax',
            'PaginaWeb' => 'Pagina Web',
            'Zona' => 'Zona *',
            'Rol' => 'Rol *',
            'TipoDocumento_codigo' => 'Tipo de Documento*',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRol()
    {
        return $this->hasOne(Rol::className(), ['codigo' => 'Rol']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoDocumentoCodigo()
    {
        return $this->hasOne(Tipodocumento::className(), ['codigo' => 'TipoDocumento_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZona()
    {
        return $this->hasOne(Zona::className(), ['codigo' => 'Zona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelacions()
    {
        return $this->hasMany(Relacion::className(), ['Interlocutor1' => 'codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRelacions0()
    {
        return $this->hasMany(Relacion::className(), ['Interlocutor2' => 'codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterlocutor2s()
    {
        return $this->hasMany(Interlocutorcomercial::className(), ['codigo' => 'Interlocutor2'])->viaTable('relacion', ['Interlocutor1' => 'codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInterlocutor1s()
    {
        return $this->hasMany(Interlocutorcomercial::className(), ['codigo' => 'Interlocutor1'])->viaTable('relacion', ['Interlocutor2' => 'codigo']);
    }

    public static function dropdown(){
        
        static $dropdown;
        if($dropdown == null) {
            
            $models = static::find()->all();
            $count = count($models);
            if($count > 0){
            foreach ($models as $model){
                $dropdown[$model->codigo] = $model->Nombres . ' ' . $model->Apellidos;
            }
        }
        }
        
        return $dropdown;
        
    }
}
