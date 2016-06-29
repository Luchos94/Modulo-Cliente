<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Interlocutorcomercial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interlocutorcomercial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ciudad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Distrito')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Correo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Celular')->textInput() ?>

    <?= $form->field($model, 'Sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EstadoCivil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ocupacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefono')->textInput() ?>

    <?= $form->field($model, 'FecNacimiento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FecContratacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ReportsTo')->textInput() ?>

    <?= $form->field($model, 'NumeroDoc')->textInput() ?>

    <?= $form->field($model, 'Descuento')->textInput() ?>

    <?= $form->field($model, 'CodPostal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fax')->textInput() ?>

    <?= $form->field($model, 'PaginaWeb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Zona')->textInput() ?>

    <?= $form->field($model, 'Rol')->textInput() ?>

    <?= $form->field($model, 'TipoDocumento_codigo')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
