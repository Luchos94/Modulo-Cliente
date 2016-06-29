<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Relacion */

$this->title = 'Update Relacion: ' . $model->Interlocutor1;
$this->params['breadcrumbs'][] = ['label' => 'Relacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Interlocutor1, 'url' => ['view', 'Interlocutor1' => $model->Interlocutor1, 'Interlocutor2' => $model->Interlocutor2]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="relacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
