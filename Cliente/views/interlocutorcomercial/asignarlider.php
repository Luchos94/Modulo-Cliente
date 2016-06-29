<?php

use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\grid\GridView;
use app\models\interlocutorcomercial;
use app\models\Rol;
use app\models\Zona;
use app\models\Distrito;
/* @var $this yii\web\View */
/* @var $searchModel app\models\InterlocutorcomercialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asignar Lider';
?>
<div class="interlocutorcomercial-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php $form = ActiveForm::begin(); ?>
    
    <?php echo $form->field($model, 'Distrito')->dropDownList(Distrito::dropdown(),
            [
            'prompt' => '----Seleccionar----',
            'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl('interlocutorcomercial/list_zona?id=').'"+$(this).val(),function( data ){$( "select#codigo" ).html(data);});'
            ]
            );
        ?>
        
        
        <?php echo $form->field($model, 'Zona')->dropDownList(Zona::dropdown(),
            [
            'id'=>'codigo',
            'prompt'=>'----Seleccionar----'
            ]
            );
        ?>       

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            

            'codigo',
            [   
                'label' => 'Rol',
                'attribute' => 'Rol',
                'value' => function($model){
                    $Rol = Rol::findOne($model->Rol);
                    return $Rol->Nombre;
                },
                'filter' => ArrayHelper::map(Rol::find()->all(),'codigo','Nombre'),

            ],

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
            ['class' => 'yii\grid\CheckboxColumn']
        ],
    ]); ?>

     <?= Html::SubmitButton( 'Asignar', [ 'class' => 'btn btn-success' , 'id' =>'x']) ?>    

 <?php ActiveForm::end(); ?>

</div>
