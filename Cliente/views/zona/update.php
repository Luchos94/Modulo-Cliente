<?php

use yii\helpers\Html;
use app\models\Distrito;

/* @var $this yii\web\View */
/* @var $model app\models\Zona */

$this->title = 'Actualizar Zona: ' . $model->Nombre . " ( " . Distrito::findOne($model->Distrito)->Nombre . " )";

?>
<div class="zona-update">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
