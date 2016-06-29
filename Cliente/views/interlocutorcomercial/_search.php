<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InterlocutorcomercialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="interlocutorcomercial-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'Nombres') ?>

    <?= $form->field($model, 'Apellidos') ?>

    <?= $form->field($model, 'Direccion') ?>

    <?= $form->field($model, 'Ciudad') ?>

    <?php // echo $form->field($model, 'Distrito') ?>

    <?php // echo $form->field($model, 'Correo') ?>

    <?php // echo $form->field($model, 'Estado') ?>

    <?php // echo $form->field($model, 'Celular') ?>

    <?php // echo $form->field($model, 'Sexo') ?>

    <?php // echo $form->field($model, 'EstadoCivil') ?>

    <?php // echo $form->field($model, 'Ocupacion') ?>

    <?php // echo $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'FecNacimiento') ?>

    <?php // echo $form->field($model, 'FecContratacion') ?>

    <?php // echo $form->field($model, 'ReportsTo') ?>

    <?php // echo $form->field($model, 'NumeroDoc') ?>

    <?php // echo $form->field($model, 'Descuento') ?>

    <?php // echo $form->field($model, 'CodPostal') ?>

    <?php // echo $form->field($model, 'Fax') ?>

    <?php // echo $form->field($model, 'PaginaWeb') ?>

    <?php // echo $form->field($model, 'Zona') ?>

    <?php // echo $form->field($model, 'Rol') ?>

    <?php // echo $form->field($model, 'TipoDocumento_codigo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
