<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use app\models\Zona;
use app\models\Rol;
use app\models\TipoDocumento;


/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modificar Clientes';
?>
<div class="interlocutorcomercial-search">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            [
                'attribute' => 'Rol',
                'value' => function($model){
                    $Rol = Rol::findOne($model->Rol);
                    return $Rol->Nombre;
                },
                'filter' => ArrayHelper::map(Rol::find()->all(),'codigo','Nombre'),

            ],

            [   
                'label' => 'Tipo de Documento',
                'attribute' => 'TipoDocumento_codigo',
                'value' => function($model){
                    $Rol = TipoDocumento::findOne($model->TipoDocumento_codigo);
                    return $Rol->nombre;
                },
                'filter' => ArrayHelper::map(TipoDocumento::find()->all(),'codigo','nombre'),

            ],

            'NumeroDoc',
            //'Rol',
            //'codigo',
            
            'Nombres',
            'Apellidos',
            
            //'Direccion',
            // 'Ciudad',
            // 'Correo',
            // 'Estado',
            // 'Celular',
            
            // 'RUC',
            // 'Sexo',
            // 'EstadoCivil',
            // 'Ocupacion',
            // 'telefono',
            // 'FecNacimiento',
            // 'FecContratacion',
            // 'ReportsTo',
            // 'CodPostal',
            // 'Fax',
            // 'PaginaWeb',
            //'Zona',

            ['class' => 'yii\grid\ActionColumn'],
            
        ],
    ]); ?>

</div>
