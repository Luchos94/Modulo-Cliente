<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Distrito;

/* @var $this yii\web\View */
/* @var $model app\models\Zona */

$this->title = $model->Nombre . " ( " . Distrito::findOne($model->Distrito)->Nombre . " )" ;
?>
<div class="zona-view">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>

    <div class="col-lg-5">
    
    <p>
        <?= Html::a('Volver', 'index.php?r=zona%2Fmodificar' , ['class' => 'btn btn-default ']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codigo',
            'Nombre',
            'CantMaxConsult',
            'Registrados',
            [
                'attribute' => 'Extension',
                'value' => $model->Extension . " Km"
            ],
            [
                'attribute' => 'Distrito',
                'value' => Distrito::findOne($model->Distrito)->Nombre
            ],
        ],
    ]) ?>

</div>
