<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Zona;
use app\models\Distrito;
use app\models\TipoDocumento;

/* @var $this yii\web\View */
/* @var $model app\models\Interlocutorcomercial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interlocutorcomercial-update">

    <?php $form = ActiveForm::begin(); ?>

     
        

        <?php echo $form->field($model, 'Nombres') ?> 

        <?php echo $form->field($model, 'TipoDocumento_codigo')->dropDownList(TipoDocumento::dropdown(),['prompt' => '----Seleccionar----'])
                    ?>       

        <?php echo  $form->field($model, 'NumeroDoc') ?>
        
        <?php echo  $form->field($model, 'Ciudad') ?>

        <?= $form->field($model, 'Distrito')
            ->dropDownList(Distrito::dropdown(),
            [
            'prompt' => 'Seleccionar Distrito',
            'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl('interlocutorcomercial/list_zonas?id=').'"+$(this).val(),function( data ){$( "select#codigo" ).html(data);});'
            ]
            );
        ?>
        
        
        <?php
            echo $form->field($model, 'Zona')->dropDownList(Zona::dropdown(),['id'=>'codigo','prompt'=>'Seleccionar Zona']);
        ?>       

        <?php echo  $form->field($model, 'Direccion') ?>

        <?php echo  $form->field($model, 'Telefono') ?>

        <?php echo  $form->field($model, 'Celular') ?>
        
        <?php echo  $form->field($model, 'Estado')->dropdownList(['Deudor' => 'Deudor', 
                                                            'No Deudor' => 'No Deudor'], ['prompt' => '---Seleccionar---']);   ?>     
        <?php echo  $form->field($model, 'Correo') ?>

        <?php echo  $form->field($model, 'CodPostal') ?>

        <?php echo  $form->field($model, 'Fax') ?>

        <?php echo  $form->field($model, 'PaginaWeb') ?>
               
            
        <div class="form-group">
            <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
