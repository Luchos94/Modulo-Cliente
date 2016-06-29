<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Interlocutorcomercial */

$this->title = 'Create Interlocutorcomercial';
$this->params['breadcrumbs'][] = ['label' => 'Interlocutorcomercials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="interlocutorcomercial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
