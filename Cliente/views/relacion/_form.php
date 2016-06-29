<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Relacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="relacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Interlocutor1')->textInput() ?>

    <?= $form->field($model, 'Interlocutor2')->textInput() ?>

    <?= $form->field($model, 'TipoRelacion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
