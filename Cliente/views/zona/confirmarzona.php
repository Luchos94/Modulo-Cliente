<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<p>Usted ha ingresado la siguiente informacion:</p>

<ul>
    <li><label>codigo</label>: <?= Html::encode($model->codigo) ?></li>
    <li><label>Nombre</label>: <?= Html::encode($model->Nombre) ?></li>
       <li><label>CantMaxConsult</label>: <?= Html::encode($model->CantMaxConsult) ?></li>
    <li><label>Registrados</label>: <?= Html::encode($model->Registrados) ?></li>
    <li><label>Extension</label>: <?= Html::encode($model->Extension) ?></li>
</ul>


<?php $form = ActiveForm::begin(); ?>

<div class="form-group">
        <?= Html::submitButton('Volver', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>