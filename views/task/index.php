<?php

use app\models\Task;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TaskSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Челленджи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">
    <div style="display: flex; flex-direction: row; width: 1110px; justify-content: space-between; margin-top: 30px; margin-bottom: 30px">
        <h1><?= Html::encode($this->title) ?></h1>

        <p style="margin-top: 9px">
            <?= Html::a('Создать новый', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

    <div style="width: 1110px; height: 200px; border-radius: 30px; background-color: #d3fccb; border: 2px solid #28a745;">

    </div>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?/*= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'id_user',
            'name',
            'description:ntext',
            'id_difficulty',
            'id_prize',
            'id_descipline',
            'id_chat',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Task $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); */?>


</div>
