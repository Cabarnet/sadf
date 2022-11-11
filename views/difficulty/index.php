<?php

use app\models\Difficulty;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DifficultySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Difficulties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="difficulty-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Difficulty', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'difficulty',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Difficulty $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
