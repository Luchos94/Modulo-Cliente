<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\DetailView;
use app\models\Rol;
use app\models\Distrito;
use app\models\Zona;
use app\models\TipoDocumento;

/* @var $this yii\web\View */
/* @var $model app\models\Interlocutorcomercial */
$Rol = Rol::findOne($model->Rol);
$codigo = "";
if($Rol->Nombre == 'Consultor'){

    $anterior = 'modificar1';

}

if($Rol->Nombre == 'Persona' || $Rol->Nombre == 'Empresa'){

    $anterior = 'modificar2';
}

$this->title = $Rol->Nombre .' : ' . $model->Nombres . ' ' . $model->Apellidos;



?>
<div class="interlocutorcomercial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-lg-5">
    
    <p>
        <?= Html::a('Volver', [$anterior] , ['class' => 'btn btn-default ']) ?>
    </p>

    <?php

        if($Rol->Nombre == 'Consultor'){

        echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'Nombres',
            'Apellidos',
            'Sexo',
            [
                'attribute' => 'TipoDocumento_codigo',
                'value' => TipoDocumento::findOne($model->TipoDocumento_codigo)->nombre
            ],
            'NumeroDoc',
            'Ciudad',
            [
                'attribute' => 'Distrito',
                'value' => Distrito::findOne($model->Distrito)->Nombre
            ],
            [
                'attribute' => 'Zona',
                'value' => Zona::findOne($model->Zona)->Nombre
            ],
            'Direccion',
            'Telefono',
            'Celular',
            'Correo',
            'Estado',
            //'RUC',
            'EstadoCivil',
            'Ocupacion',
            'FecNacimiento',
            'FecContratacion',
            'ReportsTo',
            //'CodPostal',
            //'Fax',
            //'PaginaWeb',
        ],
    ]);

    }

    if($Rol->Nombre == 'Persona' ){

        echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'codigo',
            //'Rol',
            'Nombres',
            'Apellidos',
            'Sexo',
            [
                'attribute' => 'TipoDocumento_codigo',
                'value' => TipoDocumento::findOne($model->TipoDocumento_codigo)->nombre
            ],
            'NumeroDoc',
            'Ciudad',
            'Distrito',
            //'Zona',
            'Direccion',
            'Correo',
            //'Estado',
            'Telefono',
            'Celular',
            //'RUC',
            'EstadoCivil',
            'Ocupacion',
            
            //'FecNacimiento',
            //'FecContratacion',
            //'ReportsTo',
            //'CodPostal',
            //'Fax',
            //'PaginaWeb',
        ],
    ]);
    }

    if( $Rol->Nombre == 'Empresa'){

        echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'codigo',
            //'Rol',
            'Nombres',
            //'Apellidos',
            [
                'attribute' => 'TipoDocumento_codigo',
                'value' => TipoDocumento::findOne($model->TipoDocumento_codigo)->nombre
            ],
            'NumeroDoc',
            'Ciudad',
            'Distrito',
            //'Zona',
            'Direccion',
            'Telefono',
            'Correo',
            //'Estado',
            //'Celular',
            //'DNI',
            //'Sexo',
            //'EstadoCivil',
            //'Ocupacion',
            
            //'FecNacimiento',
            //'FecContratacion',
            //'ReportsTo',
            'CodPostal',
            'Fax',
            'PaginaWeb',
        ],
    ]);
    }
         ?>

    

</div>
