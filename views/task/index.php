<?php

use app\models\Task;
use app\models\Prize;
use app\models\Discipline;
use app\models\Difficulty;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TaskSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Челленджи';

?>

<div class="task-index">
    <div style="display: flex; flex-direction: row; width: 1075px; justify-content: space-between; margin-top: 30px; margin-bottom: 30px">
        <h1><?= Html::encode($this->title) ?></h1>

        <p style="margin-top: 9px">
            <?= Html::a('Создать новый', ['create'], ['class' => 'btn btn-success'])?>
        </p>
    </div>

    <?php foreach($tasks as $item){
        
    ?>
        <div style="
        width: 1110px;
        height: 220px;
        border-radius: 3px 10px 10px 3px;
        background-color: #baffbc;
        border-left: 20px solid #2E8B57;
        margin-top: 20px;
        padding: 25px;
        padding-left: 40px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        ">
            <div style="display: flex;  flex-direction: row; width: 1010px; height: 40px; justify-content: space-between;">
                <h3 style="font-size: 28px;"><?=$item->name?></h3>
                <div style="width: 200px;">
                    <a class="btn btn-outline-danger" href="http://sadf:8080/web/index.php?r=task%2Fdelete&id=<?=$item["id"]?>" title="delete" aria-label="Delete"
                       data-pjax="0" data-confirm="Вы действительно хотите удалить челлендж: <?=$item->name?>?" data-method="post">Удалить</a>
                    <a class="btn btn-outline-dark" href="http://sadf:8080/web/index.php?r=task%2Fupdate&id=<?=$item["id"]?>" title="delete" aria-label="Delete"
                       data-pjax="0" data-method="post">Изменить</a>
                </div>
            </div>
            <p style="font-size: 18px; margin-top: 10px; width: 1000px;"><?=$item->description?></p>
            <div style="display: flex;  flex-direction: row; width: 1010px; height: 30px; justify-content: space-between;">
                <div style="display: flex;  flex-direction: row; width: 365px; height: 30px; justify-content: space-between;">
                    <p style="font-size: 14px;">Уровень сложности: <?=$difficulty[$item['difficulty']]['difficulty']?> </p>
                    <p style="font-size: 14px;">Оценка - <?=$prize[$item['prize']]['prize']?></p>
                </div>
                <p style="font-size: 14px;"><?=$item->user?></p>
            </div>
        </div>
    <?php }?>



</div>
