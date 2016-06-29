<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Relacion */

$this->title = 'Create Relacion';
$this->params['breadcrumbs'][] = ['label' => 'Relacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
