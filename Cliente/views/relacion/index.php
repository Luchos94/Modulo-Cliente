<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RelacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Relacions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Relacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Interlocutor1',
            'Interlocutor2',
            'TipoRelacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
