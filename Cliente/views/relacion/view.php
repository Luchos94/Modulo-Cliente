<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Relacion */

$this->title = $model->Interlocutor1;
$this->params['breadcrumbs'][] = ['label' => 'Relacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Interlocutor1' => $model->Interlocutor1, 'Interlocutor2' => $model->Interlocutor2], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Interlocutor1' => $model->Interlocutor1, 'Interlocutor2' => $model->Interlocutor2], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Interlocutor1',
            'Interlocutor2',
            'TipoRelacion',
        ],
    ]) ?>

</div>
