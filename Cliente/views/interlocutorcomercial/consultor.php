<p><strong><font size=5>REGISTRAR CONSULTOR</font> </strong></p>

<div class="row">
        <div class="col-lg-5">

<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Zona;
use app\models\Distrito;
use app\models\Interlocutorcomercial;
use app\models\TipoDocumento;

$this->title = 'Registrar Consultor';
?>

<div class="post-add">
    <?php $form = ActiveForm::begin(); ?>
    	


    
        <?php echo  $form->field($model, 'Rol')->dropdownList([1 => 'Consultor']);   ?> 
        <?php //$model->Rol = 'Consultor' ?>

        <?php //echo $form->field($model, 'Rol')->textInput(['readonly' => true]) ?>
        <?php //$model->Rol = 4 ?>
        <?php echo $form->field($model, 'Nombres') ?> 

        <?php echo $form->field($model, 'Apellidos') ?> 

        <?php echo  $form->field($model, 'Sexo')->dropdownList(['Hombre' => 'Hombre', 
                                                            'Mujer' => 'Mujer'], ['prompt' => '---Seleccionar---']);   ?> 

        <?php echo $form->field($model, 'TipoDocumento_codigo')->dropDownList(TipoDocumento::dropdown(),['prompt' => '----Seleccionar----'])
                    ?>       

        <?php echo  $form->field($model, 'NumeroDoc') ?>

        <?php echo  $form->field($model, 'Ciudad') ?>

        <?php echo $form->field($model, 'Distrito')->dropDownList(Distrito::dropdown(),
            [
            'prompt' => '----Seleccionar----',
            'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl('interlocutorcomercial/list_zona?id=').'"+$(this).val(),function( data ){$( "select#codigo" ).html(data);});'
            ]
            );
        ?>
        
        <?php echo $form->field($model, 'Zona')->dropDownList(Zona::dropdown(),['id'=>'codigo']);
        ?>       

        <?php echo  $form->field($model, 'Direccion') ?>

        <?php echo  $form->field($model, 'Telefono') ?>

        <?php echo  $form->field($model, 'Celular') ?>
        
        <?php echo  $form->field($model, 'Estado')->dropdownList(['Deudor' => 'Deudor', 
                                                            'No Deudor' => 'No Deudor'], ['prompt' => '---Seleccionar---']);   ?>     
        <?php echo  $form->field($model, 'Correo') ?>
               
        <?php echo  $form->field($model, 'EstadoCivil')->dropdownList(['Soltero(a)' => 'Soltero(a)', 
                                                            'Casado(a)' => 'Casado(a)',
                                                            'Divorciado(a)' => 'Divorciado(a)',
                                                            'Viudo(a)' => 'Viudo(a)'], ['prompt' => '---Seleccionar---']);   ?>
        
        <?php echo  $form->field($model, 'Ocupacion') ?>

        <?php echo  $form->field($model, 'FecNacimiento') ?>

        <?php echo  $form->field($model, 'FecContratacion') ?>

        <?php echo $form->field($model, 'ReportsTo')->dropDownList(Interlocutorcomercial::dropdown(), ['prompt' => '----Seleccionar----']);
        ?>
            
        <div class="form-group">
            <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-primary']) ?>
        </div>
    
    <?php ActiveForm::end(); ?>
</div>

</div>
    </div>