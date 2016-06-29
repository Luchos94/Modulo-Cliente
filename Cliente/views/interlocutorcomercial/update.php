<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Zona;
use app\models\Distrito;
use app\models\Rol;
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

$this->title = 'Actualizar ' . $Rol->Nombre . ' ' . $model->Nombres . ' ' . $model->Apellidos;
?>
<div class="interlocutorcomercial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-lg-5">

    <?php $form = ActiveForm::begin(); ?>


    <?php 

    	if($Rol->Nombre == 'Consultor'){

       			echo $form->field($model, 'Nombres')->textInput(['readonly' => true]);
    			echo $form->field($model, 'Apellidos')->textInput(['readonly' => true]);
				echo $form->field($model, 'Sexo')->textInput(['readonly' => true]);

    			echo $form->field($model, 'TipoDocumento_codigo')->dropDownList(TipoDocumento::dropdown(),['prompt' => '----Seleccionar----']);

    			echo $form->field($model, 'NumeroDoc')->textInput();
    			
    			echo $form->field($model, 'Ciudad')->textInput(['readonly' => true]);

    			echo $form->field($model, 'Distrito')->dropDownList(Distrito::dropdown(),
									            [
									            'prompt' => '----Seleccionar----',
									            'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl('interlocutorcomercial/list_zona?id=').'"+$(this).val(),function( data ){$( "select#codigo" ).html(data);});'
									            ]
									            );

    			echo $form->field($model, 'Zona')->dropDownList(Zona::dropdown(),
									            [
									            'id'=>'codigo',
									            'prompt'=>'----Seleccionar----'
									            ]
									            );


    			echo $form->field($model, 'Direccion')->textInput(['readonly' => true]);
    			echo $form->field($model, 'Telefono')->textInput();
    			echo $form->field($model, 'Celular')->textInput();
    			echo $form->field($model, 'Correo')->textInput(['maxlength' => true]);

    			echo  $form->field($model, 'Estado')->dropdownList(['Deudor' => 'Deudor', 
                                                            'No Deudor' => 'No Deudor'], ['prompt' => '---Seleccionar---']);   


    			echo  $form->field($model, 'EstadoCivil')->dropdownList(['Soltero(a)' => 'Soltero(a)', 
                                                            'Casado(a)' => 'Casado(a)',
                                                            'Divorciado(a)' => 'Divorciado(a)',
                                                            'Viudo(a)' => 'Viudo(a)'], ['prompt' => '---Seleccionar---']);  

    			echo $form->field($model, 'Ocupacion')->textInput(['maxlength' => true]);
    			echo $form->field($model, 'FecNacimiento')->textInput(['readonly' => true]);
    			echo $form->field($model, 'FecContratacion')->textInput(['readonly' => true]);
    			echo $form->field($model, 'ReportsTo')->textInput();

    	}


    	if($Rol->Nombre == 'Persona'){

       			echo $form->field($model, 'Nombres')->textInput(['readonly' => true]);
    			echo $form->field($model, 'Apellidos')->textInput(['readonly' => true]);
				echo $form->field($model, 'Sexo')->textInput(['readonly' => true]);

				echo $form->field($model, 'TipoDocumento_codigo')->dropDownList(TipoDocumento::dropdown(),['prompt' => '----Seleccionar----']);

    			echo $form->field($model, 'NumeroDoc')->textInput();

    			echo $form->field($model, 'Ciudad')->textInput(['readonly' => true]);

    			echo $form->field($model, 'Distrito')->dropDownList(Distrito::dropdown(),
									            [
									            'prompt' => '----Seleccionar----',
									            'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl('interlocutorcomercial/list_zona?id=').'"+$(this).val(),function( data ){$( "select#codigo" ).html(data);});'
									            ]
									            );

    			echo $form->field($model, 'Direccion')->textInput();
    			echo $form->field($model, 'Correo')->textInput(['maxlength' => true]);
    			echo $form->field($model, 'Telefono')->textInput();
    			echo $form->field($model, 'Celular')->textInput();

    			echo  $form->field($model, 'EstadoCivil')->dropdownList(['Soltero(a)' => 'Soltero(a)', 
                                                            'Casado(a)' => 'Casado(a)',
                                                            'Divorciado(a)' => 'Divorciado(a)',
                                                            'Viudo(a)' => 'Viudo(a)'], ['prompt' => '---Seleccionar---']);  

    			echo $form->field($model, 'Ocupacion')->textInput(['maxlength' => true]);

    	}


    	if($Rol->Nombre == 'Empresa'){

       			echo $form->field($model, 'Nombres')->textInput(['readonly' => true]);
    			
       			echo $form->field($model, 'TipoDocumento_codigo')->dropDownList(TipoDocumento::dropdown(),['prompt' => '----Seleccionar----']);

    			echo $form->field($model, 'NumeroDoc')->textInput();

    			echo $form->field($model, 'Ciudad')->textInput(['readonly' => true]);

    			echo $form->field($model, 'Distrito')->dropDownList(Distrito::dropdown(),
									            [
									            'prompt' => '----Seleccionar----',
									            'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl('interlocutorcomercial/list_zona?id=').'"+$(this).val(),function( data ){$( "select#codigo" ).html(data);});'
									            ]
									            );

    			echo $form->field($model, 'Direccion')->textInput();
    			echo $form->field($model, 'Telefono')->textInput();
    			echo $form->field($model, 'Correo')->textInput(['maxlength' => true]);
    			echo $form->field($model, 'CodPostal')->textInput();
    			echo $form->field($model, 'Fax')->textInput();
    			echo $form->field($model, 'PaginaWeb')->textInput();

    	}

    ?>




    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
