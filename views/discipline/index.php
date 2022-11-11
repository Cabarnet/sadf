<?php

use app\models\Discipline;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DisciplineSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Disciplines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discipline-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Discipline', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'discipline',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Discipline $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
