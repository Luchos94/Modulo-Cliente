<p><strong><font size=5>REGISTRAR ZONAS</font> </strong></p>

<div class="row">
        <div class="col-lg-5">

<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Distrito;
?>

<div class="post-add">
    <?php $form = ActiveForm::begin(); ?>
    
       
        
        <?php echo  $form->field($model, 'Nombre') ?>  
        
        <?php echo  $form->field($model, 'CantMaxConsult') ?>      
        
        <?php echo  $form->field($model, 'Registrados') ?>
           
        <?php echo  $form->field($model, 'Extension') ?>
	
	    <?php echo $form->field($model, 'Distrito')->dropDownList(Distrito::dropdown(),
            ['prompt' => '----Seleccionar----']
            );
        ?>
        
        
        
    
        <div class="form-group">
            <?= Html::submitButton('Registrar', ['class' => 'btn btn-primary']) ?>            
            <?= Html::resetButton('Reset', ['class' => 'btn btn-primary']) ?>
        </div>
    
    <?php ActiveForm::end(); ?>
</div>

</div>
    </div>