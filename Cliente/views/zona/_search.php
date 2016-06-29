<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ZonaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zona-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codigo') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'CantMaxConsult') ?>

    <?= $form->field($model, 'Registrados') ?>

    <?= $form->field($model, 'Extension') ?>

    <?php // echo $form->field($model, 'Distrito') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
