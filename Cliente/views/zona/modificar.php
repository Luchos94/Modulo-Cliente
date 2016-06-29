<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\zonaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Modificar Zonas';
?>
<div class="zona-index">

    <h1><strong><?= Html::encode($this->title) ?></strong></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codigo',
            'Nombre',
            'Registrados',
            'CantMaxConsult',
            'Extension',
            // 'Distrito',
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
