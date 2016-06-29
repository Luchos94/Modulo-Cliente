<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\interlocutorcomercial;
use app\models\Rol;
use app\models\TipoDocumento;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InterlocutorcomercialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modificar Consutor';
?>
<div class="interlocutorcomercial-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'codigo',
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
            [   
                'label' => 'Nombre',
                'attribute' => 'Nombres',
             ],            
            'Apellidos',
            // 'Direccion',
            // 'Ciudad',
            // 'Distrito',
            // 'Correo',
            // 'Estado',
            // 'Celular',
            // 'DNI',
            // 'RUC',
            // 'Sexo',
            // 'EstadoCivil',
            // 'Ocupacion',
            // 'Telefono',
            // 'FecNacimiento',
            // 'FecContratacion',
            // 'ReportsTo',
            // 'CodPostal',
            // 'Fax',
            // 'PaginaWeb',
            // 'Zona',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
