<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<p>Usted ha ingresado la siguiente informacion:</p>

<ul>
    <li><label>Nombre</label>: <?= Html::encode($model->Nombres) ?></li>
    <li><label>Direccion</label>: <?= Html::encode($model->Direccion) ?></li>
    <li><label>Ciudad</label>: <?= Html::encode($model->Ciudad) ?></li>
    <li><label>Estado</label>: <?= Html::encode($model->Estado) ?></li>
    <li><label>Correo</label>: <?= Html::encode($model->Correo) ?></li>
    <li><label>Celular</label>: <?= Html::encode($model->Celular) ?></li>
    <li><label>Codigo de Zona</label>: <?= Html::encode($model->Zona) ?></li>
</ul>

<?php $form = ActiveForm::begin(); ?>

<div class="form-group">
        <?= Html::submitButton('Volver', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>